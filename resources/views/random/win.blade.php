@extends('layouts/contentLayoutMaster')

@section('title', 'Customer')

@section('vendor-style')
<!-- vendor css files -->

@endsection
@section('page-style')
<style>body{font-family:"Phetsarath OT";}</style>
@endsection

@section('content')
<section id="add-row" >
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><b>ລະ​ຫັດຜູ້​ໂຊກ​ດີ</b></h4>
                                    <h4 class="float-right bg-primary p-1 text-white rounded"><b> ທັງ​ໝົດ {{$randoms->count()}} ລະ​ຫັດ​ ({{number_format($randoms->sum('amount'))}})</b></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">         
                                        <div class="table-responsive">
                                            <table class="table add-rows table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ມື້ຖືກ​ລາງ​ວັນ</th>
                                                        <th>ລະ​ຫັດ​ຊຽງ​ໂຊກ</th>   
                                                        <th>ເລກ​ບັນ​ຊີ</th> 
                                                        <th>ຊື່​ບັນ​ຊີ</th> 
                                                        <th>ເບີ​ໂທ</th>
                                                        <th>ຈຳ​ນວນ​ເງິນ</th>    
                                                        <th></th>                                                                                             
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($randoms as $random)
                                                <tr>
                                                <td>{{\Carbon\Carbon::parse($random->created_at)->toDateTimeString()}}</td>
                                                <td>{{$random->luckyCodes->accounts->typeDisposits->type}}{{$random->luckyCodes->idCode}}</td>
                                                <td>{{$random->luckyCodes->accounts->idAccount}}</td>
                                                <td>{{$random->luckyCodes->accounts->customers->fname}} {{$random->luckyCodes->accounts->customers->lname}}</td>
                                                <td>{{$random->luckyCodes->accounts->customers->contact}}</td>
                                                <td>{{number_format($random->amount)}} ກີບ</td>
                                                <td><form action="{{route('random.destroy',$random->id)}}"  method="post" class="delete_form">
                                                        {{ csrf_field()}}
                                                        <button type="submit" class="btn btn-link ml-0 pl-0"><span class="fa fa-trash"></span> </button>
                                                        </form>
                                                </td>
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