@extends('main.layout')


@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">About Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">{{ __('Home') }} <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>{{ __('About us') }} <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                    <div class="img" style="background-image: url(images/about.jpg); border"></div>
                </div>
                <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                    {!! Str::inlineMarkdown($content->content) !!}
                </div>
            </div>
        </div>
    </section>


    {{-- Fab Academy Content --}}
    <section class="ftco-section ftco-counter img" id="section-counter"
        style="background-image: url({{ asset('assets/images/bg_3.jpg') }})" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2 d-flex">
                <div class="col-md-6 align-items-stretch d-flex">
                    <div class="img img-video d-flex align-items-center"
                        style="background-image: url({{ asset('fab_academy.png') }});  background-size: 560px; width: 1000px; height: 560px;">
                        <div class="justify-content-center">
                            {{-- <a href="https://vimeo.com/45830194" --}}
                            <a href="{{ asset('fab_academy.png') }}"
                                class="popup-vimeo d-flex justify-content-center align-items-center">
                                <span class="ion-ios-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
                    <h2 class="mb-4">{{ __('Fab Academy') }}</h2>
                    <p>
                        {{ $content->where('name', 'fab-lab')->first()->content }}
                    </p>

                </div>
            </div>
            {{-- <div class="row d-md-flex align-items-center justify-content-center">
        <div class="col-lg-12">
            <div class="row d-md-flex align-items-center">
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="icon"><span class="flaticon-doctor"></span></div>
                        <div class="text">
                            <strong class="number" data-number="18">0</strong>
                            <span>Certified Teachers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="icon"><span class="flaticon-doctor"></span></div>
                        <div class="text">
                            <strong class="number" data-number="401">0</strong>
                            <span>Students</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="icon"><span class="flaticon-doctor"></span></div>
                        <div class="text">
                            <strong class="number" data-number="30">0</strong>
                            <span>Courses</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="icon"><span class="flaticon-doctor"></span></div>
                        <div class="text">
                            <strong class="number" data-number="50">0</strong>
                            <span>Awards Won</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
        </div>
    </section>



    <style>
        .col-centered {
            float: none;
            margin-right: auto;
            margin-left: auto;
        }
    </style>





    <section class="ftco-gallery mt-2">
        <div class="container">
            <div class="row ">
                @foreach ($gallery as $item)
                    <div class="col-md-6 mb-3 ftco-animate fadeInUp ftco-animated ">
                        @if ($item->url)
                            <a style="background-image: url({{ asset('storage/' . $item->file) }});"
                                class="gallery img d-flex align-items-center" href="/" target="_blank">
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="icon-eye"></span>
                                </div>
                            </a>
                        @else
                        <a style="background-image: url({{ asset('storage/' . $item->file) }});"
                            class="gallery img d-flex align-items-center">
                           
                        </a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    </main>
@endsection
