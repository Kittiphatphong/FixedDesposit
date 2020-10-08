
                                        <div class="table-responsive">
                                            <table class="table add-rows table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ຈຳ​ນວນ​ເງີນ</th>
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
                                                       <th>{{number_format($employee->accounts->sum('amount'))}}</th>
                                                       <th>{{$employee->accounts->count()}}</th>
                                                        <th>​{{$employee->fname}} {{$employee->lname}} ({{$employee->nname}})</th>
                                                        <th>{{$employee->company}}</th>
                                                        <th>{{$employee->department}}</th>
                                                        <th>{{$employee->position}}</th>
                                                        <th>{{$employee->contact}}</th>
                                                        <th><a href="{{route('employee.view',$employee->id)}}" class="btn btn-link pl-0 ml-0" value=""><span class="fa fa-eye"></span></a></th>
                                                     </tr>
                                                @endForeach
                                                </tbody>
                                            </table>
                                        </div>
          
