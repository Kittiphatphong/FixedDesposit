<div class="table-responsive">                                                       
                                            <table class="table add-rows table-striped table-bordered">
                                            
                                                <thead>
                                                <tr><th colspan="10" class="text-center">​ວັນ​ທີ {{\Carbon\Carbon::parse($start)->format('d.m.Y')}} ເຖີງ​ວັນ​ທີ {{\Carbon\Carbon::parse($end)->format('d.m.Y')}}</th></tr>
                                                    <tr>
                                                        <th>ຈຳ​ນວນ​ເງີນ</th>
                                                        <th>ຈຳ​ນວນ​ເງີນເກົ່າ</th>
                                                        <th>ຍອດ​ເງີນ​ທັງ​ໝົດ</th>
                                                        <th>ເງີນ​ເປີ​ເຊັນ</th>
                                                        <th>ຈ/ນ ລູກ​ຄ້າ</th>
                                                        <th>​ຊື່ ແລະ ນາມ​ສະ​ກຸນ</th>
                                                        <th>ບໍ​ລິ​ສັດ</th>
                                                        <th>ພະ​ແໜກ</th>
                                                        <th>ຕຳ​ແໜ່ງ</th>
                                                        <th>ເບີ​ໂທ​ລະ​ສັບ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                               @foreach($employees as $employee)
                                                <tr>
                                                        <th>{{$employee->amount}}</th>
                                                        <th>{{$employee->oldAmount}}</th>
                                                        <th>{{$employee->amount - $employee->oldAmount}}</th>
                                                        <th>{{($employee->amount-$employee->oldAmount)*0.5/100}}</th>
                                                        <th>{{$employee->customer}}</th> 
                                                        <th>​{{$employee->fname}} {{$employee->lname}}</th>
                                                        <th>{{$employee->company}}</th>
                                                        <th>{{$employee->department}}</th>
                                                        <th>{{$employee->position}}</th>
                                                        <th>{{$employee->contact}}</th>     
                                                     </tr>
                                                @endForeach
                                                </tbody>
                                            </table>
                                        </div>