@extends('main.layout')

@section('content')
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-7 col-md-8">
                            <div class="hero__caption">
                                {{-- <span data-animation="fadeInLeft" data-delay=".2s">Popular Online Courses</span> --}}
                                <h1 data-animation="fadeInLeft" data-delay=".4s">
                                    {{ __('An unprecedented learning experience') }}</h1>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    {{-- <a href="industries.html" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Get Started</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5">
                            <div class="hero-man d-none d-lg-block f-right" data-animation="jello" data-delay=".4s">
                                <img src="assets/img/hero/heroman.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-7 col-md-8">
                            <div class="hero__caption">
                                {{-- <span data-animation="fadeInLeft" data-delay=".2s">Popular Online Courses</span> --}}
                                <h1 data-animation="fadeInLeft" data-delay=".4s">
                                    {{ __('An unprecedented learning experience') }}</h1>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    {{-- <a href="industries.html" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Get Started</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5">
                            <div class="hero-man d-none d-lg-block f-right" data-animation="jello" data-delay=".4s">
                                <img src="assets/img/hero/heroman.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--? Categories Area Start -->
    <div class="categories-area section-padding30">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        {{-- <span>Popular Online Courses</span> --}}
                        <h2>{{ __('Browse Our Services ') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 abo">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            {{-- <span class="flaticon-web-design"></span> --}}
                            {{-- <img src="{{asset('entrepreneurship.png')}}" style="height:88px;width:88px;margin-bottom:24px;   color: #2d3092;" alt=""> --}}
                            <svg class="svga" xmlns="http://www.w3.org/2000/svg" fill="#2d3092" hover="fill:green"
                                style="height:88px;width:88px;margin-bottom:24px;   color: #2d3092;" data-name="Layer 1"
                                viewBox="0 0 64 80" x="0px" y="0px">
                                <path
                                    d="M42.17676,20.87012A15.31847,15.31847,0,0,0,30.2959,17.0918,14.922,14.922,0,0,0,17.04443,30.45068,14.29338,14.29338,0,0,0,22.02979,42.4668,5.666,5.666,0,0,1,24,46.749v5.21485A7.13889,7.13889,0,0,0,31.22217,59h1.55566A7.13981,7.13981,0,0,0,40,51.9624V46.75146a5.78348,5.78348,0,0,1,2.02393-4.332,14.298,14.298,0,0,0,.15283-21.54931ZM32.77783,57H31.22217a5.26459,5.26459,0,0,1-4.13873-2h9.83264A5.26409,5.26409,0,0,1,32.77783,57ZM38,51.9624A4.8605,4.8605,0,0,1,37.88611,53H26.11353A4.85876,4.85876,0,0,1,26,51.96387V51H38ZM31,39h2a2.002,2.002,0,0,1,2,2v8H29V41A2.002,2.002,0,0,1,31,39Zm-1-4a2,2,0,1,1,2,2A2.002,2.002,0,0,1,30,35Zm10.7085,5.91357A7.78089,7.78089,0,0,0,38,46.75146V49H37V41a3.98756,3.98756,0,0,0-1.96515-3.42462A3.96315,3.96315,0,0,0,36,35a4,4,0,0,0-8,0,3.96315,3.96315,0,0,0,.96515,2.57538A3.98756,3.98756,0,0,0,27,41v8H26V46.749a7.66522,7.66522,0,0,0-2.66162-5.79492A12.31059,12.31059,0,0,1,19.03857,30.606a12.89637,12.89637,0,0,1,11.4712-11.52588,13.72755,13.72755,0,0,1,1.46142-.07813,13.26377,13.26377,0,0,1,8.86914,3.356,12.299,12.299,0,0,1-.13183,18.55566Z" />
                                <path
                                    d="M54,45a9,9,0,1,0,9,9A9.01047,9.01047,0,0,0,54,45Zm0,16a7,7,0,1,1,7-7A7.00787,7.00787,0,0,1,54,61Z" />
                                <path
                                    d="M54,51a1.0013,1.0013,0,0,1,1,1h2a2.99519,2.99519,0,0,0-2-2.81555V48H53v1.18433a2.99225,2.99225,0,0,0,1,5.81518,1.00025,1.00025,0,1,1-1,1.001H51a2.99491,2.99491,0,0,0,2.00024,2.81518L53,59.89209h2l.00024-1.07648A2.99283,2.99283,0,0,0,54,52.99951.99976.99976,0,1,1,54,51Z" />
                                <path
                                    d="M1.5127,52.86914l.89941.50244c-.01953.21143-.0293.41992-.0293.62842s.00977.417.0293.62842l-.89941.50244a1.00044,1.00044,0,0,0-.47852,1.13086,8.927,8.927,0,0,0,2.477,4.16455,1.00022,1.00022,0,0,0,1.17725.14844l.86718-.48438a.13606.13606,0,0,1,.09864-.01806,12.11362,12.11362,0,0,0,1.14013.66552v.96826a.99957.99957,0,0,0,.7417.96583A9.56276,9.56276,0,0,0,10.00586,63c.0376,0,.07519,0,.11279-.00049a9.56948,9.56948,0,0,0,2.34522-.331,1.00056,1.00056,0,0,0,.7417-.96631l.00781-.99854a7.64259,7.64259,0,0,0,1.13086-.63037.13266.13266,0,0,1,.09912.0166l.86377.48291a1.0004,1.0004,0,0,0,1.17725-.14892,8.93722,8.93722,0,0,0,2.48193-4.16162.99985.99985,0,0,0-.479-1.13135l-.89941-.50244c.01953-.21143.0293-.41992.0293-.62842s-.00977-.417-.0293-.62842l.89941-.50244a1.00083,1.00083,0,0,0,.47852-1.13135,8.93283,8.93283,0,0,0-2.47705-4.16406,1.00051,1.00051,0,0,0-1.17725-.14844l-.86718.48438a.14729.14729,0,0,1-.09864.01806,12.14863,12.14863,0,0,0-1.14013-.66552V46.294a.99957.99957,0,0,0-.7417-.96583,9.27037,9.27037,0,0,0-2.58252-.32763,9.56948,9.56948,0,0,0-2.34522.331,1.00056,1.00056,0,0,0-.7417.96631l-.00781.99854a7.64259,7.64259,0,0,0-1.13086.63037.13266.13266,0,0,1-.09912-.0166l-.86377-.48243a1.00022,1.00022,0,0,0-1.17725.14844,8.93645,8.93645,0,0,0-2.48193,4.16162A.99985.99985,0,0,0,1.5127,52.86914ZM4.48047,54.98a4.96815,4.96815,0,0,1,0-1.96045.99953.99953,0,0,0-.49512-1.06006l-.7793-.43506a6.93674,6.93674,0,0,1,1.18848-1.97265l.187.10449a2.11142,2.11142,0,0,0,2.1919-.07129,5.64239,5.64239,0,0,1,.83545-.46533,2.03364,2.03364,0,0,0,1.18554-1.85742v-.15967a7.18585,7.18585,0,0,1,1.11182-.102,7.87228,7.87228,0,0,1,1.29932.09961v.16211a2.03364,2.03364,0,0,0,1.18554,1.85742,5.601,5.601,0,0,1,.83545.46582,2.11532,2.11532,0,0,0,2.19239.0708l.19043-.10645A6.92331,6.92331,0,0,1,16.794,51.52393l-.77979.43554a.99993.99993,0,0,0-.49463,1.06006,4.96815,4.96815,0,0,1,0,1.96045.99989.99989,0,0,0,.49512,1.06055l.7793.43506a6.93674,6.93674,0,0,1-1.18848,1.97265l-.1875-.105a2.10939,2.10939,0,0,0-2.19141.07178,5.64239,5.64239,0,0,1-.83545.46533,2.03364,2.03364,0,0,0-1.18554,1.85742v.15967a7.18585,7.18585,0,0,1-1.11182.102,6.81323,6.81323,0,0,1-1.29932-.09961v-.16211a2.03364,2.03364,0,0,0-1.18554-1.85742,5.64928,5.64928,0,0,1-.83594-.46582,2.11243,2.11243,0,0,0-2.1919-.0708l-.19043.10645a6.91884,6.91884,0,0,1-1.18457-1.97413l.77979-.43554A1.00028,1.00028,0,0,0,4.48047,54.98Z" />
                                <path
                                    d="M10,58a4,4,0,1,0-4-4A4.00458,4.00458,0,0,0,10,58Zm0-6a2,2,0,1,1-2,2A2.002,2.002,0,0,1,10,52Z" />
                                <path
                                    d="M20,15a2.97084,2.97084,0,0,0,2.90991-3.69733l7.1554-3.029a2.95376,2.95376,0,0,0,4.288-.43542l5.65265,2.22046A2.9973,2.9973,0,0,0,46,10a2.95344,2.95344,0,0,0-.04132-.409L52.157,5.872l.9856,1.64264A.99958.99958,0,0,0,54,8c.02637,0,.05322-.001.08008-.00342a1.0002,1.0002,0,0,0,.84863-.625l2-5A1.00033,1.00033,0,0,0,56,1H51a1.00009,1.00009,0,0,0-.85742,1.51465L51.128,4.157l-6.09045,3.6543a2.9643,2.9643,0,0,0-4.39081.35046L34.99408,5.94128a2.99719,2.99719,0,1,0-5.94049.589L21.78851,9.60571a2.971,2.971,0,0,0-4.24743.68408L9.2627,8.03516,8.7373,9.96484l8.2851,2.25647A2.99427,2.99427,0,0,0,20,15ZM54.523,3l-.70264,1.75684L52.76611,3ZM43,9a1,1,0,1,1-1,1A1.0013,1.0013,0,0,1,43,9ZM32,5a1,1,0,1,1-1,1A1.0013,1.0013,0,0,1,32,5ZM20,11a1,1,0,1,1-1,1A1.0013,1.0013,0,0,1,20,11Z" />
                                <rect x="20" y="53" width="2" height="2" />
                                <rect x="42" y="53" width="2" height="2" />
                            </svg>
                            <style>
                               .single-cat:hover svg path {
                                    fill: white;
                                    transition: all ease 0.3s;
                                }

                                .single-cat:hover svg path {
                                    transition: all ease 0.3s;
                                }
                            </style>
                        </div>
                        <div class="cat-cap">
                            <h6> <b> <a href="#">{{ __('Entrepreneurship') }}</a> </b></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-education"></span>
                        </div>
                        <div class="cat-cap">
                            <h6> <b> <a href="#">{{ __('TEAMS SPONSORING') }}</a></h6> </b>
                            {{-- <p>Sorem hpsum folor sixdsft amhtget, consectetur adipiscing eliht, sed do eiusmod tempor incidi.</p>
                        <a  href="#" class="read-more1">Read More ></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-communications"></span>
                        </div>
                        <div class="cat-cap">
                            <h6> <b> <a href="#">{{ __('AI') }}</a></h6> </b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-computing"></span>
                        </div>
                        <div class="cat-cap">
                            <h6> <b> <a href="#">{{ __('CONTENT WRITING') }}</a></h6> </b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-tools-and-utensils"></span>
                        </div>
                        <div class="cat-cap">
                            <h6> <b> <a href="#">{{ __('FAB ACADEMY DIPLOMA') }}</a></h6> </b>
                            {{-- <p>Sorem hpsum folor sixdsft amhtget, consectetur adipiscing eliht, sed do eiusmod tempor incidi.</p>
                        <a  href="#" class="read-more1">Read More ></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-business"></span>
                        </div>
                        <div class="cat-cap">
                            <h6><a href="#">{{ __('Innovation and Creativity') }}</a></h6>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Section Button -->
            {{-- <div class="row">
            <div class="col-lg-12">
                <div class="browse-btn2 text-center mt-50">
                    <a href="courses.html" class="btn">Find More Courses</a>
                </div>
            </div>
        </div> --}}
        </div>
    </div>
    <!-- Categories Area End -->
    <!--? Count Down Start -->
    <div class="count-down-area pt-90 pb-60 section-bg" data-background="assets/img/gallery/section_bg01.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="count-down-wrapper">
                        <div class="row justify-content-between">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="72px" height="69px">
                                        <image x="0px" y="0px" width="72px" height="69px"
                                            xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABFCAMAAADerVCrAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAB11BMVEUXmnP///8XmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnP///8qvp8aAAAAm3RSTlMAAFDr4uMPOMDMwtJjMzzHMMguXAUTrvgdzuXda/4UIr+7NTa2pVX1F7iKibnzFUFEvYcv8j7xn9+ewYPkQvARLeoCLMOAc3KBRdaFhoRW+u5XA/wIOWTaeA4rk69LHJyLKdH2qeyiqgwYs6Cn3Foktw1MbwlYaZk0lNmCEkftSRDUGVsHJaiyuhoKd+jnrfQb4Uislgt118pnASfW+mcAAAABYktHRAH/Ai3eAAAAB3RJTUUH5AUFDBg2+oR40gAAAoxJREFUWMPtmOlfEkEYxycxAQVCFJUVSMpVCBBRFMmENMxCUFO7Lc3yyg47zG677/uu3z/bLtfu+pl9sQu86BO/F+wzv332y87D7MwOhGRUoYEqaSqIVJXqOMD2LSCgiqhQFVBKkFanVySdVgZUrbQ+1TKgGhiMCmRAjSzIpKQ+pjKoDCopaAfMSkBm1MqALHVKOITUWUo9jRQNVG9VRrHWy4AaGpuUcJoaG/6ZcVQGlUHFANnANCsQA5sMyO5QtvQ77HLTiHOnIjlLPB+1uFSoZStol9pXSGC3BNQKtk2VWLSKOVq0u9WUiBB3O7Sipgd71HEI8cInNEzwd9CSnIFOkQJOWk6HX/Q8BNFFy+kOScsaMtOyuhDMhT3opS5EYfSJ34b7EKFlWXvRkw33op/afQZGcdOIfdS0fugywQCiMVrCfgwOidtDgzhAy4tFMZAO4himftNBsFKDxQg18RDi/OEwkKDuEDRgpAYDDTUxAXRyoFH1T4egZPrnCyvZONAUTg+fFLykQHmR4j7HMD5RoMZxhANNRqYKrdBUZDJ9Z9OxAjVdaG0k2lYklUH/NwiIHJUMrGO13KA/fuKk2Dt1OsqZM2ckiW0+zqtMns2MRTIbB+aEs+fmcX4mfIHBQkAwRwAbu+gClpbz3ooHuLh66TJwhWS7dnUNvmvZ09eBGzf5YN2BW7lrNjB/mz+67+BubrfSPYF79/ngwQKS+RqN4uEmbz4aRii3cKw8xsYTPjDrhWXIADzlj8/sQO6vrOU1eJ5nQWQdaH6x+hJ49Tp/729YILjI6oG3QidN7/B+KfzhIxKiBWUOiM9mQORT6jNXOdeYpJpfvnKe/5tF7H3/8ZMzf/3+Iza1EeAvtr05pHWuTqcAAAAASUVORK5CYII=" />
                                    </svg>
                                    <span class="counter color-green">20</span>
                                    <p class="color-green">+ Training Courses</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="72px" height="79px">
                                        <image x="0px" y="0px" width="72px" height="79px"
                                            xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABPCAMAAAB/NnPNAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACo1BMVEX///8tMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJL///9r5VNNAAAA33RSTlMAACpgeYRyURmH3McEAnb16q6Shb3VOg23sT8DDGLb+2kKSQmYD6PjJGv+72dOLlDAfNdwXvxI4QaRsJ5/GzXxFwdcbfAeFflCdPIvuHum/ZUcZovQWLwllhYrq/qAFFaGmWX09zaX5KETzczuLZt6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" />
                                    </svg>
                                    <span class="counter color-blue">300</span>
                                    <p class="color-blue">+ Student</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="72px" height="71px">
                                        <image x="0px" y="0px" width="72px" height="71px"
                                            xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABHCAMAAACTZfGgAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACvlBMVEX///8tmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhf////Z9I0RAAAA6HRSTlMAALv77U7Cw9xSvDlMUGXKT1MeBO5aEf3YVB/vqSMCAxI4Lof3EMfXuqcKVoNFLGjIUQ8NXXBsZMyWGqYVKi2EDkFtAS86NjNA8x3njJoUQ18IoGvkzWmkcmNg36uvwLRKF/6bJbnGfRvpsPWtZ4shdOwMNPQJxDH5Sc6Bar+jwSLL1tOyJpN30fwLtzwyWBiXgHqClTtX8jVEQhzUeFwpE52KtVvqlHF2IBaz8cXwKDfgYX7biIXJpTDdBtIH2Yn45q5I3nt8Sz2xeXPjz5j64Z7aK1Xihpz2n+Wiqrgkb5lHGai96Kx1fW7M+gAAAAFiS0dEAIgFHUgAAAAHdElNRQfkBQUMHhhwCNKbAAAEtklEQVRYw+2Y+1dUVRTHOYSAolgwiAQCQgiITigakAQiMChkIK8B8hEkSAQU6PhCI95vzCwVhDQFo0yzDALzUWlKb+mhmVr2/v4ZnXPnDjOXmXPvlKxWq+X3h9l7zrrnc89j7zP7jI2NKNt7ICe7ScSibMwE2DtwZe8ITLYWNIXIyIkOaqqVIHs50DQ4T8e91oEc5ED3wcVVZWl2fx/kRma4W5idBdBMeZAHIfd7ms/OHDTTSxFEZpnPzhxk1tfbx1sv1zEQ8TWbnTlotp/0CX9jMD4QQDzgpG+eM252FtYoUApyC7IVFRQ8l4Rg3nwm9YOgyy4PCpVbowWm6bLwDrY/bNHih/QKj4DLHYBMFImHJwa05L8KinrEGlB0zFIFUKw7VMvi+KD4BI1Gk7h8BZIUQMl4lB6pKx/jgFIMoZIq7PkqqcKMoHikEe/0DGRyQFnQZufkPo7V1PczP7jXjIEiEMX8teCAcuGx7om8fDxJ/fUFhfZSFW7Qg4qILyKF0ame4oBSMbkYcH+6RHbXkkgpyp6h7rNw44IS6KjV5Q6yoAqSQedZsJG4byLcqS0nREewmfpbtkoXaNEYiCRgw7YSYDsqeaAdcNxZ/FyV4D9fXRNoVE1tihFUB2rrG4B6HmhLhvByz0aZqQWjHk2C11zND0ifChovuha5FNHmt6KNOWVoV0yRjsxdXNALEAfkCX6u6RbPq9xd+eIegA96CdjB7Mto4IP2iju0j6X2/s5Yibo6XUTQAWa7MYMPckbPKwcP1eJV6mvMU6SaAQ5Dy4waRwgflIvevqO5oBlJyKHSxtckyu6fz7q24nVm3qjSyIBS0RUOZHoek9k1vGn6jQtqIzHHyYlCFglvnWxvT2yvGMdxQzYzvW/7yoHeQYcPe2kV/TipX5dT40AqxDHzrrDUXFC4uKoMtLRnYHDQ3z9aymnDoLBCQjryQUVex0PnhL63zoMf18hjZgjDsiBF6XCamffF4P7noAF2zhAyCTnyoKTizNozZ7qn7OVwziJZsOcQIA9yFhebVbgBp84flup8ShiaI2jlvl8IffntF0o70+03lRf5QAV8uOAj/YrLBuSFMVDcrEQ/qdoX6vJXtgz0AReVI1s/orXcTasTbgEpSqBcfakoRFvUso/7TXQpnZYD3mglXX1bLxMlkDMutY2MjGAnsXCMsF8yaGmzhiiCQsQ+n7BnhjtHTNSpZm0X7YBmV2XQqqxPG/v7Gz+LJhx9js1HJqTQqvqCBvdEgOgRsvpfqyGDrAR9qQT6SjtkjbQqhYI9sxlW6kqALOiu7ur/JWDUyeQrLSRCaRp83SO5sH3TcILdaS5LsvfbAtr23dUDYs9rDkCZEXSwCd+vue71A8pjjV2yaZU/dMMWuGmslnbdAo6lBTvCeB/5sRUFYaI/FfhJx57ryEeWoc9tNG1kNu8ozhkuhPEq7GGlls3P5bg6NoxB2G1jNmA39iUa3tiN278wZzgCowZkDtDL7Nl0YJqY/RWtuLXeQOoATv+aVgcEGQ+tuUPAbzeGIgCTC0Xb70i+eb1kE2rUxmOkDHC4JpKKYq7QlbMNkfxpc+EP2rYiUvLvS8ufgbRxemmc6Xk0exT4C5sHAOBlXXP3AAAAAElFTkSuQmCC" />
                                    </svg>
                                    <span class="counter color-green">15</span>
                                    <p class="color-green">+ Topics</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="72px" height="69px">
                                        <image x="0px" y="0px" width="72px" height="69px"
                                            xlink:href="data:img/png;base64,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" />
                                    </svg>
                                    <span class="counter color-red">20</span>
                                    <p class="color-red">+ Teacher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Count Down End -->


    <!--? About Law Start-->
    <div class="about-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <span>{{ __('More About Us') }}</span>
                            <h2>FAB ACADEMY</h2>
                        </div>
                        <p>
                            Fab Lab: It is a global initiative to develop creativity and innovation from (MIT) .
                            It is a digital manufacturing laboratory designed to encourage the community to come and turn
                            their ideas and innovations into reality.
                            The factory contains the latest digital manufacturing machines, various machines, and
                            specialized engineers with knowledge and
                            experience.
                        <ul>
                            <li><span class="flaticon-business"></span> {{ __('Learn and Create') }}</li>
                            <li><span class="flaticon-communications-1"></span> {{ __('Certified Instructors') }}</li>
                            <li><span class="flaticon-graduated"></span> {{ __('Accredited certification') }}</li>
                            <li><span class="flaticon-tools-and-utensils"></span> {{ __('Graduation Projects') }}</li>
                        </ul>
                        {{-- <a href="about.html" class="btn">More About Us</a> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img d-none d-lg-block">
                            <img src="assets/img/gallery/about2.png" alt="">
                        </div>
                        <div class="about-back-img ">
                            <img src="assets/img/gallery/about1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Law End-->



    <!--? Blog Area Start -->
    < <!-- Blog Area End -->
    @endsection
