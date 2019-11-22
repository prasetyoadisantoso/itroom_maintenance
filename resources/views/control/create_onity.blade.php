@extends('master.master')
@section('title', 'Untuk ONITY')

@section('content')
    <div class="container mt-5">
        <h3 class="text-center">Tambah data ONITY</h3>
    </div>
    <div class="container card mt-5 mb-5">
        <form>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" aria-describedby="date" placeholder="date">
            </div>
            <br>


            {{--CABLE--}}
            <div class="form-group">
                <label for="cable">Cable</label>
                <select name="cable" class="form-control" id="cable">
                    <option value="1">GOOD</option>
                    <option value="2">NO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="notecable">Note Cable</label>
                <input type="text" class="form-control" id="notecable" placeholder="Masukan Note...">
            </div>
            <br>


            {{--DND--}}
            <div class="form-group">
                <label for="dnd">DND</label>
                <select name="dnd" class="form-control" id="dnd">
                    <option value="1">GOOD</option>
                    <option value="2">NO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="notedn">Note DND</label>
                <input type="text" class="form-control" id="notednd" placeholder="Masukan Note...">
            </div>
            <br>


            {{--BEL--}}
            <div class="form-group">
                <label for="bel">BEL</label>
                <select name="bel" class="form-control" id="bel">
                    <option value="1">GOOD</option>
                    <option value="2">NO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="notebel">Note BEL</label>
                <input type="text" class="form-control" id="notebel" placeholder="Masukan Note...">
            </div>
            <br>


            {{--KEYTAG--}}
            <div class="form-group">
                <label for="keytag">KEYTAG</label>
                <div class="form-group">
                    <label for="notekeytag">Note KEYTAG</label>
                    <input type="text" class="form-control" id="notekeytag" placeholder="Masukan Note...">
                </div>
                <br>

                <select name="keytag" class="form-control" id="keytag">
                    <option value="1">GOOD</option>
                    <option value="2">NO</option>
                </select>
            </div>

            {{--READER--}}
            <div class="form-group">
                <label for="reader">READER</label>
                <select name="reader" class="form-control" id="reader">
                    <option value="1">GOOD</option>
                    <option value="2">NO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="notereader">Note READER</label>
                <input type="text" class="form-control" id="notereader" placeholder="Masukan Note...">
            </div>
            <br>


            {{--SAFETY BOX--}}
            <div class="form-group">
                <label for="safetybox">SAFETY BOX</label>
                <select name="safetybox" class="form-control" id="safetybox">
                    <option value="1">GOOD</option>
                    <option value="2">NO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="notesafetybox">Note SAFETY BOX</label>
                <input type="text" class="form-control" id="notesafetybox" placeholder="Masukan Note...">
            </div>
            <br>

            {{--REMARK--}}
            <div class="form-group">
                <label for="remark">Remark</label>
                <input type="text" class="form-control" id="remark" placeholder="Masukan Remark...">
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{url('/room')}}" class="btn btn-secondary">Back</a>
        </form>
    </div>

@endsection
