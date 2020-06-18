@extends('master.master')
@section('title', 'Untuk ONITY')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
    </div>
@endif

@section('content')
    <div class="container mt-5 mb-5">
        <h3 class="text-center">Add data ONITY</h3>
    </div>
    <div class="container card">
        <div class="card-body my-2 mx-2">
        <form action="{{url('/createonity/store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="date">Date</label>
                <input width="276" class="form-control" id="date" name="date" aria-describedby="date" placeholder="date">
            </div>
            <br>

            {{--ROOMS--}}
            <div class="form-group">
                <label for="rooms_id">No. Room</label>
                <select name="rooms_id" class="form-control" id="rooms_id">
                    <option value="1">	A101	</option>
                    <option value="2">	A102	</option>
                    <option value="3">	A103	</option>
                    <option value="4">	A104	</option>
                    <option value="5">	A201	</option>
                    <option value="6">	A202	</option>
                    <option value="7">	A203	</option>
                    <option value="8">	A204	</option>
                    <option value="9">	A205	</option>
                    <option value="10">	A206	</option>
                    <option value="11">	A207	</option>
                    <option value="12">	A208	</option>
                    <option value="13">	A209	</option>
                    <option value="14">	A210	</option>
                    <option value="15">	A211	</option>
                    <option value="16">	A212	</option>
                    <option value="17">	A213	</option>
                    <option value="18">	A214	</option>
                    <option value="19">	A215	</option>
                    <option value="20">	A216	</option>
                    <option value="21">	A217	</option>
                    <option value="22">	A218	</option>
                    <option value="23">	B219	</option>
                    <option value="24">	B220	</option>
                    <option value="25">	B221	</option>
                    <option value="26">	B222	</option>
                    <option value="27">	B223	</option>
                    <option value="28">	B224	</option>
                    <option value="29">	B225	</option>
                    <option value="30">	B226	</option>
                    <option value="31">	B227	</option>
                    <option value="32">	B228	</option>
                    <option value="33">	B229	</option>
                    <option value="34">	B230	</option>
                    <option value="35">	B231	</option>
                    <option value="36">	B232	</option>
                    <option value="37">	B233	</option>
                    <option value="38">	B234	</option>
                    <option value="39">	B235	</option>
                    <option value="40">	B236	</option>
                    <option value="41">	B237	</option>
                    <option value="42">	B238	</option>
                    <option value="43">	B239	</option>
                    <option value="44">	B240	</option>
                    <option value="45">	A301	</option>
                    <option value="46">	A302	</option>
                    <option value="47">	A303	</option>
                    <option value="48">	A304	</option>
                    <option value="49">	A305	</option>
                    <option value="50">	A306	</option>
                    <option value="51">	A307	</option>
                    <option value="52">	A308	</option>
                    <option value="53">	A309	</option>
                    <option value="54">	A310	</option>
                    <option value="55">	A311	</option>
                    <option value="56">	A312	</option>
                    <option value="57">	A313	</option>
                    <option value="58">	A314	</option>
                    <option value="59">	A315	</option>
                    <option value="60">	A316	</option>
                    <option value="61">	A317	</option>
                    <option value="62">	A318	</option>
                    <option value="63">	B319	</option>
                    <option value="64">	B320	</option>
                    <option value="65">	B321	</option>
                    <option value="66">	B322	</option>
                    <option value="67">	B323	</option>
                    <option value="68">	B324	</option>
                    <option value="69">	B325	</option>
                    <option value="70">	B326	</option>
                    <option value="71">	B327	</option>
                    <option value="72">	B328	</option>
                    <option value="73">	B329	</option>
                    <option value="74">	B330	</option>
                    <option value="75">	B331	</option>
                    <option value="76">	B332	</option>
                    <option value="77">	B333	</option>
                    <option value="78">	B334	</option>
                    <option value="79">	B335	</option>
                    <option value="80">	B336	</option>
                    <option value="81">	B337	</option>
                    <option value="82">	B338	</option>
                    <option value="83">	B339	</option>
                    <option value="84">	B340	</option>
                    <option value="85">	C341	</option>
                    <option value="86">	C342	</option>
                    <option value="87">	C343	</option>
                    <option value="88">	C344	</option>
                    <option value="89">	C345	</option>
                    <option value="90">	C346	</option>
                    <option value="91">	C347	</option>
                    <option value="92">	C348	</option>
                    <option value="93">	A401	</option>
                    <option value="94">	A402	</option>
                    <option value="95">	A403	</option>
                    <option value="96">	A404	</option>
                    <option value="97">	A405	</option>
                    <option value="98">	A406	</option>
                    <option value="99">	A407	</option>
                    <option value="100">	A408	</option>
                    <option value="101">	A409	</option>
                    <option value="102">	B410	</option>
                    <option value="103">	B411	</option>
                    <option value="104">	B412	</option>
                    <option value="105">	B413	</option>
                    <option value="106">	B414	</option>
                    <option value="107">	B415	</option>
                    <option value="108">	B416	</option>
                    <option value="109">	B417	</option>
                    <option value="110">	B418	</option>
                    <option value="111">	B419	</option>
                    <option value="112">	B420	</option>
                    <option value="113">	B421	</option>
                    <option value="114">	B422	</option>
                    <option value="115">	C423	</option>
                    <option value="116">	C424	</option>
                    <option value="117">	C425	</option>
                    <option value="118">	C426	</option>
                    <option value="119">	C427	</option>
                    <option value="120">	C428	</option>
                    <option value="121">	C429	</option>
                    <option value="122">	C430	</option>
                    <option value="123">	B510	</option>
                    <option value="124">	B511	</option>
                    <option value="125">	B512	</option>
                    <option value="126">	B513	</option>
                    <option value="127">	B514	</option>
                    <option value="128">	B515	</option>
                    <option value="129">	B516	</option>
                    <option value="130">	B517	</option>
                    <option value="131">	B518	</option>
                    <option value="132">	B519	</option>
                    <option value="133">	B520	</option>
                    <option value="134">	B521	</option>
                    <option value="135">	B522	</option>
                    <option value="136">	C523	</option>
                    <option value="137">	C524	</option>
                    <option value="138">	C525	</option>
                    <option value="139">	C526	</option>
                    <option value="140">	C527	</option>
                    <option value="141">	C528	</option>
                    <option value="142">	C529	</option>
                    <option value="143">	C530	</option>
                    <option value="144">	Departure Lounge	</option>
                    <option value="145">	Wsense	</option>
                    <option value="146">	FO Reception	</option>
                    <option value="147">	Outdoor (IT)	</option>
                    <option value="148">	Server	</option>
                    <option value="149">	Canteen	</option>
                    <option value="150">	GYM	</option>
                    <option value="151">	Board room	</option>
                    <option value="152">	Club Lounge	</option>
                    <option value="153">	Meeting 5th	</option>
                </select>
            </div>
            <br>



            {{--CABLE--}}
            <div class="form-group">
                <label for="cable">Cable</label>
                <select name="cable" class="form-control" id="cable">
                    <option value="GOOD">GOOD</option>
                    <option value="NO">NO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="notecable">Note Cable</label>
                <input type="text" class="form-control" name="notecable" id="notecable" placeholder="Masukan Note...">
            </div>
            <br>


            {{--DND--}}
            <div class="form-group">
                <label for="dnd">DND</label>
                <select name="dnd" class="form-control" id="dnd">
                    <option value="GOOD">GOOD</option>
                    <option value="NO">NO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="notednd">Note DND</label>
                <input type="text" class="form-control" id="notednd" name="notednd" placeholder="Masukan Note...">
            </div>
            <br>


            {{--BEL--}}
            <div class="form-group">
                <label for="bel">BEL</label>
                <select name="bel" class="form-control" id="bel">
                    <option value="GOOD">GOOD</option>
                    <option value="NO">NO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="notebel">Note BEL</label>
                <input type="text" class="form-control" id="notebel" name="notebel" placeholder="Masukan Note...">
            </div>
            <br>


            {{--KEYTAG--}}
            <div class="form-group">
                <label for="keytag">KEYTAG</label>
                <select name="keytag" class="form-control" id="keytag">
                    <option value="GOOD">GOOD</option>
                    <option value="NO">NO</option>
                </select>
            </div>

                <div class="form-group">
                    <label for="notekeytag">Note KEYTAG</label>
                    <input type="text" class="form-control" id="notekeytag" name="notekeytag" placeholder="Masukan Note...">
                </div>
                <br>


            {{--READER--}}
            <div class="form-group">
                <label for="reader">READER</label>
                <select name="reader" class="form-control" id="reader">
                    <option value="GOOD">GOOD</option>
                    <option value="NO">NO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="notereader">Note READER</label>
                <input type="text" class="form-control" id="notereader" name="notereader" placeholder="Masukan Note...">
            </div>
            <br>


            {{--SAFETY BOX--}}
            <div class="form-group">
                <label for="safetybox">SAFETY BOX</label>
                <select name="safetybox" class="form-control" id="safetybox">
                    <option value="GOOD">GOOD</option>
                    <option value="NO">NO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="notesafetybox">Note SAFETY BOX</label>
                <input type="text" class="form-control" id="notesafetybox" name="notesafetybox" placeholder="Masukan Note...">
            </div>
            <br>

            {{--REMARK--}}
            <div class="form-group">
                <label for="remark">Remark</label>
                <input type="text" class="form-control" id="remark" name="remark" placeholder="Masukan Remark...">
            </div>
            <br>

            <input type="submit" class="btn btn-primary" value="Tambah">
            <a href="{{url('/room')}}" class="btn btn-secondary">Back</a>
        </form>
        </div>
    </div>

@endsection
