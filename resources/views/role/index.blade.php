@extends('layouts/contentLayoutMaster')
@section('title','Role')
@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
@endsection
@section('page-style')
<link rel="stylesheet" type="text/css" href="../../..app-assets/fonts/Phetsarath OT.ttf">
<style>body{font-family:"Phetsarath OT";}</style>
@endsection
@section('content')
<section id="add-row" >
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Roles</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                    @if(Auth::user()->can('AddRole'))<a href="{{route('role.create')}}" class="btn btn-primary mb-2"><i class="feather icon-plus"></i>&nbsp; ເພີ່ມ​ໜ້ານ​ທີ່​ໃໝ່</a>@endif
                                        <div class="table-responsive">
                                            <table class="table add-rows">
                                                <thead>
                                                <tr>
                                                    <th>ໄອ​ດີ</th>
                                                    <th>ໜ້າ​ທີ</th>
                                                    <th>​ສິດ​ທິ</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($roles as $role)
                                                <tr class="text">
                                                <th>{{$role->id}}</th>
                                                <th>{{$role->name}}</th>
                                                <th>
                                                @foreach($role->permissions as $permissions)
                                                [ {{$permissions->name}} ]
                                                 @endforeach
                                                </th> 
                                                        <th class="d-flex justify-content-start">
                                                        @if(Auth::user()->can('EditRole'))<a href="" class="btn btn-link pl-0 ml-0" value=""><span class="fa fa-pencil"></span></a>@endif
                                                        @if(Auth::user()->can('AssignPermission'))<form action="{{route('role.permission',$role->id)}}"  method="get">
                                                        <button type="submit" class="btn btn-link"><span class="fa fa-key"></span> </button>
                                                        </form>@endif
                                                        </th>                                                   
                                                     </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
@endsection


