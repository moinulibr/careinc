@extends('frontend.layouts.app')
@section('title','Home')
@section('content')

    <!--    SLIDER SECTION-->
    <section class="slider-section">
        <div class="container-fluid">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('public/frontend') }}/images/slider/1.jpg" class="d-block w-100" alt="slider-photo">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('public/frontend') }}/images/slider/2.jpg" class="d-block w-100" alt="slider-photo">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('public/frontend') }}/images/slider/3.jpg" class="d-block w-100" alt="slider-photo">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('public/frontend') }}/images/slider/4.jpg" class="d-block w-100" alt="slider-photo">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!--   END SLIDER SECTION-->

    <!--    HOME SECTION-->
    <section class="head-home py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                    <div class="doctor-search-box py-5">
                        <h1>find specialized doctor's</h1>

                        <div class="tabs-box py-3">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="btnn-grad active custom" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#deep-search" type="button" role="tab" aria-controls="deep-search" aria-selected="true"> deep Search</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="btnn-grad custom" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#doctor-search" type="button" role="tab" aria-controls="doctor-search" aria-selected="false">search by doctor name</button>
                                </li>

                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="deep-search" role="tabpanel" aria-labelledby="pills-home-tab">

                                    <div class="search-form py-4">
                                        <form action="#">
                                            <div class="row">
                                                <div class="search-input-box">
                                                    <select name="" id="select_nice">
                                                        <option class="d-none">--City--</option>
                                                        <option value="1">Dhaka</option>
                                                        <option value="2">Dinajpur</option>
                                                        <option value="3">Thakurgao</option>
                                                    </select>
                                                </div>
                                                <div class="search-input-box">
                                                    <select name="" id="select_nice2">
                                                        <option class="d-none">--Specialities--</option>
                                                        <option value="1">Neiuron</option>
                                                        <option value="2">Eye</option>
                                                        <option value="3">hard</option>
                                                    </select>
                                                </div>
                                                <div class="search-input-box">
                                                    <select name="" id="select_nice3">
                                                        <option class="d-none">--Doctor Type--</option>
                                                        <option value="1">type1</option>
                                                        <option value="2">type2</option>
                                                        <option value="3">type3</option>
                                                    </select>
                                                </div>
                                                <div class="search-input-box" id="select_ince4">
                                                    <input type="text" placeholder="Doctor name">
                                                </div>
                                                <div class="search-button mt-2">
                                                    <a href="#" class="btn-grad">
                                                        <i class="fa fa-search"></i>
                                                        Search</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="doctor-search" role="tabpanel" aria-labelledby="pills-profile-tab">

                                    <div class="search-form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="search-input-box w-100 mt-4" id="select_ince4">
                                                    <input type="text" placeholder="Doctor name" class="w-100">
                                                </div>
                                                <div class="search-button mt-2">
                                                    <a href="#" class="btn-grad">
                                                        <i class="fa fa-search"></i>
                                                        Search</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 d-none d-lg-block">
                    <div class="home-right py-5">
                        <div class="doctor-box">
                            <div class="doctor-image">
                                <img src="{{ asset('public/frontend') }}/images/photo/femal-doctor.png" alt="doctor image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  END HOME SECTION-->

    <!--    HOME CARE SECTION-->
    <section class="home-care py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                    <div class="home-care-img-box">
                        <img src="{{ asset('public/frontend') }}/images/photo/home.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                    <div class="clients-details">
                        <h4>what is care incubator</h4>
                        <div class="dot-div footer pb-2">
                            <span class="dot first-dot"></span>
                        </div>
                        <p>
                            Care Incubator has a growing fleet of specialized, licensed and specially trained nursing staff to serve our patients all over Saudi Arabia. Our integrated services can be customized to serve your needs, be they transient, short visits or home-staying nursing care.
                        </p>
                        <p>
                            Care Incubator Home Care services can support you with the administration of medicine, attending to a loved one’s medical needs, measuring vital signs; or, if you need longer term care for a senior family member, or to provide hospice care services.
                        </p>
                        <p>
                            Care Incubator covers your needs – and more – in the most accessible and customizable way by providing you with:
                        </p>
                        <p>
                            1. Support with daily care services, medication administration, injections, etc.
                        </p>
                        <p>
                            2. Wound and skin care for bed-ridden patients.
                        </p>

                        <div>
                            <a href="#" class="btn-grad">see details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    HOME CARE SECTION-->

    <!--    HOME CARE SECTION-->
    <section class="home-care health-femily py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                    <div class="clients-details">
                        <h4>Healthcare for you and your family</h4>
                        <div class="dot-div footer pb-2">
                            <span class="dot first-dot"></span>
                        </div>
                        <p>
                            Searching for the best healthcare plans for you and your family? Aiming to protect your health as your most valuable asset, we provide you access to the best healthcare services in Saudi Arabia together with taking care of the medical expenses; so you’re empowered with your time and can easily focus on what’s important in your life
                        </p>
                        <p>
                            <b>Tele Medicine in Care Incubator</b> is offering you and your family quality healthcare services with a wider range of benefits, additional services and a higher coverage limit empowered with a mobile application giving you fast and easy access to all the services you need.
                        </p>
                        <p>
                            <b>Key Benefits:</b>
                        </p>
                        <p>
                            ✓ Access to more than 3,000 healthcare provider
                        </p>
                        <p>
                            ✓ Coverage for in-patient and out-patient treatments
                        </p>

                        <div>
                            <a href="#" class="btn-grad">see details</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 d-none d-lg-block">
                    <div class="home-care-img-box health-photo-box">
                        <img src="{{ asset('public/frontend') }}/images/photo/home.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    HOME CARE SECTION-->

    <!--    PROVITE SECTION-->
    <section class="provide-section py-5">
        <div class="container">
            <div class="provide-box">
                <div class="provide-title">
                    <h3>See what we provide for your health</h3>
                    <div class="dot-div">
                        <span class="dot first-dot"></span>
                    </div>
                </div>

                <div class="provide-tabs py-5">
                    <ul class="nav nav-p
                   ills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="btnn-grad active custom" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#personal-information" type="button" role="tab" aria-controls="personal-information" aria-selected="true">Certified doctors</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btnn-grad custom" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#qualification" type="button" role="tab" aria-controls="qualification" aria-selected="false">Accommodation</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btnn-grad custom" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#experience" type="button" role="tab" aria-controls="experience" aria-selected="false">Price?</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="btnn-grad custom" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#chember" type="button" role="tab" aria-controls="chember" aria-selected="false">Translator</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btnn-grad custom" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#gallery" type="button" role="tab" aria-controls="gallery" aria-selected="false">Appointments</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btnn-grad custom" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#publications" type="button" role="tab" aria-controls="publications" aria-selected="false">Assurance</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="personal-information" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="provide-details py-3">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="provide-details-txt">
                                            <h4>Certified doctors</h4>
                                            <p>
                                                All the travel issues like taking visa and passport will be taken care by us. We will have a protected shell to keep you safe till the end of your treatment.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="provide-details-image">
                                            <img src="{{ asset('public/frontend') }}/images/doctors/Doctor-790X1024-231x300.jpg" alt="provide photo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="qualification" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="provide-details py-3">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="provide-details-txt">
                                            <h4>Accommodation</h4>
                                            <p>
                                                The entire accommodation of you will be arranged by our team until the treatment done. The accommodation type will be in your reachable and satisfying way.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="provide-details-image">
                                            <img src="{{ asset('public/frontend') }}/images/doctors/Doctor-790X1024-231x300.jpg" alt="provide photo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="provide-details py-3">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="provide-details-txt">
                                            <h4>Price?</h4>
                                            <p>
                                                The total cost which we had offered for based on the treatment type will be less rather than you think. We had achieved these prices by our trust-able resources.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="provide-details-image">
                                            <img src="{{ asset('public/frontend') }}/images/doctors/Doctor-790X1024-231x300.jpg" alt="provide photo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="chember" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="provide-details py-3">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="provide-details-txt">
                                            <h4>Translator</h4>
                                            <p>
                                                The mode of communication in other countries will be a tough job to handle. For this we provide a translator to explain you in each of your situation till you reach your home.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="provide-details-image">
                                            <img src="{{ asset('public/frontend') }}/images/doctors/Doctor-790X1024-231x300.jpg" alt="provide photo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="provide-details py-3">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="provide-details-txt">
                                            <h4>Appointments</h4>
                                            <p>
                                                Making appointments with the best doctors for your problems will be done by us. We assure the quality of treatment with our responsible doctors.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="provide-details-image">
                                            <img src="{{ asset('public/frontend') }}/images/doctors/Doctor-790X1024-231x300.jpg" alt="provide photo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="publications" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="provide-details py-3">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="provide-details-txt">
                                            <h4>Assurance</h4>
                                            <p>
                                                The complete treatment assurance will be given by us from the beginning till the end. We will take care of you from the arrival to the departure.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="provide-details-image">
                                            <img src="{{ asset('public/frontend') }}/images/doctors/Doctor-790X1024-231x300.jpg" alt="provide photo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  END  PROVITE SECTION-->
    
         <!--    CONSULTANCY SECTION-->
    <div class="service-section py-5">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <div class="col-12 pb-4">
                        <h4>The highest standard of health care</h4>
                        <div class="dot-div">
                            <span class="dot first-dot"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="h-care-box">
                        <div class="card">
                            <img src="{{ asset('public/frontend') }}/images/hiest-care/1.png" class="card-img-top" alt="service-image">
                            <div class="card-body">
                                <h6>
                                    Medication
                                </h6>
                                <p>
                                    The entire Medication will be taken care by us in the presence of experienced
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="h-care-box">
                        <div class="card">
                            <img src="{{ asset('public/frontend') }}/images/hiest-care/2.png" class="card-img-top" alt="service-image">
                            <div class="card-body">
                                <h6>Heart Care</h6>
                                <p>
                                    All issues of heart are taken utmost care by our Best Health Care Services Team.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="h-care-box">
                        <div class="card">
                            <img src="{{ asset('public/frontend') }}/images/hiest-care/3.png" class="card-img-top" alt="service-image">
                            <div class="card-body">
                                <h6>Overall Health Care</h6>
                                <p>
                                    The complete health issues which you are facing will be cleared at one point by Best Health Care Services.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="h-care-box">
                        <div class="card">
                            <img src="{{ asset('public/frontend') }}/images/hiest-care/4.png" class="card-img-top" alt="service-image">
                            <div class="card-body">
                                <h6>Care & Cure</h6>
                                <p>
                                    The patients will be given complete health care regarding their problem with proper concern.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
    <!--  END CONSULTANCY SECTION-->

    <!--    CONSULTANCY SECTION-->
    <div class="service-section healthcare py-5">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <div class="col-12 pb-4">
                        <h4>Healthcare Consultancy</h4>
                        <div class="dot-div">
                            <span class="dot first-dot"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-box">
                        <div class="card">
                            <div class="card-image-box">
                                <img src="{{ asset('public/frontend') }}/images/consultancy/1.jpg" class="card-img-top" alt="service-image">
                            </div>
                            <div class="card-body">
                                <h6>
                                    Human Resource
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-box">
                        <div class="card">
                            <div class="card-image-box">
                                <img src="{{ asset('public/frontend') }}/images/consultancy/2.jpg" class="card-img-top" alt="service-image">
                            </div>
                            <div class="card-body">
                                <h6>Health Care Management</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-box">
                        <div class="card">
                            <div class="card-image-box">
                                <img src="{{ asset('public/frontend') }}/images/consultancy/3.jpg" class="card-img-top" alt="service-image">
                            </div>
                            <div class="card-body">
                                <h6>Healthcare Solutions</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-box">
                        <div class="card">
                            <div class="card-image-box">
                                <img src="{{ asset('public/frontend') }}/images/consultancy/4.jpg" class="card-img-top" alt="service-image">
                            </div>
                            <div class="card-body">
                                <h6>Certification Courses</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-box">
                        <div class="card">
                            <div class="card-image-box">
                                <img src="{{ asset('public/frontend') }}/images/consultancy/5.jpg" class="card-img-top" alt="service-image">
                            </div>
                            <div class="card-body">
                                <h6>Quality</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-box">
                        <div class="card">
                           <div class="card-image-box">
                                <img src="{{ asset('public/frontend') }}/images/consultancy/6.jpg" class="card-img-top" alt="service-image">
                           </div>
                            <div class="card-body">
                                <h6>Medical Camp </h6>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!--  END CONSULTANCY SECTION-->

@endsection