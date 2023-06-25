<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        * {
            font-family: Poppins;
            margin-left: 10px
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
    </style>
    <title>Tambah Data Angsuran</title>
</head>
<body>
    <div class="container">
    <h1>Tambah Data Angsuran</h1>
    <div class="">
        <form method="post" action="/admin/dashboard/angsuran">
            @method('post')
            @csrf
            <div class="mb-3">
                <label for="mitra_id" class="form-label">Nama</label>
                {!! Form::select('mitra_id', $mitra_id, null, ['class' => 'form-control']) !!}
                @error('mitra_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tanggal_jatuh_tempo" class="form-label">Tanggal Jatuh Tempo</label>
                <input type="date" class="form-control" id="tanggal_jatuh_tempo" name="tanggal_jatuh_tempo">
                @error('tanggal_jatuh_tempo')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nominal" class="form-label">Nominal</label>
                <input type="text" class="form-control" id="nominal" name="nominal">
                @error('nominal')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
</div>
</body>
</html>
