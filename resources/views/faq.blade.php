@extends('layouts.main')
@include('partials.sidebarGuest')
@section('container')

<div class="faq_area section_padding_130" id="faq">
    <div class="container mt-4">
        <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <h1 style="font-size: 35pt"><span>Butuh </span>Bantuan?</h1>
        </div>
        <div class="container mt-4 mb-4">
            <div class="row top-buffer">
                <div class="col-md-5 mx-auto">
                    <form action="/faq" method="get">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control border-end-0 border rounded-pill" type="text" placeholder="Cari di sini..." name="search" id="myInput" style="height: 50px">
                            {{-- <span class="input-group-append">
                                <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="submit" style="width: 50px; z-index:auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </button>
                            </span> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container" id="myTable">
            <div class="row justify-content-center top-buffer">
                <div class="col-12 col-sm-8 col-lg-6">
                    <div class="section_heading text-center wow fadeInUp mb-4" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <h2><span>TOP </span> FAQ</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center top-buffer">
                <div class="col-12 col-sm-10 col-lg-8">
                    <div class="accordion faq-accordian" id="faqAccordion">
                        @foreach ($faqs as $faq)
                        <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="card-header" id="heading{{ $faq->id }}">
                                <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse{{ $faq->id }}" aria-expanded="false" aria-controls="collapse{{ $faq->id }}">
                                    {{ $faq->question }}
                                    <span class="lni-chevron-up"></span>
                                </h6>
                            </div>
                            <div id="collapse{{ $faq->id }}" class="collapse" aria-labelledby="heading{{ $faq->id }}" data-parent="#faqAccordion">
                                <div class="card-body">
                                    <p>{{ $faq->answer }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".faq-accordian .card").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
{{-- <script src="{{ asset('js/search.js') }}"></script> --}}


@endsection
