@extends('layouts/contentLayoutMaster')

@section('title', 'Customer')

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
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><b>ລະ​ຫັດ​ຊ່ຽງ​ໂຊກ</b></h4>
                                    <h4 class="float-right bg-primary p-1 text-white rounded"><b> ທັງ​ໝົດ {{$luckyCodes->count()}} ລະ​ຫັດ​ </b></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">         
                                        <div class="table-responsive">
                                            <table class="table add-rows table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ໄອ​ດີ</th>
                                                        <th>ລະ​ຫັດ​ຊຽງ​ໂຊກ</th>   
                                                        <th>ເລກ​ບັນ​ຊີ</th> 
                                                        <th>ຊື່​ບັນ​ຊີ</th>                                                                                                  
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($luckyCodes->sortBy('idCode') as $luckyCode)
                                                <tr>
                                                        <th>{{$luckyCode->id}}</th>
                                                        <th>{{$luckyCode->accounts->typeDisposits->type}}{{$luckyCode->idCode}}</th>   
                                                        <th>{{$luckyCode->accounts->idAccount}}</th>
                                                        <th>{{$luckyCode->accounts->customers->fname}} {{$luckyCode->accounts->customers->lname}}</th>
                                                     </tr>
                                                @endForeach
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