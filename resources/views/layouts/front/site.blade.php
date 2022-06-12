<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Licenta Andy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/jquery.selectBox.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/dropzone.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/rangeslider.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/animate.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/leaflet.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/slick.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/slick-theme.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/map.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/jquery.mCustomScrollbar.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/fonts/flaticon/font/flaticon.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('assets/front/css/skins/default.css')}}">

</head>
<body id="top" class="index-body">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDTWJ3Z"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- Top header start -->
@include('front.includes.top-header')
<!-- Top header end -->

<!-- main header start -->
@include('front.includes.main-header')
<!-- main header end -->

<!-- Banner start -->
@include('front.includes.banner')
<!-- banner end -->

<!-- content start -->
@yield ('content')
<!-- content end-->



<!-- Footer start -->
@include('front.includes.footer')
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="#" class="search">
        <input type="search" value="" placeholder="type keyword(s) here"/>
        <button type="button" class="btn btn-sm btn-color">Search</button>
    </form>
</div>

<!-- Property Video Modal -->
<div class="modal property-modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="propertyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel">
                    Find Your Dream Properties
                </h5>
                <p>
                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> 123 Kathal St. Tampa City,
                </p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 modal-left">
                        <div class="modal-left-content">
                            <div id="modalCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <iframe class="modalIframe" src="https://www.youtube.com/embed/5e0LxrLSzok"  allowfullscreen></iframe>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="http://placehold.it/400x267" alt="Test ALT">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="http://placehold.it/400x267" alt="Test ALT">
                                    </div>
                                </div>
                                <a class="control control-prev" href="#modalCarousel" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="control control-next" href="#modalCarousel" role="button" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                            <div class="description"><h3>Description</h3>
                                <p>
                                    Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque
                                    massa, viverra interdum eros ut, imperdiet pellentesque mauris. Proin sit amet scelerisque
                                    risus. Donec
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 modal-right">
                        <div class="modal-right-content bg-white">
                            <strong class="price">
                                $178,000
                            </strong>
                            <section>
                                <h3>Features</h3>
                                <ul class="bullets">
                                    <li><i class="flaticon-bed"></i> Double Bed</li>
                                    <li><i class="flaticon-swimmer"></i> Swimming Pool</li>
                                    <li><i class="flaticon-bath"></i> 2 Bathroom</li>
                                    <li><i class="flaticon-car-repair"></i> Garage</li>
                                    <li><i class="flaticon-parking"></i> Parking</li>
                                    <li><i class="flaticon-theatre-masks"></i> Home Theater</li>
                                    <li><i class="flaticon-old-typical-phone"></i> Telephone</li>
                                    <li><i class="flaticon-green-park-city-space"></i> Private space</li>
                                </ul>
                            </section>
                            <section>
                                <h3>Overview</h3>
                                <dl>
                                    <dt>Area</dt>
                                    <dd>2500 Sq Ft:3400</dd>
                                    <dt>Condition</dt>
                                    <dd>New</dd>
                                    <dt>Year</dt>
                                    <dd>2018</dd>
                                    <dt>Price</dt>
                                    <dd>$178,000</dd>
                                </dl>
                            </section>
                            <a href="properties-details.html" class="btn btn-show btn-theme">Show Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Off-canvas sidebar -->
<div class="off-canvas-sidebar">
    <div class="off-canvas-sidebar-wrapper">
        <div class="off-canvas-header">
            <a class="close-offcanvas" href="#"><span class="fa fa-times"></span></a>
        </div>
        <div class="off-canvas-content">
            <aside class="canvas-widget">
                <div class="logo-sitebar text-center">
                    <img src="assets/img/logos/logo.png" alt="logo">
                </div>
            </aside>
            <aside class="canvas-widget">
                <ul class="menu">
                    <li class="menu-item menu-item-has-children"><a href="index.html">Home</a></li>
                    <li class="menu-item"><a href="properties-grid-leftside.html">Properties List</a></li>
                    <li class="menu-item"><a href="properties-details.html">Property Detail</a></li>
                    <li class="menu-item"><a href="blog-single-sidebar-right.html">Blog</a></li>
                    <li class="menu-item"><a href="about.html">About  US</a></li>
                    <li class="menu-item"><a href="contact-3.html">Contact US</a></li>
                </ul>
            </aside>
            <aside class="canvas-widget">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                </ul>
            </aside>
        </div>
    </div>
</div>

<!-- External JS libraries -->
<script src="{{asset('assets/front/js/jquery-2.2.0.min.js')}}"></script>
<script src="{{asset('assets/front/js/popper.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.selectBox.js')}}"></script>
<script src="{{asset('assets/front/js/rangeslider.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.filterizr.js')}}"></script>
<script src="{{asset('assets/front/js/wow.min.js')}}"></script>
<script src="{{asset('assets/front/js/backstretch.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.countdown.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.scrollUp.js')}}"></script>
<script src="{{asset('assets/front/js/particles.min.js')}}"></script>
<script src="{{asset('assets/front/js/typed.min.js')}}"></script>
<script src="{{asset('assets/front/js/dropzone.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.mb.YTPlayer.js')}}"></script>
<script src="{{asset('assets/front/js/leaflet.js')}}"></script>
<script src="{{asset('assets/front/js/leaflet-providers.js')}}"></script>
<script src="{{asset('assets/front/js/leaflet.markercluster.js')}}"></script>
<script src="{{asset('assets/front/js/slick.min.js')}}"></script>
<script src="{{asset('assets/front/js/maps.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script src="{{asset('assets/front/js/ie-emulation-modes-warning.js')}}"></script>
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>
</body>
</html>