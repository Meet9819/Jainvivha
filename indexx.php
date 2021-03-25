
<?php error_reporting(0);
define(SERVER_ROOT, __DIR__);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?> 


<?php include"allcss.php"; ?>


<div id="preloader">
<div id="status"></div>
</div>


<header class="main_header_area">
<div class="header-content">
<div class="container">
<div class="links links-left">
<ul>
<li><a href="#"><i class="fa fa-phone-alt"></i> (000)999-898-888</a></li>
<li><a href="#"><i class="fa fa-envelope-open"></i> <span class="__cf_email__" data-cfemail="a6cfc8c0c9e6e8c3d6c7dfc7d2d4cf88c5c9cb">[email&#160;protected]</span></a></li>
<li>
<select>
<option>EUR</option>
<option>FRA</option>
<option>ESP</option>
</select>
</li>
</ul>
</div>
<div class="links links-right pull-right">
<ul>
<li>
<ul class="social-links">
<li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
</ul>
</li>
<li><a href="#" data-toggle="modal" data-target="#login"><i class="fa fa-sign-in-alt"></i> Login</a></li>
<li><a href="#" data-toggle="modal" data-target="#register"><i class="fa fa-sign-out-alt"></i> Register</a></li>
<li>
<div class="header_sidemenu">
<div class="menu">
<div class="close-menu">
<i class="fa fa-times white"></i>
</div>
<div class="m-contentmain">
<div class="m-logo mar-bottom-30">
<img src="images/logo-white.png" alt="m-logo">
</div>
<div class="content-box mar-bottom-30">
<h3 class="white">Get In Touch</h3>
<p class="white">We must explain to you how all seds this mistakens idea off denouncing pleasures and praising pain was born and I will give you a completed accounts..</p>
<a href="#" class="biz-btn biz-btn1">Consultation</a>
</div>
 <div class="contact-info">
<h4 class="white">Contact Info</h4>
<ul>
<li><i class="fa fa-map-marker-alt"></i> Travel 26, Old Brozon Mall, Newyrok NY 10005</li>
<li><i class="fa fa-phone-alt"></i>555 626-0234</li>
<li><i class="fa fa-envelope-open"></i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ccbfb9bcbca3beb88cb8beadbaa9a0e2afa3a1">[email&#160;protected]</a></li>
<li><i class="fa fa-clock"></i> Week Days: 09.00 to 18.00 Sunday: Closed</li>
</ul>
</div>
</div>
</div>
<div class="mhead">
<span class="menu-ham"><i class="fa fa-bars white"></i></span>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>

<div class="header_menu affix-top">
<nav class="navbar navbar-default">
<div class="container">
<div class="navbar-flex">

<div class="navbar-header">
<a class="navbar-brand" href="index.html">
<img src="images/logo-black.png" alt="image">
</a>
</div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav" id="responsive-menu">
<li class="dropdown submenu active">
<a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <i class="fa fa-angle-down" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li class="submenu dropdown">
<a href="index.html">Home Style <i class="fa fa-angle-right" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="index.html">Home Slider</a></li>
<li><a href="index-1.html">Home Banner</a></li>
<li><a href="index-2.html">Home Video</a></li>
</ul>
</li>
<li><a href="index-3.html">Home Style 1</a></li>
<li><a href="index-4.html">Home Style 2</a></li>
<li><a href="index-5.html">Home Style 3</a></li>
<li class="submenu dropdown">
<a href="home-search.html">Home Search <i class="fa fa-angle-right" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="home-search.html">search Banner</a></li>
<li><a href="home-search1.html">Search Slider</a></li>
<li><a href="home-search2.html">Search Video</a></li>
</ul>
</li>
</ul>
</li>
 <li class="submenu dropdown">
<a href="index-flights.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Flights <i class="fa fa-angle-down" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="index-flights.html">Flight Home</a></li>
<li><a href="flightlist.html">Flight Grid</a></li>
<li><a href="flightlist-1.html">Flight List</a></li>
<li><a href="flight-single.html">Flight Detail</a></li>
<li><a href="flight-booking.html">Booking</a></li>
<li><a href="flight-confirm.html">Thank You</a></li>
</ul>
</li>
<li class="submenu dropdown">
<a href="index-hotel.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hotel <i class="fa fa-angle-down" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="index-hotel.html">Hotel Home</a></li>
<li class="submenu dropdown">
<a href="hotellist-1.html.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hotel Lists<i class="fa fa-angle-right" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="hotellist-1.html">Hotel List 1</a></li>
<li><a href="hotellist-2.html">Hotel List 2</a></li>
</ul>
</li>
<li class="submenu dropdown">
<a href="hotelsingle-1.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hotel Detail<i class="fa fa-angle-right" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="hotelsingle-1.html">Hotel Single 1</a></li>
<li><a href="hotelsingle-2.html">Hotel Single 2</a></li>
</ul>
</li>
<li><a href="hotel-booking.html">Hotel Booking</a></li>
</ul>
</li>
<li class="submenu dropdown">
<a href="index-cars.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cars <i class="fa fa-angle-down" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="index-cars.html">Cars Home</a></li>
<li><a href="car-grid-view.html">Cars Grid</a></li>
<li><a href="car-list-view.html">Cars List</a></li>
<li><a href="car-detail.html">Cars Detail</a></li>
<li><a href="car-booking.html">Cars Booking</a></li>
</ul>
</li>
<li class="submenu dropdown">
<a href="index-cruise.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cruise <i class="fa fa-angle-down" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="index-cruise.html">Cruise Home</a></li>
<li><a href="cruise-grid-view.html">Cruise Grid</a></li>
<li><a href="cruise-list-view.html">Cruise List</a></li>
<li><a href="cruise-detail.html">Cruise Detail</a></li>
<li><a href="cruise-booking.html">Cruise Booking</a></li>
</ul>
</li>
<li class="submenu dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li class="submenu dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tour <i class="fa fa-angle-right" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="tourlist-1.html">Tour List 1</a></li>
<li><a href="tourlist-2.html">Tour List 2</a></li>
<li><a href="tourlist-3.html">Tour List 3</a></li>
<li><a href="toursinge-1.html">Tour Single 1</a></li>
</ul>
</li>
<li class="submenu dropdown">
<a href="service.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service<i class="fa fa-angle-right" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="service.html">Service</a></li>
<li><a href="service-detail.html">Service Detail</a></li>
</ul>
</li>
<li class="submenu dropdown">
<a href="about.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <i class="fa fa-angle-right" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="about.html">About Us</a></li>
<li><a href="about1.html">About Us 1</a></li>
</ul>
</li>
<li class="submenu dropdown">
<a href="events.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events<i class="fa fa-angle-right" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="events.html">Events One</a></li>
<li><a href="events1.html">Events Two</a></li>
<li><a href="events-detail.html">Events Detail</a></li>
</ul>
</li>
<li class="submenu dropdown">
 <a href="gallery.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<i class="fa fa-angle-right" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="gallery.html">Gallery 1</a></li>
<li><a href="gallery1.html">Gallery 2</a></li>
<li><a href="gallery2.html">Gallery Masonry</a></li>
<li><a href="gallery3.html">Gallery Lightbox</a></li>
</ul>
</li>
<li class="submenu dropdown">
<a href="contact.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us <i class="fa fa-angle-right" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="contact.html">Contact Us</a></li>
<li><a href="contact1.html">Contact Us 1</a></li>
</ul>
</li>
<li class="submenu dropdown">
<a href="404.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Error<i class="fa fa-angle-right" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="404.html">Error Page 1</a></li>
<li><a href="404-1.html">Error Page 1</a></li>
</ul>
</li>
<li class="submenu dropdown">
<a href="comingsoon.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Comming Soon<i class="fa fa-angle-right" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="comingsoon.html">Coming Soon 1</a></li>
<li><a href="comingsoon-1.html">Coming Soon 2</a></li>
</ul>
</li>
<li><a href="hotel-booking.html">Booking</a></li>
<li><a href="confirmation.html">Confirmation</a></li>
<li><a href="testimonial.html">Testimonials</a></li>
<li><a href="pricing.html">Pricing</a></li>
<li><a href="terms.html">Terms</a></li>
<li><a href="faq.html">FAQ</a></li>
</ul>
</li>
<li class="submenu dropdown">
<a href="blog-home.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blogs <i class="fa fa-angle-down" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="blog-home.html">Blog Homepage</a></li>
<li><a href="blog-list.html">Blog List</a></li>
<li><a href="blog-grid.html">Blog Grid</a></li>
<li><a href="blog-full.html">Blog Fullwidth</a></li>
 <li><a href="blog-left.html">Blog Left</a></li>
<li><a href="blog-list.html">Blog Right</a></li>
<li><a href="blog-masonry.html">Blog Masonry</a></li>
<li class="submenu dropdown">
<a href="blog-single.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog Single <i class="fa fa-angle-right" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="blog-single.html">Blog Single</a></li>
<li><a href="single-full.html">Blog Single Full</a></li>
<li><a href="single-left.html">Blog Single Left</a></li>
<li><a href="blog-single.html">Blog Single Right</a></li>
</ul>
</li>
</ul>
</li>
<li class="submenu dropdown">
<a href="dashboard.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dashboard <i class="fa fa-angle-down" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="dashboard.html">Dashboard</a></li>
<li><a href="dashboard-my-profile.html">User Profile</a></li>
<li><a href="dashboard-list.html">User Wishlist</a></li>
<li><a href="dashboard-messages.html">User Messages</a></li>
<li><a href="dashboard-history.html">Booking History</a></li>
<li><a href="dashboard-add-new.html">Add New</a></li>
<li><a href="dashboard-hotel-list.html">Hotel List</a></li>
<li><a href="dashboard-reviews.html">Dashboard Reviews</a></li>
</ul>
</li>
<li class="submenu dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop<i class="fa fa-angle-down" aria-hidden="true"></i></a>
<ul class="dropdown-menu">
<li><a href="shop.html">Shop Home</a></li>
<li><a href="shop-list.html">Shop List</a></li>
<li><a href="shop-detail.html">Shop Single</a></li>
<li><a href="cart.html">Cart</a></li>
<li><a href="checkout.html">Checkout</a></li>
<li><a href="login.html">Account</a></li>
<li><a href="forgot-password.html">Forgot Password</a></li>
</ul>
</li>
<li class="dropdown">
<a href="#search1" class="mt_search"><i class="fa fa-search"></i></a>
</li>
<li class="dropdown">
<a href="cart.html" class="mt_cart"><i class="fa fa-shopping-cart"></i><span class="number-cart">1</span></a>
</li>
</ul>
</div>
<div id="slicknav-mobile"></div>
 </div>
</div>
</nav>
</div>

</header>


<section class="banner">
<div class="slider">
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/slider/slider1.jpg)"></div>
<div class="swiper-content">
<h1>Make you Free to <span>travel</span> with us</h1>
<p class="mar-bottom-20">Foresee the pain and trouble that are bound to ensue and equal fail in their duty through weakness. </p>
<a href="" class="biz-btn">Explore More</a>
<a href="" class="biz-btn mar-left-10">Contact Us</a>
</div>
<div class="overlay"></div>
</div>
</div>
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/slider/slider7.jpg)"></div>
<div class="swiper-content">
<h1><span>Sensation Ice Trip</span> Is Coming For Kids</h1>
<p class="mar-bottom-20">Find awesome hotel, tour, car and activities in London, Foresee the pain and trouble</p>
<a href="" class="biz-btn">Find More</a>
</div>
<div class="overlay"></div>
</div>
</div>
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/slider/slider3.jpg)"></div>
<div class="swiper-content">
<h1>Your <span>Adventure</span> Wonderful Travel Calls Fast</h1>
<p class="mar-bottom-20">Find awesome hotel, tour, car and activities in London to ensue and equal fail in their duty</p>
<a href="" class="biz-btn">View More</a>
</div>
<div class="overlay"></div>
</div>
</div>
</div>

<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
</div>
</div>
</section>


<section class="banner-form">
<div class="container">
<div class="row display-flex">
<div class="col-md-7 col-sm-12">
<div class="why-us-about">
<div class="why-about-inner">
<h3 class="mar-bottom-5 themecolor">About NepaYatri</h3>
<h2 class="bold">We're truely dedicated to make your travel experience as much as simple and fun as possible</h2>
<p class="mar-0">Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum. In ac ultrices lectus.<br> Nullam ex elit, vestibulum ut urna non, tincidunt condimentum sem. Sed enim tortor, accumsan at consequat et, tempus sit ame</p>
</div>
</div>
</div>
<div class="col-md-5 col-sm-12">
<div class="form-content">
<div class="tab-content">
<div id="travel" class="tab-pane in active">
 <div class="row filter-box filter-box1">
<h3 class="form-title text-center">Find a Places</h3>
<div class="col-sm-12 col-xs-12">
<div class="form-group">
<label>Your Destination</label>
<div class="input-box">
<i class="flaticon-placeholder"></i>
<select class="niceSelect">
<option value="1">Where are you going?</option>
<option value="2">Argentina</option>
<option value="3">Belgium</option>
<option value="4">Canada</option>
<option value="5">Denmark</option>
</select>
</div>
</div>
</div>
<div class="col-sm-6 col-xs-12">
<div class="form-group">
<label>Check In</label>
<div class="input-box">
<i class="flaticon-calendar"></i>
<input id="date-range0" type="text" placeholder="yyyy-mm-dd">
</div>
</div>
</div>
<div class="col-sm-6 col-xs-12">
<div class="form-group">
<label>Check Out</label>
<div class="input-box">
<i class="flaticon-calendar"></i>
<input id="date-range1" type="text" placeholder="yyyy-mm-dd">
</div>
</div>
</div>
<div class="col-sm-6 col-xs-12">
<div class="form-group">
<label>Adult</label>
<div class="input-box">
<i class="flaticon-add-user"></i>
<select class="niceSelect">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>
</div>
</div>
<div class="col-sm-6 col-xs-12">
<div class="form-group">
<label>Children</label>
<div class="input-box">
<i class="flaticon-add-user"></i>
<select class="niceSelect">
<option value="1">1</option>
 <option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>
</div>
</div>
<div class="col-sm-8 col-sm-offset-2 col-xs-12">
<div class="form-group mar-top-5 mar-bottom-0 text-center">
<a href="#" class="biz-btn biz-btn1"><i class="fa fa-search"></i> Find Now</a>
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


<section class="why-us pad-top-0">
<div class="container">
<div class="section-title">
<h2>Why Choose Us</h2>
<p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
</div>
<div class="why-us-box">
<div class="row">
<div class="col-md-4">
<div class="why-us-item text-center">
<div class="why-us-icon">
<i class="flaticon-price"></i>
</div>
<div class="why-us-content">
<h3><a href="#">Competetive Pricing</a></h3>
<p class="mar-0">With 500+ suppliers and the purchasing power of 300 million members</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="why-us-item text-center">
<div class="why-us-icon">
<i class="flaticon-quality"></i>
</div>
<div class="why-us-content">
<h3><a href="#">Award Winning Service</a></h3>
<p class="mar-0">Fabulous Travel worry free knowing that we're here if you need us, 24 hours a day</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="why-us-item text-center">
<div class="why-us-icon">
<i class="flaticon-global"></i>
</div>
<div class="why-us-content">
<h3><a href="#">Worldwide Coverage</a></h3>
<p class="mar-0">1,200,000 hotels in more than 200 countries and regions & flights to over 5,000 citites.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="top-desti pad-0">
<div class="desti-inner">
<div class="row">
<div class="col-md-3 col-sm-6 col-xs-12">
<img src="images/destination3.jpg" alt="desti">
<div class="desti-title">
<div class="desti-title-inner">
<h2 class="white bold">Top Most <br>Destination</h2>
<p class="white mar-bottom-0">Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="desti-image">
<img src="images/destination3.jpg" alt="desti">
<div class="desti-content">
<div class="rating mar-bottom-5">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h3 class="white mar-bottom-0">New York</h3>
</div>
<div class="desti-overlay">
<a href="#" class="biz-btn-white">Book Now</a>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="desti-image">
<img src="images/destination4.jpg" alt="desti">
<div class="desti-content">
<div class="rating mar-bottom-5">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h3 class="white mar-bottom-0">Armania</h3>
</div>
<div class="desti-overlay">
<a href="#" class="biz-btn-white">Book Now</a>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="desti-image">
<img src="images/destination5.jpg" alt="desti">
<div class="desti-content">
<div class="rating mar-bottom-5">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h3 class="white mar-bottom-0">Manchester</h3>
</div>
<div class="desti-overlay">
<a href="#" class="biz-btn-white">Book Now</a>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="desti-image">
<img src="images/destination7.jpg" alt="desti">
<div class="desti-content">
<div class="rating mar-bottom-5">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h3 class="white mar-bottom-0">kathmandu</h3>
</div>
<div class="desti-overlay">
<a href="#" class="biz-btn-white">Book Now</a>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="desti-image">
<img src="images/destination8.jpg" alt="desti">
<div class="desti-content">
<div class="rating mar-bottom-5">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h3 class="white mar-bottom-0">Tokyo</h3>
</div>
<div class="desti-overlay">
<a href="#" class="biz-btn-white">Book Now</a>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="desti-image">
<img src="images/destination9.jpg" alt="desti">
<div class="desti-content">
<div class="rating mar-bottom-5">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h3 class="white mar-bottom-0">Norwich</h3>
</div>
<div class="desti-overlay">
<a href="#" class="biz-btn-white">Book Now</a>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="desti-image">
<img src="images/destination10.jpg" alt="desti">
<div class="desti-content">
<div class="rating mar-bottom-5">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h3 class="white mar-bottom-0">Norwich</h3>
</div>
<div class="desti-overlay">
<a href="#" class="biz-btn-white">Book Now</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="trending">
<div class="container">
<div class="section-title">
<h2>Perfect Holiday Plan</h2>
<p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
</div>
<div class="trend-box">
<div class="row mix tour">
<div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30">
<div class="trend-item">
<div class="ribbon ribbon-top-left"><span>25% OFF</span></div>
<div class="trend-image">
<img src="images/trending1.jpg" alt="image">
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
 </div>
<div class="trend-price">
<p class="price">From <span>$350.00</span></p>
</div>
</div>
<div class="trend-content">
<p><i class="flaticon-location-pin"></i> United Kingdom</p>
<h4><a href="#">Stonehenge, Windsor Castle, and Bath from London</a></h4>
<div class="rating mar-bottom-10">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="mar-left-5">38 Reviews</span>
<p class="mar-0"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30">
<div class="trend-item">
<div class="trend-image">
<img src="images/trending2.jpg" alt="image">
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
<div class="trend-price">
<p>Multi-day Tours</p>
<p class="price">From <span>$899.00</span></p>
</div>
</div>
<div class="trend-content">
<p><i class="flaticon-location-pin"></i> Germany</p>
<h4><a href="#">Bosphorus and Black Sea Cruise from Istanbul</a></h4>
<div class="rating mar-bottom-10">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star-half checked"></span>
<span class="fa fa-star-half checked"></span>
</div>
<span class="mar-left-5">48 Reviews</span>
<p class="mar-0"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30">
<div class="trend-item">
<div class="ribbon ribbon-top-left"><span>Featured</span></div>
<div class="trend-image">
<img src="images/trending3.jpg" alt="image">
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
<div class="trend-price">
<p>Attraction Tickets</p>
<p class="price">From <span>$350.00</span></p>
</div>
</div>
<div class="trend-content">
<p><i class="flaticon-location-pin"></i> Denmark</p>
<h4><a href="#">NYC One World Observatory Skip-the-Line Ticket</a></h4>
<div class="rating mar-bottom-10">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="mar-left-5">32 Reviews</span>
<p class="mar-0"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
<div class="trend-item">
<div class="trend-image">
<img src="images/trending4.jpg" alt="image">
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
<div class="trend-price">
<p class="price">From <span>$350.00</span></p>
</div>
</div>
<div class="trend-content">
<p><i class="flaticon-location-pin"></i> Japan</p>
<h4><a href="#">Stonehenge, Windsor Castle, and Bath from London</a></h4>
<div class="rating mar-bottom-10">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star-half checked"></span>
</div>
<span class="mar-left-5">21 Reviews</span>
<p class="mar-0"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
<div class="trend-item">
<div class="ribbon ribbon-top-left"><span>25% OFF</span></div>
<div class="trend-image">
<img src="images/trending5.jpg" alt="image">
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
<div class="trend-price">
<p>Multi-day Tours</p>
<p class="price">From <span>$899.00</span></p>
</div>
</div>
<div class="trend-content">
<p><i class="flaticon-location-pin"></i> Italy</p>
<h4><a href="#">Bosphorus and Black Sea Cruise from Istanbul</a></h4>
<div class="rating mar-bottom-10">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star-half checked"></span>
<span class="fa fa-star-half checked"></span>
</div>
<span class="mar-left-5">48 Reviews</span>
<p class="mar-0"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
<div class="trend-item">
<div class="trend-image">
<img src="images/trending6.jpg" alt="image">
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
<div class="trend-price">
<p>Attraction Tickets</p>
<p class="price">From <span>$350.00</span></p>
</div>
</div>
<div class="trend-content">
<p><i class="flaticon-location-pin"></i> Turkey</p>
<h4><a href="#">NYC One World Observatory Skip-the-Line Ticket</a></h4>
<div class="rating mar-bottom-10">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="mar-left-5">18 Reviews</span>
<p class="mar-0"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="call-to-action">
<div class="container">
<div class="action-content text-center mar-bottom-20">
<h2 class="white mar-bottom-0">Find next place to visit</h2>
<h3 class="white package-name">EXPLORE THE WORLD</h3>
</div>
<div class="video-button text-center">
<div class="call-button1">
<button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo">
<i class="fa fa-play"></i>
</button>
</div>
<div class="video-figure"></div>
</div>
</div>
</section>


<section class="cta-one">
<div class="container">
<div class="cta-one_block display-flex space-between">
<h2 class="white mar-bottom-0">Work with our amazing tour guides</h2>
<a href="contact.html" class="biz-btn-white">Join our team</a>
</div>
</div>
</section>


<section class="top-deals">
<div class="container">
<div class="section-title">
<h2>Today's Top Deals</h2>
<p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
</div>
<div class="row top-deal-slider">
<div class="col-md-4 slider-item">
<div class="slider-image">
<img src="images/trending7.jpg" alt="image">
</div>
<div class="slider-content">
<h6 class="mar-bottom-10"><i class="fa fa-map-marker-alt"></i> United Kingdom</h6>
<h4><a href="#">Earning Asiana Club Miles</a></h4>
<p>With upto 30% Off, experience Europe your way!</p>
<div class="deal-price">
<p class="price">From <span>$250.00</span></p>
</div>
</div>
</div>
<div class="col-md-4 slider-item">
<div class="slider-image">
<img src="images/trending8.jpg" alt="image">
</div>
<div class="slider-content">
<h6 class="mar-bottom-10"><i class="fa fa-map-marker-alt"></i> Thailand</h6>
<h4><a href="#">Save big on hotels!</a></h4>
<p>With upto 30% Off, experience Europe your way!</p>
<div class="deal-price">
<p class="price">From <span>$250.00</span></p>
</div>
</div>
</div>
<div class="col-md-4 slider-item">
<div class="slider-image">
<img src="images/trending9.jpg" alt="image">
</div>
<div class="slider-content">
<h6 class="mar-bottom-10"><i class="fa fa-map-marker-alt"></i> South Korea</h6>
<h4><a href="#">Experience Europe Your Way</a></h4>
<p>With upto 30% Off, experience Europe your way!</p>
<div class="deal-price">
<p class="price">From <span>$250.00</span></p>
</div>
</div>
</div>
<div class="col-md-4 slider-item">
<div class="slider-image">
<img src="images/trending10.jpg" alt="image">
</div>
<div class="slider-content">
<h6 class="mar-bottom-10"><i class="fa fa-map-marker-alt"></i> Germany</h6>
<h4><a href="#">Earning Asiana Club Miles</a></h4>
<p>With upto 30% Off, experience Europe your way!</p>
<div class="deal-price">
<p class="price">From <span>$250.00</span></p>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="discount-action pad-top-0">
<div class="container">
<div class="call-banner">
<div class="row">
<div class="col-md-6 col-xs-12">
<div class="call-banner-inner text-center">
<h2>SUMMER SPECIAL <br>UPTO 25% OFF</h2>
<h3 class="mar-bottom-20">SPEND THE BEST VACTION WITH US <br>The nights of Thailand</h3>
<a href="#" class="biz-btn biz-btn1">View Details</a>
</div>
</div>
<div class="col-md-6 col-xs-12"></div>
</div>
</div>
</div>
</section>


<section class="travelcounter">
<div class="container">
<div class="section-title">
<h2 class="white">call our agents to book</h2>
<p class="white">Travel award winning and top rated tour operator</p>
</div>
<div class="row service-gg">
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="counter-item">
<div class="counter-icon">
<i class="fas fa-hiking" aria-hidden="true"></i>
</div>
<div class="counter-content">
<h3 class="boats">80</h3>
<p class="mar-0">Pro Tour Guides</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
 <div class="counter-item">
<div class="counter-icon">
<i class="fa fa-map-marker-alt" aria-hidden="true"></i>
</div>
<div class="counter-content">
<h3 class="location">19</h3>
<p class="mar-0">Tours are Completed</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="counter-item">
<div class="counter-icon">
<i class="fa fa-walking" aria-hidden="true"></i>
</div>
<div class="counter-content">
<h3 class="showroom">10</h3>
<p class="mar-0">Traveling Experience</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="counter-item">
<div class="counter-icon">
<i class="fa fa-users" aria-hidden="true"></i>
</div>
<div class="counter-content">
<h3 class="lisence">100</h3>
<p class="mar-0">Happy Customers</p>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="top-review bg-grey">
<div class="container">
<div class="section-title">
<h2>Top Tour Reviews</h2>
<p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
</div>
<div class="row">
<div class="review-slider">
<div class="col-md-4 reviews-list align-center">
<div class="list-rv-detail">
<p class="mar-0"><i class="fa fa-quote-left mar-right-10"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
</div>
<div class="rev-author mar-top-40">
<div class="rev-image"><img src="images/inbox3.jpg" alt="image"></div>
<div class="rev-content mar-left-20">
<h4 class="mar-bottom-5">John Doe</h4>
<p class="mar-bottom-5"> CEO/Mario Brand</p>
<ul class="list-inline">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul>
</div>
</div>
</div>
<div class="col-md-4 reviews-list align-center">
<div class="list-rv-detail">
<p class="mar-0"><i class="fa fa-quote-left mar-right-10"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
</div>
<div class="rev-author mar-top-40">
<div class="rev-image"><img src="images/inbox1.jpg" alt="image"></div>
<div class="rev-content mar-left-20">
<h4 class="mar-bottom-5">Drank Bastis Doe</h4>
<p class="mar-bottom-5"> COO/Nell & wells Co.</p>
<ul class="list-inline">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul>
</div>
</div>
</div>
<div class="col-md-4 reviews-list align-center">
<div class="list-rv-detail">
<p class="mar-0"> <i class="fa fa-quote-left mar-right-10"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
</div>
<div class="rev-author mar-top-40">
<div class="rev-image"><img src="images/inbox2.jpg" alt="image"></div>
<div class="rev-content mar-left-20">
<h4 class="mar-bottom-5">John Doe</h4>
<p class="mar-bottom-5"> CEO/Mario Brand</p>
<ul class="list-inline">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul>
</div>
</div>
</div>
<div class="col-md-4 reviews-list align-center">
<div class="list-rv-detail">
<p class="mar-0"><i class="fa fa-quote-left mar-right-10"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
</div>
<div class="rev-author mar-top-40">
<div class="rev-image"><img src="images/inbox3.jpg" alt="image"></div>
<div class="rev-content mar-left-20">
<h4 class="mar-bottom-5">Wayne Nell</h4>
<p class="mar-bottom-5"> Director/Franchisis Com</p>
<ul class="list-inline">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul>
</div>
</div>
</div>
<div class="col-md-4 reviews-list align-center">
<div class="list-rv-detail">
<p class="mar-0"><i class="fa fa-quote-left mar-right-10"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
</div>
<div class="rev-author mar-top-40">
<div class="rev-image"><img src="images/inbox4.jpg" alt="image"></div>
<div class="rev-content mar-left-20">
<h4 class="mar-bottom-5">Yolksel Doke</h4>
<p class="mar-bottom-5"> CEO/Rupens Trator </p>
<ul class="list-inline">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="blog">
<div class="container">
<div class="section-title">
<h2>Recent Activities</h2>
<p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
</div>
<div class="blog-main">
<div class="row">
<div class="col-md-4 col-sm-6 col-xs-12">
<div class="row">
<div class="col-xs-12 mar-bottom-25">
<div class="grid">
<div class="grid-item">
<div class="gridblog-content">
<div class="date mar-bottom-15"><i class="flaticon flaticon-calendar"></i> Mar 15, 2017</div>
<h3><a href="blog-single.html">Raising say express had chiefly detract</a></h3>
<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam finibus, velit nec luctus dictum Nam finibus.</p>
<a href="blog-single.html" class="biz-btn biz-btn1">Read More</a>
</div>
</div>
</div>
</div>
<div class="col-xs-12">
<div class="grid">
<div class="grid-item grid-item1">
<div class="grid-image">
<img src="images/trending2.jpg" alt="blog">
</div>
<div class="gridblog-content">
<div class="date mar-bottom-10 white"><i class="flaticon flaticon-calendar"></i> Mar 15, 2017</div>
<h3 class="mar-0"><a href="blog-single.html" class="white">Raising say express had chiefly detract</a></h3>
</div>
</div>
</div>
</div>
</div>
 </div>
<div class="col-md-4 col-sm-6 col-xs-12">
<div class="row">
<div class="col-xs-12  mar-bottom-25">
<div class="grid">
<div class="grid-item grid-item1">
<div class="grid-image">
<img src="images/trending6.jpg" alt="blog">
</div>
<div class="gridblog-content">
<div class="date mar-bottom-10 white"><i class="flaticon flaticon-calendar"></i> Mar 15, 2017</div>
<h3 class="mar-0"><a href="blog-single.html" class="white">Raising say express had chiefly detract</a></h3>
</div>
</div>
</div>
</div>
<div class="col-xs-12">
<div class="grid">
<div class="grid-item">
<div class="gridblog-content">
<div class="date mar-bottom-15"><i class="flaticon flaticon-calendar"></i> Mar 15, 2017</div>
<h3><a href="blog-single.html">Raising say express had chiefly detract</a></h3>
<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam finibus, velit nec luctus dictum Nam finibus.</p>
<a href="blog-single.html" class="biz-btn biz-btn1">Read More</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
<div class="row">
<div class="col-xs-12 mar-bottom-25">
<div class="grid">
<div class="grid-item">
<div class="gridblog-content">
<div class="date mar-bottom-15"><i class="flaticon flaticon-calendar"></i> Mar 15, 2017</div>
<h3><a href="blog-single.html">Raising say express had chiefly detract</a></h3>
<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam finibus, velit nec luctus dictum Nam finibus.</p>
<a href="blog-single.html" class="biz-btn biz-btn1">Read More</a>
</div>
</div>
</div>
</div>
<div class="col-xs-12">
<div class="grid">
<div class="grid-item grid-item1">
<div class="grid-image">
<img src="images/trending7.jpg" alt="blog">
</div>
<div class="gridblog-content">
<div class="date mar-bottom-10 white"><i class="flaticon flaticon-calendar"></i> Mar 15, 2017</div>
<h3 class="mar-0"><a href="blog-single.html" class="white">Raising say express had chiefly detract</a></h3>
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


<section class="partners bg-grey">
<div class="container">
<div class="section-title">
<h2>Our Awesome Parnters</h2>
<p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
</div>
<div class="dest-partner">
<div class="row partner-slider">
<div class="col-md-2">
<img src="images/cl-3.png" alt="partners">
</div>
<div class="col-md-2">
<img src="images/cl-3.png" alt="partners">
</div>
<div class="col-md-2">
<img src="images/cl-3.png" alt="partners">
</div>
<div class="col-md-2">
<img src="images/cl-3.png" alt="partners">
</div>
<div class="col-md-2">
<img src="images/cl-3.png" alt="partners">
</div>
<div class="col-md-2">
<img src="images/cl-3.png" alt="partners">
</div>
<div class="col-md-2">
<img src="images/cl-3.png" alt="partners">
</div>
</div>
</div>
</div>
</section>


<section class="insta-main pad-0">
<div class="insta-inner">
<div class="row display-flex">
<div class="col-md-2 col-sm-3 col-xs-12">
<div class="insta-title">
<div class="insta-title-inner text-center">
<h4 class="white mar-bottom-5"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cb8da4a7a7a4bc8ba2a5b8bfaaacb9aaa6">[email&#160;protected]</a></h4>
<h3 class="white bold">Nepayatri</h3>
<a href="#" class="biz-btn-white">Follow Us</a>
</div>
</div>
</div>
<div class="col-md-10 col-sm-9 col-xs-12">
<div class="row attract-slider">
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="insta-image">
<a href="#"><img src="images/destination3.jpg" alt="insta"></a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="insta-image">
<a href="#"><img src="images/destination4.jpg" alt="insta"></a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="insta-image">
<a href="#"><img src="images/destination5.jpg" alt="insta"></a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="insta-image">
<a href="#"><img src="images/destination6.jpg" alt="insta"></a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="insta-image">
<a href="#"><img src="images/destination7.jpg" alt="insta"></a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="insta-image">
<a href="#"><img src="images/destination8.jpg" alt="insta"></a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
 <div class="insta-image">
<a href="#"><img src="images/destination9.jpg" alt="insta"></a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<footer>
<div class="footer-upper pad-bottom-50">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-12 col-xs-12">
<div class="footer-about">
<div class="footer-about-in mar-bottom-30">
<h3 class="white">Need Nepayatri Help?</h3>
<div class="footer-phone">
<div class="cont-icon"><i class="flaticon-call"></i></div>
<div class="cont-content mar-left-20">
<p class="mar-0">Got Questions? Call us 24/7!</p>
<p class="bold mar-0"><span>Call Us:</span> (888) 1234 56789</p>
</div>
</div>
</div>
<h3 class="white">Contact Info</h3>
<p>PO Box: +47-252-254-2542<br>
Location: Collins Stree, Vicotria 80, Australia</p>
<ul class="social-links">
<li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="footer-links">
<h3 class="white">Company</h3>
<ul>
<li><a href="#">About Us</a></li>
<li><a href="#">Careers</a></li>
<li><a href="#">Terms of Use</a></li>
<li><a href="#">Privacy Statement</a></li>
<li><a href="#">Feedbacks</a></li>
</ul>
</div>
</div>
<div class="col-md-2 col-sm-6 col-xs-12">
<div class="footer-links">
<h3 class="white">Support</h3>
<ul>
<li><a href="#">Account</a></li>
<li><a href="#">Legal</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Affiliate Program</a></li>
<li><a href="#">Privacy Policy</a></li>
</ul>
</div>
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
<div class="footer-subscribe">
<h3 class="white">Mailing List</h3>
<p class="white">Sign up for our mailing list to get latest updates and offers</p>
<form>
<input type="email" placeholder="Your Email">
<a href="#" class="biz-btn mar-top-15">Subscribe</a>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="footer-payment pad-top-30 pad-bottom-30 bg-white">
 <div class="container">
<div class="pay-main display-flex space-between">
<div class="footer-logo pull-left">
<a href="index.html"><img src="images/logo-black.png" alt="image"></a>
</div>
<div class="footer-payment-nav pull-right">
<ul>
<li><img src="images/payment/mastercard.png" alt="image"></li>
<li><img src="images/payment/paypal.png" alt="image"></li>
<li><img src="images/payment/skrill.png" alt="image"></li>
<li><img src="images/payment/visa.png" alt="image"></li>
<li>
<select>
<option>English (United States)</option>
<option>English (United States)</option>
<option>English (United States)</option>
<option>English (United States)</option>
<option>English (United States)</option>
</select>
</li>
<li>
<select>
<option>$ USD</option>
<option>$ USD</option>
<option>$ USD</option>
<option>$ USD</option>
<option>$ USD</option>
</select>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="footer-copyright">
<div class="container">
<div class="copyright-text pull-left">
<p class="mar-0">2020 Nepayatri. All rights reserved.</p>
</div>
<div class="footer-nav pull-right">
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">Careers</a></li>
<li><a href="#">Terms of Use</a></li>
<li><a href="#">Privacy</a></li>
<li><a href="#">Contact us</a></li>
</ul>
</div>
</div>
</div>
</footer>


<div id="back-to-top">
<a href="#"></a>
</div>


<div id="search1">
<button type="button" class="close">×</button>
<form>
<input type="search" value="" placeholder="type keyword(s) here" />
<button type="submit" class="btn btn-primary">Search</button>
</form>
</div>
<div class="modal fade" id="login" role="dialog">
<div class="modal-dialog">
<div class="login-content">
<div class="login-title section-border">
<h3>Login</h3>
</div>
<div class="login-form section-border">
<form>
<div class="form-group">
<input type="email" placeholder="Enter email address">
</div>
<div class="form-group">
<input type="password" placeholder="Enter password">
</div>
</form>
<div class="form-btn">
<a href="#" class="biz-btn biz-btn1">LOGIN</a>
</div>
<div class="form-group form-checkbox">
<input type="checkbox"> Remember Me
<a href="#">Forgot password?</a>
</div>
</div>
 <div class="login-social section-border">
<p>or continue with</p>
<a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
<a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
</div>
<div class="sign-up">
<p>Do not have an account?<a href="#">Sign Up</a></p>
</div>
</div>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
</div>
<div class="modal fade" id="register" role="dialog">
<div class="modal-dialog">
<div class="login-content">
<div class="login-title section-border">
<h3>Register</h3>
</div>
<div class="login-form section-border">
<form>
<div class="form-group">
<input type="text" placeholder="User Name">
</div>
<div class="form-group">
<input type="text" placeholder="Full Name">
</div>
<div class="form-group">
<input type="email" placeholder="Email">
</div>
<div class="form-group">
<input type="password" placeholder="Password">
</div>
</form>
<div class="form-btn">
<a href="#" class="biz-btn biz-btn1">REGISTER</a>
</div>
<div class="form-group form-checkbox">
<input type="checkbox"> Remember Me
<a href="#">Forgot password?</a>
</div>
</div>
<div class="login-social section-border">
<p>or continue with</p>
<a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
<a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
</div>
<div class="sign-up">
<p>Do not have an account?<a href="#">Sign Up</a></p>
</div>
</div>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.3.1.min.js" type="24cd70d801e38606439478e4-text/javascript"></script>
<script src="js/bootstrap.min.js" type="24cd70d801e38606439478e4-text/javascript"></script>
<script src="js/color-switcher.js" type="24cd70d801e38606439478e4-text/javascript"></script>
<script src="js/plugin.js" type="24cd70d801e38606439478e4-text/javascript"></script>
<script src="js/main.js" type="24cd70d801e38606439478e4-text/javascript"></script>
<script src="js/menu.js" type="24cd70d801e38606439478e4-text/javascript"></script>
<script src="js/custom-swiper2.js" type="24cd70d801e38606439478e4-text/javascript"></script>
<script src="js/custom-nav.js" type="24cd70d801e38606439478e4-text/javascript"></script>
<script src="js/custom-date.js" type="24cd70d801e38606439478e4-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="24cd70d801e38606439478e4-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"5ff8663138bdde4e","r":1,"version":"2020.11.6","si":10}'></script>
</body>
</html>