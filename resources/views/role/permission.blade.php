@extends('layouts/contentLayoutMaster')
@section('title','Mangement role')
@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
@endsection
@section('page-style')
<link rel="stylesheet" type="text/css" href="../../..app-assets/fonts/Phetsarath OT.ttf">
<style>body{font-family:"Phetsarath OT";}</style>
@endsection
@section('content')
<div class="card card-default container">


    <div class="card-header">
       <h2>Manage role ({{$role->name}})</h2>
    </div>
    <div class="card-body">
       
        <form action="{{route('role.storePermission',$role->id)}}" method="get" >
           
            <div class="form-group">
                <label for="title"><h4><b>Select Permission</b></h4></label><br>
                @foreach($permissions as $permission)
                <div class="vs-checkbox-con vs-checkbox-primary">
                <input type="checkbox"  name="permission[]" value="{{$permission->name}}"
                @foreach($role->permissions as $checkPermission)                      
                @if($permission->name == $checkPermission->name)
                checked
                @endif
                @endforeach
                >
                <span class="vs-checkbox">
                <span class="vs-checkbox--check">
                <i class="vs-icon feather icon-check"></i>
                </span>
                </span>
                <span class="">{{$permission->name}}</span>
                </div>
                @endforeach
                
            </div>
                <input type="submit" name="" value="Submit" class="btn btn-primary">

            </form>

    </div>
</div>

@endsection
