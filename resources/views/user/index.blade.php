@extends('layouts/contentLayoutMaster')

@section('title', 'Users')

@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
@endsection
@section('page-style')
<link rel="stylesheet" type="text/css" href="../../..app-assets/fonts/Phetsarath OT.ttf">
<style>body{font-family:"Phetsarath OT";}</style>
@endsection

@section('content')
<section id="add-row" >
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><b>​ລາຍ​ກາມ​ຜູ້​ໃຊ້​ລະ​ບົບຜູ້​ໃຊ້</b></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="{{route('user.create')}}" class="btn btn-primary mb-2"><i class="feather icon-plus"></i>&nbsp; ເພີ່​ມ​ຜູ້​ໃຊ້​ລະ​ບົບ</a>
                                        <div class="table-responsive">
                                            <table class="table add-rows table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ໄອ​ດີ</th>
                                                        <th>ຊື່​</th>
                                                        <th>ອີ​ເມ​ວ</th>
                                                        <th>ໜ້າ​ທີ່</th>
                                                        <th>ຈັດ​ການ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($users as $user)
                                                <tr>
                                                <th>{{$user->id}}</th>
                                                <th>{{$user->name}}</th>
                                                <th>{{$user->email}}</th>
                                                <td>@foreach($user->roles as $role) [{{$role->name}}] @endforeach</td>                                               
                                                        <th class="d-flex justify-content-start">
                                                        <a href="{{route('user.edit',$user->id)}}" class="btn btn-link pl-0 ml-0" value=""><span class="fa fa-pencil"></span></a>
                                                        <form action="{{route('user.destroy',$user->id)}}"  method="post" class="delete_form">
                                                        {{ csrf_field()}}
                                                        <button type="submit" class="btn btn-link"><span class="fa fa-trash"></span> </button>
                                                        </form>
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