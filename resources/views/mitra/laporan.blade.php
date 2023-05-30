@extends('layoutsMitra.mainMitra')

@section('lprn')
<h1 style="font-family: Poppins;">Laporan Perkembangan Usaha</h1>
{{-- <div class="container"> --}}
<form style="font-family: Poppins">
    <div class="row">
    {{-- <div class="row">
        <label for="notas/nip" class="col-sm-4">Notas/NIP</label>
        <input class="form-control p-3 mb-4 col-sm-8" type="notas/nip" id="notas/nip" style="border-color: #EFF0F6; border-radius: 100px;">
    </div> --}}
        <div class="col">
            <div class="row">
                <label for="nama_usaha" class="col-sm-4">Nama Usaha</label>
                <input class="form-control p-3 mb-4 col-sm-8" type="nama_usaha" id="nama_usaha" style="border-color: #EFF0F6; border-radius: 100px;">
            </div>
        </div>
        <div class="col">
            <div class="row">
                <label for="nama pemilik" class="col-sm-4">Nama Pemilik</label>
                <input class="form-control p-3 mb-4 col-sm-8" type="nama pemilik" id="nama pemilik" style="border-color: #EFF0F6; border-radius: 100px;">
            </div>
        </div>
        <div class="col">
            <div class="row">
                <label for="alamat usaha" class="col-sm-4">Alamat Usaha</label>
                <input class="form-control p-3 mb-4 col-sm-8" type="alamat usaha" id="alamat usaha" style="border-color: #EFF0F6; border-radius: 100px;">
            </div>
        </div>
        <div class="col">
            <div class="row">
                <label for="jenis usaha" class="col-sm-4">Jenis Usaha</label>
                <input class="form-control p-3 mb-4 col-sm-8" type="jenis usaha" id="jenis usaha" style="border-color: #EFF0F6; border-radius: 100px;">
            </div>
        </div>
        <div class="col">
            <div class="row">
                <label for="jml pinjaman" class="col-sm-4">Jumlah Pinjaman</label>
                <input class="form-control p-3 mb-4 col-sm-8" type="jml pinjaman" id="jml pinjaman" style="border-color: #EFF0F6; border-radius: 100px;">
            </div>
        </div>
        <p><u>Sebelum Menerima Bantuan</u></p>
        <div class="col">
            <div class="row">
                <label for="jml aset sblm" class="col-sm-4">Jumlah Aset</label>
                <input class="form-control p-3 mb-4 col-sm-8" type="jml aset sblm" id="jml aset sblm" style="border-color: #EFF0F6; border-radius: 100px;">
            </div>
        </div>
        <div class="col">
            <div class="row">
                <label for="jml omset" class="col-sm-4">Jumlah Ommset</label>
                <input class="form-control p-3 mb-4 col-sm-8" type="jml omset" id="jml omset" style="border-color: #EFF0F6; border-radius: 100px;">
            </div>
        </div>
        <div class="col">
            <div class="row">
                <label for="jml tenaga kerja sblm" class="col-sm-4">Jumlah Tenaga Kerja</label>
                <input class="form-control p-3 mb-4 col-sm-8" type="jml tenaga kerja sblm" id="jml tenaga kerja sblm" style="border-color: #EFF0F6; border-radius: 100px;">
            </div>
        </div>
        <div class="col">
            <div class="row">
                <label for="jns produk sblm" class="col-sm-4">jenis Produk</label>
                <input class="form-control p-3 mb-4 col-sm-8" type="jns produk sblm" id="jns produk sblm" style="border-color: #EFF0F6; border-radius: 100px;">
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col">
            <div class="row">
                <label for="jml aset" class="col-sm-4">Jumlah Aset</label>
                <input class="form-control p-3 mb-4 col-sm-8" type="jml aset" id="jml aset" style="border-color: #EFF0F6; border-radius: 100px;">
            </div>
        </div>
        <div class="col">
            <div class="row">
                <label for="jml omset" class="col-sm-4">Jumlah Omset</label>
                <input class="form-control p-3 mb-4 col-sm-8" type="jml omset" id="jml omset" style="border-color: #EFF0F6; border-radius: 100px;">
            </div>
        </div>
        <div class="col">
            <div class="row">
                <label for="jml tenaga kerja" class="col-sm-4">Jumlah Tenaga Kerja</label>
                <input class="form-control p-3 mb-4 col-sm-8" type="jml tenaga kerja" id="jml tenaga kerja" style="border-color: #EFF0F6; border-radius: 100px;">
            </div>
        </div>
        <div class="col">
            <div class="row">
                <label for="jenis produk" class="col-sm-4">Jenis Produk</label>
                <input class="form-control p-3 mb-4 col-sm-8" type="jenis produk" id="jenis produk" style="border-color: #EFF0F6; border-radius: 100px;">
            </div>
        </div>
    </div>
</div>
</form>
@endsection
