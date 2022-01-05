@extends('layouts/contentLayoutMaster')

@section('title', 'Employees')

@section('vendor-style')
<!-- vendor css files -->

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
</style>
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
                                        <div class="col">
                                        <input type="date" id="normal" class="form-control" name="start" required/ value="{{isset($start)?$start:\App\Account::all()->min('start')}}">
                                        </div>
                                        <div class="col">
                                        <input type="date" id="scaled" class="form-control" name="end" required/ value="{{isset($end)?$end:\Carbon\Carbon::now()->format('Y-m-d')}}">
                                        </div>

                                        <div class="col">
                                        <input type="submit" value="ຄົ້ນ​ຫາ" class="btn btn btn-primary">
                                        </div>
                                        <p><b>ຍອດ​ລວມ: {{number_format($employees->sum('amount'))}} ກີບ</b></p>
                                        </div>
                                        </form>
                                        <br>
                                        <form action="{{route('employee.query')}}" method="get">
                                                        <input type="hidden" name="start" value="{{$start}}">
                                                        <input type="hidden" name="end" value="{{$end}}">
                                                        <button type="submit" class="float-left btn btn-primary btn-sm"> <span class="fa fa-download"></span></button>
                                                        </form>
                                        <br>
                                        <div class="table-responsive">
                                            <table class="table add-rows table-striped table-bordered">

                                                <thead>
                                                <tr><th colspan="11" class="text-center">​ວັນ​ທີ {{\Carbon\Carbon::parse($start)->format('d.m.Y')}} ເຖີງ​ວັນ​ທີ {{\Carbon\Carbon::parse($end)->format('d.m.Y')}}</th></tr>
                                                    <tr>
                                                        <th>ຈຳ​ນວນ​ເງີນ</th>
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
                                                        <th>{{number_format($employee->amount)}}</th>
                                                        <th>{{number_format($employee->oldAmount)}}</th>
                                                        <th>{{number_format($employee->amount - $employee->oldAmount)}}</th>
                                                        <th>{{number_format(($employee->amount-$employee->oldAmount)*0.5/100)}}</th>
                                                        <th>{{$employee->customer}}</th>
                                                        <th>​{{$employee->fname}} {{$employee->lname}} ({{$employee->nname}})</th>
                                                        <th>{{$employee->company}}</th>
                                                        <th>{{$employee->department}}</th>
                                                        <th>{{$employee->position}}</th>
                                                        <th>{{$employee->contact}}</th>
                                                        <th><form action="{{route('employee.view',$employee->employee_id)}}" method="get">
                                                        <input type="hidden" name="start" value="{{$start}}">
                                                        <input type="hidden" name="end" value="{{$end}}">
                                                        <button type="submit" class="btn btn-link pl-0 ml-0" value=""><span class="fa fa-eye"></span></button></th>
                                                        </form>
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
