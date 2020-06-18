 <table>
                    <thead>
                    <tr>
                        <th class="font-weight-bold">Onity Data</th>
                    </tr>
                    <tr>
                        <th>No Room</th>
                        <th>Date</th>
                        <th>Cable</th>
                        <th>Note Cable</th>
                        <th>DND</th>
                        <th>Note DND</th>
                        <th>BEL</th>
                        <th>Note BEL</th>
                        <th>Keytag</th>
                        <th>Note Keytag</th>
                        <th>Reader</th>
                        <th>Note Reader</th>
                        <th>Safety Box</th>
                        <th>Note Safety Box</th>
                        <th>Remark</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rooms as $a)
                        @foreach($a->onity as $t)
                        <tr>
                                <td>{{$a->noroom}}</td>
                                <td>{{$t->date}}</td>
                                <td>{{$t->cable}}</td>
                                <td> {{$t->notecable}}</td>
                                <td>{{$t->dnd}}</td>
                                <td> {{$t->notednd}}</td>
                                <td>{{$t->bel}}</td>
                                <td> {{$t->notebel}}</td>
                                <td>{{$t->keytag}}</td>
                                <td> {{$t->notekeytag}}</td>
                                <td>{{$t->reader}}</td>
                                <td> {{$t->notereader}}</td>
                                <td>{{$t->safetybox}}</td>
                                <td> {{$t->notesafetybox}}</td>
                                <td> {{$t->remark}}</td>
                        </tr>
                    @endforeach
                    @endforeach
                    </tbody>
                </table>
