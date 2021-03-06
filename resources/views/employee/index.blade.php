@extends('layouts/contentLayoutMaster')

@section('title', 'Employees')

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
                                    <h4 class="card-title"><b>ລາຍ​ການ​ພະ​ນັກ​ງານ​ບໍ​ລິ​ສັດ</b></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                    @if(Auth::user()->can('AddEmployee'))<a href="{{route('employee.create')}}" class="btn btn-primary mb-2"><i class="feather icon-plus"></i>&nbsp; ເພີ່​ມ​ພະ​ນັກ​ງານ</a>@endIf
                                        <div class="table-responsive">
                                            <table class="table add-rows table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ໄອ​ດີ</th>
                                                        <th>​ຊື່ ແລະ ນາມ​ສະ​ກຸນ</th>
                                                        <th>ບໍ​ລິ​ສັດ</th>
                                                        <th>ພະ​ແໜກ</th>
                                                        <th>ຕຳ​ແໜ່ງ</th>
                                                        <th>ເບີ​ໂທ​ລະ​ສັບ</th>
                                                        <th>ຈ/ນ ລູກ​ຄ້າ</th>
                                                        <th>ຈຳ​ນວນ​ເງີນ</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($employees as $employee)
                                                <tr>
                                                
                                                        <th>{{$employee->id}}</th>
                                                        <th>​{{$employee->fname}} {{$employee->lname}} ({{$employee->nname}})</th>
                                                        <th>{{$employee->company}}</th>
                                                        <th>{{$employee->department}}</th>
                                                        <th>{{$employee->position}}</th>
                                                        <th>{{$employee->contact}}</th>
                                                        <th>{{$employee->accounts->count()}} ຄົນ</th>
                                                        <th>{{number_format($employee->accounts->sum('amount'))}} ກີບ</th>
                                                        <th class="d-flex justify-content-start">
                                                        @if(Auth::user()->can('EditEmployee'))<a href="{{route('employee.edit',$employee->id)}}" class="btn btn-link pl-0 ml-0" value=""><span class="fa fa-pencil"></span></a>@endIf
                                                        @if(Auth::user()->can('DeleteEmployee'))<form action="{{route('employee.destroy',$employee->id)}}"  method="post" class="delete_form">
                                                        {{ csrf_field()}}
                                                        <button type="submit" class="btn btn-link"><span class="fa fa-trash"></span> </button>
                                                        </form>@endIF
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