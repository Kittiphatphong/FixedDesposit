@extends('layouts/fullNewApp')
@section('title', 'Create Account')
@section('content')
<section id="add-row" >
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><b>ພະ​ນັກ​ງານ​</b> ({{$accounts->first()->employees->fname}}​ {{$accounts->first()->employees->lname}}​)</h4>
                                    <a href="{{route('employee.report')}}" class="btn btn-dark mr-1 mb-1 float-right">ກັບ​ຄືນ</a>
                                </div>
                                <div class="card-content">
                                
                                    <div class="card-body">
                                    <p><b>ຍອດ​: {{number_format($accounts->sum('amount'))}}  ກີບ</b></p>
                                    <p><b>ຈຳ​ນວນ: {{number_format($accounts->count())}}  ຄົນ</b></p>
                                    <p><b>ແຕ່​ວັນ​ທີ {{\Carbon\Carbon::parse($accounts->min('start'))->format('d.m.Y')}} ຫາ​ວັນ​ທີ {{\Carbon\Carbon::parse($accounts->max('start'))->format('d.m.Y')}} </b></p>
                                        <div class="table-responsive">
                                            <table class="table add-rows table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ມື້​ຝາກ</th>
                                                        <th>ໄລ​ຍະ</th>
                                                        <th>ບັນ​ຊີ</th>
                                                        <th>ຊື່​ບັນ​ຊີ</th>
                                                        <th>ຈຳ​ນວນ</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($accounts as $account)
                                                <tr>                  
                                                        <th>{{\Carbon\Carbon::parse($account->start)->format('d.m.Y')}}</th>
                                                        <th>{{$account->typeDisposits->period}} @if($account->typeDisposits->yearOrMonth=="year")ປີ @else ເດືອນ @endIf</th>
                                                        <th>{{$account->idAccount}}</th>
                                                        <th>{{$account->customers->fname}} {{$account->customers->lname}}</th>
                                                        <th>{{number_format($account->amount)}} ກີບ ({{$account->amountWord}})</th>
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