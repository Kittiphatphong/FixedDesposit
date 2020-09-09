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
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/ag-grid/ag-grid.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/ag-grid/ag-theme-material.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <!-- <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css"> -->
    <!--  finished -->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">  

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->
    <style>body{font-family:"Phetsarath OT";
                zoom:0.67;
}
    .containerJ{
 
        padding:0;
        margin:auto;
        width:20%;
        
        
    }
    .bgS{
        
        background-image:url("../../../app-assets/images/pages/bgStaff.png");
        height: 2510px;
        width: 1785px;
    }
    .bgC{
        
        background-image:url("../../../app-assets/images/pages/bgCustomer.png");
        height: 2510px;
        width: 1785px;
    }
    .font{
        font-size:36px;
    }
    .fontHead{
        color:yellow;
        font-size:36px;
    }
    .fontSize{
      font size:30px;
    }
    .fontHead24{
        color:#fdcf09;
        font-size:53px;
    }
    .fontHead24b{
        color:black;
        font-size:53px;
    }
    .fontyellow{
        color:#fdcf09;
    }
    .heightJ{
        height: 450px;
        border-radius:50px;
        padding-top:10px;
        border:7px solid white;
    }
    .marginT{
        margin-top:500px;  
    }
    .marginJ{
        margin-top:585px;  
        left:210px;
    }
    
    
    
    @media print { 
               .no-print { 
                  visibility: hidden; 
               } 
            } 
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
@if($account)
<body>
<div class="position-fixed justify-content-between">
<button onClick="window.print()" class="btn btn-primary btn-lg float-left no-print font">Print</button>
<a href="{{route('account.index')}}" class="float-right no-print btn btn-dark btn-lg font">Back</a>
</div>
<div class="containerJ bgC round ">
<div class="d-flex justify-content-between">
</div>

<div class="ml-5 col-12 marginT">
<p class="btn btn-j btn-lg  colJ2-2 text-right font">ຊື່​ບັນ​ຊີ:</p>
<p class="btn btn-white btn-lg col-9 text-left font">{{$account->customers->fname}} {{$account->customers->lname}}</p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg colJ2-2 text-right font">ເລກ​ບັນ​ຊີ:</p>
<p class="btn btn-white btn btn-lg col-9 text-left font">{{$account->idAccount}}</p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg colJ2-2 text-right font">ທີ່ຢູ່:</p>
<p class="btn btn-white btn-lg col-9 text-left font">{{$account->customers->address}}</p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg colJ2-2 text-right font">ບັດ​ປະ​ຈຳ​ຕົວ:</p>
<p class="btn btn-white btn-lg col-3 text-left font">@if(round($account->customers->idNumber)>999999) {{$account->customers->idNumber}} @else . @endIf</p>
<p class="btn btn-j btn-lg col-2 text-right font pl-0">ສຳ​ມະ​ໂນ​ຄົວ​ເລກ​ທີ:</p>
<p class="btn btn-white btn-lg colJ-4 text-left font">@if(round($account->customers->idNumber)<=999999) {{$account->customers->idNumber}} @else . @endIf</p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg colJ2-2 text-right font">ເບີ​ໂທ​ລະ​ສັບ:</p>
<p class="btn btn-white btn-lg col-9 text-left font">{{$account->customers->contact}}</p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg colJ2-2 text-right font">ໄລ​ຍະ​ເງິນຝາກ​</p>
<p class="btn btn-white btn-lg col-2 text-left font">{{$account->typeDisposits->period}}  @if($account->typeDisposits->yearOrMonth == "year")ປີ@endif @if($account->typeDisposits->yearOrMonth == "month")ເດືອນ@endif</p>
<p class="btn btn-j btn-lg colJ-2 text-right font">ເລີ່ມວັນ​ທີ:</p>
<p class="btn btn-white btn-lg col-2 text-left font">{{ \Carbon\Carbon::parse($account->start)->format('d.m.Y')}}</p>
<p class="btn btn-j btn-lg colJ-2 text-right font pl-0">ເຖິງວັນ​ທີ:</p>
<p class="btn btn-white btn-lg col-2 text-left font">{{ \Carbon\Carbon::parse($account->end)->format('d.m.Y')}}</p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg colJ2-2 text-right font">ອັດ​ຕາ​ດອກ​ເບ້ຍ:</p>
<p class="btn btn-white btn-lg col-4 text-left font">{{$account->interest}} % ​<span class="float-right"><b>ຕໍ່​ປີ</b></span> </p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg  colJ2-2 text-right fontHead24 ">ຈຳ​ນວນ​ເງິນ:</p>
<p class="btn btn-white btn-lg col-6 text-left fontHead24b"><b>{{number_format($account->amount)}} </b>​<span class="float-right"><b>ກີບ</b></span></p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg  colJ2-2 text-right fontHead24">ເປັນ​ໂຕ​ໜັງ​ສື:</p>
<p class="btn btn-white btn-lg col-6 text-left fontHead24b"><b>{{$account->amountWord}}</b> </p>
</div>
<br><br>

<div class="row ml-5">
  <div class="colJ-sm-8">
    <div class="heightJ">
      <div class="card-body">
      <p class="fontHead24 text-center pt-2"><b>ຮູບ​ແບບ​ການ​ຮັບ​ດອກ​ເບ້ຍ</b></p> <br>

<ul class="list-unstyled m-0">
                                            <li class="d-inline-block col-6">                              
                                            <div class="custom-control custom-checkbox checkbox-xl">
                                            <input type="checkbox" class="custom-control-input " @if($account->receiveInterest =="ຮັບ​ດອກ​ເບ້ຍ​​ເມື່ອ​ຄົບ​ກຳ​ນົດ") checked @endIf>
                                            <label class="custom-control-label text-white font" >ຮັບ​ດອກ​ເບ້ຍ​​ເມື່ອ​ຄົບ​ກຳ​ນົດ</label>
                                            </div>
                                               
                                            </li>
                                            <li class="d-inline-block mr-0">
                                            <div class="custom-control custom-checkbox checkbox-xl">
                                            <input type="checkbox" class="custom-control-input" @if($account->receiveInterest =="ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 3 ເດືອນ") checked @endIf>
                                            <label class="custom-control-label text-white font" >ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 3 ເດືອນ</label>
                                            </li>
                                        </ul><br>
                                <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block col-6">
                                            <div class="custom-control custom-checkbox checkbox-xl">
                                            <input type="checkbox" class="custom-control-input" @if($account->receiveInterest =="ຮັບ​ດອກ​ເບ້ຍ​​ທຸກເດືອນ") checked @endIf>
                                            <label class="custom-control-label text-white font" >ຮັບ​ດອກ​ເບ້ຍ​​ທຸກເດືອນ</label>
                                            </li>
                                            <li class="d-inline-block mr-0">
                                            <div class="custom-control custom-checkbox checkbox-xl" >
                                            <input type="checkbox" class="custom-control-input" @if($account->receiveInterest =="ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 6 ເດືອນ") checked @endIf>
                                            <label class="custom-control-label text-white font" >ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 6 ເດືອນ</label>
                                </ul><br>
                                <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block col-6">
                                            <div class="custom-control custom-checkbox checkbox-xl" >
                                            <input type="checkbox" class="custom-control-input" @if($account->receiveInterest =="ຮັບ​ດອກ​ເບ້ຍ​​ທຸກປີ") checked @endIf>
                                            <label class="custom-control-label text-white font" >ຮັບ​ດອກ​ເບ້ຍ​​ທຸກປີ</label>
                                            </li>
                                            <li class="d-inline-block mr-0 ">
                                            <div class="custom-control custom-checkbox checkbox-xl"X >
                                            <input type="checkbox" class="custom-control-input" @if($account->receiveInterest =="ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 12 ເດືອນ") checked @endIf>
                                            <label class="custom-control-label text-white font" >ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ12ເດືອນ</label>
                                            </li>
                                </ul>
      </div>
    </div>
  </div> 
  <div class="col-sm-4 ml-0">
    <div class="heightJ pl-2 ">
      <div class="card-body pl-0 pr-0">
       
      <p class="fontHead24  pt-2"><b>ເລກ​ໝາຍ​ເງິນຝາກລຸ້ນໂຊກ</b></p><br>
<div class="col-12">
<p class="btn btn-j  colJ2-4 text-right font">ວັນ​ທີ:</p>
<p class="btn btn-white  col-6 text-left font">09.09.2020</p>
</div>
<div class="col-12">
<p class="btn btn-j  colJ2-4 text-right font">ເຖິງວັນ​ທີ:</p>
<p class="btn btn-white  col-6 text-left font">30.04.2021</p>
</div>
<div class="col-12">
<p class="btn btn-j  colJ2-4 text-right font pr-0">ເລກໝາຍ​:</p>
<p class="btn btn-white  col-6 text-left font">{{$account->typeDisposits->type}}{{$account->luckyCodes->min('idCode')}}</p>
</div>
<div class="col-12">
<p class="btn btn-j  colJ2-4 text-right font pr-0">ເຖິງ​ເລກໝາຍ​:</p>
<p class="btn btn-white  col-6 text-left font">{{$account->typeDisposits->type}}{{$account->luckyCodes->max('idCode')}}</p>
</div>

      </div>
    </div>
  </div>
</div>
</div>
       

<!-- Page 1.1 -->

<div class="containerJ bgC round ">
<div class="d-flex justify-content-between">
<p></p>
</div>

<div class="ml-5 col-12 marginT">
<p class="btn btn-j btn-lg  colJ2-2 text-right font">ຊື່​ບັນ​ຊີ:</p>
<p class="btn btn-white btn-lg col-9 text-left font">{{$account->customers->fname}} {{$account->customers->lname}}</p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg colJ2-2 text-right font">ເລກ​ບັນ​ຊີ:</p>
<p class="btn btn-white btn btn-lg col-9 text-left font">{{$account->idAccount}}</p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg colJ2-2 text-right font">ທີ່ຢູ່:</p>
<p class="btn btn-white btn-lg col-9 text-left font">{{$account->customers->address}}</p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg colJ2-2 text-right font">ບັດ​ປະ​ຈຳ​ຕົວ:</p>
<p class="btn btn-white btn-lg col-3 text-left font">@if(round($account->customers->idNumber)>999999) {{$account->customers->idNumber}} @else . @endIf</p>
<p class="btn btn-j btn-lg col-2 text-right font pl-0">ສຳ​ມະ​ໂນ​ຄົວ​ເລກ​ທີ:</p>
<p class="btn btn-white btn-lg colJ-4 text-left font">@if(round($account->customers->idNumber)<=999999) {{$account->customers->idNumber}} @else . @endIf</p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg colJ2-2 text-right font">ເບີ​ໂທ​ລະ​ສັບ:</p>
<p class="btn btn-white btn-lg col-9 text-left font">{{$account->customers->contact}}</p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg colJ2-2 text-right font">ໄລ​ຍະ​ເງິນຝາກ​</p>
<p class="btn btn-white btn-lg col-2 text-left font">{{$account->typeDisposits->period}}  @if($account->typeDisposits->yearOrMonth == "year")ປີ@endif @if($account->typeDisposits->yearOrMonth == "month")ເດືອນ@endif</p>
<p class="btn btn-j btn-lg colJ-2 text-right font">ເລີ່ມວັນ​ທີ:</p>
<p class="btn btn-white btn-lg col-2 text-left font">{{ \Carbon\Carbon::parse($account->start)->format('d.m.Y')}}</p>
<p class="btn btn-j btn-lg colJ-2 text-right font pl-0">ເຖິງວັນ​ທີ:</p>
<p class="btn btn-white btn-lg col-2 text-left font">{{ \Carbon\Carbon::parse($account->end)->format('d.m.Y')}}</p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg colJ2-2 text-right font">ອັດ​ຕາ​ດອກ​ເບ້ຍ:</p>
<p class="btn btn-white btn-lg col-4 text-left font">{{$account->interest}} % ​<span class="float-right"><b>ຕໍ່​ປີ</b></span> </p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg  colJ2-2 text-right fontHead24 ">ຈຳ​ນວນ​ເງິນ:</p>
<p class="btn btn-white btn-lg col-6 text-left fontHead24b"><b>{{number_format($account->amount)}} </b>​<span class="float-right"><b>ກີບ</b></span></p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg  colJ2-2 text-right fontHead24">ເປັນ​ໂຕ​ໜັງ​ສື:</p>
<p class="btn btn-white btn-lg col-6 text-left fontHead24b"><b>{{$account->amountWord}}</b> </p>
</div>
<br><br>

<div class="row ml-5">
  <div class="colJ-sm-8">
    <div class="heightJ">
      <div class="card-body">
      <p class="fontHead24 text-center pt-2"><b>ຮູບ​ແບບ​ການ​ຮັບ​ດອກ​ເບ້ຍ</b></p> <br>

<ul class="list-unstyled m-0">
                                            <li class="d-inline-block col-6">                              
                                            <div class="custom-control custom-checkbox checkbox-xl">
                                            <input type="checkbox" class="custom-control-input " @if($account->receiveInterest =="ຮັບ​ດອກ​ເບ້ຍ​​ເມື່ອ​ຄົບ​ກຳ​ນົດ") checked @endIf>
                                            <label class="custom-control-label text-white font" >ຮັບ​ດອກ​ເບ້ຍ​​ເມື່ອ​ຄົບ​ກຳ​ນົດ</label>
                                            </div>
                                               
                                            </li>
                                            <li class="d-inline-block mr-0">
                                            <div class="custom-control custom-checkbox checkbox-xl">
                                            <input type="checkbox" class="custom-control-input" @if($account->receiveInterest =="ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 3 ເດືອນ") checked @endIf>
                                            <label class="custom-control-label text-white font" >ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 3 ເດືອນ</label>
                                            </li>
                                        </ul><br>
                                <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block col-6">
                                            <div class="custom-control custom-checkbox checkbox-xl">
                                            <input type="checkbox" class="custom-control-input" @if($account->receiveInterest =="ຮັບ​ດອກ​ເບ້ຍ​​ທຸກເດືອນ") checked @endIf>
                                            <label class="custom-control-label text-white font" >ຮັບ​ດອກ​ເບ້ຍ​​ທຸກເດືອນ</label>
                                            </li>
                                            <li class="d-inline-block mr-0">
                                            <div class="custom-control custom-checkbox checkbox-xl" >
                                            <input type="checkbox" class="custom-control-input" @if($account->receiveInterest =="ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 6 ເດືອນ") checked @endIf>
                                            <label class="custom-control-label text-white font" >ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 6 ເດືອນ</label>
                                </ul><br>
                                <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block col-6">
                                            <div class="custom-control custom-checkbox checkbox-xl" >
                                            <input type="checkbox" class="custom-control-input" @if($account->receiveInterest =="ຮັບ​ດອກ​ເບ້ຍ​​ທຸກປີ") checked @endIf>
                                            <label class="custom-control-label text-white font" >ຮັບ​ດອກ​ເບ້ຍ​​ທຸກປີ</label>
                                            </li>
                                            <li class="d-inline-block mr-0 ">
                                            <div class="custom-control custom-checkbox checkbox-xl"X >
                                            <input type="checkbox" class="custom-control-input" @if($account->receiveInterest =="ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 12 ເດືອນ") checked @endIf>
                                            <label class="custom-control-label text-white font" >ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ12ເດືອນ</label>
                                            </li>
                                </ul>
      </div>
    </div>
  </div> 
  <div class="col-sm-4 ml-0">
    <div class="heightJ pl-2 ">
      <div class="card-body pl-0 pr-0">
       
      <p class="fontHead24  pt-2"><b>ເລກ​ໝາຍ​ເງິນຝາກລຸ້ນໂຊກ</b></p><br>
<div class="col-12">
<p class="btn btn-j  colJ2-4 text-right font">ວັນ​ທີ:</p>
<p class="btn btn-white  col-6 text-left font">09.09.2020</p>
</div>
<div class="col-12">
<p class="btn btn-j  colJ2-4 text-right font">ເຖິງວັນ​ທີ:</p>
<p class="btn btn-white  col-6 text-left font">30.04.2021</p>
</div>
<div class="col-12">
<p class="btn btn-j  colJ2-4 text-right font pr-0">ເລກໝາຍ​:</p>
<p class="btn btn-white  col-6 text-left font">{{$account->typeDisposits->type}}{{$account->luckyCodes->min('idCode')}}</p>
</div>
<div class="col-12">
<p class="btn btn-j  colJ2-4 text-right font pr-0">ເຖິງ​ເລກໝາຍ​:</p>
<p class="btn btn-white  col-6 text-left font">{{$account->typeDisposits->type}}{{$account->luckyCodes->max('idCode')}}</p>
</div>

      </div>
    </div>
  </div>
</div>
</div>

<!-- page2 -->


<div class="containerJ bgS round ">
<div class="d-flex justify-content-between">
  <p></p>
</div>

<div class="ml-5 col-12 marginT">
<p class="btn btn-j btn-lg  colJ2-2 text-right font">ຊື່​ບັນ​ຊີ:</p>
<p class="btn btn-white btn-lg col-9 text-left font">{{$account->customers->fname}} {{$account->customers->lname}}</p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg colJ2-2 text-right font">ເລກ​ບັນ​ຊີ:</p>
<p class="btn btn-white btn btn-lg col-9 text-left font">{{$account->idAccount}}</p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg colJ2-2 text-right font">ທີ່ຢູ່:</p>
<p class="btn btn-white btn-lg col-9 text-left font">{{$account->customers->address}}</p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg colJ2-2 text-right font">ບັດ​ປະ​ຈຳ​ຕົວ:</p>
<p class="btn btn-white btn-lg col-3 text-left font">@if(round($account->customers->idNumber)>999999) {{$account->customers->idNumber}} @else . @endIf</p>
<p class="btn btn-j btn-lg col-2 text-right font pl-0">ສຳ​ມະ​ໂນ​ຄົວ​ເລກ​ທີ:</p>
<p class="btn btn-white btn-lg colJ-4 text-left font">@if(round($account->customers->idNumber)<=999999) {{$account->customers->idNumber}} @else . @endIf</p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg colJ2-2 text-right font">ເບີ​ໂທ​ລະ​ສັບ:</p>
<p class="btn btn-white btn-lg col-9 text-left font">{{$account->customers->contact}}</p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg colJ2-2 text-right font">ໄລ​ຍະ​ເງິນຝາກ​</p>
<p class="btn btn-white btn-lg col-2 text-left font">{{$account->typeDisposits->period}}  @if($account->typeDisposits->yearOrMonth == "year")ປີ@endif @if($account->typeDisposits->yearOrMonth == "month")ເດືອນ@endif</p>
<p class="btn btn-j btn-lg colJ-2 text-right font">ເລີ່ມວັນ​ທີ:</p>
<p class="btn btn-white btn-lg col-2 text-left font">{{ \Carbon\Carbon::parse($account->start)->format('d.m.Y')}}</p>

<p class="btn btn-j btn-lg colJ-2 text-right font pl-0">ເຖິງວັນ​ທີ:</p>
<p class="btn btn-white btn-lg col-2 text-left font">{{ \Carbon\Carbon::parse($account->end)->format('d.m.Y')}}</p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg colJ2-2 text-right font">ອັດ​ຕາ​ດອກ​ເບ້ຍ:</p>
<p class="btn btn-white btn-lg col-4 text-left font">{{$account->interest}} % ​<span class="float-right"><b>ຕໍ່​ປີ</b></span> </p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg  colJ2-2 text-right fontHead24 ">ຈຳ​ນວນ​ເງິນ:</p>
<p class="btn btn-white btn-lg col-6 text-left fontHead24b"><b>{{number_format($account->amount)}} </b>​<span class="float-right"><b>ກີບ</b></span></p>
</div>
<div class="ml-5 col-12">
<p class="btn btn-j btn-lg  colJ2-2 text-right fontHead24">ເປັນ​ໂຕ​ໜັງ​ສື:</p>
<p class="btn btn-white btn-lg col-6 text-left fontHead24b"><b>{{$account->amountWord}}</b> </p>
</div>
<br><br>

<div class="row ml-5">
  <div class="colJ-sm-8">
    <div class="heightJ">
      <div class="card-body">
      <p class="fontHead24 text-center pt-2"><b>ຮູບ​ແບບ​ການ​ຮັບ​ດອກ​ເບ້ຍ</b></p> <br>

<ul class="list-unstyled m-0">
                                            <li class="d-inline-block col-6">                              
                                            <div class="custom-control custom-checkbox checkbox-xl">
                                            <input type="checkbox" class="custom-control-input " @if($account->receiveInterest =="ຮັບ​ດອກ​ເບ້ຍ​​ເມື່ອ​ຄົບ​ກຳ​ນົດ") checked @endIf>
                                            <label class="custom-control-label text-white font" >ຮັບ​ດອກ​ເບ້ຍ​​ເມື່ອ​ຄົບ​ກຳ​ນົດ</label>
                                            </div>
                                               
                                            </li>
                                            <li class="d-inline-block mr-0">
                                            <div class="custom-control custom-checkbox checkbox-xl">
                                            <input type="checkbox" class="custom-control-input" @if($account->receiveInterest =="ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 3 ເດືອນ") checked @endIf>
                                            <label class="custom-control-label text-white font" >ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 3 ເດືອນ</label>
                                            </li>
                                        </ul><br>
                                <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block col-6">
                                            <div class="custom-control custom-checkbox checkbox-xl">
                                            <input type="checkbox" class="custom-control-input" @if($account->receiveInterest =="ຮັບ​ດອກ​ເບ້ຍ​​ທຸກເດືອນ") checked @endIf>
                                            <label class="custom-control-label text-white font" >ຮັບ​ດອກ​ເບ້ຍ​​ທຸກເດືອນ</label>
                                            </li>
                                            <li class="d-inline-block mr-0">
                                            <div class="custom-control custom-checkbox checkbox-xl" >
                                            <input type="checkbox" class="custom-control-input" @if($account->receiveInterest =="ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 6 ເດືອນ") checked @endIf>
                                            <label class="custom-control-label text-white font" >ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 6 ເດືອນ</label>
                                </ul><br>
                                <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block col-6">
                                            <div class="custom-control custom-checkbox checkbox-xl" >
                                            <input type="checkbox" class="custom-control-input" @if($account->receiveInterest =="ຮັບ​ດອກ​ເບ້ຍ​​ທຸກປີ") checked @endIf>
                                            <label class="custom-control-label text-white font" >ຮັບ​ດອກ​ເບ້ຍ​​ທຸກປີ</label>
                                            </li>
                                            <li class="d-inline-block mr-0 ">
                                            <div class="custom-control custom-checkbox checkbox-xl"X >
                                            <input type="checkbox" class="custom-control-input" @if($account->receiveInterest =="ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ 12 ເດືອນ") checked @endIf>
                                            <label class="custom-control-label text-white font" >ຮັບ​ດອກ​ເບ້ຍ​ລ່ວງ​ໜ້າ​ທຸກ12ເດືອນ</label>
                                            </li>
                                </ul>
      </div>
    </div>
  </div> 
  <div class="col-sm-4 ml-0">
    <div class="heightJ pl-2 ">
      <div class="card-body pl-0 pr-0">
       
      <p class="fontHead24  pt-2"><b>ເລກ​ໝາຍ​ເງິນຝາກລຸ້ນໂຊກ</b></p><br>
<div class="col-12">
<p class="btn btn-j  colJ2-4 text-right font">ວັນ​ທີ:</p>
<p class="btn btn-white  col-6 text-left font">09.09.2020</p>
</div>
<div class="col-12">
<p class="btn btn-j  colJ2-4 text-right font">ເຖິງວັນ​ທີ:</p>
<p class="btn btn-white  col-6 text-left font">30.04.2021</p>
</div>
<div class="col-12">
<p class="btn btn-j  colJ2-4 text-right font pr-0">ເລກໝາຍ​:</p>
<p class="btn btn-white  col-6 text-left font">{{$account->typeDisposits->type}}{{$account->luckyCodes->min('idCode')}}</p>
</div>
<div class="col-12">
<p class="btn btn-j  colJ2-4 text-right font pr-0">ເຖິງ​ເລກໝາຍ​:</p>
<p class="btn btn-white  col-6 text-left font">{{$account->typeDisposits->type}}{{$account->luckyCodes->max('idCode')}}</p>
</div>

      </div>
    </div>
  </div>
</div>
<div class="ml-5 col-12 marginJ">

<p class="col-9 text-left font ">@if($account->employees->id == 1) @else<b>{{$account->employees->fname}} {{$account->employees->lname}} @endif</b></p>
</div>
</div>
          </div>



    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/editors/quill/katex.min.js"></script>
    <script src="../../../app-assets/vendors/js/editors/quill/highlight.min.js"></script>
    <script src="../../../app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>


    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/datatables/datatable.js"></script>
    <!-- END: Page JS-->
    <!-- BEGIN: Page JS-->
    <!-- <script src="../../../app-assets/js/scripts/pages/app-email.js"></script> -->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->
@endIf
</html>
