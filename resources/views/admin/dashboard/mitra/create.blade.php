<style>
    .{
        font-family: Poppins !important;
    }

    .container {
        width: 60%;
        background-color: #e4e4e4;
        border-radius: 20px;
        margin-top: 20px;
        padding: 20px;
        margin-left: auto;
        margin-right: auto
    }

    .form-label{
        font-family: Poppins
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-control {
        border-radius: 20px;
        border-color: rgb(190, 190, 190);
        width: 100%;
        padding: 10px;
    }

    .btn {
        margin-top: 40px;
        border-radius: 50px;
        background-color: #061755;
        color: white;
        width: 150px;
        font-family: Poppins;
    }

    .btn-warning{
        width: 150px !important;
        border-radius: 50px;
        background-color: red
    }

    input {
        border-style: solid;
    }

    .error-message {
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }


</style>

{{-- <title>Tambah Data Mitra</title> --}}

<div class="container mx-auto">
    <h1 style="font-family: Poppins">Tambah Data Mitra</h1>

    <form method="post" action="/admin/dashboard/mitra">
        @method('post')
        @csrf

        <div class="form-group">
            <label for="user_id" class="form-label">Kode Customer</label>
            {!! Form::select('user_id', $user_id, old('user_id', isset($data) ? $data->user_id : null), ['class' => 'form-control', 'id' => 'user_id']) !!}
            @error('user_id')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group">
            <label for="fullname" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="fullname" name="fullname" value="{{ old('fullname', isset($data) ? $data->fullname : null) }}">
            @error('fullname')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="nip" class="form-label">NIP/NIK</label>
            <input type="text" class="form-control" id="nip" name="nip" value="{{ old('nip', isset($data) ? $data->nip : null) }}">
            @error('nip')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="jenis_usaha" class="form-label">Jenis Usaha</label>
            <select class="form-control" id="jenis_usaha" name="jenis_usaha">
                <option value="Kuliner" {{ (old('jenis_usaha', isset($data) ? $data->jenis_usaha : null) == 'KULINER') ? 'selected' : '' }}>KULINER</option>
                <option value="Perdagangan" {{ (old('jenis_usaha', isset($data) ? $data->jenis_usaha : null) == 'PERDAGANGAN') ? 'selected' : '' }}>PERDAGANGAN</option>
                <option value="Jasa" {{ (old('jenis_usaha', isset($data) ? $data->jenis_usaha : null) == 'JASA') ? 'selected' : '' }}>JASA</option>
                <option value="Fashion" {{ (old('jenis_usaha', isset($data) ? $data->jenis_usaha : null) == 'FASHION') ? 'selected' : '' }}>FASHION</option>
                <option value="Fashion" {{ (old('jenis_usaha', isset($data) ? $data->jenis_usaha : null) == 'INDUSTRI') ? 'selected' : '' }}>INDUSTRI</option>
            </select>
            @error('jenis_usaha')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group">
            <label for="nama_usaha" class="form-label">Nama Usaha</label>
            <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" value="{{ old('nama_usaha', isset($data) ? $data->nama_usaha : null) }}">
            @error('nama_usaha')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="textarea" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', isset($data) ? $data->alamat : null) }}">
            @error('alamat')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="alamat_usaha" class="form-label">Alamat Usaha</label>
            <input type="textarea" class="form-control" id="alamat_usaha" name="alamat_usaha" value="{{ old('alamat_usaha', isset($data) ? $data->alamat_usaha : null) }}">
            @error('alamat_usaha')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="aset_awal" class="form-label">Aset Awal</label>
            <input type="text" class="form-control" id="aset_awal" name="aset_awal" value="{{ old('aset_awal', isset($data) ? $data->aset_awal : null) }}">
            @error('aset_awal')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="nominal_pinjaman" class="form-label">Nominal Pinjaman</label>
            <input type="text" class="form-control" id="nominal_pinjaman" name="nominal_pinjaman" value="{{ old('nominal_pinjaman', isset($data) ? $data->nominal_pinjaman : null) }}">
            @error('nominal_pinjaman')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{ old('tanggal_mulai', isset($data) ? $data->tanggal_mulai : null) }}">
            @error('tanggal_mulai')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
            <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="{{ old('tanggal_selesai', isset($data) ? $data->tanggal_selesai : null) }}">
            @error('tanggal_selesai')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        {{-- <div class="d-flex justify-content-center"> --}}
            {{-- <div class="p-2"> --}}
            <button type="submit" class="p-2 btn btn-primary" style="font-size: 12pt">Tambah Data</button>
        {{-- </div> --}}
            {{-- <div class="p-2 button-cancel"> --}}
            {{-- <a href="/admin/dashboard/mitra" class="btn btn-warning btn-md" role="button">Batalkan</a> --}}
        {{-- </div> --}}
        {{-- </div> --}}
    </form>
</div>
