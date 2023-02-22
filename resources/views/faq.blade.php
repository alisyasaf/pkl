@extends('layouts.main')

@section('container')

<div class="faq_area section_padding_130" id="faq">
    <div class="container mt-4">
        <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <h1><span>Butuh </span>Bantuan?</h1>
            <div class="line"></div>
        </div>
        <div class="container mt-4">
            <div class="row top-buffer">
                <div class="col-md-5 mx-auto">
                    <form action="/faq">
                        <div class="input-group">
                            <input type="text" class="form-control border-end-0 border rounded-pill" type="search" placeholder="Cari di sini..." name="search" id="search">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <div class="container">
        <div class="row justify-content-center top-buffer">
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
                <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h1><span>TOP </span> FAQ</h1>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center top-buffer">
            <!-- FAQ Area-->
            @foreach ($faqs as $faq)

            <div class="col-12 col-sm-10 col-lg-8">
                <div class="accordion faq-accordian" id="faqAccordion">
                    <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{{ $faq->question }}<span class="lni-chevron-up"></span></h6>
                        </div>
                        <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#faqAccordion">
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

@endsection
