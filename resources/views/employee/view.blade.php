@extends('layouts/fullNewApp')
@section('title', 'Create Account')
@section('content')
<div id="edit">
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
                                    <p><b>ຍອດ​: {{number_format(($accounts->sum('amount')-$accounts->sum('oldAmount')))}}  ກີບ</b></p>
                                    <p><b>ເງີນ​ເປີ​ເຊັນ​: {{number_format(($accounts->sum('amount')-$accounts->sum('oldAmount'))*0.5/100)}}  ກີບ</b></p>                                   
                                    <p><b>ຈຳ​ນວນ: {{number_format($accounts->count())}}  ຄົນ</b></p>
                                    <p><b>ແຕ່​ວັນ​ທີ {{\Carbon\Carbon::parse($accounts->min('start'))->format('d.m.Y')}} ຫາ​ວັນ​ທີ {{\Carbon\Carbon::parse($accounts->max('start'))->format('d.m.Y')}} </b></p>
                                        <div class="table-responsive">
                                            <table class="table add-rows table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                    <th>id</th>
                                                        <th>ມື້​ຝາກ</th>
                                                        <th>ໄລ​ຍະ</th>
                                                        <th>ບັນ​ຊີ</th>
                                                        <th>ຊື່​ບັນ​ຊີ</th>
                                                        <th>ຈຳ​ນວນຝາກໜັງ​ສື</th>
                                                        <th>ຈຳ​ນວນຝາກ</th>                                                       
                                                        <th>ຈຳ​ນວນຝາກເກົ່າ</th>
                                                        <th>ຈຳ​ນວນ​ທັງ​ໝົດ</th>
                                                        <th>ຈຳ​ນວນເປີ​ເຊັນ</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($accounts as $account)
                                                <tr>        
                                                       <th>{{$account->id}}</th>          
                                                        <th>{{\Carbon\Carbon::parse($account->start)->format('d.m.Y')}}</th>
                                                        <th>{{$account->typeDisposits->period}} @if($account->typeDisposits->yearOrMonth=="year")ປີ @else ເດືອນ @endIf</th>
                                                        <th>{{$account->idAccount}}</th>
                                                        <th>{{$account->customers->fname}} {{$account->customers->lname}}</th>
                                                        <th>{{$account->amountWord}}</th>
                                                        <th>{{number_format($account->amount)}} ກີບ</th>
                                                        <th>{{number_format($account->oldAmount)}} ກີບ</th>
                                                        <th>{{number_format($account->amount-$account->oldAmount)}} ກີບ</th>
                                                        <th>{{number_format(($account->amount-$account->oldAmount)*0.5/100)}} ກີບ</th>                                                        
                                                        <th>
                                                        <a href=""  data-toggle="modal" data-target="#exampleModalCenter" v-on:click="jay({{$account->id}})">
                                                        <span class="feather icon-feather">
                                                        </a>
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
                
                
              <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ຈຳ​ນວນຝາກເກົ່າ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('oldAmount')}}" method="get">
      <div class="modal-body">
        
         <input type="text" name="oldAmount" class="form-control" placeholder="ຈຳ​ນວນຝາກເກົ່າ" id="firstNumber" onkeyup="format(this)" required>
         <input type="hidden" name="id" v-model="message">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ປິດ</button>
        <button type="submit" class="btn btn-primary">ເພີ່ມ</button>
      </div>
      </form>
    </div>
  </div>
</div>  

</div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<script>
var edit = new Vue({
  el: '#edit',
  data: {
    message:''
  },
  methods:{
    jay:function(m){
           this.message = m;
        },
  }
})
</script>

<script>
function format(input) {
var nStr = input.value + '';  
nStr = nStr.replace(/\,/g, "");
x = nStr.split('.');
x1 = x[0];
x2 = x.length > 1 ? '.' + x[1] : '';  
var rgx = /(\d+)(\d{3})/;
while (rgx.test(x1)) {
x1 = x1.replace(rgx, '$1' + ',' + '$2');
}
input.value = x1 + x2;
}

</script>

@endsection