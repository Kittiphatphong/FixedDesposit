@extends('layouts/fullNewApp')
@section('title', 'view ')
<style>
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>

@section('content')
<!------ Include the above in your HEAD tag ---------->
<div class="container emp-profile">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                     
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        ບັນ​ຊີ: {{$win->luckyCodes->accounts->customers->fname}} {{$win->luckyCodes->accounts->customers->lname}}
                                    </h5>
                                    <h6>
                                        ເລກ​ບັນ​ຊີ: {{$win->luckyCodes->accounts->idAccount}}
                                    </h6>
                                    <p class="proile-rating">ລະ​ຫັດ​ທີ່​ຖືກ : <span>{{$win->luckyCodes->accounts->typeDisposits->type}}{{$win->luckyCodes->idCode}}</span></p>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">ຂໍ້​ມູນ​ລູກ​ຄ້າ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a  href="{{route('random.win')}}" class="btn btn-dark" >ກັບ​ຄືນ</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                         
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                      
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ຊື່​ລູກ​ຄ້າ</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$win->luckyCodes->accounts->customers->fname}} {{$win->luckyCodes->accounts->customers->lname}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ທີ່​ຢູ່</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$win->luckyCodes->accounts->customers->address}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ເບີ​ໂທ</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$win->luckyCodes->accounts->customers->contact}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ຈຳ​ນວນ​ເງີນ​ຝາກ</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{number_format($win->luckyCodes->accounts->amount)}} ກີບ</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ຈຳ​ນວນ​ເງີນ​ຝາກ​ເປັນ​ໂຕ​ໜັງ​ສື</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$win->luckyCodes->accounts->amountWord}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ໄລ​ຍະ​ຝາກ</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$win->luckyCodes->accounts->typeDisposits->period}} @if($win->luckyCodes->accounts->typeDisposits->yearOrMonth=="year") ປີ @else ເດືອນ @endIF</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ລະ​ຫັດ​ຊິງ​ໂຊກ​ທັງ​ໝົດ</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$customer->accounts->luckyCodes}}</p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
        </div>
@endsection