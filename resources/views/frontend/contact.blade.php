<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>I4 You News</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/frontend/img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/frontend/style.css">

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
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <div class="contact-content-area bg-white mb-30 p-30 box-shadow">
                        <!-- Google Maps -->
                        <div class="map-area mb-30">
                            <iframe src="https://www.google.com/maps/place/H%26B+entertainment/@-6.9797366,107.6096949,15z/data=!4m5!3m4!1s0x0:0x245ad187c1c81aba!8m2!3d-6.9852221!4d107.6041827" allowfullscreen></iframe>
                        </div>

                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Contact Info</h5>
                        </div>

                        <div class="contact-information mb-30">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur mauris id scelerisque eleifend. Nunc vestibulum cursus quam at scelerisque. Aliquam quis varius orci, vel tincidunt est. Proin ac tincidunti, atmots interdum erat. Maecenas neque lorem, aliquet in tempus non, efficitur ac neque.</p>

                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="icon mr-15">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <p>Our Office:</p>
                                    <h6>Kab.Bandung , BMI Rt04 Rw15 D1/11</h6>
                                </div>
                            </div>

                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="icon mr-15">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <p>Email:</p>
                                    <h6>taegds@gmail.com</h6>
                                </div>
                            </div>

                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="icon mr-15">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <p>Phone:</p>
                                    <h6>(+62) 888-2009-484</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>GET IN TOUCH</h5>
                        </div>

                        <!-- Contact Form Area -->
                        <div class="contact-form-area">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn mag-btn mt-30" type="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow">
                        <!-- Sidebar Widget -->
                         <div class="single-sidebar-widget p-30">
                            <!-- Social Followers Info -->
                            <div class="social-followers-info">
                                <!-- Facebook -->
                                <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 30K <span>Fans</span></a>
                                <!-- Twitter -->
                                <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 29,7K <span>Followers</span></a>
                                <!-- YouTube -->
                                <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 2,5Jt <span>Subscribers</span></a>
                                <!-- Google -->
                                <a href="#" class="instagram-followers"><i class="fa fa-instagram"></i> 30,4K <span>Followers</span></a>
                            </div>
                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Kategori</h5>
                            </div>

                            <!-- Catagory Widget -->
                            <ul class="catagory-widgets">
                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Gaya Hidup</span> </a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Travel</span></a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Makanan</span></a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Game</span></a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sports</span></a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Bola</span></a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>Acara Tv</span></a></li>
                            </ul>
                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget">
                            <a href="#" class="add-img"><img src="assets/frontend/img/core-img/logo1.png" alt=""></a>
                        </div>

                       <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Youtube</h5>
                            </div>

                            <div class="newsletter-form">
                                <p>Subscribe Channel YouTube kami untuk mendapatkan informasi terbaru.</p>
                                <form action="#" method="get">
                                    <input type="search" name="widget-search" placeholder="Enter your email">
                                    <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

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
