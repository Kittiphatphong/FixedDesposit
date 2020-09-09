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
                                    <h4 class="card-title"><b>ລາຍ​ການ​ລູກ​ຄ້າ</b></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                       @if(Auth::user()->can('AddCustomer')) <a href="{{route('customer.create')}}" class="btn btn-primary mb-2"><i class="feather icon-plus"></i>&nbsp; ເພີ່​ມ​ລູກ​ຄ້າ​ໃໝ່</a> @endIf
                                        <div class="table-responsive">
                                            <table class="table add-rows table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ຊື່ ແລະ ນາມ​ສະ​ກຸນ</th>
                                                        <th>ຈຳ​ນວນ​ບັນ​ຊີ</th>
                                                        <th>ບັນ​ຊີ</th>
                                                        <th>ບັດ​ປະ​ຈຳ​ໂຕ</th>
                                                        <th>ເບີ​ໂທ</th>
                                                        <th>ທີ່​ຢູ່</th> 
                                                        <th></th>                                                 
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($customers as $customer)
                                                <tr>
                                                <th>{{$customer->fname}} {{$customer->lname}}</th>
                                                <th>{{$customer->accounts->count()}}</th>
                                                <th>@foreach($customer->accounts as $account)
                                                <p>{{$account->idAccount}}</p>
                                                @endforeach
                                                </th>
                                                <th>{{$customer->idNumber}}</th>
                                                <th>{{$customer->contact}}</th>
                                                <th>{{$customer->address}}</th>                                                                         
                                                <th class="d-flex justify-content-start">
                                                        @if(Auth::user()->can('AddAccount'))<a href="{{route('account.create',$customer->id)}}" class="btn btn-link ml-0 pl-0" value=""><span class="fa fa-money"></span></a>@endIf
                                                        @if(Auth::user()->can('EditCustomer'))<a href="{{route('customer.edit',$customer->id)}}" class="btn btn-link" value=""><span class="fa fa-pencil"></span></a>@endif
                                                        @if(Auth::user()->can('DeleteCustomer'))<form action="{{route('customer.destroy',$customer->id)}}"  method="post" class="delete_form">
                                                        {{ csrf_field()}}
                                                        <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                                        <button type="submit" class="btn btn-link"><span class="fa fa-trash"></span> </button>
                                                        </form>@endIf
                                                        </th>                                                  
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

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            $('.delete_form').on('submit',function(){
                if(confirm("ທ່ານຕ້ອງການລົບແທ້ບໍ?")){
                    return true;
                }else{
                    return false;
                }
            });
        });

</script>
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