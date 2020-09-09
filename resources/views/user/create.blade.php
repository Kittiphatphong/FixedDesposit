@extends('layouts/contentLayoutMaster')

@section('title', 'Create new user')

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
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
              <div class="card-header">
                  <h4 class="card-title">​​<b>​ເພີ່ມ​ຜູ້​ໃຊ້​ລະ​ບົບ</b></h4>
              </div>
              <div class="card-content col-7">
                  <div class="card-body">
                      <form class="form form-horizontal" action="{{route('user.store')}}"  method="post">
                      @csrf
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ຊື່​</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text" class="form-control" name="name" placeholder="​ໃສ່​ຊື່" autocomplete="off" value="{{old('name',$users->name)}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ຊື່​ບັນ​ຊີ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text" class="form-control" name="email" placeholder="​ໃສ່ອີ​ເມ​ວ" autocomplete="off" value="{{old('email',$users->email)}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ລະ​ຫັດ​ຜ່າ​ນ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="password" class="form-control" name="password" placeholder="​ໃສ່​ລະ​ຫັດ​ຜ່າ​ນ" autocomplete="off" value="{{old('password',$users->password)}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ຢືນ​ຢັນ​ລະ​ຫັດ​ຜ່າ​ນ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="password" class="form-control" name="password_confirmation" placeholder="​ຢືນ​ຢັນ​ລະ​ຫັດ​ຜ່າ​ນ" autocomplete="off">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ໜ້າ​ທີ່</span>
                    </div>
                                          <div class="col-md-8">
                                          <select class="form-control" name="permission">@foreach($roles as $role)
                                          <option value="{{$role->name}}" @if(old('email',$users->email)) selected @endif> {{$role->name}}</option>
                                          @endforeach
                                          </select>
                                          </div>
                                      </div>
                                  </div>
                <div class="col-md-8 offset-md-4">
                                      <button type="submit" class="btn btn-primary mr-1 mb-1">ເພີ່​ມ</button>
                                      <button type="reset" class="btn btn-outline-warning mr-1 mb-1">​ເລີ້​ມ​ໃໝ່</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
</section>
@endsection

@section('vendor-script')

@endsection
@section('page-script')

@endsection