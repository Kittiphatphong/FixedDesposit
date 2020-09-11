@extends('layouts/fullNewApp')

@section('title', '​Edit type deposit')

@section('vendor-style')
<!-- vendor css files -->
@endsection
@section('page-style')
<!-- Page css files -->
<link rel="stylesheet" type="text/css" href="../../..app-assets/fonts/Phetsarath OT.ttf">
    <style>body{font-family:"Phetsarath OT";}</style>
@endsection

@section('content')
<section id="add-row" >
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
              <div class="card-header">
                  <h4 class="card-title">​​<b>​ແກ້​ໄຂປະ​ເພດ​</b></h4>
                  <a href="{{route('document.index')}}" class="btn btn-dark float-right">ກັບ​ຄືນ</a>
              </div>
              <div class="card-content col-7">
                  <div class="card-body">
                      <form class="form form-horizontal" action="{{route('document.update',$document->id)}}"  method="post">
                      @csrf
                          <div class="form-body">
                              <div class="row">
                              <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>ປະ​ເພດ​</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text" class="form-control" name="type" placeholder="ປະ​ເພດ​" value="{{old('type',$document->type)}}">
                                          </div>
                                      </div>
                                  </div>
                <div class="col-md-8 offset-md-4">
                                      <button type="submit" class="btn btn-primary mr-1 mb-1">ແກ້​ໄຂ</button>
                                      <button type="reset" class="btn btn-outline-warning mr-1 mb-1">​ເລີ່ມໃໝ່</button>
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
@endsection