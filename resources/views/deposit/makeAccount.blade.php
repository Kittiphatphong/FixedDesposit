@extends('layouts/fullNewApp')
@section('title', 'Create Account')
@section('content')
<section id="add-row" >
                    <div class="row ">
                        <div class="col-12">
                        
                            <div class="card">
              <div class="card-header">
                  <h4 class="card-title">​​<b>{{isset($check)?'ແກ້​ໄຂ​ຂໍ້​ມູນ​ບັນ​ຊີ​ລູກ​ຄ້າ':'ເປີດ​ບັນ​ຊີ​ໃໝ່'}}</b></h4>
                  <a href="{{route('customer.index')}}" class="btn btn-dark mr-1 mb-1 float-right">ກັບ​ຄືນ</a>
              </div>
              <div class="card-content col-7">
                  <div class="card-body">
                      <form class="form form-horizontal" action="{{isset($check)?route('account.update',$account->id):route('account.store',$customer->id)}}"  method="post">
                      @csrf
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ຊື່​ບັນ​ຊີ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text" class="form-control" name="accountName" placeholder="ຊື່​ບັນ​ຊີ" value="@if(isset($check)){{$account->customers->fname}} {{$account->customers->lname}}@else{{$customer->fname}} {{$customer->lname}} @endif" readonly>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ເລກ​ບັນ​ຊີ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="number"  class="form-control" name="idAccount" placeholder="ເລກ​ບັນ​ຊີ" value="{{old('idAccount',$account->idAccount)}}">
                                          </div>
                                      </div>
                                  </div>
                                  @if(!isset($check))
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ໄລ​ຍະ​ເວ​ລາ​ເງີນ​ຝາກ</span>
                                          </div>
                                          <div class="col-md-2">
                                          <label>ໄລ​ຍະ</label>
                                          <select class="form-control" name="typeDisposit_id">
                                          @foreach($types as $type)
		                                  <option value="{{$type->id}}" @if(old('typeDisposit_id',$account->typeDisposit_id)==$type->id) selected @endif>{{$type->period}} @if($type->yearOrMonth=="year") ປີ @endIf @if($type->yearOrMonth=="month") ເດືອນ @endIf</option>
                                          @endForeach
		                                  </select>
                                          </div>
                                          <div class="col-md-3">
                                          <label>ເລີ່ມ​ວັນ​ທີ</label>
                                          <input type="date"  class="form-control" name="start" placeholder="ເລີ່ມ​ວັນ​ທີ" value="{{old('start',$account->start)}}">
                                          </div>
                                          <div class="col-md-3">
                                          <label>ຖີງ​ວັນ​ທີ</label>
                                          <input type="date" class="form-control" name="end" placeholder="ເຖີງ​ວັນ​ທີ" value="{{old('end',$account->end)}}">
                                          </div>

                                      </div>
                                  </div>
                                  @endIF
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ດອກ​ເບ້ຍ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="number" class="form-control" name="interest" placeholder="ຈຳ​ນວນ​ດອກ​ເບ້ຍ %/ ປີ" value="{{old('interest',$account->interest)}}">
                                          </div>
                                      </div>
                                  </div>

                <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ຈຳ​ນວນ​ເງີນ​ຝາກເປັນ​ໂຕ​ເລກ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="number" id="amount" class="form-control" name="amount" placeholder="ຈຳ​ນວນ​ເງີນ​ຝາກເປັນ​ໂຕ​ເລກ" value="{{old('amount',$account->amount)}}">
                                          </div>
                                      </div>
                                  </div>
                <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ຈຳ​ນວນ​ເງີນ​ຝາກເປັນ​ໂຕ​ໜັງ​ສື</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text" id="amountWord" class="form-control" name="amountWord" placeholder="ຈຳ​ນວນ​ເງີນ​ຝາກເປັນ​ໂຕ​ໜັງ​ສື" value="{{old('amountWord',$account->amountWord)}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ຮູບ​ແບບ​ການ​ຮັບ​ດອກ​ເບ້ຍ</span>
                    </div>
                                          <div class="col-md-8">
                                          <select class="form-control" name="receiveInterest">                          
		                                  <option value="ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 3 ເດືອນ" @if(old('receiveInterest',$account->receiveInterest)=="ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 3 ເດືອນ") selected @endif>ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 3 ເດືອນ</option>
                                          <option value="ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 6 ເດືອນ" @if(old('receiveInterest',$account->receiveInterest)=="ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 6 ເດືອນ") selected @endif>ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 6 ເດືອນ</option> 
                                          <option value="ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 12 ເດືອນ" @if(old('receiveInterest',$account->receiveInterest)=="ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 12 ເດືອນ") selected @endif>ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 12 ເດືອນ</option>
                                          <option value="ຮັບ​ດອກ​ເບ້ຍ​​ທຸກເດືອນ" @if(old('receiveInterest',$account->receiveInterest)=="ຮັບ​ດອກ​ເບ້ຍ​​ທຸກເດືອນ") selected @endif>ຮັບ​ດອກ​ເບ້ຍ​​ທຸກເດືອນ</option>
                                          <option value="ຮັບ​ດອກ​ເບ້ຍ​​ທຸກປີ" @if(old('receiveInterest',$account->receiveInterest)=="ຮັບ​ດອກ​ເບ້ຍ​​ທຸກປີ") selected @endif>ຮັບ​ດອກ​ເບ້ຍ​​ທຸກປີ</option>
                                          <option value="ຮັບ​ດອກ​ເບ້ຍ​​ເມື່ອ​ຄົບ​ກຳ​ນົດ" @if(old('receiveInterest',$account->receiveInterest)=="ຮັບ​ດອກ​ເບ້ຍ​​ເມື່ອ​ຄົບ​ກຳ​ນົດ") selected @endif>ຮັບ​ດອກ​ເບ້ຍ​​ເມື່ອ​ຄົບ​ກຳ​ນົດ</option>                                                  
		                                  </select>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ພະ​ນັກ​ງານ​ແນະ​ນຳ</span>
                    </div>
                                          <div class="col-md-8">
                                          <select class="select2 form-control" name="employee_id">  
                                          @foreach($employees as $employee)                        
		                                  <option value="{{$employee->id}}" @if(old('employee_id',$account->employee_id)==$employee->id) selected @endif>{{$employee->company}} - {{$employee->fname}} {{$employee->lname}} ({{$employee->nname}})</option>
                                          @endForeach
                                          </select>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group col-md-8 offset-md-4">


                </div>
                <div class="col-md-8 offset-md-4">
                                      <button type="submit" class="btn btn-primary mr-1 mb-1">{{isset($check)?'ແກ້​ໄຂ':'ສ້າງ​ບັນ​ຊີ'}}</button>
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


        <!-- BEGIN: Vendor JS-->
        <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/forms/select/form-select2.js"></script>
@endsection