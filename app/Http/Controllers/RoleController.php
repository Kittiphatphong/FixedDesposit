<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
     public function index(){
        return view('role.index')->with('roles',Role::all());
    }

    public function create(){
        return view('role.create');
    }
    public function store(Request $request){
        Role::create(['name' => $request->get('name')]);
        return redirect()->route('role.index')->with('success','ທ່າ​ນ​ໄດ້​ເພີ່ມ​ໜ້າ​ທີ່​ໃໝ່​ສຳ​ເລັດ​');
    }
    public function addPermission($id){
        $role = Role::find($id);
        return view('role.permission')->with('role',$role)
        ->with('permissions',Permission::all());
     
    }
    public function storePermission(Request $request, $id){
        $role = Role::find($id);
        $givePermission = $request->get('permission');
        $revokePermission = Permission::all()->pluck('name')->toArray();
        $role->revokePermissionTo($revokePermission);
        $role->givePermissionTo($givePermission);
        return redirect()->route('role.index')->with('success','Add permission to role successful !');
    }

}
