
@php
        $url = Request::url();
        $parts = explode(app()->getLocale(), $url, 2);
@endphp
    

<!DOCTYPE html>

@if(app()->getLocale() == "en")    
<html lang="en" dir="auto">
@elseif(app()->getLocale() == "ar")
<html lang="ar" dir="rtl">
@endif

<head>
    <meta charset="UTF-8">

    <title>@yield('title') - Careincu</title>
    <link rel="icon" href="{{ asset('public/frontend') }}/{{ asset('public/frontend') }}/images/logo/invest-favicon.PNG" type="image/gif" sizes="16x16">
    <!--    BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!--    NICE SELECT-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />

    <!--    GOOGLE FONT-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,800;1,700&amp;family=Roboto:wght@500;700;900&amp;display=swap" rel="stylesheet">
    <!--    FONT AWSOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/slick.css">
    <!--    MAIN STYLE-->

    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/style.css">

    <!--    ARBI STYLE-->
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/style.css">


    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/responsive.css">

</head>

<body>

       <!--    LANGUAGE-->
    <div class="lan-btn">
    
    @if(app()->getLocale() == "en")
         
    <a href="{{ $parts[0].'ar'.$parts[1] }}"> <span>Arabic <img src="https://jobincu.com/frontend/logo/ar.png" alt=""> </span></a>
            
         
    @else
        
            <a href="{{ $parts[0].'en'.$parts[1] }}"> <span>English <img src="https://jobincu.com/frontend/logo/en_US.png" alt=""> </span></a>
           
         
    @endif
    
    
    
    </div>
    <!-- END LANGUAGE-->

    <!-- PROLODER & SCROLL-UP -->
    <div id="pre-loader" style="display: none;"> <img src="{{ asset('public/frontend') }}/images/icon/rign.svg" alt=""></div>
    <a id="button" class="show"></a>

    <!-- END PROLODER & SCROLL-UP -->

    <!--    CARD OVER-->
    <div class="cart-over" id="small-cart">
        <a href="#">
            <span class="cart-over-num">3 items</span>
            <span class="cart-over-logo">
                <i class="fa fa-cart-arrow-down"></i>
            </span>
            <span class="cart-over-blance">৳ 1200</span>
        </a>
    </div>
    <div class="cart-over-cart" id="cart-over-cart">
        <div class="cart-over-head">
            <span class="bag">
                <i class="fa fa-shopping-bag"></i>
                2 item
            </span>
            <span class="cart-cross">
                <i class="fa fa-times" id="remove-large-cart"></i>
            </span>

        </div>


        <div class="cart-items">
            <div class="cart-items-box d-flex bd-highlight align-items-center">
                <span class="flex-shrink-1 bd-highlight">
                    <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="card product">
                </span>
                <span class="w-100 bd-highlight">
                    <p class="card-head-over">Dettol Soap 75 gm Skin Care</p>
                    <p class="d-block card-head-price">৳ 40</p>
                </span>
                <span class="flex-shrink-1 bd-highlight">
                    <select name="" id="" class="cart-quentity">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </span>
                <span class="cart-final flex-shrink-1 bd-highlight">
                    <p>৳</p>
                    <p>900.0</p>
                </span>
                <span class="cart-cross-item flex-shrink-1 bd-highlight">
                    <i class="fa fa-times"></i>
                </span>
            </div>
            
            <div class="cart-items-box d-flex bd-highlight align-items-center">
                <span class="flex-shrink-1 bd-highlight">
                    <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="card product">
                </span>
                <span class="w-100 bd-highlight">
                    <p class="card-head-over">Dettol Soap 75 gm Skin Care</p>
                    <p class="d-block card-head-price">৳ 40</p>
                </span>
                <span class="flex-shrink-1 bd-highlight">
                    <select name="" id="" class="cart-quentity">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </span>
                <span class="cart-final flex-shrink-1 bd-highlight">
                    <p>৳</p>
                    <p>900.0</p>
                </span>
                <span class="cart-cross-item flex-shrink-1 bd-highlight">
                    <i class="fa fa-times"></i>
                </span>
            </div>
            
            <div class="cart-items-box d-flex bd-highlight align-items-center">
                <span class="flex-shrink-1 bd-highlight">
                    <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="card product">
                </span>
                <span class="w-100 bd-highlight">
                    <p class="card-head-over">Dettol Soap 75 gm Skin Care</p>
                    <p class="d-block card-head-price">৳ 40</p>
                </span>
                <span class="flex-shrink-1 bd-highlight">
                    <select name="" id="" class="cart-quentity">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </span>
                <span class="cart-final flex-shrink-1 bd-highlight">
                    <p>৳</p>
                    <p>900.0</p>
                </span>
                <span class="cart-cross-item flex-shrink-1 bd-highlight">
                    <i class="fa fa-times"></i>
                </span>
            </div>
        </div>


        <div class="cart-over-footer">
            <span class="card-footer-content">
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-primary">Order</button>
                    <button type="button" class="btn btn-info"> ৳ 335</button>
                </div>
                <span>Save ৳ 44</span>
                <span class="cart-icon-cart">
                    <i class="fa fa-cart-arrow-down"></i>
                </span>

            </span>
        </div>
    </div>
    <!--    CARD OVER-->



    <!--    HEADER TOP-->
    <section class="header-top">
        <div class="container">
            <div class="row">
                <div class="hp-left clearfix">
                    <span>
                        <i class="fa fa-volume-control-phone"></i>
                        0551175959
                    </span>
                    <span>
                        <i class="fa fa-envelope-o"></i>
                        info@careincu.com
                    </span>
                </div>
                <div class="hp-right clearfix">
                    <span class="hp-auth">
                        <!--                   <a href="#" class="btn-grad">registation</a>-->
                        <a href="#" class="btn-grad"> <i class="fa fa-sign-in"></i>
                            login
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!--   END HEADER TOP-->

    <!--    HEADER SECTION-->
    <header class="header-section">
        <div class="container">
            <div class="head-content">
                <div class="row">
                    <div class="col-12 col-xl-3">
                        <div class="main-logo">
                            <a href={{ route('frontend') }}>
                                <img src="{{ asset('public/frontend') }}/images/logo/logo.png" alt="logo">
                            </a>
                            <span class="mobile-btn d-block d-xl-none" id="mobile-btn">
                                <i id="mobile-click" class="fa fa-bars"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-9 d-none d-xl-block">
                        <div class="menubar">
                            <ul>
                                <li><a href="{{ route('frontend') }}"> Home</a></li>
                                <li class="sub-btn">
                                    <a href="{{ route('about') }}"> About us
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="sub-menu">
                                        <ul>
                                            <li><a href="#">company details</a></li>
                                            <li><a href="#">doctors</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="{{ route('online.pharmacy') }}"> online pharmacy </a> </li>
                                <li><a href="{{ route('home.care') }}"> home care </a> </li>
                                <li><a href="{{ route('telemedicine') }}">Telemedicine</a></li>
                                <li><a href="{{ route('medicaltourism') }}">Medical Tourism</a></li>
                                <li><a href="{{ route('contact') }}"> contact</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!--        MOBILE MENU-->
    <div id="mobile-menu" class="mobile-menu">
        <!-- accordion-->
        <div class="accordion accordion-flush" id="accordionFlushExample">

            <div class="mobile-logo">
                <a href="#">
                    <img src="{{ asset('public/frontend') }}/images/logo/logo.png" alt="mobile-logo">
                </a>
                <i id="mobile-cross" class="fa fa-times"></i>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('frontend') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            <i class="fa fa-home"></i> home
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button custom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#two" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <i class="fa fa-server"></i>
                        our service
                    </button>
                </h2>
                <div id="two" class="accordion-collapse collapse" aria-labelledby="two" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body custom">
                        <ul>
                            <li><a href="#"><i class="fa fa-chevron-right"></i>company details</a></li>

                            <li><a href="#"><i class="fa fa-chevron-right"></i>doctors</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('online.pharmacy') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            <i class="fa fa-address-book-o"></i> online pharmacy
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('home.care') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            <i class="fa fa-life-ring"></i> home care
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('telemedicine') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            <i class="fa fa-bullseye"></i>Telemedicine
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('medicaltourism') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            <i class="fa fa-address-book"></i> Medical tourism
                        </button>
                    </a>
                </h2>
            </div>

            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('contact') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            <i class="fa fa-address-card-o"></i> contact
                        </button>
                    </a>
                </h2>
            </div>


        </div>

    </div>
    <!--   END MOBILE MENU-->



    @yield('content')




    <!--    FOOTER SECTION-->
    <footer class="footer-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-box">
                        <div class="footer-head pb-2">


                        </div>
                        <div class="footer-content">
                            <a href="#">
                                <img src="{{ asset('public/frontend') }}/images/logo/logo.png" alt="logo">
                            </a>
                            <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, voluptatibus!</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-box">
                        <div class="footer-head pb-2">
                            <h5>important link</h5>
                            <div class="dot-div footer">
                                <span class="dot first-dot"></span>
                                <span class="dot second-dot"></span>
                                <span class="dot third-dot"></span>
                            </div>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li><a href="#">Economic Incubator</a></li>
                                <li><a href="#">Discovering Leadership Center</a></li>
                                <li><a href="#">Export Incubator</a></li>
                                <li><a href="#">Marketing Incubator</a></li>
                                <li><a href="#">Events Incubator</a></li>
                                <li><a href="#">Technical Incubator</a></li>
                                <li><a href="#">Job Incubator</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-box">
                        <div class="footer-head pb-2">
                            <h5>menu bar</h5>
                            <div class="dot-div footer">
                                <span class="dot first-dot"></span>
                                <span class="dot second-dot"></span>
                                <span class="dot third-dot"></span>
                            </div>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li><a href="#">homepage</a></li>
                                <li><a href="#">about us</a></li>
                                <li><a href="#">our service</a></li>
                                <li><a href="#">available opportunities</a></li>
                                <li><a href="#">contect us</a></li>
                                <li><a href="#">registation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-box">
                        <div class="footer-head pb-2">
                            <h5>contacts us</h5>
                            <div class="dot-div footer">
                                <span class="dot first-dot"></span>
                                <span class="dot second-dot"></span>
                                <span class="dot third-dot"></span>
                            </div>
                        </div>
                        <div class="footer-content">
                            <div class="d-flex bd-highlight">
                                <div class="p-2 flex-shrink-1 bd-highlight">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="p-2 w-100 bd-highlight">
                                    <p>Care Incubators Startup Studio And corporate factory - Khaldiya Towers - 4th Tower - Faisal Bin Turki Road - Office No. 6 - Floor 13 - Riyadh</p>
                                </div>
                            </div>
                            <div class="d-flex bd-highlight">
                                <div class="p-2 flex-shrink-1 bd-highlight">
                                    <i class="fa fa-volume-control-phone"></i>
                                </div>
                                <div class="p-2 w-100 bd-highlight">
                                    <p>Phone : 0551175959</p>
                                </div>
                            </div>
                            <div class="d-flex bd-highlight">
                                <div class="p-2 flex-shrink-1 bd-highlight">
                                    <i class="fa fa-envelope-o"></i>

                                </div>
                                <div class="p-2 w-100 bd-highlight">
                                    <p>Email : info@careincu.com</p>
                                </div>
                            </div>
                            <div class="social-footer">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--   END FOOTER SECTION-->

    <!--    COPYRIGHT SECTION-->
    <section class="copyright-section py-1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h6 class="text-center"> Copyright © Care Incubators. All Right Reserved </h6>
                </div>
            </div>
        </div>
    </section>
    <!--    COPYRIGHT SECTION-->






    <!--    JQUERY-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--    BOOSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="{{ asset('public/frontend') }}/js/main.js"></script>
    <script src="{{ asset('public/frontend') }}/js/slick.min.js"></script>
    <!--    NICE SELECT2-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous"></script>

    <script>
       


        $('#select_nice').select2();
        $('#select_nice2').select2();
        $('#select_nice3').select2();
        $('#select_nice4').select2();
        
        $(document).ready(function(){
            $('#small-cart').click(function(){
                $('#cart-over-cart').addClass('show_cart_large')
            })
            $('#remove-large-cart').click(function(){
                $('#cart-over-cart').removeClass('show_cart_large')
            })
        })

    </script>
    

</body>

</html>
