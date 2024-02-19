@extends('main.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/images/bg_1.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">{{ __('Apply') }} | {{ $course->name }}</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">{{ __('Home') }} <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>{{ __('Apply') }} <i
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
                        <p><a href="mailto:info@vujadesa.com">info@vujadesa.com</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters align-items-center justify-content-center">
                <div class="col-md-8 p-4 p-md-5 order-md-last bg-light">
                    <form action="{{ route('courses.apply.save', ['course' => $course]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" required name="name" class="form-control"
                                placeholder="{{ __('Your Name') }}">
                        </div>
                        <div class="form-group">
                            <input type="email" required name="email" class="form-control"
                                placeholder="{{ __('Email') }}">
                        </div>
                        <div class="form-group">
                            <input type="phone" required name="phone" class="form-control"
                                placeholder="{{ __('Phone') }}">
                        </div>
                        <div class="form-group" style="margin-bottom: 0rem;">
                            
                            <select name="type" id="type" class="form-control">
                                <option value="manager"> {{ __('Manager') }}</option>
                                <option value="student"> {{ __('Student') }}</option>
                                <option value="parent"> {{ __('Parent') }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div id="parent-message">
                                <small id="parent" hidden>
                                    {{ __('Please Add Student details in the below message filed') }}
                                    <br style="display: block; content: ''; margin: -4;">
                                    {{ __('Student Name') }}
                                    <br style="display: block; content: ''; margin: -4;">
                                    {{ __('Student Age') }}
                                </small>
                                {{-- Student --}}
                                <small id="student" hidden>
                                    {{ __('Please Add Your Age') }}

                                </small>
                            </div>
                            {{-- <small id="parent-message" style="visibility: hidden;">
                                {{ __('Please Add Student name and agen in below message filed') }}
                            </small> --}}
                            <textarea required name="message" id="" cols="30" rows="7" class="form-control"
                                placeholder="{{ __('Message') }}"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary py-3 px-5" type="submit"> {{ __("Send") }}
                            </button>
                        </div>
                    </form>
                </div>


                <script>
                    var activities = document.getElementById("type");

                    activities.addEventListener("change", function() {
                        var parent_message = document.getElementById('parent-message').innerHTML
                        if (activities.value == "parent") {
                            document.getElementById('parent').hidden = false
                            document.getElementById('student').hidden = true
                        }
                        if (activities.value == "student") {
                            document.getElementById('parent').hidden = true
                            document.getElementById('student').hidden = false
                        }
                        if (activities.value == "manager") {
                            // console.log('Else');
                            document.getElementById('parent').hidden = true
                            document.getElementById('student').hidden = true
                        }
                    });
                </script>

            </div>
        </div>
    </section>
@endsection
