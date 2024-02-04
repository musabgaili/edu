@extends('main.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset("assets/images/bg_1.jpg")}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">{{__("Contact")}}</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">{{ __('Home') }} <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>{{ __('Contact') }} <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-4 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">{{ __('Address') }}</h3>
                        <p>Thaka Center - Roshen Front - Riyadh</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">{{ __('Contact Number') }}</h3>
                        <p><a href="tel://+966567216180">+966567216180</a></p>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">{{ __('Email') }}</h3>
                        <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text"  required name="name" class="form-control" placeholder="{{ __('Your Name') }}">
                        </div>
                        <div class="form-group">
                            <input type="email"  required name="email" class="form-control" placeholder="{{ __('Email') }}">
                        </div>
                        <div class="form-group">
                            <input type="phone" required name="phone" class="form-control" placeholder="{{ __('Phone') }}">
                        </div>
                        <div class="form-group">
                            <textarea  required name="message" id="" cols="30" rows="7" class="form-control"
                                placeholder="{{ __('Message') }}"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary py-3 px-5" type="submit"> {{ __('Send Us A Message') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    {{-- <div id="map"></div> --}}
                    {{-- <iframe width="555" height="590"
                        src="https://www.openstreetmap.org/export/embed.html?bbox=46.725888848304756%2C24.83323640912404%2C46.73090994358063%2C24.836527398236605&amp;layer=mapnik"
                        style="border: 1px solid black"></iframe><br /><small> --}}
                        {{-- <a
                            href="https://www.openstreetmap.org/#map=18/24.83488/46.72840">View Larger Map</a></small> --}}
                            <iframe width="555" height="590"
                            src="https://www.openstreetmap.org/export/embed.html?bbox=46.72356605529785%2C24.836439769482713%2C46.74365043640137%2C24.849602860287867&amp;layer=mapnik"
                            style="border: 1px solid black"></iframe><br /><small>
                                </div>
            </div>
        </div>
    </section>
@endsection
