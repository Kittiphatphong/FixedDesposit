@extends('layouts/fullNewApp')

@section('title', 'Create new user')

@section('vendor-style')
<!-- vendor css files -->
@endsection
@section('page-style')
<link rel="stylesheet" type="text/css" href="../../..app-assets/fonts/Phetsarath OT.ttf">
<style>body{font-family:"Phetsarath OT";}</style>
@endsection

@section('content')
<div class="row justify-content-center pt-5">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-body">
                <h2><b>ແກ້​ໄຂ​ຂໍ້​ມູນ​ຜູ້​ໃຊ້​ລະ​ບົບ</b></h2>
                <form method="POST" action="{{route('user.update',$users->id)}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">ຊື່</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$users->name}}" required autocomplete="name" autofocus>

                    
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">ອີ​ເມ​ວ</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{$users->email}}" required readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">ລະ​ຫັດ​ຜ່າ​ນ</label>

                            <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password"> 
                            </div>
                    
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">ໜ້າ​ທີ່</label>

                            <div class="col-md-6">
                        <select class="form-control" name="permission">@foreach($roles as $role)
                            <option value="{{$role->name}}" @if($users->roles->count()>=1) @if($role->name==$users->roles->first()->name) Selected @endif @endif> {{$role->name}}</option>
                        @endforeach
                          </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    ແກ້​ໄຂ
                                </button>
                            </div>
                        </div>
                    </form>
                    
            </div>
        </div>
    </div>
</div>
@endsection

@section('vendor-script')

@endsection
@section('page-script')

@endsection