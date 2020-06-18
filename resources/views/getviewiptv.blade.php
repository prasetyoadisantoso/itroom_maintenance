
                <table>
                    <thead>
                    <tr>
                        <th class="font-weight-bold">IPTV Data</th>
                    </tr>
                    <tr>
                        <th>No Room</th>
                        <th>Date</th>
                        <th>Remote</th>
                        <th>Note Remote</th>
                        <th>STB</th>
                        <th>Note STB</th>
                        <th>IR</th>
                        <th>Note IR</th>
                        <th>Power Supply</th>
                        <th>Remark</th>
                        <th>Mac Address</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rooms as $a)
                        @foreach($a->iptv as $t)
                        <tr>
                                <td>{{$a->noroom}}</td>
                                <td>{{$t->date}}</td>
                                <td> {{$t->remote}}</td>
                                <td> {{$t->noteremote}}</td>
                                <td>{{$t->stb}}</td>
                                <td> {{$t->notestb}}</td>
                                <td> {{$t->ir}}</td>
                                <td> {{$t->noteir}}</td>
                                <td> {{$t->powersupply}}</td>
                                <td> {{$t->remark}}</td>
                                <td> {{$t->macaddress}}</td>
                        </tr>
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
