<table class="table add-rows table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>ມື້ຖືກ​ລາງ​ວັນ</th>
                                                        <th>ລະ​ຫັດ​ຊຽງ​ໂຊກ</th>   
                                                        <th>ເລກ​ບັນ​ຊີ</th> 
                                                        <th>ຊື່​ບັນ​ຊີ</th> 
                                                        <th>ເບີ​ໂທ</th>
                                                        <th>ຈຳ​ນວນ​ເງິນລາງ​ວັນ</th>    
                                                                                                                                   
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($randoms as $random)
                                                <tr>
                                                <td>{{$random->id}}</td>
                                                <td>{{\Carbon\Carbon::parse($random->created_at)->toDateTimeString()}}</td>
                                                <td>{{$random->luckyCodes->accounts->typeDisposits->type}}{{$random->luckyCodes->idCode}}</td>
                                                <td>{{$random->luckyCodes->accounts->idAccount}}</td>
                                                <td>{{$random->luckyCodes->accounts->customers->fname}} {{$random->luckyCodes->accounts->customers->lname}}</td>
                                                <td>{{$random->luckyCodes->accounts->customers->contact}}</td>
                                                <td>{{round($random->amount)}}</td>
                                               
                                                </tr>
                                                @endForeach
                                                </tbody>
</table>