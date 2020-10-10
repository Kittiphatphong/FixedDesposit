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
                                    <h4 class="card-title"><b>​ພະ​ນັກ​ງານ​ບໍ​ລິ​ສັດ</b></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                    <form action="{{route('employee.search')}}" method="get" >
                                        <div class="row">
                                        <div class="col d-flex">
                                        <b>ແຕ່​</b> 
                                        <input type="date" id="normal" class="form-control" name="start" required/ value="{{isset($start)?$start:\App\Account::all()->min('start')}}">
                                        </div> 
                                        <div class="col d-flex">
                                        <b>ຫາ:</b> 
                                        <input type="date" id="scaled" class="form-control" name="end" required/ value="{{isset($end)?$end:\Carbon\Carbon::now()->format('Y-m-d')}}">
                                        </div>
                                        <div class="col">
                                        <input type="submit" value="ຄົ້ນ​ຫາ" class="btn btn btn-primary">
                                        </div>
                                             
                                        </div>
                                        </form>
                                        <br>
                                        <a href="{{route('employee.export')}}" class="float-left"><span class="fa fa-download" style="font-size:40px"></span></a> 
                                        <br>
                                        <div class="table-responsive">
                                            <table class="table add-rows table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ຈຳ​ນວນ​ເງີນ​ຝາກ</th>
                                                        <th>ຈຳ​ນວນ​ເງີນເກົ່າ</th>
                                                        <th>ຍອດ​ເງີນ​ທັງ​ໝົດ</th>
                                                        <th>ເງີນ​ເປີ​ເຊັນ</th>
                                                        <th>ຈ/ນ ລູກ​ຄ້າ</th>
                                                        <th>​ຊື່ ແລະ ນາມ​ສະ​ກຸນ</th>
                                                        <th>ບໍ​ລິ​ສັດ</th>
                                                        <th>ພະ​ແໜກ</th>
                                                        <th>ຕຳ​ແໜ່ງ</th>
                                                        <th>ເບີ​ໂທ​ລະ​ສັບ</th>    
                                                        <th></th>                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($employees as $employee)
                                                <tr>
                                                       <th>{{number_format($employee->accounts->sum('amount'))}}</th>
                                                       <th>{{number_format($employee->accounts->sum('oldAmount'))}}</th>
                                                       <th>{{number_format($employee->accounts->sum('amount')-$employee->accounts->sum('oldAmount'))}}</th>
                                                       <th>{{number_format(($employee->accounts->sum('amount')-$employee->accounts->sum('oldAmount'))*0.5/100)}}</th>
                                                       <th>{{$employee->accounts->count()}}</th>
                                                        <th>​{{$employee->fname}} {{$employee->lname}} ({{$employee->nname}})</th>
                                                        <th>{{$employee->company}}</th>
                                                        <th>{{$employee->department}}</th>
                                                        <th>{{$employee->position}}</th>
                                                        <th>{{$employee->contact}}</th>
                                                        <th><a href="{{route('employee.view',$employee->id)}}" class="btn btn-link pl-0 ml-0" value=""><span class="fa fa-eye"></span></a></th>
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