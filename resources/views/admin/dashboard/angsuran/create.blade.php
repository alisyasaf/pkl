
<h1>Data Angsuran</h1>
<div class="col-lg-8">


    <form method="post" action="/admin/dashboard/angsuran">
        @method('post')
        @csrf
        <div class="mb-3">
            <label for="mitra_id" class="form-label">Nama</label>
            {!! Form::select('mitra_id', $mitra_id, null, ['class' => 'form-control']) !!}
        </div>
        <div class="mb-3">
            <label for="tanggal_jatuh_tempo" class="form-label">Tanggal Jatuh Tempo</label>
            <input type="date" class="form-control" id="tanggal_jatuh_tempo" name="tanggal_jatuh_tempo">
        </div>
        <div class="mb-3">
            <label for="nominal" class="form-label">Nominal</label>
            <input type="text" class="form-control" id="nominal" name="nominal">
        </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>


</div>

