@extends('layouts/fullLayoutMaster')

@section('title', 'Dashboard Analytics')

@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
@endsection
@section('page-style')
<!-- Page css files -->
<link rel="stylesheet" type="text/css" href="../../..app-assets/fonts/Phetsarath OT.ttf">
    <style>body{font-family:"Phetsarath OT";}</style>
@endsection

@section('content')
<div class ="container">
<section id="add-row" >
                    <div class="row ">
                        <div class="col-12">
                        <a href="{{route('customer.index')}}" class="btn btn-outline-primary mr-1 mb-1 ">ກັບ​ຄືນ</a>
                            <div class="card">
              <div class="card-header">
                  <h4 class="card-title">​​<b>ເປີດ​ບັນ​ຊີ​ໃໝ່</b></h4>
              </div>
              <div class="card-content col-7">
                  <div class="card-body">
                      <form class="form form-horizontal" action="{{route('account.store',$customer->id)}}"  method="post">
                      @csrf
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ຊື່​ບັນ​ຊີ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text" class="form-control" name="accountName" placeholder="ຊື່​ບັນ​ຊີ" value="{{$customer->fname}} {{$customer->lname}}" readonly>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ເລກ​ບັນ​ຊີ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text"  class="form-control" name="idAccount" placeholder="ເລກ​ບັນ​ຊີ">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ໄລ​ຍະ​ເວ​ລາ​ເງີນ​ຝາກ</span>
                                          </div>
                                          <div class="col-md-2">
                                          <label>ໄລ​ຍະ</label>
                                          <select class="form-control" name="idAccount">
                                          @foreach($types as $type)
		                                  <option>{{$type->period}} @if($type->yearOrMonth=="year") ປີ @endIf @if($type->yearOrMonth=="month") ເດືອນ @endIf</option>
                                          @endForeach
		                                  </select>
                                          </div>
                                          <div class="col-md-3">
                                          <label>ເລີ່ມ​ວັນ​ທີ</label>
                                          <input type="date"  class="form-control" name="start" placeholder="ເລີ່ມ​ວັນ​ທີ">
                                          </div>
                                          <div class="col-md-3">
                                          <label>ຖີງ​ວັນ​ທີ</label>
                                          <input type="date" class="form-control" name="end" placeholder="ເຖີງ​ວັນ​ທີ">
                                          </div>

                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ດອກ​ເບ້ຍ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text" class="form-control" name="interest" placeholder="ຈຳ​ນວນ​ດອກ​ເບ້ຍ %/ ປີ">
                                          </div>
                                      </div>
                                  </div>

                <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ຈຳ​ນວນ​ເງີນ​ຝາກເປັນ​ໂຕ​ເລກ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="number" id="amount" class="form-control" name="amount" placeholder="ຈຳ​ນວນ​ເງີນ​ຝາກເປັນ​ໂຕ​ເລກ">
                                          </div>
                                      </div>
                                  </div>
                <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ຈຳ​ນວນ​ເງີນ​ຝາກເປັນ​ໂຕ​ໜັງ​ສື</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text" id="amountWord" class="form-control" name="amountWord" placeholder="ຈຳ​ນວນ​ເງີນ​ຝາກເປັນ​ໂຕ​ໜັງ​ສື">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ຮູບ​ແບບ​ການ​ຮັບ​ດອກ​ເບ້ຍ</span>
                    </div>
                                          <div class="col-md-8">
                                          <select class="form-control" name="idAccount">                          
		                                  <option>ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 3 ເດືອນ</option>
                                          <option>ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 6 ເດືອນ</option> 
                                          <option>ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 12 ເດືອນ</option>
                                          <option>ຮັບ​ດອກ​ເບ້ຍ​​ທຸກເດືອນ</option>
                                          <option>ຮັບ​ດອກ​ເບ້ຍ​​ທຸກປີ</option>
                                          <option>ຮັບ​ດອກ​ເບ້ຍ​​ເມື່ອ​ຄົບ​ກຳ​ນົດ</option>                                                  
		                                  </select>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group col-md-8 offset-md-4">

                </div>
                <div class="col-md-8 offset-md-4">
                                      <button type="submit" class="btn btn-primary mr-1 mb-1">ສ້າງ​ບັນ​ຊີ</button>
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
</div>
@endsection

@section('vendor-script')
<!-- vendor files -->
<script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
@endsection
@section('page-script')
<!-- Page js files -->
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/datatables/datatable.js"></script>
@endsection