
<h1>Data Mitra</h1>
<div class="col-lg-8">


    <form method="post" action="/admin/dashboard/mitra">
        @method('post')
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">Username</label>
            {!! Form::select('user_id', $user_id, null, ['class' => 'form-control']) !!}
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="fullname" name="fullname">
        </div>
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip">
        </div>
        <div class="mb-3">
            <label for="jenis_usaha" class="form-label">Jenis Usaha</label>
            <input type="text" class="form-control" id="jenis_usaha" name="jenis_usaha">
        </div>
        <div class="mb-3">
            <label for="nama_usaha" class="form-label">Nama Usaha</label>
            <input type="text" class="form-control" id="nama_usaha" name="nama_usaha">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="textarea" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="mb-3">
            <label for="alamat_usaha" class="form-label">Alamat Usaha</label>
            <input type="textarea" class="form-control" id="alamat_usaha" name="alamat_usaha">
        </div>
        <div class="mb-3">
            <label for="aset_awal" class="form-label">Aset Awal</label>
            <input type="text" class="form-control" id="aset_awal" name="aset_awal">
        </div>
        <div class="mb-3">
            <label for="nominal_pinajaman" class="form-label">Nominal Pinjaman</label>
            <input type="text" class="form-control" id="nominal_pinjaman" name="nominal_pinjaman">
        </div>
        <div class="mb-3">
            <label for="aset_awal" class="form-label">Tanggal Mulai</label>
            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai">
        </div>
        <div class="mb-3">
            <label for="aset_awal" class="form-label">Tanggal Selesai</label>
            <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>


</div>

