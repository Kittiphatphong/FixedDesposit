@extends('layouts/fullNewApp')
@section('title', 'Create Account')
@section('content')
<section id="add-row" >
                    <div class="row ">
                        <div class="col-12">
                        
                            <div class="card">
              <div class="card-header">
                  <h4 class="card-title">​​<b>ແກ້​ໄຂ​ຂໍ້​ມູນ​ລູກ​ຄ້າ</b></h4>
                  <a href="{{route('customer.index')}}" class="btn btn-dark mr-1 mb-1 float-right">ກັບ​ຄືນ</a>
              </div>
              <div class="card-content col-7">
                  <div class="card-body">
                  <form class="form form-horizontal" action="{{route('customer.update',$customer->id)}}"  method="post">
                      @csrf
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ຊື່</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text" id="first-name" class="form-control" name="fname" placeholder="ຊື່" value="{{old('fname',$customer->fname)}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ນາມ​ສະ​ກຸນ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text" id="last-name" class="form-control" name="lname" placeholder="ນາມ​ສະ​ກຸນ" value="{{old('lname',$customer->lname)}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ເບີ​ໂທ​ລະ​ສັບ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="number" id="contact-info" class="form-control" name="contact" placeholder="ເບີ​ໂທ​ລະ​ສັບ" value="{{old('contact',$customer->contact)}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ບັດ​ປະ​ຈຳ​ຕົວ ຫຼື ​ສຳ​ມະ​ໂນ​ຄົວ</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="number" id="idNumber" class="form-control" name="idNumber" placeholder="ບັດ​ປະ​ຈຳ​ຕົວ ຫຼື ​ສຳ​ມະ​ໂນ​ຄົວ" value="{{old('idNumber',$customer->idNumber)}}">
                                          </div>
                                      </div>
                                  </div>
                <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ທີ່​ຢູ່</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text" id="address" class="form-control" name="address" placeholder="ທີ່​ຢູ່" value="{{old('address',$customer->address)}}">
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