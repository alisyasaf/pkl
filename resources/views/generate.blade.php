@extends('layouts.main')

@section('generate')
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>

<body class="col order-5 position-relative">
    <section class="sidebar">
    <h1 style="font-family: Poppins;">Tambah Data Mitra</h1><br><br>
    <form style="font-family: Poppins; font-size: 20px">
        <label for="username">Nama Mitra</label>
        <div class="form-group d-flex justify-content-center">
            <input class="form-control shadow-sm p-3 mb-4" type="username" id="username" style="border-color: #EFF0F6; border-radius: 100px;">
        </div>

        <label for="ID">ID Transaksi</label>
        <div class="form-group d-flex justify-content-center">
            <input class="form-control shadow-sm p-3 mb-4" type="ID" id="ID" style="border-color: #EFF0F6; border-radius: 100px;">
        </div>

        <label for="password">Password</label>
        <div class="form-group d-flex justify-content-center">
            <input class="form-control shadow-sm p-3 mb-4" type="password" id="password" style="border-color: #EFF0F6; border-radius: 100px;">
        </div>

        <div class="d-flex justify-content-center">
            <button class="btn btn-light shadow-sm p-2 mb-4 text-white ms-auto w-25" type="button" name="Generate" id="SIGN UP" style="border-radius: 100px; background-color: #0E3B81">Generate</button>
        </div>
    </form>
    </section>
</body>
@endsection
