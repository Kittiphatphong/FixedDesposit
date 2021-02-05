<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">

    <!-- END: Custom CSS-->
    <style>body{font-family:"Phetsarath OT";
                zoom:0.67;
        background-color: white;
}
    .containerJ{

        padding:0;
        margin:auto;
        width:19%;
        margin-bottom:0px;


    }
    .bgS{

        background-color:white;
        height: 2510px;
        width: 1785px;
    }

table {

  border-collapse: collapse;
  width:80%;
   margin:auto;

}

table, td, th {
  border: 1px solid black;
}
    @media print {
               .no-print {
                  visibility: hidden;
               }
            }
            td,tr,th,b,p{
        font-size:28px;
        color:black;
        padding:0px;


    }
    h1{
        font-size:42px;
        padding:20px;
        color:black;
    }
    .mrJ{
        margin-right:176px;
    }
    .mlJ{
        margin-left:176px;
    }
    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body>

<button onClick="window.print()" class="btn btn-primary btn-lg float-left no-print font fixed">Print</button>
<a href="{{route('account.index')}}" class="float-right no-print btn btn-dark btn-lg font">Back</a>
<div class="containerJ bgS round ">
<br><br><br>
<b><u><h1 class="text-center">ຕາຕະລາງ ຄິດໄລອັດຕາດອກເບ້ຍ ເງິນຝາກມີກຳນົດ</h1></u></b>
@if($account->typeDisposits->period==3 && $account->typeDisposits->yearOrMonth=="year")
<!-- table 1 -->
<table>
  <thead>
  <tr><th colspan="6" class="text-center table-primary"><b>ປີທີ 1</b></th></tr>
    <tr class="text-center">
      <td><b>ງວດທີ</b></td>
      <td><b>ວັນທີ</b></td>
      <td><b>ວັນທີຄິດໄລ່ດອກເບ້ຍ</b></td>
      <td><b>ຈຳນວນມື້</b></td>
      <td><b>ຈຳນວນເງິນ</b></td>
      <td><b>ລາຍເຊັນຜູ້ຮັບ</b></td>
    </tr>
  </thead>
  <tbody>
    @for($i=1; $i<=12 ;$i++)
    <tr class="text-center">
      <th scope="row" >{{$i}}</th>
      <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->format('d.m.Y')}}</td>
      <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i)->format('d.m.Y')}}</td>
      <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))}}</td>
      <td class="text-right">{{number_format(round(($account->amount*($account->interest/100))/ \Carbon\Carbon::create($account->start)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(1))
      * \Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))))}}</td>
      <td></td>
    </tr>
    @endfor
    <tr class="table-dark">
    <td colspan="3" class=text-center><b>ລວມ</b></td>
    <td class="text-center"><b>{{\Carbon\Carbon::create($account->start)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(1))}} ມື້</b></td>
    <td class="text-right"><b>{{number_format(($account->amount*($account->interest/100)))}}</b></td>
    <td></td>
    </tr>
  </tbody>
</table>
<br>
<!-- Table 2 -->
<table>
  <thead>
  <tr><th colspan="6" class="text-center table-primary"><b>ປີທີ 2</b></th></tr>
    <tr class="text-center">
      <td><b>ງວດທີ</b></td>
      <td><b>ວັນທີ</b></td>
      <td><b>ວັນທີຄິດໄລ່ດອກເບ້ຍ</b></td>
      <td><b>ຈຳນວນມື້</b></td>
      <td><b>ຈຳນວນເງິນ</b></td>
      <td><b>ລາຍເຊັນຜູ້ຮັບ</b></td>
    </tr>
  </thead>
  <tbody>
    @for($i=13; $i<=24 ;$i++)
    <tr class="text-center">
      <th scope="row" >{{$i}}</th>
      <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->format('d.m.Y')}}</td>
      <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i)->format('d.m.Y')}}</td>
      <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))}}</td>
      <td class="text-right">{{number_format(round(($account->amount*($account->interest/100))/ \Carbon\Carbon::create($account->start)->addYears(1)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(2))
      * \Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))))}}</td>
      <td></td>
    </tr>
    @endfor
    <tr class="table-dark">
    <td colspan="3" class=text-center><b>ລວມ</b></td>
    <td class="text-center"><b>{{\Carbon\Carbon::create($account->start)->addYears(1)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(2))}} ມື້</b></td>
    <td class="text-right"><b>{{number_format(($account->amount*($account->interest/100)))}}</b></td>
    <td></td>
    </tr>
  </tbody>
</table>
<br>
<!-- table 3 -->
<table>
  <thead>
  <tr><th colspan="6" class="text-center table-primary"><b>ປີທີ 3</b></th></tr>
    <tr class="text-center">
      <td><b>ງວດທີ</b></td>
      <td><b>ວັນທີ</b></td>
      <td><b>ວັນທີຄິດໄລ່ດອກເບ້ຍ</b></td>
      <td><b>ຈຳນວນມື້</b></td>
      <td><b>ຈຳນວນເງິນ</b></td>
      <td><b>ລາຍເຊັນຜູ້ຮັບ</b></td>
    </tr>
  </thead>
  <tbody>
    @for($i=25; $i<=36 ;$i++)
    <tr class="text-center">
      <th scope="row" >{{$i}}</th>
      <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->format('d.m.Y')}}</td>
      <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i)->format('d.m.Y')}}</td>
      <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))}}</td>
      <td class="text-right">{{number_format(round(($account->amount*($account->interest/100))/ \Carbon\Carbon::create($account->start)->addYears(2)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(3))
      * \Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))))}}</td>
      <td></td>
    </tr>
    @endfor
    <tr class="table-dark">
    <td colspan="3" class=text-center><b>ລວມ</b></td>
    <td class="text-center"><b>{{\Carbon\Carbon::create($account->start)->addYears(2)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(3))}} ມື້</b></td>
    <td class="text-right"><b>{{number_format(($account->amount*($account->interest/100)))}}</b></td>
    <td></td>
    </tr>
  </tbody>
</table>
@endif
@if($account->typeDisposits->period==2 && $account->typeDisposits->yearOrMonth=="year")
<!-- table 1.2 -->
<table>
  <thead>
  <tr><th colspan="6" class="text-center table-primary"><b>ປີທີ 1</b></th></tr>
    <tr class="text-center">
      <td><b>ງວດທີ</b></td>
      <td><b>ວັນທີ</b></td>
      <td><b>ວັນທີຄິດໄລ່ດອກເບ້ຍ</b></td>
      <td><b>ຈຳນວນມື້</b></td>
      <td><b>ຈຳນວນເງິນ</b></td>
      <td><b>ລາຍເຊັນຜູ້ຮັບ</b></td>
    </tr>
  </thead>
  <tbody>
    @for($i=1; $i<=12 ;$i++)
    <tr class="text-center">
      <th scope="row" >{{$i}}</th>
      <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->format('d.m.Y')}}</td>
      <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i)->format('d.m.Y')}}</td>
      <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))}}</td>
      <td class="text-right">{{number_format(round(($account->amount*($account->interest/100))/ \Carbon\Carbon::create($account->start)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(1))
      * \Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))))}}</td>
      <td></td>
    </tr>
    @endfor
    <tr class="table-dark">
    <td colspan="3" class=text-center><b>ລວມ</b></td>
    <td class="text-center"><b>{{\Carbon\Carbon::create($account->start)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(1))}} ມື້</b></td>
    <td class="text-right"><b>{{number_format(($account->amount*($account->interest/100)))}}</b></td>
    <td></td>
    </tr>
  </tbody>
</table>
<br>
<!-- Table 2.2 -->
<table>
  <thead>
  <tr><th colspan="6" class="text-center table-primary"><b>ປີທີ 2</b></th></tr>
    <tr class="text-center">
      <td><b>ງວດທີ</b></td>
      <td><b>ວັນທີ</b></td>
      <td><b>ວັນທີຄິດໄລ່ດອກເບ້ຍ</b></td>
      <td><b>ຈຳນວນມື້</b></td>
      <td><b>ຈຳນວນເງິນ</b></td>
      <td><b>ລາຍເຊັນຜູ້ຮັບ</b></td>
    </tr>
  </thead>
  <tbody>
    @for($i=13; $i<=24 ;$i++)
    <tr class="text-center">
      <th scope="row" >{{$i}}</th>
      <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->format('d.m.Y')}}</td>
      <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i)->format('d.m.Y')}}</td>
      <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))}}</td>
      <td class="text-right">{{number_format(round(($account->amount*($account->interest/100))/ \Carbon\Carbon::create($account->start)->addYears(1)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(2))
      * \Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))))}}</td>
      <td></td>
    </tr>
    @endfor
    <tr class="table-dark">
    <td colspan="3" class=text-center><b>ລວມ</b></td>
    <td class="text-center"><b>{{\Carbon\Carbon::create($account->start)->addYears(1)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(2))}} ມື້</b></td>
    <td class="text-right"><b>{{number_format(($account->amount*($account->interest/100)))}}</b></td>
    <td></td>
    </tr>
  </tbody>
</table>
@endif
@if($account->typeDisposits->period==1 && $account->typeDisposits->yearOrMonth=="year")
<!-- table 1.1 -->
<table>
  <thead>
  <tr><th colspan="6" class="text-center table-primary"><b>ປີທີ 1</b></th></tr>
    <tr class="text-center">
      <td><b>ງວດທີ</b></td>
      <td><b>ວັນທີ</b></td>
      <td><b>ວັນທີຄິດໄລ່ດອກເບ້ຍ</b></td>
      <td><b>ຈຳນວນມື້</b></td>
      <td><b>ຈຳນວນເງິນ</b></td>
      <td><b>ລາຍເຊັນຜູ້ຮັບ</b></td>
    </tr>
  </thead>
  <tbody>
    @for($i=1; $i<=12 ;$i++)
    <tr class="text-center">
      <th scope="row" >{{$i}}</th>
      <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->format('d.m.Y')}}</td>
      <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i)->format('d.m.Y')}}</td>
      <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))}}</td>
      <td class="text-right">{{number_format(round(($account->amount*($account->interest/100))/ \Carbon\Carbon::create($account->start)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(1))
      * \Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))))}}</td>
      <td></td>
    </tr>
    @endfor
    <tr class="table-dark">
    <td colspan="3" class=text-center><b>ລວມ</b></td>
    <td class="text-center"><b>{{\Carbon\Carbon::create($account->start)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(1))}} ມື້</b></td>
    <td class="text-right"><b>{{number_format(($account->amount*($account->interest/100)))}}</b></td>
    <td></td>
    </tr>
  </tbody>
</table>
@endif


@if($account->typeDisposits->period==5 && $account->typeDisposits->yearOrMonth=="year")
  <!-- table 1 -->
    <table>
      <thead>
      <tr><th colspan="6" class="text-center table-primary"><b>ປີທີ 1</b></th></tr>
      <tr class="text-center">
        <td><b>ງວດທີ</b></td>
        <td><b>ວັນທີ</b></td>
        <td><b>ວັນທີຄິດໄລ່ດອກເບ້ຍ</b></td>
        <td><b>ຈຳນວນມື້</b></td>
        <td><b>ຈຳນວນເງິນ</b></td>
        <td><b>ລາຍເຊັນຜູ້ຮັບ</b></td>
      </tr>
      </thead>
      <tbody>
      @for($i=1; $i<=12 ;$i++)
        <tr class="text-center">
          <th scope="row" >{{$i}}</th>
          <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->format('d.m.Y')}}</td>
          <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i)->format('d.m.Y')}}</td>
          <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))}}</td>
          <td class="text-right">{{number_format(round(($account->amount*($account->interest/100))/ \Carbon\Carbon::create($account->start)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(1))
      * \Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))))}}</td>
          <td></td>
        </tr>
      @endfor
      <tr class="table-dark">
        <td colspan="3" class=text-center><b>ລວມ</b></td>
        <td class="text-center"><b>{{\Carbon\Carbon::create($account->start)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(1))}} ມື້</b></td>
        <td class="text-right"><b>{{number_format(($account->amount*($account->interest/100)))}}</b></td>
        <td></td>
      </tr>
      </tbody>
    </table>
    <br>
    <!-- Table 2 -->
    <table>
      <thead>
      <tr><th colspan="6" class="text-center table-primary"><b>ປີທີ 2</b></th></tr>
      <tr class="text-center">
        <td><b>ງວດທີ</b></td>
        <td><b>ວັນທີ</b></td>
        <td><b>ວັນທີຄິດໄລ່ດອກເບ້ຍ</b></td>
        <td><b>ຈຳນວນມື້</b></td>
        <td><b>ຈຳນວນເງິນ</b></td>
        <td><b>ລາຍເຊັນຜູ້ຮັບ</b></td>
      </tr>
      </thead>
      <tbody>
      @for($i=13; $i<=24 ;$i++)
        <tr class="text-center">
          <th scope="row" >{{$i}}</th>
          <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->format('d.m.Y')}}</td>
          <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i)->format('d.m.Y')}}</td>
          <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))}}</td>
          <td class="text-right">{{number_format(round(($account->amount*($account->interest/100))/ \Carbon\Carbon::create($account->start)->addYears(1)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(2))
      * \Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))))}}</td>
          <td></td>
        </tr>
      @endfor
      <tr class="table-dark">
        <td colspan="3" class=text-center><b>ລວມ</b></td>
        <td class="text-center"><b>{{\Carbon\Carbon::create($account->start)->addYears(1)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(2))}} ມື້</b></td>
        <td class="text-right"><b>{{number_format(($account->amount*($account->interest/100)))}}</b></td>
        <td></td>
      </tr>
      </tbody>
    </table>
    <br>
    <!-- table 3 -->
    <table>
      <thead>
      <tr><th colspan="6" class="text-center table-primary"><b>ປີທີ 3</b></th></tr>
      <tr class="text-center">
        <td><b>ງວດທີ</b></td>
        <td><b>ວັນທີ</b></td>
        <td><b>ວັນທີຄິດໄລ່ດອກເບ້ຍ</b></td>
        <td><b>ຈຳນວນມື້</b></td>
        <td><b>ຈຳນວນເງິນ</b></td>
        <td><b>ລາຍເຊັນຜູ້ຮັບ</b></td>
      </tr>
      </thead>
      <tbody>
      @for($i=25; $i<=36 ;$i++)
        <tr class="text-center">
          <th scope="row" >{{$i}}</th>
          <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->format('d.m.Y')}}</td>
          <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i)->format('d.m.Y')}}</td>
          <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))}}</td>
          <td class="text-right">{{number_format(round(($account->amount*($account->interest/100))/ \Carbon\Carbon::create($account->start)->addYears(2)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(3))
      * \Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))))}}</td>
          <td></td>
        </tr>
      @endfor
      <tr class="table-dark">
        <td colspan="3" class=text-center><b>ລວມ</b></td>
        <td class="text-center"><b>{{\Carbon\Carbon::create($account->start)->addYears(2)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(3))}} ມື້</b></td>
        <td class="text-right"><b>{{number_format(($account->amount*($account->interest/100)))}}</b></td>
        <td></td>
      </tr>
      </tbody>
    </table>
  <br>
    <!-- table 4 -->
    <table>
      <thead>
      <tr><th colspan="6" class="text-center table-primary"><b>ປີທີ 4</b></th></tr>
      <tr class="text-center">
        <td><b>ງວດທີ</b></td>
        <td><b>ວັນທີ</b></td>
        <td><b>ວັນທີຄິດໄລ່ດອກເບ້ຍ</b></td>
        <td><b>ຈຳນວນມື້</b></td>
        <td><b>ຈຳນວນເງິນ</b></td>
        <td><b>ລາຍເຊັນຜູ້ຮັບ</b></td>
      </tr>
      </thead>
      <tbody>
      @for($i=37; $i<=48 ;$i++)
        <tr class="text-center">
          <th scope="row" >{{$i}}</th>
          <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->format('d.m.Y')}}</td>
          <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i)->format('d.m.Y')}}</td>
          <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))}}</td>
          <td class="text-right">{{number_format(round(($account->amount*($account->interest/100))/ \Carbon\Carbon::create($account->start)->addYears(3)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(4))
      * \Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))))}}</td>
          <td></td>
        </tr>
      @endfor
      <tr class="table-dark">
        <td colspan="3" class=text-center><b>ລວມ</b></td>
        <td class="text-center"><b>{{\Carbon\Carbon::create($account->start)->addYears(3)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(4))}} ມື້</b></td>
        <td class="text-right"><b>{{number_format(($account->amount*($account->interest/100)))}}</b></td>
        <td></td>
      </tr>
      </tbody>
    </table>
    <!-- table 5 -->
  <br>
    <table>
      <thead>
      <tr><th colspan="6" class="text-center table-primary"><b>ປີທີ 5</b></th></tr>
      <tr class="text-center">
        <td><b>ງວດທີ</b></td>
        <td><b>ວັນທີ</b></td>
        <td><b>ວັນທີຄິດໄລ່ດອກເບ້ຍ</b></td>
        <td><b>ຈຳນວນມື້</b></td>
        <td><b>ຈຳນວນເງິນ</b></td>
        <td><b>ລາຍເຊັນຜູ້ຮັບ</b></td>
      </tr>
      </thead>
      <tbody>
      @for($i=49; $i<=60 ;$i++)
        <tr class="text-center">
          <th scope="row" >{{$i}}</th>
          <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->format('d.m.Y')}}</td>
          <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i)->format('d.m.Y')}}</td>
          <td>{{\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))}}</td>
          <td class="text-right">{{number_format(round(($account->amount*($account->interest/100))/ \Carbon\Carbon::create($account->start)->addYears(4)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(5))
      * \Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i-1)->diffInDays(\Carbon\Carbon::create($account->start)->addMonthsNoOverflow($i))))}}</td>
          <td></td>
        </tr>
      @endfor
      <tr class="table-dark">
        <td colspan="3" class=text-center><b>ລວມ</b></td>
        <td class="text-center"><b>{{\Carbon\Carbon::create($account->start)->addYears(4)->diffInDays(\Carbon\Carbon::create($account->start)->addYears(5))}} ມື້</b></td>
        <td class="text-right"><b>{{number_format(($account->amount*($account->interest/100)))}}</b></td>
        <td></td>
      </tr>
      </tbody>
    </table>
  @endif
<br>
<div class="float-right mrJ">
<p>ນະຄອນຫຼວງວຽງຈັນ, ວັນທີ:{{\Carbon\Carbon::create($account->start)->format('d/m/Y')}} <br></p>
<p class="float-right"><b><u>ຜູ້ຄິດໄລ່</u></b></p>
</div>
<div class="float-left mlJ">
<p><br></p>
<p><b><u>ການເງິນ</u></b></p>
</div>
</div>
    <!-- BEGIN: Vendor JS-->


</body>
<!-- END: Body-->
</html>
