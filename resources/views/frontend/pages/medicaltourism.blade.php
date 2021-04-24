@extends('frontend.layouts.app')
@section('title','Home Care')
@section('content')
 

 
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





     





@endsection