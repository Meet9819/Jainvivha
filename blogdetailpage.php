<?php error_reporting(0);
define(SERVER_ROOT, __DIR__);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?> 
<?php include"allcss.php"; ?>

</head>
<body>




<?php include"header.php"; ?>



<section class="breadcrumb-outer text-center">
<div class="container">
<div class="breadcrumb-content">
<h2 class="white">Blog Single</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Blog Single</li>
</ul>
</nav>
</div>
</div>
<div class="overlay"></div>
</section>

<section class="blogmain">
<div class="container">
<div class="row">
<div class="col-md-8 col-xs-12 pad-right-30">
<div class="blog-single">
<div class="blog-image">
<img src="images/destination1.jpg" alt="image">
</div>
<div class="blog-content mar-bottom-30">
<h3 class="blog-title"><a href="blog-single.html">Counts Is the Greatest Change the Platform Has Ever Made</a></h3>
<div class="para-content pad-bottom-20">
<span class="mar-right-20"><a href="#" class="tag"><i class="fa fa-tag mar-right-5"></i> Popular </a></span>
<span class="mar-right-20"><a href="#"><i class="fa fa-user mar-right-5"></i> Adam Joel</a></span>
<span><a href="#"><i class="fa fa-comment"></i> 20</a></span>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipis Vi ales elit vitae lo bortis faucibus. Lorem ipsum dolor sit amet, conse dolor sit amet, consectetu ctetur adipis Viales. Lorem ipsum dolor sit amet, cons sit amet, consectetur adi ectetur adipis Vi.</p>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
</div>

<div class="blog-quote mar-bottom-30">
<p class="white">“To take a trivial example, which ever undertakes laborious physical work exercise, except obtain some advantage blinded” </p>
<span class="white">By Michael Delwell</span>
<i class="fas fa-quote-left"></i>
</div>
<div class="blog-imagelist mar-bottom-30">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
<img src="images/trending9.jpg" alt="image">
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<img src="images/trending8.jpg" alt="image">
</div>
</div>
</div>
<p class="mar-bottom-30">as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>

<div class="blog-share display-flex mar-bottom-30">
<div class="blog-share-tag">
<ul class="inline">
<li><strong>Posted In:</strong></li>
<li><a href="#">Fashion,</a></li>
<li><a href="#">Beauty,</a></li>
<li><a href="#">Vacation,</a></li>
<li><a href="#">Travel,</a></li>
<li><a href="#">News</a></li>
</ul>
</div>
<div class="header-social">
<ul>
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
</ul>
</div>
</div>

<div class="blog-author mar-bottom-30 bg-grey">
<div class="blog-author-item">
<div class="row display-flex">
<div class="col-md-3 col-sm-3 col-xs-12">
<div class="blog-thumb text-center">
<img src="images/inbox4.jpg" alt="">
</div>
</div>
<div class="col-md-9 col-sm-9 col-xs-12">
<h3 class="title"><a href="#">About Author <span>Graphic Designer</span></a></h3>
<p class="mar-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sceler neque in euismod. Nam vitae urnasodales neque in faucibus.</p>
</div>
</div>
</div>
</div>

<div class="blog-next mar-bottom-30">
<a href="#" class="pull-left">
<div class="prev">
<i class="fa fa-arrow-left white"></i>
<p class="white">Previous Post</p>
<p class="white">The bedding was hardly able</p>
</div>
</a>
<a href="#" class="pull-right">
<div class="next">
<i class="fa fa-arrow-right white"></i>
<p class="white">Previous Post</p>
<p class="white">The bedding was hardly able</p>
</div>
</a>
</div>

<div class="single-comments single-box">
<h3 class="mar-bottom-30">Showing 16 verified guest comments</h3>
<div class="comment-box">
<div class="comment-image">
<img src="images/testimonial1.jpg" alt="image">
</div>
<div class="comment-content">
<h4>Helena</h4>
<p class="comment-date">April 25, 2019 at 10:46 am</p>
<div class="comment-rate">
 <div class="rating mar-right-15">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="comment-title">The worst hotel ever"</span>
</div>
<p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
<div class="comment-like">
<div class="like-title">
<a href="#" class="biz-btn biz-btn1">Reply</a>
</div>
<div class="like-btn pull-right">
<a href="#" class="like"><i class="fa fa-thumbs-up"></i> Like</a>
<a href="#" class="disike"><i class="fa fa-thumbs-down"></i> Dislike</a>
<a href="#" class="love"><i class="flaticon-like"></i> Love</a>
</div>
</div>
</div>
</div>
<div class="comment-box">
<div class="comment-image">
<img src="images/testimonial1.jpg" alt="image">
</div>
<div class="comment-content">
<h4>Helena</h4>
<p class="comment-date">April 25, 2019 at 10:46 am</p>
<div class="comment-rate">
<div class="rating mar-right-15">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="comment-title">Was too noisy and not suitable for business meetings"</span>
</div>
<p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
<div class="comment-like">
<div class="like-title">
<a href="#" class="biz-btn biz-btn1">Reply</a>
</div>
<div class="like-btn pull-right">
<a href="#" class="like"><i class="fa fa-thumbs-up"></i> Like</a>
<a href="#" class="disike"><i class="fa fa-thumbs-down"></i> Dislike</a>
<a href="#" class="love"><i class="flaticon-like"></i> Love</a>
</div>
</div>
</div>
</div>
</div>
 
<div class="single-add-review pad-top-30">
<h3>Write a Review</h3>
<form>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" placeholder="Name">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="email" placeholder="Email">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea>Comment</textarea>
</div>
</div>
<div class="col-md-6">
<div class="form-btn">
<a href="#" class="biz-btn biz-btn1">Submit Review</a>
</div>
</div>
</div>
</form>
</div>
</div>
</div>

<div class="col-md-4 col-xs-12 pad-left-30">
<div class="blog-sidebar">
<div class="blog-search mar-bottom-30">
<input type="search" name="search" class="search" placeholder="keyword find here">
<a href="#" class="biz-btn biz-btn1"><i class=" fa fa-search"></i></a>
</div>
<div class="sidebar-item">
<h3>All Categories</h3>
<ul class="sidebar-category">
<li><a href="#">All</a></li>
<li><a href="#">Featured</a></li>
<li><a href="#">Sliders</a></li>
<li class="active"><a href="#">Manage Listings</a></li>
<li><a href="#">Address and Map</a></li>
<li><a href="#">Reservation Requests</a></li>
<li><a href="#">Your Reservation</a></li>
<li><a href="#">Search Results</a></li>
</ul>
</div>
<div class="sidebar-item">
<div class="sidebar-tabs">
<div class="sidebar-navtab text-center">
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#popular"><i class="fa fa-check-circle"></i> Most Popular </a></li>
<li><a data-toggle="tab" href="#recent"><i class="fa fa-check-circle"></i> Recent Post</a></li>
</ul>
</div>
<div class="tab-content">
<div id="popular" class="tab-pane fade in active">
<div class="sidebar-image mar-bottom-20 mar-top-20">
<a href="blog-single.html"><img src="images/trending3.jpg" alt=""></a>
</div>
<article class="post mar-bottom-20">
<div class="content display-flex">
<div class="blog-no">01</div>
<div class="content-list pad-left-15">
<div class="date mar-bottom-5">Jun 28, 2019</div>
<h4 class="mar-0"><a href="blog-single.html">Takes on Baboon, and It Doesn’t Go Well for It</a></h4>
</div>
</div>
</article>
<article class="post mar-bottom-20">
<div class="content display-flex">
<div class="blog-no">02</div>
<div class="content-list pad-left-15">
<div class="date mar-bottom-5">Jun 28, 2019</div>
<h4 class="mar-0"><a href="blog-single.html">Zebras Hold New Record for Longest Migration</a></h4>
</div>
</div>
</article>
<article class="post">
<div class="content display-flex">
<div class="blog-no">03</div>
<div class="content-list pad-left-15">
<div class="date mar-bottom-5">Jun 28, 2019</div>
<h4 class="mar-0"><a href="blog-single.html">African Reserve Got Killed by Lions Instead</a></h4>
</div>
</div>
</article>
</div>
<div id="recent" class="tab-pane fade">
<div class="sidebar-image mar-bottom-20 mar-top-20">
<a href="blog-single.html"><img src="images/trending4.jpg" alt=""></a>
</div>
<article class="post mar-bottom-20">
<div class="content display-flex">
<div class="blog-no">01</div>
<div class="content-list pad-left-15">
<div class="date mar-bottom-5">Jun 28, 2019</div>
<h4 class="mar-0"><a href="blog-single.html">Takes on Baboon, and It Doesn’t Go Well for It</a></h4>
</div>
</div>
</article>
<article class="post mar-bottom-20">
<div class="content display-flex">
<div class="blog-no">02</div>
<div class="content-list pad-left-15">
<div class="date mar-bottom-5">Jun 28, 2019</div>
<h4 class="mar-0"><a href="blog-single.html">Zebras Hold New Record for Longest Migration</a></h4>
</div>
</div>
</article>
 <article class="post">
<div class="content display-flex">
<div class="blog-no">03</div>
<div class="content-list pad-left-15">
<div class="date mar-bottom-5">Jun 28, 2019</div>
<h4 class="mar-0"><a href="blog-single.html">African Reserve Got Killed by Lions Instead</a></h4>
</div>
</div>
</article>
</div>
</div>
</div>
</div>
<div class="sidebar-item">
<h3>Recent Videos</h3>
<div class="sidebar-videos about-slider">
<article class="post mar-bottom-20">
<div class="content-image">
<a href="blog-single.html"><img src="images/destination1.jpg" alt=""></a>
</div>
<div class="content-list mar-top-15">
<div class="date mar-bottom-5">Jun 28, 2019</div>
<h4 class="mar-0"><a href="blog-single.html">Takes on Baboon, and It Doesn’t Go Well for It</a></h4>
</div>
</article>
<article class="post mar-bottom-20">
<div class="content-image">
<a href="blog-single.html"><img src="images/destination2.jpg" alt=""></a>
</div>
<div class="content-list mar-top-15">
<div class="date mar-bottom-5">Jun 28, 2019</div>
<h4 class="mar-0"><a href="blog-single.html">Favorite Travel Essentials for a Stylish Summer</a></h4>
</div>
</article>
</div>
</div>
<div class="sidebar-item">
<h3>Tags</h3>
<ul class="sidebar-tags">
<li><a href="#">Tour</a></li>
<li><a href="#">Rental</a></li>
<li><a href="#">City</a></li>
<li><a href="#">Yatch</a></li>
<li><a href="#">Activity</a></li>
<li><a href="#">Museum</a></li>
<li><a href="#">Beauty</a></li>
<li><a href="#">Classic</a></li>
<li><a href="#">Creative</a></li>
<li><a href="#">Designs</a></li>
<li><a href="#">Featured</a></li>
<li><a href="#">Free Style</a></li>
<li><a href="#">Programs</a></li>
<li><a href="#">Travel</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>

<?php include"footer.php"; ?>



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

<?php include"allscript.php"; ?>


<!-- Mirrored from cyclonethemes.com/demo/html/nepayatri/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Oct 2020 14:30:22 GMT -->
</html>