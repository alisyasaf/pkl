{{-- Bootstrap Link --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<style>
    *{
        font-family: Poppins;
        margin-left: 20px
    }
    .DM1{
    background-color: #F8F7F7;
    border-radius: 25px;
    flex-direction: row;
    display: flex;
    width: 40%;
}
.DM2{
    margin-top: 20px;
    padding: 10px 0 0 10px;
    display: flex;
    background-color: #F8F7F7;
    border-radius: 25px;
    flex-direction: column;
    width: 97%;
    font-size: 11pt
}
aside{
    width: 58%;
    padding-left: 15px;
    margin-left: 15px;
    float: right;
    background-color:  #F8F7F7;
    border-radius: 25px;

}
.DM3{
    flex-direction: row;
    display: flex;
    margin-bottom: 0;
}
.DM4{
    margin-top: 5px;
    padding: 10px 0 0 15px;
    display: flex;
    background-color: #F8F7F7;
    border-radius: 25px;
    flex-direction: column;
}
.btn{
    background-color: #061755;
    color: white;
    width: 200px;
}
</style>

    {{-- Body --}}
<h1>Detail Mitra</h1>
<div class="flex-container DM1" >
    <div class="bi bi-person-circle" style="font-size: 90pt; margin: 5% 0 5% 5%"></div>
    <div class="bio" style="padding-left: 30px; padding-top: 4%">
     <p>{{ $mitra->fullname }}</p>
     <p>{{ $mitra->nip }}</p>
     <p>{{ $mitra->nama_usaha }}</p>
    </div>
 </div>
<div class="DM2 d-flex flex-row">
    {{-- <div class="row"> --}}
        <div class="col-lg-6">
            <div class="row mb-1">
                <label for="fullname" class="col-sm-6 form-label">Nama Peminjam :</label>
                <td class="col-sm-9">{{ $mitra->fullname }}</td>
            </div>
            <div class="row mb-1">
                <label for="nip" class="col-sm-6 form-label">NIP :</label>
                <td class="col-sm-9">{{ $mitra->nip }}</td>
            </div>
            <div class="row mb-1">
                <label for="nip" class="col-sm-6 form-label">Alamat Mitra :</label>
                <td class="col-sm-9">{{ $mitra->alamat }}</td>
            </div>
            <div class="row mb-1">
                <label for="nip" class="col-sm-6 form-label">Aset Awal :</label>
                <td class="col-sm-9">{{ $mitra->aset_awal }}</td>
            </div>
            <div class="row mb-1">
                <label for="nominal_pinjaman" class="col-sm-6 form-label">Nominal Pinjaman</label>
                <td class="col-sm-9">{{ formatRupiah($mitra->nominal_pinjaman) }}</td>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row mb-1">
                <label for="nip" class="col-sm-6 form-label">Jenis Usaha :</label>
                <td class="col-sm-9">{{ $mitra->jenis_usaha }}</td>
            </div>
            <div class="row mb-1">
                <label for="nip" class="col-sm-6 form-label">Nama Usaha :</label>
                <td class="col-sm-9">{{ $mitra->nama_usaha }}</td>
            </div>
            <div class="row mb-1">
                <label for="nip" class="col-sm-6 form-label">Alamat Usaha :</label>
                <td class="col-sm-9">{{ $mitra->alamat_usaha }}</td>
            </div>
            <div class="row mb-1">
                <label for="nip" class="col-sm-6 form-label">Tanggal Mulai Pinjam :</label>
                <td class="col-sm-9">{{ $mitra->tanggal_mulai }}</td>
            </div>
            <div class="row mb-1">
                <label for="nip" class="col-sm-6 form-label">Tanggal Selesai Pinjam :</label>
                <td class="col-sm-7">{{ $mitra->tanggal_selesai }}</td>
            </div>
        </div>
    {{-- </div> --}}
</div>
<div class="d-flex justify-content-center"><a class="btn mt-4 mb-2" href="/admin/dashboard/mitra" role="button">Kembali</a></div>
