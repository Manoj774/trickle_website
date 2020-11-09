<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Trickle</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::to('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/aos.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body">

        </div>
    </div>

    <div class="top-bar py-3 bg-light" id="home-section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 text-left">
                    <img src="{{ URL::to('images/logo2.png')}}" alt="Glogo">
                </div>
                <div class="col-6 text-right">
                    <button type="button" class="btn btn-orange">Download Now</button>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <!-- --------------------------- -->
    @include('includes.navbar')

    <div>
        @yield('content')
    </div>

    <!-- top section -->
    <div class="site-blocks-cover overlay" style="background-image: url({{ URL::to('images/hero_2.jpg')}});" data-aos="fade"
         data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">

                    <div class="row mb-4">
                        <div class="col-md-7">
                            <h1>trickle</h1>
                            <p class="mb-5 lead">Connecting Communities</p>
                            <!--  <div>
                              <a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">Shop Now</a>
                              <a href="#" class="btn btn-white py-3 px-5 rounded-0 d-block d-sm-inline-block">Club Membership</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section -->
    <div class="site-section bg-light" id="about-section">
        <div class="container">

            <div class="bg-white py-4">
                <div class="row mx-4 my-4 product-item-2 align-items-start">
                    <div class="col-md-6 mb-1 mb-md-0 order-1 order-md-2">
                        <img src="{{ URL::to('images/product_1_bg.png')}}" alt="Image" class="img-fluid">
                    </div>

                    <div class="col-md-5 mr-auto product-title-wrap order-2 order-md-1">
                        <h2 class="text-center mb-4 font-weight-bold" style="color: darkblue;font-weight: bolder;">About
                            Us</h2>
                        <p class="text-center font-weight-bold" style="color: darkblue;">An App for the Community</p>
                        <p class="mb-4" style="text-align: center; color: darkblue;">
                            Tricle is here serve our community with a completely diferant and competitive style of
                            deliver. We add convoniance to the lives of our partners and our customers.
                        </p>

                        <div class="mb-4 text-center">
                            <a href="#"
                               class="btn btn-blue btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">Download
                                on Google Play</a>
                        </div>
                        <div class="mb-4 text-center">
                            <a href="#" class="btn btn-blue rounded-0 d-block d-lg-inline-block">Download on App
                                Store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section -->
    <div class="site-section" id="blog-section">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-md-7 mb-5 mb-lg-0 position-relative">
                    <img src="{{ URL::to('images/hero_3.jpg')}}" class="img-fluid" alt="Image">
                    <!-- <div class="experience">
                      <span class="year">Trusted Merchant</span>
                      <span class="caption">for 50 years</span>
                    </div> -->
                </div>
                <div class="col-md-5 ml-auto">
                    <h2 class="section-title mb-3">Place Your Order Now</h2>
                    <h3 class="section-sub-title text-black">Trickle Now Delivering Food, Fashion and Retail</h3>
                    <br>

                    <div data-aos="fade-left">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary icon-money"></span></div>
                            <div>
                                <h3 style="color: #f47a21;">Food</h3>
                                <p class="text-black">Order from you favorite Resturants and Hotels</p>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-left">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary icon-people"></span></div>
                            <div>
                                <h3 style="color: #f47a21;">Fashion</h3>
                                <p class="text-black">Shop from your favorite clothing Store</p>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-left">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary icon-truck"></span></div>
                            <div>
                                <h3 style="color: #f47a21;">Retail</h3>
                                <p class="text-black">Giving a Supermarket to your hand </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- careers us section -->
    <div class="site-section bg-light" id="careers-section">
        <div class="container">
            <!--   <div class="row mb-5">
                <div class="col-12 text-center">

                </div>
              </div> -->
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6 col-lg-6  mb-lg-4">
                            <h3 class="section-title">Join with the Team</h3>
                            <h3 class="section-sub-title">we are looking forward to open doors for the young tallent
                                send your CVs now</h3>
                            <img src="{{ URL::to('images/about.jpg')}}" alt="Image" class="img-fluid" style="width: 600px;">

                        </div>
                        <div class="col-md-6 col-lg-6  mb-lg-4">
                            <!-- <img src="images/contact_us.jpg" alt="Image" class="img-fluid"> -->

                            <form action="#" class="p-5 mt-5 bg-white">
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="text" id="fullname" placeholder="Full Name"
                                               class="form-control rounded-0">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="email" id="email" placeholder="Email"
                                               class="form-control rounded-0">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="number" id="phone" placeholder="phone"
                                               class="form-control rounded-0">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="address" id="address" placeholder="Address"
                                               class="form-control rounded-0">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <textarea name="message" id="message" cols="30" rows="4"
                                                  class="form-control rounded-0"
                                                  placeholder="Write your Message here..."></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="submit" value="Send Message"
                                               class="btn btn-blue rounded-0 py-3 px-4">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq section -->
    <div class="site-section border-bottom" id="faq-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-3">Freequently Asked Questions</h2>
                    <br>
                    <h3 class="section-sub-title text-black">You Need Help ?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <div class="person text-center">
                        <img src="{{ URL::to('images/tag_orange.png')}}" alt="Image" class="tag-fluid rounded w-75 mb-3">

                        <h3 style="color: #f47a21;">How to Contact Trickle ?</h3>
                        <br>

                        <p class="position text-muted">Hotline: 0112 574 721</p>
                        <p class="position text-muted">Email: info@trickle.lk</p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <div class="person text-center">
                        <img src="{{ URL::to('images/tag_orange.png')}}" alt="Image" class="tag-fluid rounded w-75 mb-3">
                        <h3 style="color: #f47a21;">How to Join as a Delivery Partner ?</h3>
                        <br>

                        <p class="position text-muted">Please visit our headoffice for more details or call us now on
                            0112 574 721</p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <div class="person text-center">
                        <img src="{{ URL::to('images/tag_orange.png')}}" alt="Image" class="tag-fluid rounded w-75 mb-3">
                        <h3 style="color: #f47a21;">How to change Default Payment Method?</h3>
                        <br>

                        <p class="position text-muted">You can choose cash on delivery or Credit/Debit card as your
                            Default payment option. for change between method go to Settings-Payment-Select default
                            payment method.</p>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- contact us section -->
    <div class="site-section" id="contact-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-3">Contact Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-5 mb-4 mb-lg-4">
                    <img src="{{ URL::to('images/contact_us.jpg')}}" alt="Image" class="img-fluid">

                </div>
                <div class="col-md-6 col-lg-7 mb-4 mb-lg-4">

                    <form action="#" class="p-5 bg-white">

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="text" id="name" placeholder="Name" class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="email" id="email" placeholder="Email" class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="row form-group">

                            <div class="col-md-12">
                                <input type="subject" id="subject" placeholder="Subject" class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control rounded-0"
                                          placeholder="Write your Message here..."></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" class="btn btn-blue rounded-0 py-3 px-4">
                            </div>
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>

    <div id="btnTop" class="fixed-action-btn smooth-scroll" style="bottom: 45px; right: 24px;display: none;">
        <a href="#home-section" class="btn-floating btn-large red">
            <i class="fa fa-arrow-up"></i>
        </a>
    </div>

</div>

<!----------------->
@include('includes.footer')


</div>
<!-- .site-wrap -->

<script src="{{ URL::to('js/jquery-3.3.1.min.js' ) }}"></script>
<script src="{{ URL::to('js/popper.min.js') }}"></script>
<script src="{{ URL::to('js/jquery-migrate-3.0.1.min.js' ) }}"></script>
<script src="{{ URL::to('js/jquery-ui.js' ) }}"></script>
<script src="{{ URL::to('js/popper.min.js' ) }}"></script>
<script src="{{ URL::to('js/bootstrap.min.js' ) }}"></script>
<script src="{{ URL::to('js/owl.carousel.min.js' ) }}"></script>
<script src="{{ URL::to('js/jquery.stellar.min.js' ) }}"></script>
<script src="{{ URL::to('js/jquery.countdown.min.js' ) }}"></script>
<script src="{{ URL::to('js/bootstrap-datepicker.min.js' ) }}"></script>
<script src="{{ URL::to('js/jquery.easing.1.3.js' ) }}"></script>
<script src="{{ URL::to('js/aos.js' ) }}"></script>
<script src="{{ URL::to('js/jquery.fancybox.min.js' ) }}"></script>
<script src="{{ URL::to('js/jquery.sticky.js' ) }}"></script>

<script src="{{ URL::to('js/main.js')}}"></script>

<script>
    $(function() {

        let btn = $('#btnTop');
        let home = $('#home-section');
        let startpoint = home.scrollTop() + $ome.height();

        $(window).on('scroll', function() {
            if($(window).scrollTop() > startpoint) {
                btn.show();
            } else {
                btn.hide();
            }
        });
    });
</script>

</body>
</html>