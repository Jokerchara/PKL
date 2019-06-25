<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Title -->
        <title>I 4You News</title>

        <!-- Favicon -->
        <link rel="icon" href="assets/frontend/img/core-img/favicon.png" />

        <!-- Stylesheet -->
        <link rel="stylesheet" href="assets/frontend/style.css" />
    </head>

    <body>
        <!-- Preloader -->
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="{{url('/')}}" class="nav-brand"><img src="assets/frontend/img/core-img/logo1.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="{{url('/')}}">Home<i class="ti-home" aria-hidden="true"></i></a></li>
                                    <li><a href="{{url('archived')}}">Archive<i class="ti-harddrive" aria-hidden="true"></i></a></li>
                                    <li><a href="#">Pages<i class="ti-write"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li><a href="{{url('archived')}}">Archive</a></li>
                                            <li><a href="{{url('video-post')}}">Single Video Post</a></li>
                                            <li><a href="{{url('single-post')}}">Single Post</a></li>
                                            <li><a href="{{url('about')}}">About Us</a></li>
                                            <li><a href="{{url('contact')}}">Contact</a></li>
                                            <li><a href="{{url('log')}}">Login</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Menu<i class="ti-menu-alt" aria-hidden="true"></i></a>
                                        <div class="dropdown">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{url('/')}}">Home</a></li>
                                                <li><a href="{{url('archived')}}">Archive</a></li>
                                                <li><a href="{{url('video-post')}}">Single Video Post</a></li>
                                                <li><a href="{{url('single-post')}}">Single Post</a></li>
                                                <li><a href="{{url('log')}}">Login</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="{{url('about')}}">About<i class="fa fa-user"></i></a></li>
                                    <li><a href="{{url('contact')}}">Contact<i class="fa fa-phone"></i></a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="{{url('/')}}" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Search and hit enter...">
                                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!-- Login -->
                            <a href="{{url('log')}}" class="login-btn">LogIn</a>
                            <!-- Submit Video -->
                            <a href="{{url('submit-video')}}" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">Submit Video</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/40.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <div class="mag-login-area py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="login-content bg-white p-30 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Great to have you back!</h5>
                        </div>

                        <form action="index.html" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email or User Name">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                </div>
                            </div>
                            <button type="submit" class="btn mag-btn mt-30">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Login Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <!-- Logo -->
                        <a href="index.html" class="foo-logo"><img src="assets/frontend/img/core-img/footer.png" alt=""></a>
                        <p>(Informtion for you News) I4UN adalah sebuah website buatan anak SMK Assalaam ,yang bertujuan untuk mengumpulkan beberapa berita terikini. </p>
                        <div class="footer-social-info">
                            <a href="www.facebook.com" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="www.gmail.com" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="www.instagram.com" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="www.twitter.com" class="twitter"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Kategori</h6>
                        <nav class="footer-widget-nav">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Gaya Hidup</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Teknologi</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Travel</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Musik</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Makanan</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fashion</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Game</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Bola</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Olahraga</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Acara TV</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Video Olahraga</h6>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="assets/frontend/img/bg-img/12.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Take A Romantic Break In A Boutique Hotel</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 3.507</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.907</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="assets/frontend/img/bg-img/13.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Travel Prudently Luggage And Carry On</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7.755</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 6.050</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Saluran</h6>
                        <ul class="footer-tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Fashionista</a></li>
                            <li><a href="#">Musik</a></li>
                            <li><a href="#">DESIGN</a></li>
                            <li><a href="#">BERITA</a></li>
                            <li><a href="#">TRENDING</a></li>
                            <li><a href="#">VIDEO</a></li>
                            <li><a href="#">GAME</a></li>
                            <li><a href="#">Olahraga</a></li>
                            <li><a href="#">Gaya Hidup</a></li>
                            <li><a href="#">Makanan</a></li>
                            <li><a href="#">Acara TV</a></li>
                            <li><a href="#">Video Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="assets/frontend/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="assets/frontend/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/frontend/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="assets/frontend/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="assets/frontend/js/active.js"></script>
</body>

</html>
