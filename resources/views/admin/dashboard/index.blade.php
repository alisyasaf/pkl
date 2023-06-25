@extends('layouts.mainAdmin')
@include('partials.sidebarAdmin')
@section('container-admin')
<div class="container flex-row" id="dashboard-admin" style="margin-left: 5%; margin-top: 1%">
    <div class="row">
        <div class="col" style="text;  max-width: 170px">
            <i class="bi bi-person-circle" style="font-size: 130px; max-width: 150px"></i>
        </div>
        <div class="col text-dark mt-5">
            <div class="ms d-flex" style="font-size: 23px">{{ auth()->user()->name }}</div>
            <div class="ms d-flex" style="font-size: 16px">Admin</div>
        </div>
    </div></div>
    <div class="d-flex flex-wrap admin-dashboard-content justify-content-start">
        <div class="p-2">
            <a href="/admin/dashboard/mitra" type="button" class="btn shadow p-3 mb-5 waves-effect mt-4" name="/" style="font-family: poppins; width: 300px; height: 100px; font-size: 20px; background-color: #E5E5E5">
                <div class="row justify-content-center align-items-center mt-3"><i class="fa-solid fa-user-group fa col-2 me-2" style="font-size: 33px" aria-hidden="true"></i>
                <div class="col-auto">Daftar Mitra</div></div></a>
        </div>
        <div class="p-2">
            <a href="/admin/dashboard/faq" type="button" class="btn shadow p-3 mb-5 waves-effect mt-4" name="/" style="font-family: poppins; width: 300px; height: 100px; font-size: 20px; background-color: #E5E5E5">
                <div class="row justify-content-center align-items-center mt-3"><i class="fa-regular fa-circle-question fa-2x col-2 me-2" style="font-size: 33px" aria-hidden="true"></i>
                <div class="col-auto">Edit FAQ</div></div></a>
        </div>
        <div class="p-2">
            <a href="/admin/dashboard/verifikasi" type="button" class="btn shadow p-3 mb-5 waves-effect mt-4" name="/" style="font-family: poppins; width: 300px; height: 100px; font-size: 20px; background-color: #E5E5E5">
                <div class="row justify-content-center align-items-center mt-2"><i class="fa-regular fa-circle-check fa-2x col-2 me-2" style="font-size: 33px" aria-hidden="true"></i>
                <div class="col-5 text-left">Verifikasi Pembayaran</div></div></a>
        </div>
        <div class="p-2">
            <a href="/admin/dashboard/account/generate" type="button" class="btn shadow p-3 mb-5 waves-effect mt-4" name="/" style="font-family: poppins; width: 300px; height: 100px; font-size: 20px; background-color: #E5E5E5">
                <div class="row justify-content-center align-items-center mt-3"><i class="fa-solid fa-user-plus fa-2x col-2 me-2" style="font-size: 33px" aria-hidden="true"></i>
                <div class="col-auto">Generate Akun</div></div></a>
        </div>
        <div class="p-2">
            <a href="/admin/dashboard/angsuran" type="button" class="btn shadow p-3 mb-5 waves-effect mt-4" name="/" style="font-family: poppins; width: 300px; height: 100px; font-size: 20px; background-color: #E5E5E5">
                <div class="row justify-content-center align-items-center mt-3"><i class="bi bi-wallet2 col-2 me-2" style="font-size: 33px" aria-hidden="true"></i>
                <div class="col-auto">Angsuran</div></div></a>
        </div>
    </div>
@endsection

