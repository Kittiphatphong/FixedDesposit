@extends('layouts/fullNewApp')
@section('title', 'Employees')
@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
@endsection
@section('page-style')
  <style>
    @font-face {
      font-family: 'Lao_Classic3';
      src: url("/assets/Lao_Classic3.ttf");
    }
    body{
      font-family: Lao_Classic3;
      font-size: 1.5rem;
    }
  </style>
@endsection

@section('content')
<section id="add-row" >
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
              <div class="card-header">
                  <h4 class="card-title">​​<b>ແກ້​​ໄຂ​ຂໍ້​ມູນ​ພະ​ນັກ​ງານ</b></h4>
                  <a href="{{route('employee.index')}}" class="btn btn-dark float-right">ກັບ​ຄືນ</a>
              </div>
              <div class="card-content col-7">
                  <div class="card-body">
                      <form class="form form-horizontal" action="{{route('employee.update',$employee->id)}}"  method="post">
                      @csrf
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ຊື່</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text" id="first-name" class="form-control" name="fname" placeholder="ຊື່" value="{{old('fname',$employee->fname)}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ນາມ​ສະ​ກຸນ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text" id="last-name" class="form-control" name="lname" placeholder="ນາມ​ສະ​ກຸນ" value="{{old('lname',$employee->lname)}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ຊື່​ຫຼິ້ນ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text"  class="form-control" name="nname" placeholder="ຊື່​ຫຼິ້ນ" value="{{old('nname',$employee->nname)}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ບໍ​ລິດ​ສັດ</span>
                    </div>
                                          <div class="col-md-8">
                                          <select class="form-control" name="company">
		                                  <option value="NCF" @if(old('company',$employee->company=="NCF")) selected @endIF>NCF</option>
                                          <option value="NCC" @if(old('company',$employee->company=="NCC")) selected @endIF>NCC</option>
                                          </select>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ພະ​ແໜກ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text"  class="form-control" name="department" placeholder="ພະ​ແໜກ" value="{{old('department',$employee->department)}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ຕຳ​ແໜ່ງ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text"  class="form-control" name="position" placeholder="ຕຳ​ແໜ່ງ" value="{{old('position',$employee->position)}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ເບີ​ໂທ​ລະ​ສັບ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="number" id="contact-info" class="form-control" name="contact" placeholder="ເບີ​ໂທ​ລະ​ສັບ" value="{{old('contact',$employee->contact)}}">
                                          </div>
                                      </div>
                                  </div>

                <div class="col-md-8 offset-md-4">
                                      <button type="submit" class="btn btn-primary mr-1 mb-1">ແກ້​ໄຂ</button>
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

