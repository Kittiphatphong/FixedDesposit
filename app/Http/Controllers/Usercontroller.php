<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\User;
use App\Account;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }  

    public function index(){
        return view('user.index')->with('users',User::all());
    }

    public function create(){
       $user = new User();
       return view('user.create')->with('users',$user)->with('roles',Role::all());
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
      $user = new User();
       $user->name = $request->get('name');
       $user->email = $request->get('email');
       $user->password = Hash::make($request->get('password'));
       $user->save();
       $user->syncRoles($request->get('permission'));
       return redirect()->route('user.index')->with('success','​ເພີ່ມ​ຂໍ​ມູນ​ຜູ້​ໃຊ້​ສຳ​ເລັດ');
     }
    
    public function edit($id){
        $user = User::find($id);
        return view('user.edit')->with('roles',Role::all())
        ->with('users',$user);
    }
    public function update(Request $request,$id){
        $user = User::find($id);
        $user->name = $request->get('name');
        if($request->get('password') !=null){
        $this->validate($request,[
             'password' => 'min:8'
        ]);
        $user->password = Hash::make($request->get('password'));
        }
        $user->save();
        $user->syncRoles($request->get('permission'));
        return redirect()->route('user.index')->with('success','​ແກ້​ໄຂ​ຂໍ​ມູນ​ຜູ້​ໃຊ້​ສຳ​ເລັດ');
       
    }

    public function destroy($id){
    $checkUser = Account::where('user_id','=',$id)->count();
    if($checkUser>0){
        return back()->with('warning','ທ່ານ​ບໍ່​ສາ​ມາດ​ລຶບ​ຜູ້​ໃຊ້​ທີ່​ໄດ້​ສ້າງ​ບັນ​ຊີ​ໃຫ້​ກັບ​ລູກ​ຄ້າ​ໄດ້');
    }
    $user = User::find($id);
    $user->delete();
    return back()->with('success','ທ່ານໄດ້​ລືບ​ບັນ​ຊີ​ຜູ້​ໃຊ້​ສຳ​ເລັດ​');
    }
}
