@extends('main.layout')

@section('content')
    <style>
        .fabmood_title {
            color: green;
            background-color: transparent;
            text-decoration: none;
        }
    </style>
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-7 col-md-8">
                            <div class="hero__caption">
                               <h4 data-animation="fadeInLeft" data-delay=".1s" style="color: #12223B;">
                                <b>
                                    {{__("Vujade Education")}}
                                </b>
                                </h4>
                                <h1 data-animation="fadeInLeft" data-delay=".4s" style="color: #CD6E10">
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
                            <h6> <b class="fabmood_title"> <a href="#">{{ __('Entrepreneurship') }}</a> </b></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-education"></span>
                        </div>
                        <div class="cat-cap">
                            <h6> <b class="fabmood_title"> <a href="#">{{ __('TEAMS SPONSORING') }}</a></h6> </b>
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
                            <h6> <b class="fabmood_title"> <a href="#">{{ __('AI') }}</a></h6> </b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-computing"></span>
                        </div>
                        <div class="cat-cap">
                            <h6> <b class="fabmood_title"> <a href="#">{{ __('CONTENT WRITING') }}</a></h6> </b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-tools-and-utensils"></span>
                        </div>
                        <div class="cat-cap">
                            <h6> <b class="fabmood_title"> <a href="#">{{ __('FAB ACADEMY DIPLOMA') }}</a></h6> </b>
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
                            <h6 class="fabmood_title"6><a href="#">{{ __('Innovation and Creativity') }}</a></h6>

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
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="72px" height="69px">
                                        <image x="0px" y="0px" width="72px" height="69px" style="color: #CD6E10;"
                                            xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABFCAMAAADerVCrAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAB11BMVEUXmnP///8XmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnP///8qvp8aAAAAm3RSTlMAAFDr4uMPOMDMwtJjMzzHMMguXAUTrvgdzuXda/4UIr+7NTa2pVX1F7iKibnzFUFEvYcv8j7xn9+ewYPkQvARLeoCLMOAc3KBRdaFhoRW+u5XA/wIOWTaeA4rk69LHJyLKdH2qeyiqgwYs6Cn3Foktw1MbwlYaZk0lNmCEkftSRDUGVsHJaiyuhoKd+jnrfQb4Uislgt118pnASfW+mcAAAABYktHRAH/Ai3eAAAAB3RJTUUH5AUFDBg2+oR40gAAAoxJREFUWMPtmOlfEkEYxycxAQVCFJUVSMpVCBBRFMmENMxCUFO7Lc3yyg47zG677/uu3z/bLtfu+pl9sQu86BO/F+wzv332y87D7MwOhGRUoYEqaSqIVJXqOMD2LSCgiqhQFVBKkFanVySdVgZUrbQ+1TKgGhiMCmRAjSzIpKQ+pjKoDCopaAfMSkBm1MqALHVKOITUWUo9jRQNVG9VRrHWy4AaGpuUcJoaG/6ZcVQGlUHFANnANCsQA5sMyO5QtvQ77HLTiHOnIjlLPB+1uFSoZStol9pXSGC3BNQKtk2VWLSKOVq0u9WUiBB3O7Sipgd71HEI8cInNEzwd9CSnIFOkQJOWk6HX/Q8BNFFy+kOScsaMtOyuhDMhT3opS5EYfSJ34b7EKFlWXvRkw33op/afQZGcdOIfdS0fugywQCiMVrCfgwOidtDgzhAy4tFMZAO4himftNBsFKDxQg18RDi/OEwkKDuEDRgpAYDDTUxAXRyoFH1T4egZPrnCyvZONAUTg+fFLykQHmR4j7HMD5RoMZxhANNRqYKrdBUZDJ9Z9OxAjVdaG0k2lYklUH/NwiIHJUMrGO13KA/fuKk2Dt1OsqZM2ckiW0+zqtMns2MRTIbB+aEs+fmcX4mfIHBQkAwRwAbu+gClpbz3ooHuLh66TJwhWS7dnUNvmvZ09eBGzf5YN2BW7lrNjB/mz+67+BubrfSPYF79/ngwQKS+RqN4uEmbz4aRii3cKw8xsYTPjDrhWXIADzlj8/sQO6vrOU1eJ5nQWQdaH6x+hJ49Tp/729YILjI6oG3QidN7/B+KfzhIxKiBWUOiM9mQORT6jNXOdeYpJpfvnKe/5tF7H3/8ZMzf/3+Iza1EeAvtr05pHWuTqcAAAAASUVORK5CYII=" />
                                    </svg> --}}

                                    <svg fill="#CD6E10" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297"
                                        xml:space="preserve"
                                        style="enable-background:new 0 0 600 450; height:71;width:71px;margin-bottom:24px;">
                                        <g>
                                            <path d="M287.631,15.459H157.869v-6.09c0-5.174-4.195-9.369-9.369-9.369s-9.369,4.195-9.369,9.369v6.09H9.369
                                                    c-5.174,0-9.368,4.195-9.368,9.369v30.918c0,5.174,4.194,9.369,9.368,9.369h6.09v160.68c0,5.174,4.195,9.369,9.369,9.369h104.934
                                                    L94.628,282.01c-3.104,4.139-2.266,10.012,1.874,13.116c1.685,1.265,3.657,1.874,5.614,1.874c2.848,0,5.661-1.294,7.502-3.748
                                                    l29.513-39.35v33.729c0,5.174,4.195,9.369,9.369,9.369s9.369-4.195,9.369-9.369v-33.729l29.513,39.35
                                                    c1.841,2.454,4.653,3.748,7.502,3.748c1.957,0,3.929-0.61,5.614-1.874c4.14-3.104,4.979-8.978,1.874-13.116l-35.134-46.846h104.934
                                                    c5.174,0,9.368-4.195,9.368-9.369V65.115h6.091c5.174,0,9.368-4.195,9.368-9.369V24.828
                                                    C296.999,19.654,292.805,15.459,287.631,15.459z M18.738,46.377v-12.18h259.523v12.18H18.738z M262.803,216.426H34.197V65.115
                                                    h228.605V216.426z" />
                                            <path
                                                d="M71.205,142.411h139.131c5.174,0,9.369-4.195,9.369-9.369c0-5.174-4.195-9.369-9.369-9.369H71.205
                                                    c-5.174,0-9.369,4.195-9.369,9.369C61.836,138.216,66.031,142.411,71.205,142.411z" />
                                            <path
                                                d="M71.205,111.493h30.918c5.174,0,9.369-4.194,9.369-9.369c0-5.174-4.195-9.369-9.369-9.369H71.205
                                                    c-5.174,0-9.369,4.195-9.369,9.369C61.836,107.299,66.031,111.493,71.205,111.493z" />
                                            <path d="M71.205,173.328h92.754c5.174,0,9.369-4.195,9.369-9.369s-4.195-9.369-9.369-9.369H71.205
                                                    c-5.174,0-9.369,4.195-9.369,9.369S66.031,173.328,71.205,173.328z" />
                                        </g>
                                    </svg>

                                    <span class="counter color-green" style="color: #CD6E10;">20</span>
                                    <p class="color-green" style="color: #CD6E10;">+ Training Courses</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                               
                                
                                    <svg width="71" height="71" viewBox="0 0 64 64"
                                        xmlns="http://www.w3.org/2000/svg" stroke-width="3" stroke="#CD6E10"
                                        fill="none">
                                        <path
                                            d="M48.61,56.07A16.61,16.61,0,0,0,32,39.45h0A16.61,16.61,0,0,0,15.39,56.07Z" />
                                        <path
                                            d="M39.41,28a8.11,8.11,0,0,1-8.25,8.1,8.28,8.28,0,0,1-7.95-8.37V16.45a.06.06,0,0,1,.05-.06,60.56,60.56,0,0,1,8.27-.68,54.93,54.93,0,0,1,7.91.68.06.06,0,0,1,.06.06Z" />
                                        <path
                                            d="M23.21,20.14l-8.27-3.8a.08.08,0,0,1,0-.13L31.32,8.39h.06l16.33,7.74a.07.07,0,0,1,0,.12L39.5,20.14" />
                                        <path d="M23.21,24.35H20.89s-2,0-2,3.1c0,2.86,2,2.86,2,2.86l2.72,0" />
                                        <path d="M39.41,24.71h2.32s2,0,2,3.09c0,2.86-2,2.86-2,2.86H39" />
                                        <line x1="46.85" y1="33.15" x2="46.85" y2="16.72" />
                                        <circle cx="46.85" cy="35.28" r="2.13" />
                                        <path d="M39.5,23a42.89,42.89,0,0,0-7.95-.69,40.85,40.85,0,0,0-8.34.69" />
                                    </svg>
                                    <span class="counter color-blue" style="color: #CD6E10;">300</span>
                                    <p class="color-blue" style="color: #CD6E10;">+ Student</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">

                                    <svg fill="none" stroke="#CD6E10" width="71px" height="71px"
                                        viewBox="-4 -2 24 24" xmlns="http://www.w3.org/2000/svg"
                                        preserveAspectRatio="xMinYMin" class="jam jam-document-f">
                                        <path
                                            d='M3 0h10a3 3 0 0 1 3 3v14a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V3a3 3 0 0 1 3-3zm1 7a1 1 0 1 0 0 2h8a1 1 0 0 0 0-2H4zm0 8a1 1 0 0 0 0 2h5a1 1 0 0 0 0-2H4zM4 3a1 1 0 1 0 0 2h8a1 1 0 0 0 0-2H4zm0 8a1 1 0 0 0 0 2h8a1 1 0 0 0 0-2H4z' />
                                    </svg>
                                    <span class="counter color-green" style="color: #CD6E10;">15</span>
                                    <p class="color-green" style="color: #CD6E10;">+ Topics</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <svg fill="none" stroke="#CD6E10" width="71px" height="71px"
                                        viewBox="0 0 64 64"
                                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">

                                        <g id="ICON">

                                            <path
                                                d="M60,3.5l-56,-0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1l2.171,-0c-0.111,0.313 -0.171,0.649 -0.171,1l-0,10.176c-0,0.552 0.448,1 1,1c0.552,0 1,-0.448 1,-1l0,-6.676l44,-0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-44,-0l0,-1.5c0,-0.552 0.448,-1 1,-1l46,-0c0.552,-0 1,0.448 1,1c0,0 -0,30.5 -0,30.5c-0,0.552 -0.448,1 -1,1l-23,-0l-0,-10.25c-0,-6.075 -4.925,-11 -11,-11c-0.665,0 -1.335,0 -2,0c-6.075,0 -11,4.925 -11,11l0,17.542c-1.104,0.329 -2.12,0.929 -2.95,1.758c-1.313,1.313 -2.05,3.093 -2.05,4.95c0,3.799 0,8 0,8c0,0.552 0.448,1 1,1l32,-0c0.552,-0 1,-0.448 1,-1l-0,-8c0,-1.857 -0.737,-3.637 -2.05,-4.95c-0.83,-0.829 -1.846,-1.429 -2.95,-1.758l-0,-5.292l23,0c1.657,-0 3,-1.343 3,-3l0,-30.5c-0,-0.351 -0.06,-0.687 -0.171,-1l2.171,-0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1Zm-30,43.5l-4.083,0c-0.477,2.836 -2.946,5 -5.917,5c-2.971,-0 -5.44,-2.164 -5.917,-5l-4.083,0c-1.326,-0 -2.598,0.527 -3.536,1.464c-0.937,0.938 -1.464,2.21 -1.464,3.536c0,0 0,7 0,7l4,-0l0,-4c0,-0.552 0.448,-1 1,-1c0.552,0 1,0.448 1,1l0,4l18,-0l0,-4c0,-0.552 0.448,-1 1,-1c0.552,0 1,0.448 1,1l0,4l4,-0l0,-7c0,-1.326 -0.527,-2.598 -1.464,-3.536c-0.938,-0.937 -2.21,-1.464 -3.536,-1.464Zm-6.126,0l-7.748,0c0.445,1.724 2.012,3 3.874,3c1.862,-0 3.429,-1.276 3.874,-3Zm6.126,-2l-20,-0c0,0 0,-17.25 0,-17.25c0,-4.971 4.029,-9 9,-9c0.665,0 1.335,0 2,0c4.971,0 9,4.029 9,9l0,17.25Zm-2,-17c-0,-0.552 -0.448,-1 -1,-1l-6.382,0c0,-0 -1.724,-3.447 -1.724,-3.447c-0.169,-0.339 -0.515,-0.553 -0.894,-0.553c-0.379,-0 -0.725,0.214 -0.894,0.553l-1.724,3.447c-0,0 -2.382,0 -2.382,0c-0.552,0 -1,0.448 -1,1l0,10c0,2.761 2.239,5 5,5c1.881,0 4.119,0 6,0c2.761,-0 5,-2.239 5,-5c-0,-4.138 -0,-10 -0,-10Zm-2,1l-0,9c-0,1.657 -1.343,3 -3,3c-0,-0 -6,0 -6,0c-1.657,-0 -3,-1.343 -3,-3c0,-0 0,-9 0,-9c-0,0 2,0 2,0c0.379,-0 0.725,-0.214 0.894,-0.553l1.106,-2.211c0,0 1.106,2.211 1.106,2.211c0.169,0.339 0.515,0.553 0.894,0.553l6,-0Zm14.5,6l11.5,0c0.552,-0 1,-0.448 1,-1c-0,-0.552 -0.448,-1 -1,-1l-11.5,0c-0.552,-0 -1,0.448 -1,1c-0,0.552 0.448,1 1,1Zm-3.5,-5l15,0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-15,0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1Zm-0,-5l15,0c0.552,-0 1,-0.448 1,-1c-0,-0.552 -0.448,-1 -1,-1l-15,0c-0.552,-0 -1,0.448 -1,1c-0,0.552 0.448,1 1,1Zm0,-5l15,0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-15,0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1Zm-7,-5l22,0c0.552,-0 1,-0.448 1,-1c-0,-0.552 -0.448,-1 -1,-1l-22,0c-0.552,-0 -1,0.448 -1,1c-0,0.552 0.448,1 1,1Z" />

                                        </g>

                                    </svg>
                                    <span class="counter color-red" style="color: #CD6E10;">20</span>
                                    <p class="color-red" style="color: #CD6E10;">+ Teacher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Count Down End -->

    <!--? Popular Course Start -->
    <div class="popular-course section-padding30">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Most Popular Course Of This Week</span>
                        <h2>Our Popular Course</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <!-- Single course -->
                        <div class="single-course mb-40">
                            <div class="course-img">
                                <img src="assets/img/gallery/popular_sub1.png" alt="">
                            </div>
                            <div class="course-caption">
                                <div class="course-cap-top">
                                    <h4><a href="#">{{ $course->name }}</a></h4>
                                </div>
                                <div class="course-cap-mid d-flex justify-content-between">
                                    <div class="course-ratting">
                                        {{-- {{$course->content}} --}}
                                        {{-- @markdown($course->content) --}}
                                        {{-- {!! $course->conten !!}
                                        { !! !!} --}}
                                        {!!  Str::inlineMarkdown($course->content) !!}
                                    </div>

                                </div>
                                <div class="course-cap-bottom d-flex justify-content-between">
                                    <ul>
                                        <li><i class="ti-user"></i> 562</li>
                                        <li><i class="ti-heart"></i> 562</li>
                                    </ul>
                                    <span>Free</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Single course -->
                    <div class="single-course mb-40">
                        <div class="course-img">
                            <img src="assets/img/gallery/popular_sub2.png" alt="">
                        </div>
                        <div class="course-caption">
                            <div class="course-cap-top">
                                <h4><a href="#">Web Development</a></h4>
                            </div>
                            <div class="course-cap-mid d-flex justify-content-between">
                                <div class="course-ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <ul>
                                    <li>52 Review</li>
                                </ul>
                            </div>
                            <div class="course-cap-bottom d-flex justify-content-between">
                                <ul>
                                    <li><i class="ti-user"></i> 562</li>
                                    <li><i class="ti-heart"></i> 562</li>
                                </ul>
                                <span>Free</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Single course -->
                    <div class="single-course mb-40">
                        <div class="course-img">
                            <img src="assets/img/gallery/popular_sub3.png" alt="">
                        </div>
                        <div class="course-caption">
                            <div class="course-cap-top">
                                <h4><a href="#">Digital Marketing</a></h4>
                            </div>
                            <div class="course-cap-mid d-flex justify-content-between">
                                <div class="course-ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <ul>
                                    <li>52 Review</li>
                                </ul>
                            </div>
                            <div class="course-cap-bottom d-flex justify-content-between">
                                <ul>
                                    <li><i class="ti-user"></i> 562</li>
                                    <li><i class="ti-heart"></i> 562</li>
                                </ul>
                                <span>Free</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section Button -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="browse-btn2 text-center mt-50">
                        <a href="courses.html" class="btn">Find More Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Course End -->


    <!--? About Law Start-->
    <div class="about-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <span style="color: #B5500C;">{{ __('More About Us') }}</span>
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
                            <li><span style="color: #0A1124;" class="flaticon-business"></span> {{ __('Learn and Create') }}</li>
                            <li><span style="color: #0A1124;" class="flaticon-communications-1"></span> {{ __('Certified Instructors') }}</li>
                            <li><span style="color: #0A1124;" class="flaticon-graduated"></span> {{ __('Accredited certification') }}</li>
                            <li><span style="color: #0A1124;" class="flaticon-tools-and-utensils"></span> {{ __('Graduation Projects') }}</li>
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
