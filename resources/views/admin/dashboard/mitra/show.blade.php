
<h1>Detail Mitra</h1>
<div class="col-lg-8">

        <div class="mb-3">
            <label for="fullname" class="form-label">Nama</label>
            <td>{{ $mitra->fullname }}</td>
        </div>
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <td>{{ $mitra->nip }}</td>
        </div>
        <div class="mb-3">
            <label for="nominal_pinjaman" class="form-label">Nominal Pinjaman</label>
            <td>{{ formatRupiah($mitra->nominal_pinjaman) }}</td>
        </div>

</div>

