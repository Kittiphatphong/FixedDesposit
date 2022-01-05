@extends('layouts/contentLayoutMaster')

@section('title', 'Create new type deposit')

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
                  <h4 class="card-title">​​<b>ປະ​ເພດ​ເງີນ​ຟາກ</b></h4>
              </div>
              <div class="card-content col-7">
                  <div class="card-body">
                      <form class="form form-horizontal" action="{{route('type.store')}}"  method="post">
                      @csrf
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ໄລ​ຍະ​ເວ​ລາ</span>
                    </div>
                                          <div class="col-md-4">
                                              <input type="number" class="form-control" name="period" placeholder="ຈຳ​ນວນ" value="{{old('period',$type->period)}}">
                                          </div>
                                          <div class="col-md-4">
                                          <ul class="list-unstyled mb-0">
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="yearOrMonth" id="customRadio1" value="year" checked @if(old('yearOrMonth',$type->yearOrMonth)=="year") checked @else unchecked @endif>
                    <label class="custom-control-label" for="customRadio1"><b>ປີ</b></label>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="yearOrMonth" id="customRadio2" value="month" @if(old('yearOrMonth',$type->yearOrMonth)=="month") checked @else unchecked @endif>
                    <label class="custom-control-label" for="customRadio2"><b>ເດືອນ</b></label>
                  </div>
                </fieldset>
              </li>
                        </ul>

                </div>
                    </div>
                    </div>

                    <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ຈຳ​ນວນ​ລະ​ຫັດ​ລຸ້ນ​ໂຊກ</span>
                                          </div>
                                          <div class="col-md-4">
                                          <select class="form-control" name="ticket">
		                                  <option value="1" @if(old('ticket',$type->ticket)==1) selected @endif>1 ລະ​ຫັດ</option>
                                          <option value="2" @if(old('ticket',$type->ticket)==2) selected @endif>2 ລະ​ຫັດ</option>
                                          <option value="3" @if(old('ticket',$type->ticket)==3) selected @endif>3 ລະ​ຫັດ</option>
                                          <option value="4" @if(old('ticket',$type->ticket)==4) selected @endif>4 ລະ​ຫັດ</option>
                                          <option value="5" @if(old('ticket',$type->ticket)==5) selected @endif>5 ລະ​ຫັດ</option>
		                                  </select>
                                          </div>

                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ຈຳ​ນວນເງີນ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="number" class="form-control" name="money" placeholder="ຈຳ​ນວນ" value="{{old('money',$type->money)}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ລະ​ຫັດ​ລັບ​ປະ​ເພດ​ເງີນ​ຝາກ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text" class="form-control" name="type" placeholder="EX : A B C" value="{{old('type',$type->type)}}">
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
<!-- vendor files -->

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
