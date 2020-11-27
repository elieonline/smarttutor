@extends('layouts.master', ['title' => 'Home'])

@section('content')
        <!--// Main Banner \\-->
        <div class="wm-main-banner">

            <div class="wm-banner-one">
                <div class="wm-banner-one-for">
                    <div class="wm-banner-one-for-layer"> <img src="extra-images/banner-view1-1.jpg" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="extra-images/banner-view1-2.jpg" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="extra-images/banner-view1-3.jpg" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="extra-images/banner-view1-1.jpg" alt=""> </div>
                </div>
                <div class="wm-banner-one-nav">
                    <div class="wm-banner-one-nav-layer">
                        <h1>Smart Tutor</h1>
                        <p>Become profience in the course you are lagging behind</p>
                        <a href="#" class="wm-banner-btn">learn more</a>
                    </div>
                    <div class="wm-banner-one-nav-layer banner-bgcolor">
                        <h1>Expert Help</h1>
                        <p>Get Expert Help for English, Calculs,Data science and Test prep</p>
                        <a href="#" class="wm-banner-btn">learn more</a>
                    </div>
                </div>
            </div>

        </div>
        <!--// Main Banner \\-->

        <!--// Main Content \\-->
        <div class="wm-main-content">

            <!--// Main Section \\-->
            <div class="wm-main-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="wm-search-course">
                                <h3 class="wm-short-title wm-color">Find Your Tutor that can help</h3>
                                <p>Fill in the form below to find your Tutor:</p>
                                <form>
                                    <ul>
                                        <li>
                                            <div class="wm-radio">
                                                <div class="wm-radio-partition">
                                                    <input id="male" type="radio" name="gender" value="male">
                                                    <label for="male">Male</label>
                                                </div>
                                                <div class="wm-radio-partition">
                                                    <input id="female" type="radio" name="gender" value="female">
                                                    <label for="female">Female</label>
                                                </div>
                                            </div>
                                        </li>
                                        <li> <input type="text" value="Course Name" onblur="if(this.value == '') { this.value ='Course Name'; }" onfocus="if(this.value =='Course Name') { this.value = ''; }"> <i class="wmicon-search"></i> </li>

                                        <li> <input type="submit" value="Find Tutor"> </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="wm-service wm-box-service">
                                <ul>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-suitcase"></i>
                                            <h6><a href="#">Business</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-money"></i>
                                            <h6><a href="#">Economics</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-school"></i>
                                            <h6><a href="#">Math</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-science"></i>
                                            <h6><a href="#">Science</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-computer"></i>
                                            <h6><a href="#">Computing</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-technology3"></i>
                                            <h6><a href="#">Web Design</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-web3"></i>
                                            <h6><a href="#">Development</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-shape"></i>
                                            <h6><a href="#">Biology</a></h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-courses-popular-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="wm-fancy-title">
                                <h2>Best Ranked <span>Tutor</span></h2>
                            </div>
                            <div class="wm-courses wm-courses-popular">
                                <ul class="row">
                                    <li class="col-md-3">
                                        <div class="wm-courses-popular-wrap">
                                            <figure>
                                                <a href="#"><img src="extra-images/papular-courses-1.jpg" alt="">
                                                    <span class="wm-popular-hover"> <small>see course</small> </span>
                                                </a>
                                                <figcaption>
                                                    <img src="extra-images/papular-courses-thumb-1.jpg" alt="">
                                                    <h6><a href="#">Shelly T. Forrester</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6><a href="#">Advanced Architectural Research</a></h6>
                                                <div class="wm-courses-price"> <span>$32</span> </div>
                                                <ul>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social7"></i>
                                                            342</a></li>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social6"></i>
                                                            10</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="wm-courses-popular-wrap">
                                            <figure>
                                                <a href="#"><img src="extra-images/papular-courses-2.jpg" alt="">
                                                    <span class="wm-popular-hover"> <small>see course</small> </span>
                                                </a>
                                                <figcaption>
                                                    <img src="extra-images/papular-courses-thumb-2.jpg" alt="">
                                                    <h6><a href="#">Sam K. Harrington</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6><a href="#">Advanced Landscape & Urbanism</a></h6>
                                                <div class="wm-courses-price"> <span>Free</span> </div>
                                                <ul>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social7"></i>
                                                            438</a></li>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social6"></i>
                                                            28</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="wm-courses-popular-wrap">
                                            <figure>
                                                <a href="#"><img src="extra-images/papular-courses-3.jpg" alt="">
                                                    <span class="wm-popular-hover"> <small>see course</small> </span>
                                                </a>
                                                <figcaption>
                                                    <img src="extra-images/papular-courses-thumb-3.jpg" alt="">
                                                    <h6><a href="#">Sara A. Shirley</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6><a href="#">Transdisciplinary Design</a></h6>
                                                <div class="wm-courses-price"> <span>$79</span> </div>
                                                <ul>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social7"></i>
                                                            309</a></li>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social6"></i>
                                                            19</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="wm-courses-popular-wrap">
                                            <figure>
                                                <a href="#"><img src="extra-images/papular-courses-4.jpg" alt="">
                                                    <span class="wm-popular-hover"> <small>see course</small> </span>
                                                </a>
                                                <figcaption>
                                                    <img src="extra-images/papular-courses-thumb-4.jpg" alt="">
                                                    <h6><a href="#">Julius M. Lepage</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6><a href="#">Financial Information Systems</a></h6>
                                                <div class="wm-courses-price"> <span>$50</span> </div>
                                                <ul>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social7"></i>
                                                            298</a></li>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social6"></i>
                                                            11</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-learn-listing-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="wm-fancy-title">
                                <h2>You Can get <span>Tutor for</span></h2>
                            </div>
                            <div class="wm-learn-listing">
                                <ul class="row">
                                    <li class="col-md-6">
                                        <figure>
                                            <a href="#"><img src="extra-images/learn-listing-1.png" alt=""></a>
                                            <figcaption>
                                                <h2>Science</h2>
                                                <a href="#" class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure>
                                            <a href="#"><img src="extra-images/learn-listing-2.png" alt=""></a>
                                            <figcaption>
                                                <h2>Use of Language</h2>
                                                <a href="#" class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure>
                                            <a href="#"><img src="extra-images/learn-listing-3.png" alt=""></a>
                                            <figcaption>
                                                <h2>Math</h2>
                                                <a href="#" class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure>
                                            <a href="#"><img src="extra-images/learn-listing-4.png" alt=""></a>
                                            <figcaption>
                                                <h2>Test prep</h2>
                                                <a href="#" class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-contact-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="wm-contact-tab">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#home" aria-controls="home" data-toggle="tab">Contact
                                            Us</a></li>
                                    <li><a href="#profile" aria-controls="profile" data-toggle="tab">Information
                                            Details</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="wm-map">
                                                    <div id="map"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="wm-contact-form">
                                                    <span>Talk To Us Today</span>
                                                    <form>
                                                        <ul>
                                                            <li>
                                                                <i class="wmicon-black"></i>
                                                                <input type="text" value="Name" onblur="if(this.value == '') { this.value ='Name'; }" onfocus="if(this.value =='Name') { this.value = ''; }">
                                                            </li>
                                                            <li>
                                                                <i class="wmicon-symbol3"></i>
                                                                <input type="text" value="E-mail" onblur="if(this.value == '') { this.value ='E-mail'; }" onfocus="if(this.value =='E-mail') { this.value = ''; }">
                                                            </li>
                                                            <li>
                                                                <i class="wmicon-technology4"></i>
                                                                <input type="text" value="Phone" onblur="if(this.value == '') { this.value ='Phone'; }" onfocus="if(this.value =='Phone') { this.value = ''; }">
                                                            </li>
                                                            <li>
                                                                <i class="wmicon-web2"></i>
                                                                <textarea placeholder="Message"></textarea>
                                                            </li>
                                                            <li> <input type="submit" value="Send Message"> </li>
                                                        </ul>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="profile">
                                        <span class="wm-contact-title">Contact Info</span>
                                        <div class="wm-contact-service">
                                            <ul class="row">
                                                <li class="col-md-4">
                                                    <span class="wm-service-icon"><i class="wmicon-pin"></i></span>
                                                    <h5 class="wm-color">Address</h5>
                                                    <p></p>
                                                </li>
                                                <li class="col-md-4">
                                                    <span class="wm-service-icon"><i class="wmicon-phone"></i></span>
                                                    <h5 class="wm-color">Phone & Fax</h5>
                                                    <p></p>
                                                </li>
                                                <li class="col-md-4">
                                                    <span class="wm-service-icon"><i class="wmicon-letter"></i></span>
                                                    <h5 class="wm-color">E-mail</h5>

                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="contact-social-icon">
                                            <li><a href="#"><i class="wm-color wmicon-social5"></i> Facebook</a></li>
                                            <li><a href="#"><i class="wm-color wmicon-social4"></i> Twitter</a></li>
                                            <li><a href="#"><i class="wm-color wmicon-social3"></i> Linkedin</a></li>
                                            <li><a href="#"><i class="wm-color wmicon-vimeo"></i> Vimeo</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

        </div>
        <!--// Main Content \\-->

    </div>
    <!--// Main Wrapper \\-->
@endsection
@section('scripts')
<script>
    new WOW().init();

  </script>

@endsection
