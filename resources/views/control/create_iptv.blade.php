@extends('master.master')
@section('title', 'Untuk IPTV')

@section('content')
    <div class="container mt-5">
        <h3 class="text-center">Tambah data IPTV</h3>
    </div>
    <div class="container card mt-5 mb-5">
        <form>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" aria-describedby="date" placeholder="date">
            </div>
            <br>


            {{--IPTV--}}
            <div class="form-group">
                <label for="iptv">IPTV</label>
                <select name="iptv" class="form-control" id="iptv">
                    <option value="1">GOOD</option>
                    <option value="2">NO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="noteiptv">Note IPTV</label>
                <input type="text" class="form-control" id="noteiptv" placeholder="Masukan Note...">
            </div>
            <br>


            {{--REMOTE--}}
            <div class="form-group">
                <label for="remote">Remote</label>
                <select name="remote" class="form-control" id="remote">
                    <option value="1">GOOD</option>
                    <option value="2">NO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="noteremote">Note Remote</label>
                <input type="text" class="form-control" id="noteremote" placeholder="Masukan Note...">
            </div>
            <br>


            {{--STB--}}
            <div class="form-group">
                <label for="stb">STB</label>
                <select name="stb" class="form-control" id="stb">
                    <option value="1">GOOD</option>
                    <option value="2">NO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="notestb">Note STB</label>
                <input type="text" class="form-control" id="notestb" placeholder="Masukan Note...">
            </div>
            <br>


            {{--IR--}}
            <div class="form-group">
                <label for="ir">IR</label>
                <select name="ir" class="form-control" id="ir">
                    <option value="1">GOOD</option>
                    <option value="2">NO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="noteir">Note IR</label>
                <input type="text" class="form-control" id="noteir" placeholder="Masukan Note...">
            </div>
            <br>


            {{--POWERSUPPLY--}}
            <div class="form-group">
                <label for="powersupply">Power Supply</label>
                <select name="powersupply" class="form-control" id="powersupply">
                    <option value="1">POE</option>
                    <option value="2">ADAPTOR</option>
                </select>
            </div>
            <br>


            {{--REMARK--}}
            <div class="form-group">
                <label for="remark">Remark</label>
                <input type="text" class="form-control" id="remark" placeholder="Masukan Remark...">
            </div>
            <br>


            {{--MACADDRESS--}}
            <div class="form-group">
                <label for="macaddress">Note Remark</label>
                <input type="text" class="form-control" id="macaddress" placeholder="Masukan Mac Address...">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{url('/room')}}" class="btn btn-secondary">Back</a>
        </form>
    </div>

@endsection
