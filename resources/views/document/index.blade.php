@extends('layouts/contentLayoutMaster')

@section('title', 'Types Deposit')

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
                                    <h4 class="card-title"><b>ແບ​ບ​ເອ​ກະ​ສານ</b></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                    @if(Auth::user()->can('AddLuckyCode'))<a href="{{route('document.create')}}" class="btn btn-primary mb-2"><i class="feather icon-plus"></i>&nbsp; ເພີ່​ມ​ປະ​ເພດ</a>@endIf
                                        <div class="table-responsive">
                                            <table class="table add-rows table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>​ໄອ​ດີ</th>
                                                        <th>ປະ​ເພດ</th>

                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($documents as $document)
                                                <tr>
                                                <th>{{$document->id}}</th>
                                                        <th>{{$document->type}}</th>

                                                        <th class="d-flex justify-content-start">
                                                        @if(Auth::user()->can('EditLuckyCode'))<a href="{{route('document.edit',$document->id)}}" class="btn btn-link pl-0 ml-0" value=""><span class="fa fa-pencil"></span></a>@endIF
                                                        @if(Auth::user()->can('DeleteLuckyCode'))<form action="{{route('document.destroy',$document->id)}}"  method="post" class="delete_form">
                                                        {{ csrf_field()}}
                                                        <button type="submit" class="btn btn-link"><span class="fa fa-trash"></span> </button>
                                                        </form>@endIf
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
