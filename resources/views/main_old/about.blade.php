@extends('main.layout')


@section('content')
<main>
    <!--? Hero Start -->
    <div class="slider-area">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- About Details Start -->
    <div class="about-details section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="about-details-cap mb-50">
                        <h4>{{__("Our Commitment")['h']}}</h4>
                        <p>
                            {{__("Our Commitment")["c"]}}
                        </p>
                    </div>

                    <div class="about-details-cap mb-50">
                        <h4>{{__("Vuja Mentality")['h']}}</h4>
                        <p>
                            {{__("Vuja Mentality")['c']}}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Details End -->

    <!--? Testimonial Start -->

    <!-- Testimonial End -->

</main>
@endsection
