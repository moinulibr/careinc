@extends('frontend.layouts.app')
@section('title','Online Pharmacy')
@section('content')
 

 
   <!--CATEGORY PAGE-->
<div class="category-page pb-5">
    <div class="container-flud">
        <div class="category-main d-flex bd-highlight">
            <div class="category-left flex-shrink-1 bd-highlight">
                <div class="category-accordion">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button custom" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    fulfllment
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse custom collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body custom">
                                    <div class="fulfllment-body">
                                        <input type="checkbox" class="form-check-input">
                                        <img src="{{ asset('public/frontend') }}/images/logo/express.png" ; alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button custom" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                    category
                                </button>
                            </h2>
                            <div id="collapsetwo" class="accordion-collapse custom collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body custom">
                                    <div class="category-body">
                                        <ul class="first-ul">
                                            <li><a href="#">Electronics & Mobiles</a>
                                                <ul>
                                                    <li><a href="#">mobile phone</a>
                                                        <ul>
                                                            <li><a href="#">smartphone</a></li>
                                                            <li><a href="#">future phone</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button custom" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetree" aria-expanded="true" aria-controls="collapsetree">
                                    brand
                                </button>
                            </h2>
                            <div id="collapsetree" class="accordion-collapse custom collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body custom">
                                    <div class="brand-body">
                                        <div class="search-input">
                                            <input type="search" placeholder="Search" id="search">
                                        </div>
                                        <div class="brand-cat-box">
                                            <a href="#">
                                                <span><input type="checkbox" class="form-check-input"></span>
                                                <span>samsumg</span>
                                                <span class="right">(294)</span>
                                            </a>

                                            <a href="#">
                                                <span><input type="checkbox" class="form-check-input"></span>
                                                <span>apple</span>
                                                <span class="right">(94)</span>
                                            </a>

                                            <a href="#">
                                                <span><input type="checkbox" class="form-check-input"></span>
                                                <span>lg</span>
                                                <span class="right">(24)</span>
                                            </a>

                                            <a href="#">
                                                <span><input type="checkbox" class="form-check-input"></span>
                                                <span>sony</span>
                                                <span class="right">(394)</span>
                                            </a>

                                            <a href="#">
                                                <span><input type="checkbox" class="form-check-input"></span>
                                                <span>google</span>
                                                <span class="right">(34)</span>
                                            </a>
                                            <a href="#" class="see-style">see all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button custom" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                                    price
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse custom collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body custom">
                                    <div class="price-body">

                                        <div class="price-form">
                                            <form action="">
                                                <span>
                                                    <input type="number" value="200">
                                                </span>
                                                <span class="to">To</span>
                                                <span>
                                                    <input type="number" value="1000">
                                                </span>
                                                <span class="go-btn">
                                                    <a type="submit" href="#">go</a>
                                                </span>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button custom" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
                                    product rating
                                </button>
                            </h2>
                            <div id="collapsefive" class="accordion-collapse custom collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body custom">
                                    <div class="product-rating-body">
                                        <div class="product-rat">
                                            <span>1.9 stars or more</span>
                                            <span class="rat-count">(660)</span>
                                        </div>
                                        <div class="star-range">
                                            <input type="range">
                                        </div>
                                        <div class="onetofive">
                                            <span>1 star</span>
                                            <span class="star5">5 star</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="category-right w-100 bd-highlight">

                <div class="sorting-result d-flex bd-highlight">
                    <div class="soting-result-left flex-shrink-1 bd-highlight">
                        <p>
                           <b>Mobile Phones</b>
                        </p>
                    </div>
                    <div class="soting-result-right w-100 bd-highlight">
                        <span class="sort-div">
                            <b>sort by</b>
                            <select class="form-select custom" aria-label="Default select example">
                                <option selected>Recommended</option>
                                <option value="1">price low to hign</option>
                                <option value="2">price high to low</option>
                                <option value="3">new arrivals</option>
                            </select>
                        </span>
                        <span class="sort-div">
                            <b>display</b>
                            <select class="form-select custom" aria-label="Default select example">
                                <option selected>50 per page</option>
                                <option value="2">100 per page</option>
                                <option value="3">150 per page</option>
                            </select>
                        </span>
                    </div>
                </div>


                <div class="shop-brands">
                    <h5>Shop by Brand</h5>
                </div>
                <div class="shop-brands-img">
                    <div class="row">
                        <div class="col-4 col-sm-3 col-md-2 col-lg-1 col-xl-1">
                           <a href="#">
                                <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="brand name">
                           </a>
                        </div>
                        <div class="col-4 col-sm-3 col-md-2 col-lg-1 col-xl-1">
                            <a href="#">
                                <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="brand name">
                            </a>
                        </div>
                        <div class="col-4 col-sm-3 col-md-2 col-lg-1 col-xl-1">
                            <a href="#">
                                <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="brand name">
                            </a>
                        </div>
                        <div class="col-4 col-sm-3 col-md-2 col-lg-1 col-xl-1">
                            <a href="#">
                                <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="brand name">
                            </a>
                        </div>
                        <div class="col-4 col-sm-3 col-md-2 col-lg-1 col-xl-1">
                            <a href="#">
                                <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="brand name">
                            </a>
                        </div>
                        <div class="col-4 col-sm-3 col-md-2 col-lg-1 col-xl-1">
                            <a href="#">
                                <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="brand name">
                            </a>
                        </div>
                        <div class="col-4 col-sm-3 col-md-2 col-lg-1 col-xl-1">
                            <a href="#">
                                <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="brand name">
                            </a>
                        </div>
                        <div class="col-4 col-sm-3 col-md-2 col-lg-1 col-xl-1">
                            <a href="#">
                                <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="brand name">
                            </a>
                        </div>
                        <div class="col-4 col-sm-3 col-md-2 col-lg-1 col-xl-1">
                            <a href="#">
                                <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="brand name">
                            </a>
                        </div>
                        <div class="col-4 col-sm-3 col-md-2 col-lg-1 col-xl-1">
                            <a href="#">
                                <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="brand name">
                            </a>
                        </div>
                        <div class="col-4 col-sm-3 col-md-2 col-lg-1 col-xl-1">
                            <a href="#">
                                <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="brand name">
                            </a>
                        </div>
                        <div class="col-4 col-sm-3 col-md-2 col-lg-1 col-xl-1">
                            <a href="#">
                                <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="brand name">
                            </a>
                        </div>
                    </div>
                </div>

                 <!--    CONSULTANCY SECTION-->
    <div class="service-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <h4 class="text-capitalize">Medicine List</h4>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="search-medicine d-flex bd-highlight">
                        <span class="msearch w-100 bd-highlight">
                            <input type="search" placeholder="Search Medicine">
                        </span>
                        <span class="mbtn flex-shrink-1 bd-highlight">
                            <a href="#" class="btn-grad">
                                <i class="fa fa-search"></i>
                                search</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="madicin-box">
                        <div class="hot-deals-box cat clearfix">
                            <div class="sub-hot-deals-box clearfix">
                                <div class="hot-deals-img">
                                    <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="product-photo">
                                </div>
                                <div class="hot-deals-details">
                                    <div class="hot-deals-name">
                                       <span>(Capsule)</span>
                                        <p>
                                            Exor <span>(40 mg)</span>
                                        </p>
                                    </div>
                                    <h6 class="price">egp 242.00</h6>
                                    <p class="discount">
                                        <del>egp 269</del>
                                        <span>10%</span>
                                    </p>
                                </div>
                                <div>
                                    <div class="card-left">
                                        <a href="#" class="btn-grad small">add card</a>
                                    </div>
                                    <div class="card-right">
                                        <a href="#" class="btn-grad small">details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="madicin-box">
                        <div class="hot-deals-box cat clearfix">
                            <div class="sub-hot-deals-box clearfix">
                                <div class="hot-deals-img">
                                    <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="product-photo">
                                </div>
                                <div class="hot-deals-details">
                                    <div class="hot-deals-name">
                                       <span>(Capsule)</span>
                                        <p>
                                            Exor <span>(40 mg)</span>
                                        </p>
                                    </div>
                                    <h6 class="price">egp 242.00</h6>
                                    <p class="discount">
                                        <del>egp 269</del>
                                        <span>10%</span>
                                    </p>
                                </div>
                                <div>
                                    <div class="card-left">
                                        <a href="#" class="btn-grad small">add card</a>
                                    </div>
                                    <div class="card-right">
                                        <a href="#" class="btn-grad small">details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="madicin-box">
                        <div class="hot-deals-box cat clearfix">
                            <div class="sub-hot-deals-box clearfix">
                                <div class="hot-deals-img">
                                    <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="product-photo">
                                </div>
                                <div class="hot-deals-details">
                                    <div class="hot-deals-name">
                                       <span>(Capsule)</span>
                                        <p>
                                            Exor <span>(40 mg)</span>
                                        </p>
                                    </div>
                                    <h6 class="price">egp 242.00</h6>
                                    <p class="discount">
                                        <del>egp 269</del>
                                        <span>10%</span>
                                    </p>
                                </div>
                                <div>
                                    <div class="card-left">
                                        <a href="#" class="btn-grad small">add card</a>
                                    </div>
                                    <div class="card-right">
                                        <a href="#" class="btn-grad small">details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="madicin-box">
                        <div class="hot-deals-box cat clearfix">
                            <div class="sub-hot-deals-box clearfix">
                                <div class="hot-deals-img">
                                    <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="product-photo">
                                </div>
                                <div class="hot-deals-details">
                                    <div class="hot-deals-name">
                                       <span>(Capsule)</span>
                                        <p>
                                            Exor <span>(40 mg)</span>
                                        </p>
                                    </div>
                                    <h6 class="price">egp 242.00</h6>
                                    <p class="discount">
                                        <del>egp 269</del>
                                        <span>10%</span>
                                    </p>
                                </div>
                                <div>
                                    <div class="card-left">
                                        <a href="#" class="btn-grad small">add card</a>
                                    </div>
                                    <div class="card-right">
                                        <a href="#" class="btn-grad small">details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="madicin-box">
                        <div class="hot-deals-box cat clearfix">
                            <div class="sub-hot-deals-box clearfix">
                                <div class="hot-deals-img">
                                    <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="product-photo">
                                </div>
                                <div class="hot-deals-details">
                                    <div class="hot-deals-name">
                                       <span>(Capsule)</span>
                                        <p>
                                            Exor <span>(40 mg)</span>
                                        </p>
                                    </div>
                                    <h6 class="price">egp 242.00</h6>
                                    <p class="discount">
                                        <del>egp 269</del>
                                        <span>10%</span>
                                    </p>
                                </div>
                                <div>
                                    <div class="card-left">
                                        <a href="#" class="btn-grad small">add card</a>
                                    </div>
                                    <div class="card-right">
                                        <a href="#" class="btn-grad small">details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="madicin-box">
                        <div class="hot-deals-box cat clearfix">
                            <div class="sub-hot-deals-box clearfix">
                                <div class="hot-deals-img">
                                    <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="product-photo">
                                </div>
                                <div class="hot-deals-details">
                                    <div class="hot-deals-name">
                                       <span>(Capsule)</span>
                                        <p>
                                            Exor <span>(40 mg)</span>
                                        </p>
                                    </div>
                                    <h6 class="price">egp 242.00</h6>
                                    <p class="discount">
                                        <del>egp 269</del>
                                        <span>10%</span>
                                    </p>
                                </div>
                                <div>
                                    <div class="card-left">
                                        <a href="#" class="btn-grad small">add card</a>
                                    </div>
                                    <div class="card-right">
                                        <a href="#" class="btn-grad small">details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="madicin-box">
                        <div class="hot-deals-box cat clearfix">
                            <div class="sub-hot-deals-box clearfix">
                                <div class="hot-deals-img">
                                    <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="product-photo">
                                </div>
                                <div class="hot-deals-details">
                                    <div class="hot-deals-name">
                                       <span>(Capsule)</span>
                                        <p>
                                            Exor <span>(40 mg)</span>
                                        </p>
                                    </div>
                                    <h6 class="price">egp 242.00</h6>
                                    <p class="discount">
                                        <del>egp 269</del>
                                        <span>10%</span>
                                    </p>
                                </div>
                                <div>
                                    <div class="card-left">
                                        <a href="#" class="btn-grad small">add card</a>
                                    </div>
                                    <div class="card-right">
                                        <a href="#" class="btn-grad small">details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="madicin-box">
                        <div class="hot-deals-box cat clearfix">
                            <div class="sub-hot-deals-box clearfix">
                                <div class="hot-deals-img">
                                    <img src="{{ asset('public/frontend') }}/images/medisin/1.jpg" alt="product-photo">
                                </div>
                                <div class="hot-deals-details">
                                    <div class="hot-deals-name">
                                       <span>(Capsule)</span>
                                        <p>
                                            Exor <span>(40 mg)</span>
                                        </p>
                                    </div>
                                    <h6 class="price">egp 242.00</h6>
                                    <p class="discount">
                                        <del>egp 269</del>
                                        <span>10%</span>
                                    </p>
                                </div>
                                <div>
                                    <div class="card-left">
                                        <a href="#" class="btn-grad small">add card</a>
                                    </div>
                                    <div class="card-right">
                                        <a href="#" class="btn-grad small">details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--  END CONSULTANCY SECTION-->




            </div>

        </div>
    </div>
</div>
<!--END CATEGORY PAGE-->
   
   
     





@endsection