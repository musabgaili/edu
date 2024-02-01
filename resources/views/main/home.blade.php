@extends('main.layout')


@section('content')
    <section class="home-slider owl-carousel">

        {{-- {{ $slider_content = $content->where('name', 'slider-photo') }} --}}
        <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_1.jpg') }})">
            <div class="overlay"></div>
            <div class="container landing-section">
                <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                    <div class="col-md-6 ftco-animate uni">
                        {{-- <h1 class="mb-4"> --}}
                        <h4 class="mb-4" style="color: white;">

                            {!! Str::inlineMarkdown($content->where('name', 'slider-photo')->first()->content) !!}
                        </h4>
                        {{-- </h1> --}}
                        {{-- <p>
                        A small river named Duden flows by their place and supplies it
                        with the necessary regelialia.
                    </p>
                    <p>
                        <a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a>
                    </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Services Section --}}
    <section class="ftco-services ftco-no-pb mt-3">
        <div class="container">
            <div class="row details">
                @foreach ($services as $service)
                    <div style="border-top: 1px solid white; border-right: 1px solid white"
                        class="col-md-6 mb-3 d-flex services align-self-stretch py-5 px-4 ftco-animate darken justify-content-center align-items-center">
                        <div class="media block-6 d-block text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                {{-- <span class="flaticon-teacher"></span> --}}
                                <img src="{{ asset('storage/' . $service->thumbnail) }}" alt=""
                                    style="height:60px ; width:75px; color:white;">
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading">{{ $service->name }}</h3>
                                <p>
                                    {{ $service->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- What we offer  --}}
    <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                    <div class="img" style="background-image: url({{ asset('assets/images/about.jpg') }}); border"></div>
                </div>

                <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                    <h2 class="mb-4">{{ __('What We Offer') }}</h2>
                    <p>

                    </p>
                    <div class="row mt-5">

                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center">
                                    <span class="flaticon-diploma"></span>
                                </div>
                                <div class="text pl-3">
                                    <h3> {{ __('Accredited Certificates') }} </h3>
                                    <p>
                                        {{ __('Earn recognized skills with our accredited certificates.') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center">
                                    <span class="flaticon-education"></span>
                                </div>
                                <div class="text pl-3">
                                    <h3>{{ __('Certified Teachers') }}</h3>
                                    <p>
                                        {{ __('Our teachers are accredited and an awesome at their fields') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center">
                                    <span class="flaticon-security"></span>
                                </div>
                                <div class="text pl-3">
                                    <h3>{{ __('Scientifically qualified teams') }}</h3>
                                    <p>
                                        {{ __("Our teams and mentors are qualified , as well as you'll be") }}
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center">
                                    <span class="flaticon-teacher"></span>
                                </div>
                                <div class="text pl-3">
                                    <h3>{{ __('Passionate Instructors, Proven Results') }}</h3>
                                    <p>
                                        {{ __('Our instructors are not just educators; they are passionate individuals dedicated to fostering a love for learning') }}
                                    </p>
                                </div>
                            </div>
                        </div>


                        {{-- Passionate Instructors, Proven Results:
Our instructors are not just educators; they are passionate individuals dedicated to fostering a love for learning. Experience the difference that passion makes in achieving remarkable educational outcomes. --}}
                    </div>
                </div>
            </div>
        </div>
    </section>




    {{-- Fab Academy Content --}}
    <section class="ftco-section ftco-counter img" id="section-counter"
        style="background-image: url({{ asset('images/bg_3.jpg') }}) ; padding-bottom: 0px; padding-top: 20px;" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center mb-2 pb-1 d-flex">
                <div class="col-md-6  d-flex">
                    <div class="img img-video d-flex align-items-center"
                        style="background-image: url({{ asset('fab_academy.png') }}) ; background-size: 420px; width: 1000px; height: 360px;">
                        <div class="video justify-content-center">
                            <a href="https://youtube.com/dsJrK1R3rWI"
                                class="icon-video popup-youtube d-flex justify-content-center align-items-center">
                                <span class="ion-ios-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-1 pt-md-0 pt-1">
                    <h2 class="mb-4">{{ __('Fab Academy') }}</h2>
                    <p> {{ $content->where('name', 'fab-lab')->first()->content }} </p>
                </div>
            </div>

            <div class="row d-md-flex align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="2650">0</strong>
                                    <span>{{ __('Student') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="1400">0</strong>
                                    <span>{{ __('Project') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="660">0</strong>
                                    <span>{{ __('Site') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Courses Section Content --}}
    <section class="ftco-section">
        <div class="container px-4 courses-section">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">{{ __('Our Courses') }}</h2>

                </div>
            </div>
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-md-6 course ftco-animate">
                        <div class="img" style="background-image: url({{ asset('storage/' . $course->thumbnail) }})">
                        </div>
                        <div class="text pt-4">
                            <p class="meta d-flex">
                                {{-- <span><i class="icon-table mr-2"></i>{{$course->thumbnail}}</span> --}}
                                <span><i class="icon-calendar mr-2"></i>{{ $course->duration }}
                                    {{ __($course->duration_type) }}</span>
                            </p>
                            <h3><a href="#">{{ $course->name }}</a></h3>
                            <p class="courses-p">
                                {{ $course->content }}
                            </p>
                            <p><a href="{{ route('courses.apply', ['course' => $course]) }}"
                                    class="btn btn-primary">{{ __('Apply') }}</a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb"
        style="background-image: url({{ asset('assets/images/bg_5.jpg') }})" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 py-5">
                    <div class="py-md-5">
                        <div class="heading-section heading-section-white ftco-animate mb-5">
                            {!! $content->where('name', 'quote')->first()->content !!}
                        </div>
                        <form action="{{ route('quote.store') }}" method="POST" class="appointment-form ftco-animate">
                            @csrf
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="{{ __('Name') }}" />
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="{{ __('Email') }}" />
                                </div>
                            </div>
                            <div class="d-md-flex">
                                {{-- <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon">
                                            <span class="ion-ios-arrow-down"></span>
                                        </div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select Your Course</option>
                                            <option value="">Art Lesson</option>
                                            <option value="">Language Lesson</option>
                                            <option value="">Music Lesson</option>
                                            <option value="">Sports</option>
                                            <option value="">Other Services</option>
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                                <div class="form-group ">
                                    <textarea name="message" id="" cols="30" rows="2" class="form-control"
                                        placeholder="{{ __('Message') }}"></textarea>
                                </div>

                            </div>
                            <div class="d-md-flex">

                                <div class="form-group">
                                    <input type="text" type="phone" name="phone" class="form-control"
                                        placeholder="{{ __('Phone') }}" />
                                </div>
                                <div class="form-group ml-md-4">
                                    {{-- <input type="submit" value="Request A Quote"
                                    class="btn btn-primary py-3 px-4" /> --}}
                                    <button type="submit" class="btn btn-primary py-3 px-4"> {{ __('Request A Quote') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Blog Section --}}
    {{-- <section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Recent</span> Blog</h2>
                <p>
                    Separated they live in. A small river named Duden flows by their
                    place and supplies it with the necessary regelialia. It is a
                    paradisematic country
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end"
                        style="background-image: url('images/image_1.jpg')">
                        <div class="meta-date text-center p-2">
                            <span class="day">26</span>
                            <span class="mos">June</span>
                            <span class="yr">2019</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading">
                            <a href="#">Skills To Develop Your Child Memory</a>
                        </h3>
                        <p>
                            Far far away, behind the word mountains, far from the
                            countries Vokalia and Consonantia, there live the blind texts.
                        </p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0">
                                <a href="#" class="btn btn-primary read-more">Read More
                                    <span class="ion-ios-arrow-round-forward"></span></a>
                            </p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end"
                        style="background-image: url('images/image_2.jpg')">
                        <div class="meta-date text-center p-2">
                            <span class="day">26</span>
                            <span class="mos">June</span>
                            <span class="yr">2019</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading">
                            <a href="#">Skills To Develop Your Child Memory</a>
                        </h3>
                        <p>
                            Far far away, behind the word mountains, far from the
                            countries Vokalia and Consonantia, there live the blind texts.
                        </p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0">
                                <a href="#" class="btn btn-primary read-more">Read More
                                    <span class="ion-ios-arrow-round-forward"></span></a>
                            </p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end"
                        style="background-image: url('images/image_3.jpg')">
                        <div class="meta-date text-center p-2">
                            <span class="day">26</span>
                            <span class="mos">June</span>
                            <span class="yr">2019</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading">
                            <a href="#">Skills To Develop Your Child Memory</a>
                        </h3>
                        <p>
                            Far far away, behind the word mountains, far from the
                            countries Vokalia and Consonantia, there live the blind texts.
                        </p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0">
                                <a href="#" class="btn btn-primary read-more">Read More
                                    <span class="ion-ios-arrow-round-forward"></span></a>
                            </p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

    {{-- testimony --}}
    {{-- <section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4">Student Says About Us</h2>
                <p>
                    Separated they live in. A small river named Duden flows by their
                    place and supplies it with the necessary regelialia. It is a
                    paradisematic country
                </p>
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)"></div>
                            <div class="text ml-2">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>
                                    Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind
                                    texts.
                                </p>
                                <p class="name">Racky Henderson</p>
                                <span class="position">Father</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img mr-4" style="background-image: url(images/teacher-2.jpg)"></div>
                            <div class="text ml-2">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>
                                    Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind
                                    texts.
                                </p>
                                <p class="name">Henry Dee</p>
                                <span class="position">Mother</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img mr-4" style="background-image: url(images/teacher-3.jpg)"></div>
                            <div class="text ml-2">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>
                                    Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind
                                    texts.
                                </p>
                                <p class="name">Mark Huff</p>
                                <span class="position">Mother</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img mr-4" style="background-image: url(images/teacher-4.jpg)"></div>
                            <div class="text ml-2">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>
                                    Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind
                                    texts.
                                </p>
                                <p class="name">Rodel Golez</p>
                                <span class="position">Mother</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)"></div>
                            <div class="text ml-2">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>
                                    Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind
                                    texts.
                                </p>
                                <p class="name">Ken Bosh</p>
                                <span class="position">Mother</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

    {{-- Gallery --}}
    {{-- <section class="ftco-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-3 ftco-animate">
                <a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(images/course-1.jpg)">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-3 ftco-animate">
                <a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(images/image_2.jpg)">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-3 ftco-animate">
                <a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(images/image_3.jpg)">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-3 ftco-animate">
                <a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(images/image_4.jpg)">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section> --}}
@endsection
