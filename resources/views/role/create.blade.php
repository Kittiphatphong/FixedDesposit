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
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
              <div class="card-header">
                  <h4 class="card-title">​​<b>​ສ້າງ​ໜ້າ​ທີ່​ໃໝ່</b></h4>
              </div>
              <div class="card-content col-7">
                  <div class="card-body">
                      <form class="form form-horizontal" action="{{route('role.store')}}"  method="post">
                      @csrf
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ຊື່​ໜ້າ​ທີ່</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text" class="form-control" name="name" placeholder="​ໃສ່​ໜ້າ​ທີ່">
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
