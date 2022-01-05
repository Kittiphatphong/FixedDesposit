@extends('layouts/contentLayoutMaster')

@section('title', 'Customer')

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
@endsection

@section('content')
<section id="add-row" >
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><b>ລາຍ​ການ​ລູກ​ຄ້າ</b></h4>
                                    @if(Auth::user()->can('DeleteAccount'))
                                    <h4 class=""><b>ລວມ​ເງິນຝາກທັງ​ໝົດ {{number_format($accounts->sum('amount'))}} ກີບ <br><br>(ຈຳ​ນວນ​ບັນ​ຊີ​ລູກ​ຄ້າທັງ​ໝົດ: {{$accounts->count()}} ບັນ​ຊີ)</b></h4>
                                    @endif
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        @if(Auth::user()->can('AddAccount'))<a href="{{route('customer.index')}}" class="btn btn-primary mb-2"><i class="feather icon-plus"></i>&nbsp; ເພີ່​ມ​ບັນ​ຊີ</a>@endif
                                        <div class="table-responsive">
                                            <table class="table add-rows table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ເລກ​ບັນ​ຊີ</th>
                                                        <th>ຊື່​ບັນ​ຊີ</th>
                                                        <th>ໄລ​ຍະ​ຝາກ</th>
                                                        <th>ມື້​ຝາກ​</th>
                                                        <th>ດອກ​ເບ້ຍ</th>
                                                        <th>ຈຳ​ນວນ​ເງີນ</th>
                                                        <th>ເປັນ​ໂຕ​ໜັງ​ສື</th>
                                                        <th>ຮູບ​ແບບ​ການ​ຮັບ​ດອກ​ເບ້ຍ</th>
                                                        <th>ເລກ​ໝາຍລຸ້ນ​ໂຊກ</th>
                                                        <th>ພະ​ນັກ​ງານ​ແນະ​ນຳ</th>
                                                        <th>%ລາງ​ວັນ</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($accounts as $account)
                                                <tr>
                                                        <th>{{$account->idAccount}}</th>
                                                        <th>{{$account->customers->fname}} {{$account->customers->lname}}</th>
                                                        <th>{{$account->typeDisposits->period}} @if($account->typeDisposits->yearOrMonth=="year")
                                                        ປີ
                                                        @else
                                                        ເດືອນ
                                                        @endIf​
                                                        </th>
                                                        <th>{{ \Carbon\Carbon::parse($account->start)->format('d.m.Y')}}</th>
                                                        <th>{{$account->interest}} %</th>
                                                        <th>{{number_format($account->amount)}}</th>
                                                        <th>{{$account->amountWord}}</th>
                                                        <th>{{$account->receiveInterest}}</th>
                                                        <th>{{$account->typeDisposits->type}}{{$account->luckyCodes->min('idCode')}} - {{$account->typeDisposits->type}}{{$account->luckyCodes->max('idCode')}}</th>
                                                        <th>{{$account->employees->fname}} {{$account->employees->lname}}</th>
                                                        <th>{{round(($account->luckyCodes->count() *100) / \App\LuckyCode::all()->count(),2)}} %</th>
                                                        <th class="d-flex justify-content-start">
                                                        @if(Auth::user()->can('ShowAccount'))<a href="{{route('lucky.view',$account->id)}}" class="btn btn-link ml-0 pl-0" value="" ><span class="fa fa-eye"></span></a>@endIF
                                                        @if(Auth::user()->can('EditAccount'))<a href="{{route('account.edit',$account->id)}}" class="btn btn-link" value="" ><span class="fa fa-pencil"></span></a>@endIf
                                                        @if(Auth::user()->can('DeleteAccount'))<form action="{{route('account.destroy',$account->id)}}"  method="post" class="delete_form">
                                                        {{ csrf_field()}}
                                                        <button type="submit" class="btn btn-link"><span class="fa fa-trash"></span> </button>
                                                        </form>@endif
                                                        </th>
                                                     </tr>
                                                @endforeach
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
