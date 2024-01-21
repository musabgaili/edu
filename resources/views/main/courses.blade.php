@extends('main.layout')


@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">{{ __('Courses') }}</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">{{ __('Home') }} <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>{{ __('Courses') }} <i
                                class="ion-ios-arrow-forward"></i></span></p>
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
                    <p>
                        محتوى الدورات
                    </p>

                </div>
            </div>
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-md-6 course ftco-animate">
                        <div class="img" style="background-image: url({{ asset('storage/' . $course->thumbnail) }})"></div>
                        <div class="text pt-4">
                            <p class="meta d-flex">
                                {{-- <span><i class="icon-table mr-2"></i>{{$course->thumbnail}}</span> --}}
                                <span><i class="icon-calendar mr-2"></i>{{ $course->duration }}
                                    {{ __($course->duration_type) }}</span>
                            </p>
                            <h3><a href="#">{{ $course->name }}</a></h3>
                            <p>
                                {{ $course->content }}
                            </p>
                            <p><a href="{{route('courses.apply',['course'=> $course->slug])}}" class="btn btn-primary">{{ __('Apply') }}</a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
