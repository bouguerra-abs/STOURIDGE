<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('favicon.ico') }}" rel="icon" type='image/x-icon'>
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Fontawesome Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">

    <!-- =======================================================
    * Template Name: DevFolio - v2.4.0
    * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body id="page-top">

    <!-- ======= Header/ Navbar ======= -->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
        <a class="navbar-brand js-scroll" href="#page-top">{{ config('app.name') }}</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link js-scroll active" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll" href="#service">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll" href="#portfolio">Portfolio</a>
            </li>
            {{--  <li class="nav-item">
                <a class="nav-link js-scroll" href="#blog">Blog</a>
            </li>  --}}
            <li class="nav-item">
                <a class="nav-link js-scroll" href="#contact">Contact</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>

    <!-- ======= Intro Section ======= -->
    <div id="home" class="intro route bg-image" style="background-image: url(<?= $main->bc_img ?>)">
        <div class="overlay-itro"></div>
        <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
            <!--<p class="display-6 color-d">Hello, world!</p>-->
            <h1 class="intro-title mb-4">{{ $main->title }}</h1>
            <p class="intro-subtitle"><span class="text-slider-items">{{ $main->sub_title }}</span><strong class="text-slider"></strong></p>
            <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
            </div>
        </div>
        </div>
    </div><!-- End Intro Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about-mf sect-pt4 route">
            @if(count($abouts) > 0)
                @foreach($abouts as $about)
                <div class="container">
                    <div class="row">
                    <div class="col-sm-12">
                        <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6 col-md-5">
                                <div class="about-img">
                                    <img src="{{ url($about->image) }}" class="img-fluid rounded b-shadow-a" alt="About_Image">
                                </div>
                                </div>
                                <div class="col-sm-6 col-md-7">
                                <div class="about-info">
                                    <p><span class="title-s">Name: </span> <span>{{ $about->name }}</span></p>
                                    <p><span class="title-s">Profile: </span> <span>{{ $about->profile }}</span></p>
                                    <p><span class="title-s">Email: </span> <span>{{ $about->email }}</span></p>
                                    <p><span class="title-s">Phone: </span> <span>+{{ $about->phone }}</span></p>
                                </div>
                                </div>
                            </div>
                            <div class="skill-mf">
                                <p class="title-s">Skill</p>

                                <span>{{ $about->skill1 }}</span> <span class="pull-right">85%</span>
                                <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <span>{{ $about->skill2 }}</span> <span class="pull-right">75%</span>
                                <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <span>{{ $about->skill3 }}</span> <span class="pull-right">85%</span>
                                <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <span>{{ $about->skill4 }}</span> <span class="pull-right">70%</span>
                                <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <span>{{ $about->skill5 }}</span> <span class="pull-right">60%</span>
                                <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <span>{{ $about->skill6 }}</span> <span class="pull-right">80%</span>
                                <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <span>{{ $about->skill7 }}</span> <span class="pull-right">95%</span>
                                <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                    <h5 class="title-left">
                                        {{ $about->title }}
                                    </h5>
                                    </div>
                                    <p class="lead">{{ $about->description }}</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
            @endif
        </section>
        <!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="service" class="services-mf pt-5 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                        <h3 class="title-a">
                            Services
                        </h3>
                        <p class="subtitle-a">
                            The following are some of the services that I can provide to everyone who wishes to do so.
                        </p>
                        <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if(count($services) > 0)
                        @foreach($services as $service)
                            <div class="col-md-4">
                                <div class="service-box">
                                    <div class="service-ico">
                                        <span class="ico-circle"><i class="<?= $service->icon; ?>"></i></span>
                                    </div>
                                    <div class="service-content">
                                        <h2 class="s-title">{{ $service->title }}</h2>
                                        <p id="less_description_service" class="s-description text-center">{{ substr(strip_tags($service->description),0 , 150) }}</p>
                                        <p id="more_description_service" class="s-description text-center">{{ $service->description }}</p>
                                        @if (strlen(strip_tags($service->description)) > 150)
                                            <span id="dots" style="font-size: 2em">...</span>
                                            <button type="button" id="read_more" href="#" class="btn btn-info btn-sm read_more_description">Read More</button>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Counter Section ======= -->
        <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
            <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box counter-box pt-4 pt-md-0">
                    <div class="counter-ico">
                        <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
                    </div>
                    <div class="counter-num">
                        <p class="counter">100</p>
                        <span class="counter-text">WORKS COMPLETED</span>
                    </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                    <div class="counter-ico">
                        <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
                    </div>
                    <div class="counter-num">
                        <p class="counter">7</p>
                        <span class="counter-text">YEARS OF EXPERIENCE</span>
                    </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                    <div class="counter-ico">
                        <span class="ico-circle"><i class="ion-ios-people"></i></span>
                    </div>
                    <div class="counter-num">
                        <p class="counter">0</p>
                        <span class="counter-text">TOTAL CLIENTS</span>
                    </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                    <div class="counter-ico">
                        <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
                    </div>
                    <div class="counter-num">
                        <p class="counter">10</p>
                        <span class="counter-text">AWARD WON</span>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div><!-- End Counter Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                        <h3 class="title-a">
                            Portfolio
                        </h3>
                        <p class="subtitle-a">
                            Below are some of the projects that I have designed and developed.
                        </p>
                        <div class="line-mf"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @if(count($portfolios) > 0)
                        @foreach($portfolios as $portfolio)
                            <div class="col-md-4">
                                <div class="work-box">
                                    <a href="{{ url($portfolio->big_image) }}" data-gall="portfolioGallery" class="venobox">
                                        <div class="work-img">
                                            <img style="height:40vh" src="{{ url($portfolio->small_image) }}" alt="Small_Image" class="img-fluid">
                                        </div>
                                    </a>
                                    <div class="work-content">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <h2 class="w-title">{{ $portfolio->title }}</h2>
                                                <div class="w-more">
                                                <span class="w-ctegory">{{ $portfolio->sub_title }}</span> / <span class="w-date">{{ $portfolio->created_at->toDateString() }}</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="w-like">
                                                <a href="#"> <span class="ion-ios-plus-outline"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        {{--  <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
            <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-mf" class="owl-carousel owl-theme">
                    <div class="testimonial-box">
                        <div class="author-test">
                        <img src="assets/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                        <span class="author">Xavi Alonso</span>
                        </div>
                        <div class="content-test">
                        <p class="description lead">
                            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.
                        </p>
                        <span class="comit"><i class="fa fa-quote-right"></i></span>
                        </div>
                    </div>
                    <div class="testimonial-box">
                        <div class="author-test">
                        <img src="assets/img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                        <span class="author">Marta Socrate</span>
                        </div>
                        <div class="content-test">
                        <p class="description lead">
                            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.
                        </p>
                        <span class="comit"><i class="fa fa-quote-right"></i></span>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>  --}}
        <!-- End Testimonials Section -->

        <!-- ======= Blog Section ======= -->
        {{--  <section id="blog" class="blog-mf sect-pt4 route">
        <div class="container">
            <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                <h3 class="title-a">
                    Blog
                </h3>
                <p class="subtitle-a">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
                <div class="line-mf"></div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-4">
                <div class="card card-blog">
                <div class="card-img">
                    <a href="blog-single.html"><img src="assets/img/post-1.jpg" alt="" class="img-fluid"></a>
                </div>
                <div class="card-body">
                    <div class="card-category-box">
                    <div class="card-category">
                        <h6 class="category">Travel</h6>
                    </div>
                    </div>
                    <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                    <p class="card-description">
                    Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                    a pellentesque nec,
                    egestas non nisi.
                    </p>
                </div>
                <div class="card-footer">
                    <div class="post-author">
                    <a href="#">
                        <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                        <span class="author">Morgan Freeman</span>
                    </a>
                    </div>
                    <div class="post-date">
                    <span class="ion-ios-clock-outline"></span> 10 min
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-blog">
                <div class="card-img">
                    <a href="blog-single.html"><img src="assets/img/post-2.jpg" alt="" class="img-fluid"></a>
                </div>
                <div class="card-body">
                    <div class="card-category-box">
                    <div class="card-category">
                        <h6 class="category">Web Design</h6>
                    </div>
                    </div>
                    <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                    <p class="card-description">
                    Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                    a pellentesque nec,
                    egestas non nisi.
                    </p>
                </div>
                <div class="card-footer">
                    <div class="post-author">
                    <a href="#">
                        <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                        <span class="author">Morgan Freeman</span>
                    </a>
                    </div>
                    <div class="post-date">
                    <span class="ion-ios-clock-outline"></span> 10 min
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-blog">
                <div class="card-img">
                    <a href="blog-single.html"><img src="assets/img/post-3.jpg" alt="" class="img-fluid"></a>
                </div>
                <div class="card-body">
                    <div class="card-category-box">
                    <div class="card-category">
                        <h6 class="category">Web Design</h6>
                    </div>
                    </div>
                    <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                    <p class="card-description">
                    Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                    a pellentesque nec,
                    egestas non nisi.
                    </p>
                </div>
                <div class="card-footer">
                    <div class="post-author">
                    <a href="#">
                        <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                        <span class="author">Morgan Freeman</span>
                    </a>
                    </div>
                    <div class="post-date">
                    <span class="ion-ios-clock-outline"></span> 10 min
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>--}}
        <!-- End Blog Section -->

        <!-- ======= Contact Section ======= -->
        <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
            <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                    <div id="contact" class="box-shadow-full">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="title-box-2">
                            <h5 class="title-left">
                                Send Message Us
                            </h5>
                            </div>
                            <div>
                            <form action="{{ route('contact.store') }}" method="POST" id="contact" class="php-email-form">
                                {{--  class="php-email-form"  --}}
                                @csrf
                                <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validate"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validate"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                        <div class="validate"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                        <div class="validate"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mb-3">
                                    <div class="loading">Loading</div>
                                    {{--  <div class="sent-message">Your message has been sent. Thank you!</div>  --}}
                                    @include('alert.messages')
                                    <div class="error-message"></div>

                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                                </div>
                                </div>
                            </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="title-box-2 pt-4 pt-md-0">
                            <h5 class="title-left">
                                Get in Touch
                            </h5>
                            </div>
                            <div class="more-info">
                            <p class="lead">
                                There's a lot going well for {{ config('app.name') }}'s contact page: the beautiful design, the calls-to-action, the clearly displayed contact information, and the form below for visitors who want to get in touch with specific inquiries.
                                What I love the most about their page, though, is how welcoming they are. With copy like "We're ready to lead you into the future of web development" and "Get in touch with us," it makes visitors feel like they're being taken care of.
                                Many business contact pages are rather cold -- but the more friendly you make your page's copy, the better you'll make your visitors feel. After all, you should want them to contact you so you can help them and start building a relationship.
                            </p>
                            <ul class="list-ico">
                                <li><span class="ion-ios-location"></span> Hammam Chatt, Ben Arous(2043), Tunisie</li>
                                <li><span class="ion-ios-telephone"></span> +216 94 942 888</li>
                                <li><span class="ion-email"></span> bouguerraabdsatar2050@gmail.com</li>
                            </ul>
                            </div>
                            <div class="socials">
                            <ul>
                                <li><a href="{{ "https://www.facebook.com/boug.stou.9/" }}" target="_blank"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                                <li><a href="{{ "https://www.instagram.com/ridgestou/" }}" target="_blank"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                                <li><a href="{{ "https://twitter.com/b_abdsatar" }}" target="_blank"><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                                <li><a href="{{ "https://www.youtube.com/channel/UC0gDVbkK7U0TB9_DNRFHLAA" }}" target="_blank"><span class="ico-circle"><i class="fab fa-youtube"></i></span></a></li>
                                <li><a href="{{ "https://www.linkedin.com/in/bouguerra-abdesattar-471851170/" }}" target="_blank"><span class="ico-circle"><i class="fab fa-linkedin"></i></span></a></li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End main -->

    <!-- ======= Footer ======= -->
    <footer>
        <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <div class="copyright-box">
                <p class="copyright">Copyright <strong>{{ config('app.name') }}</strong> &copy; <?php echo date("Y"); ?>. All Rights Reserved</p>
            </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- ====== End Footer ====== -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="{{ asset('js/fontawesome.min.js') }}"></script>

    <script type="text/javascript">

        $(document).ready(function() {

            $(".read_more_description").click(function() {

                var elem = $(this).text();

                if (elem == "Read More") {

                    $(this).text("Read Less");

                    $(this).parent().children('#dots').css("display", "none");

                    $(this).parent().children('#less_description_service').css("display", "none");

                    $(this).parent().children('#more_description_service').slideDown(2000);

                } else {

                    $(this).text("Read More");

                    $(this).parent().children('#dots').css("display", "inline");

                    $(this).parent().children('#less_description_service').css("display", "inline");

                    $(this).parent().children('#more_description_service').slideUp(2000);

                }
            });

        });

    </script>

</body>

</html>
