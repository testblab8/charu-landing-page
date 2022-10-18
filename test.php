<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BookBoat</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: 0;
        }

        body {
            font-size: 15px;
            line-height: 25px;
            font-weight: 400;
            text-transform: none;
            letter-spacing: 0;
            font-family: Quicksand, sans-serif;
            color: #3b4249;
        }

        .text-right {
            text-align: right;
        }

        .top-inner-header .social-icons a {
            display: inline-block;
            color: #4f5962;
            width: 45px;
            height: 45px;
            font-size: 16px;
            line-height: 45px;
            text-align: center;
            border-radius: 50%;

        }

        /* .social-round a:hover {
            background-color: #b00;
            color: #fff!important;
            border-radius: 50%;
            
        } */

        .social-round a:hover,
        .social-round a:active {
            color: #fff;
            border-radius: 50%;

        }

        .social-round .btn-bg-facebook:hover,
        .social-round .btn-bg-facebook:active {
            background-color: #506dab;
        }

        /* .social-round .btn-bg-facebook:hover, .social-round .btn-bg-facebook:hover{
            background-color: #506dab;
        } */
        .social-round .btn-bg-twitter:hover,
        .btn-bg-twitter:active {
            background-color: #00aced;
        }

        .social-round .btn-bg-google:hover,
        .btn-bg-google:active {
            background: #fff;
            color: #4f5962;
        }

        .social-round .btn-bg-instagram:hover,
        .btn-bg-instagram:active {
            background-color: #517fa4;
        }

        .social-round .btn-bg-youtube:hover,
        .btn-bg-youtube:active {
            background-color: #b00;
        }

        .account-login .login-register {
            margin-bottom: 0;
        }

        .header-comp-logo {
            line-height: 80px;
        }

        .login-register a,
        .account-login .login-register .fa {
            color: #4f5962;
            background-color: transparent;
        }

        .account-login .login-register li a {
            display: inline-block;
            text-decoration: none;
            font-size: 14px;
            /* line-height: 80px; */
            font-weight: 700;
            text-transform: none;
            font-family: Quicksand, sans-serif;
        }

        .account-login .login-register li {
            padding-right: 5px;
            padding-left: 5px;
        }

        .list-inline {
            padding-left: 0;
            list-style: none;
            margin-left: -5px;
        }

        .account-login a.btn-add-new-listing {
            min-width: 0;
            margin-left: 5px;
            padding: 0 15px;
            line-height: 40px !important;
        }

        .btn {
            display: inline-block;
            font-weight: 700;
            line-height: 40px !important;
            padding: 0 30px;
            text-align: center;
            border-radius: 4px;
            font-size: 14px;
        }

        a.btn-add-new-listing {
            /* display: inline-block;
            line-height: 40px; */
            color: #f15e75;
            background-color: #ffffff;
            border-color: #f15e75;
            font-size: 14px;
        }

        a.btn-add-new-listing:hover {
            color: #f15e75;
        }

        hr {
            margin-top: 0;
            margin-bottom: 0;
        }

        ul {
            list-style-position: inside;
            padding-left: 30px;
            list-style-type: none;
            margin-bottom: 0;
        }

        .navi>.main-menu>li>a {
            text-decoration: none;
            display: block;
            position: relative;
            padding: 0 15px;
            cursor: pointer;
        }

        .navi>.main-menu .has-child>a:after {
            margin: 0 0 0 10px;
            content: "";
            font-family: FontAwesome;
            font-weight: 400;
        }

        .bottom-inner-header {
            background-color: #ffffff;
            border-bottom: 1px solid #ffffff;
        }

        .header-comp-nav {
            position: relative;
            width: 100%;
        }

        .navi>.main-menu>li>a {
            line-height: 60px;
        }

        .navi>.main-menu>li>a {
            font-size: 14px;
            line-height: 60px;
            font-weight: 700;
            text-transform: none;
            font-family: Quicksand, sans-serif;
            color: #4f5962;
        }

        .wrapper {
            height: 750px;
        }

        .wrapper {
            background: url("33-3.jpg") no-repeat center;
        }

        .banner-caption {
            position: relative;
            top: 44%;
            left: 14%;
            transform: translate(-14%, -44%);
        }

        .side-search-wrap {
            max-width: 480px;
            background: #fff;
            padding: 30px;
            border-radius: 6px;
        }

        h2,
        .banner-title {
            font-family: Quicksand, sans-serif;
            font-weight: 700;
        }

        .banner-title {
            font-size: 32px;
            line-height: 42px;
            text-transform: none;
            letter-spacing: normal;
            color: #3b4249;
        }

        h2 {
            margin: 0 0 20px;
            overflow-wrap: break-word;
        }

        .banner-subtitle {
            font-size: 18px;
            line-height: 30px;
            text-transform: none;
            letter-spacing: normal;
            color: #3b4249;
        }

        p {
            margin: 0 0 20px;
            overflow-wrap: break-word;
        }

        .search-destination,
        .search-date-range,
        .search-guests {
            height: 56px;
            margin-top: 8px;
            overflow: hidden;
        }

        input {
            padding: 20px 0px 20px 50px;
            font-size: 15px;
            height: 56px;
            border: 1px solid #ced4da;
            width: 100%;
            border-radius: 4px;
        }

        .search-button {
            height: 56px;
            margin-top: 8px;
            font-size: 15px;
            width: 100%;
            border: 1px solid #ced4da;
        }

        .search-button,
        button {
            height: 56px;
            width: 100%;
            font-size: 15px;
            border: 1px solid #f15e75;
            ;
            background-color: #f15e75;
            border-radius: 4px;
            color: #fff;
        }

        button:hover {
            color: #ffffff;
            background-color: #f58d9d;
            border-color: #f58d9d;
        }

        input:focus {
            padding: 20px 0 1px 50px;
        }

        .search-date-range-arrive:after,
        .search-date-range-depart:after,
        .search-destination:after,
        .search-guests:after {
            position: absolute;
            top: 17px;
            font-family: Fontawesome;
            font-size: 18px;
        }

        .search-destination:after {
            content: "\f002";
            left: 32px;

        }

        .search-date-range-arrive:after,
        .search-date-range-depart:after {
            content: "";
            left: 20px;
        }

        .search-guests:after {
            content: "";
            left: 32px;
        }

        .elementor-container {
            padding: 0;
        }

        .elementor-row {
            padding-right: 15px;
            padding-left: 15px;
        }

        .elementor-column {
            padding: 0;
        }

        .elementor-widget-wrap {
            padding: 10px;
        }

        .elementor-spacer-inner {
            height: 50px;
        }

        .elementor-element {
            margin-bottom: 20px;
            padding: 0;
        }

        .elementor-spacer {
            padding: 0;
        }

        .homey_section_title_wrap_elementor {
            text-align: center;
            margin-bottom: 30px;
        }

        .homey_section_title {
            font-family: "Quicksand", Sans-serif;
            font-size: 32px;
            font-weight: 700;
            line-height: 42px;
        }

        .module-title h2 {
            margin: 0 0 10px;
        }

        img {
            width: 100%;
            border-radius: 8px;
        }

        .module-wrap {
            margin-bottom: 50px;
        }

        .taxonomy-grid-2 .taxonomy-card {
            max-height: 262px;
            z-index: 0;
        }

        .taxonomy-grid .taxonomy-card {
            margin-bottom: 30px;
            border-radius: 8px;
            overflow: hidden;
            background: linear-gradient(rgba(0,0,0,1), rgba(0,0,0,1));
        }

        .taxonomy-card .taxonomy-title {
            position: absolute;
            bottom: 50px;
            text-align: center;
            font-size: 16px;
            color: #fff;
            z-index: 1;
            width: 100%;
            padding: 5px 12px;
            border-radius: 4px;
            font-weight: 700;
        }

        /* se */
        .elementor-widget-wrap {
            padding: 100px 60px;
        }
        .elementor-column-wrap{
            margin: 0px 380px 0px 0px;
        }
        .elementor-section{
            padding: 50px;
        }
        .galary-item {
            background-position: center center !important;
            background-size: 100% !important;
            
            background-repeat: no-repeat !important;
            transition: .3s;
        }
        .galary-item-small{
            padding-top: 94%;
        }
        .galary-item-large{
            padding-top:47%;
        }
        .galary-item:hover {
            background-size: 110% !important;
            transition: .3s;
        }
    </style>
</head>

<body>
    <header>
        <!-- header -->
        <div class="top-inner-header">
            <div class="container">
                <div class="row header-inner clearfix">
                    <div class="col-md-12">
                        <div class="row  d-flex justify-content-center align-items-center">
                            <div class="col header-comp-left">

                                <div class="social-icons social-round">

                                    <a class="btn-bg-facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a>

                                    <a class="btn-bg-twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a>


                                    <a class="btn-bg-google" target="_blank" href="#"><i class="fa fa-google"></i></a>

                                    <a class="btn-bg-instagram" target="_blank" href="#"><i class="fa fa-instagram"></i></a>


                                    <a class="btn-bg-youtube" target="_blank" href="#"><i class="fa fa-youtube"></i></a>

                                </div>
                            </div>
                            <div class="col-md-2 header-comp-logo">

                                <a class="homey_logo" href="https://demo03.gethomey.io/">
                                    <img src="//89239-660736-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2019/02/homey-logo.png" alt="Homey" title="Homey - Demo 03" style="width: 128px;height:30px">
                                </a>
                            </div>
                            <div class="col header-comp-right text-right no-cache-1665957121">
                                <div class="account-login d-flex justify-content-end">

                                    <ul class="login-register list-inline d-flex justify-content-end align-items-center">
                                        <li><a href="#" data-toggle="modal" data-target="#modal-login">Login</a></li>
                                        <li><i class="fa fa-circle-o"></i></li>
                                        <li><a href="#" data-toggle="modal" data-target="#modal-register">Register</a></li>
                                    </ul>

                                    <a href="https://demo03.gethomey.io/become-a-host/" class="btn btn-add-new-listing">Become a
                                        Host</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <!-- /header -->

        <div class="bottom-inner-header no-cache-1665957121">
            <div class="container">
                <div class="header-inner clearfix">
                    <div class="header-comp-nav text-center no-cache-1665957121">
                        <nav class="navi">
                            <ul id="main-menu" class="main-menu d-flex justify-content-center">
                                <li id="menu-item-692" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-692 has-child"><a href="#">Home</a>
                                    <!-- <ul class="sub-menu">
                                        <li id="menu-item-693" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-693 has-child"><a href="#">Parallax</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-694" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-493 current_page_item menu-item-694"><a href="https://demo03.gethomey.io/" aria-current="page">Parallax Standard</a></li>
                                                <li id="menu-item-705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-705"><a href="https://demo03.gethomey.io/homepage-parallax-fullscreen/">Parallax Fullscreen</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-706" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-706 has-child"><a href="#">Maps</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-1818" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1818"><a href="https://demo03.gethomey.io/homepage-map-standard/?search_position=under_banner">Map Standard</a></li>
                                                <li id="menu-item-703" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-703"><a href="https://demo03.gethomey.io/homepage-map-fullscreen/">Map Fullscreen</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-707" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-707 has-child"><a href="#">Video</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-722" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-722"><a href="https://demo03.gethomey.io/homepage-video-standard/">Video Standard</a></li>
                                                <li id="menu-item-721" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-721"><a href="https://demo03.gethomey.io/homepage-video-fullscreen/">Video Fullscreen</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-708" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-708 has-child"><a href="#">Slider</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-728" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-728"><a href="https://demo03.gethomey.io/homepage-custom-slider/">Custom Slider</a></li>
                                                <li id="menu-item-727" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-727"><a href="https://demo03.gethomey.io/homepage-custom-slider-fullscreen/">Custom Slider Fullscreen</a></li>
                                                <li id="menu-item-1621" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1621"><a href="https://demo03.gethomey.io/homepage-slider-revolution/">Slider Revolution</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-709" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-709 has-child"><a href="#">Splash Page</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-1397" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1397"><a href="https://demo03.gethomey.io/splash-page/?splash_type=image">Image Background</a></li>
                                                <li id="menu-item-1398" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1398"><a href="https://demo03.gethomey.io/splash-page/?splash_type=slider">Slider Background</a></li>
                                                <li id="menu-item-1396" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1396"><a href="https://demo03.gethomey.io/splash-page/?splash_type=video">Video Background</a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li id="menu-item-193" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-193 has-child"><a href="#">Listing</a>
                                    <!-- <ul class="sub-menu">
                                        <li id="menu-item-729" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-729 has-child"><a href="#">List View</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-601" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-601"><a href="https://demo03.gethomey.io/listing-list-right-sidebar/">List Right Sidebar</a></li>
                                                <li id="menu-item-602" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-602"><a href="https://demo03.gethomey.io/listing-list-left-sidebar/">List Left Sidebar</a></li>
                                                <li id="menu-item-603" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-603"><a href="https://demo03.gethomey.io/listing-list-full-width/">List Full Width</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-730" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-730 has-child"><a href="#">Grid View</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-604" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-604"><a href="https://demo03.gethomey.io/listing-grid-right-sidebar/">Grid Right Sidebar</a></li>
                                                <li id="menu-item-605" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-605"><a href="https://demo03.gethomey.io/listing-grid-left-sidebar/">Grid Left Sidebar</a></li>
                                                <li id="menu-item-606" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-606"><a href="https://demo03.gethomey.io/listing-grid-full-width/">Grid Full Width</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-731" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-731 has-child"><a href="#">Card View</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-607" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-607"><a href="https://demo03.gethomey.io/listing-card-right-sidebar/">Card Right Sidebar</a></li>
                                                <li id="menu-item-608" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-608"><a href="https://demo03.gethomey.io/listing-card-left-sidebar/">Card Left Sidebar</a></li>
                                                <li id="menu-item-609" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-609"><a href="https://demo03.gethomey.io/listing-card-full-width/">Card Full Width</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-732" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-732 has-child"><a href="#">Maps</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-1240" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1240"><a href="https://demo03.gethomey.io/listing-map-standard/">Map Standard</a></li>
                                                <li id="menu-item-1239" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1239"><a href="https://demo03.gethomey.io/listing-map-fullscreen/">Map Fullscreen</a></li>
                                                <li id="menu-item-188" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-188"><a href="https://demo03.gethomey.io/half-map/">Half Map</a></li>
                                                <li id="menu-item-1481" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1481"><a href="https://demo03.gethomey.io/listing-sticky-map/?list_type=list">Sticky Map List</a></li>
                                                <li id="menu-item-1480" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1480"><a href="https://demo03.gethomey.io/listing-sticky-map/?list_type=grid">Sticky Map Grid</a></li>
                                                <li id="menu-item-1482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1482"><a href="https://demo03.gethomey.io/listing-sticky-map/?list_type=card">Sticky Map Card</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-733" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-733 has-child"><a href="#">Parallax</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-741" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-741"><a href="https://demo03.gethomey.io/listing-parallax-standard/">Parallax Standard</a></li>
                                                <li id="menu-item-740" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-740"><a href="https://demo03.gethomey.io/listing-parallax-fullscreen/">Parallax Fullscreen</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-734" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-734 has-child"><a href="#">Video</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-747" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-747"><a href="https://demo03.gethomey.io/listing-video-standard/">Video Standard</a></li>
                                                <li id="menu-item-746" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-746"><a href="https://demo03.gethomey.io/listing-video-fullscreen/">Video Fullscreen</a></li>
                                            </ul> 
                                        </li>
                                        <li id="menu-item-735" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-735 has-child"><a href="#">Slider</a>
                                             <ul class="sub-menu">
                                                <li id="menu-item-753" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-753"><a href="https://demo03.gethomey.io/listing-custom-slider/">Custom Slider</a></li>
                                                <li id="menu-item-752" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-752"><a href="https://demo03.gethomey.io/listing-custom-slider-fullscreen/">Custom Slider Fullscreen</a></li>
                                                <li id="menu-item-1454" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1454"><a href="https://demo03.gethomey.io/listing-slider-revolution/">Slider Revolution</a></li>
                                            </ul>
                                        </li>
                                    </ul>-->
                                </li>
                                <li id="menu-item-710" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-710 has-child"><a href="#">Property</a>
                                    <!-- <ul class="sub-menu">
                                        <li id="menu-item-822" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-822"><a href="https://demo03.gethomey.io/listing/modern-apartment-with-pool/?detail_layout=v1">Property Template v1</a></li>
                                        <li id="menu-item-823" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-823"><a href="https://demo03.gethomey.io/listing/modern-apartment-with-pool/?detail_layout=v2">Property Template v2</a></li>
                                        <li id="menu-item-824" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-824"><a href="https://demo03.gethomey.io/listing/modern-apartment-with-pool/?detail_layout=v3">Property template v3</a></li>
                                        <li id="menu-item-825" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-825"><a href="https://demo03.gethomey.io/listing/modern-apartment-with-pool/?detail_layout=v4">Property Template v4</a></li>
                                        <li id="menu-item-1915" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1915"><a href="https://demo03.gethomey.io/listing/modern-apartment-with-pool/">Instant Booking</a></li>
                                        <li id="menu-item-1916" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1916"><a href="https://demo03.gethomey.io/listing/georgeus-villa-in-the-woods/">Request to Book</a></li>
                                        <li id="menu-item-1923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1923"><a href="https://demo03.gethomey.io/listing/stylish-and-modern-lof/">Custom Period Prices</a></li>
                                        <li id="menu-item-2050" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2050"><a href="https://demo03.gethomey.io/listing/beautiful-cove/">Extra Prices</a></li>
                                    </ul> -->
                                </li>
                                <li id="menu-item-712" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-712 has-child"><a href="#">Pages</a>
                                    <!-- <ul class="sub-menu">
                                        <li id="menu-item-1320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1320"><a href="https://demo03.gethomey.io/about-homey/">About Homey</a></li>
                                        <li id="menu-item-1260" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1260"><a href="https://demo03.gethomey.io/blog/">Blog</a></li>
                                        <li id="menu-item-1262" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1262 has-child"><a href="#">Listing Types</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-1265" class="menu-item menu-item-type-taxonomy menu-item-object-listing_type menu-item-1265"><a href="https://demo03.gethomey.io/type/apartment/">Apartment</a></li>
                                                <li id="menu-item-1263" class="menu-item menu-item-type-taxonomy menu-item-object-listing_type menu-item-1263"><a href="https://demo03.gethomey.io/type/bed-breakfast/">Bed &amp; Breakfast</a></li>
                                                <li id="menu-item-1267" class="menu-item menu-item-type-taxonomy menu-item-object-listing_type menu-item-1267"><a href="https://demo03.gethomey.io/type/condo/">Condo</a></li>
                                                <li id="menu-item-1264" class="menu-item menu-item-type-taxonomy menu-item-object-listing_type menu-item-1264"><a href="https://demo03.gethomey.io/type/house/">House</a></li>
                                                <li id="menu-item-1266" class="menu-item menu-item-type-taxonomy menu-item-object-listing_type menu-item-1266"><a href="https://demo03.gethomey.io/type/loft/">Loft</a></li>
                                                <li id="menu-item-1268" class="menu-item menu-item-type-taxonomy menu-item-object-listing_type menu-item-1268"><a href="https://demo03.gethomey.io/type/studio/">Studio</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1269" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1269 has-child"><a href="#">Room Types</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-1270" class="menu-item menu-item-type-taxonomy menu-item-object-room_type menu-item-1270"><a href="https://demo03.gethomey.io/room_type/entire-place/">Entire Place</a></li>
                                                <li id="menu-item-1271" class="menu-item menu-item-type-taxonomy menu-item-object-room_type menu-item-1271"><a href="https://demo03.gethomey.io/room_type/private-room/">Private Room</a></li>
                                                <li id="menu-item-1272" class="menu-item menu-item-type-taxonomy menu-item-object-room_type menu-item-1272"><a href="https://demo03.gethomey.io/room_type/shared-room/">Shared Room</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1273" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1273 has-child"><a href="#">Listing Cities</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-1274" class="menu-item menu-item-type-taxonomy menu-item-object-listing_city menu-item-1274"><a href="https://demo03.gethomey.io/city/miami/">Miami</a></li>
                                                <li id="menu-item-1275" class="menu-item menu-item-type-taxonomy menu-item-object-listing_city menu-item-1275"><a href="https://demo03.gethomey.io/city/los-angeles/">Los Angeles</a></li>
                                                <li id="menu-item-1276" class="menu-item menu-item-type-taxonomy menu-item-object-listing_city menu-item-1276"><a href="https://demo03.gethomey.io/city/san-francisco/">San Francisco</a></li>
                                                <li id="menu-item-1277" class="menu-item menu-item-type-taxonomy menu-item-object-listing_city menu-item-1277"><a href="https://demo03.gethomey.io/city/new-york/">New York</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1278" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1278 has-child"><a href="#">Listing States</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-1279" class="menu-item menu-item-type-taxonomy menu-item-object-listing_state menu-item-1279"><a href="https://demo03.gethomey.io/state/california/">California</a></li>
                                                <li id="menu-item-1280" class="menu-item menu-item-type-taxonomy menu-item-object-listing_state menu-item-1280"><a href="https://demo03.gethomey.io/state/florida/">Florida</a></li>
                                                <li id="menu-item-1281" class="menu-item menu-item-type-taxonomy menu-item-object-listing_state menu-item-1281"><a href="https://demo03.gethomey.io/state/new-york/">New York</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1330" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1330"><a href="https://demo03.gethomey.io/frequently-asked-questions/">FAQ</a></li>
                                        <li id="menu-item-1324" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1324"><a href="https://demo03.gethomey.io/typography/">Typography</a></li>
                                    </ul> -->
                                </li>
                                <li id="menu-item-711" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-711 has-child"><a href="#">Elementor</a>
                                    <!-- <ul class="sub-menu">
                                        <li id="menu-item-1041" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1041"><a href="https://demo03.gethomey.io/listing-module/">Listing Module</a></li>
                                        <li id="menu-item-1069" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1069"><a href="https://demo03.gethomey.io/listing-carousel-module/">Listing Carousel Module</a></li>
                                        <li id="menu-item-1108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1108"><a href="https://demo03.gethomey.io/listing-by-id-module/">Listing by ID Module</a></li>
                                        <li id="menu-item-1151" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1151"><a href="https://demo03.gethomey.io/listing-by-ids-module/">Listing by IDs Module</a></li>
                                        <li id="menu-item-1150" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1150"><a href="https://demo03.gethomey.io/grids-module/">Grids Module</a></li>
                                        <li id="menu-item-1149" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1149"><a href="https://demo03.gethomey.io/blog-posts-module/">Blog Posts Module</a></li>
                                        <li id="menu-item-1148" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1148"><a href="https://demo03.gethomey.io/blog-posts-carousel-module/">Blog Posts Carousel Module</a></li>
                                        <li id="menu-item-1231" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1231"><a href="https://demo03.gethomey.io/text-with-icons-module/">Text With Icons Module</a></li>
                                        <li id="menu-item-1232" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1232"><a href="https://demo03.gethomey.io/testimonials-module/">Testimonials Module</a></li>
                                        <li id="menu-item-1233" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1233"><a href="https://demo03.gethomey.io/partners-module/">Partners Module</a></li>
                                        <li id="menu-item-1918" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1918"><a href="https://demo03.gethomey.io/promo-box-module/">Promo Box Module</a></li>
                                        <li id="menu-item-1037" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1037"><a href="https://demo03.gethomey.io/section-titles/">Section Titles</a></li>
                                    </ul> -->
                                </li>
                                <li id="menu-item-1774" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1774 has-child"><a href="#">Searches</a>
                                    <!-- <ul class="sub-menu">
                                        <li id="menu-item-1790" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1790"><a href="https://demo03.gethomey.io/searches-header/?search_position=under_nav">Below the Naviagation</a></li>
                                        <li id="menu-item-1786" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1786"><a href="https://demo03.gethomey.io/searches-banner/?banner_search_style=horizontal">Horizontal On The Banner</a></li>
                                        <li id="menu-item-1785" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1785"><a href="https://demo03.gethomey.io/searches-banner/?banner_search_style=vertical">Vertical On The Banner</a></li>
                                        <li id="menu-item-1791" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1791"><a href="https://demo03.gethomey.io/searches-header/?search_position=under_banner">Below The Banner</a></li>
                                        <li id="menu-item-1917" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1917"><a href="https://demo03.gethomey.io/half-search/">Half Search</a></li>
                                    </ul> -->
                                </li>
                                <li id="menu-item-1342" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1342"><a href="https://demo03.gethomey.io/contact-us/">Contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </header>
    <section class="wrapper">

        <div class="container banner-caption banner-caption-side-search">
            <div class="row ">
                <div class="col-md-12 side-search-wrap">
                    <h2 class="banner-title">Book &amp; Experience Amazing Places</h2>
                    <p class="banner-subtitle">WordPress Theme For Booking and Rental</p>
                    <div class="search-wrap search-banner search-banner-desktop side-search hidden-xs">
                        <form class="clearfix" action="" method="">
                            <div class="row">
                                <div class="col-md-12 search-destination">
                                    <!-- <label class="animated-label" style="display: block;">Where to go?</label> -->
                                    <input type="text" name="location_search" autocomplete="off" id="location_search_banner" value="" class="input-search pac-target-input on-focus" placeholder="Where to go?">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 search-date-range">
                                    <div class="form-row">
                                        <div class="col search-date-range-arrive">
                                            <!-- <label class="animated-label"
                                                        style="display: block;">Arrive</label> -->
                                            <input type="text" name="arrive" autocomplete="off" value="" class="on-focus" placeholder="Arrive">
                                        </div>
                                        <div class="col search-date-range-depart">
                                            <!-- <label class="animated-label"
                                                        style="display: block;">Depart</label> -->
                                            <input type="text" name="depart" autocomplete="off" value="" class="on-focus" placeholder="Depart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 search-guests">
                                    <!-- <label class="animated-label" style="display: block;">Guests</label> -->
                                    <input type="text" name="guest" autocomplete="off" value="" class="on-focus" placeholder="Guests">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="search-button clearfix">
                                        <button type="submit" class="">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container elementor-container">
            <div class="row elementor-row">
                <div class="col-md-12 elementor-column">
                    <div class="elementor-widget-wrap">
                        <div class="container elementor-element">
                            <div class="row elementor-widget-container">
                                <div class="col-md-12 elementor-spacer">
                                    <div class="elementor-spacer-inner">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container elementor-element">
                            <div class="elementor-widget-container">
                                <div class="homey_section_title_wrap_elementor homey-module module-title section-title-module">
                                    <h2 class="homey_section_title"> Find a Place That Fits Your Comfort</h2>
                                </div>
                            </div>
                        </div>
                        <div class="container elementor-element">
                            <div class="row elementor-widget-container">
                                <div class="col-md-12 elementor-column">
                                    <div class="module-wrap taxonomy-grid taxonomy-grid-2">
                                        <div class="row ">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="taxonomy-item taxonomy-card">
                                                    <a class="taxonomy-link hover-effect" href="https://demo03.gethomey.io/type/apartment/">
                                                        <div class="taxonomy-title">Apartment</div>
                                                        <div class="galary-item galary-item-large" style="background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.8)), url('39-2-555x262.jpg');"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="taxonomy-item taxonomy-card">
                                                    <a class="taxonomy-link hover-effect" href="https://demo03.gethomey.io/type/bed-breakfast/">
                                                        <div class="taxonomy-title">Bed &amp; Breakfast</div>
                                                        <div class="galary-item galary-item-small" style="background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.8)), url('16-4-360x360.jpg');"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6"> 
                                                <div class="taxonomy-item taxonomy-card">
                                                    <a class="taxonomy-link hover-effect" href="https://demo03.gethomey.io/type/condo/">
                                                        <div class="taxonomy-title">Condo</div>
                                                        <div class="galary-item galary-item-small" style="background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.8)), url('33-360x360.jpg');"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- close row -->
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="taxonomy-item taxonomy-card">
                                                    <a class="taxonomy-link hover-effect" href="https://demo03.gethomey.io/type/house/">
                                                        <div class="taxonomy-title">House</div>
                                                        <div class="galary-item galary-item-small" style="background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.8)), url('10-7-360x360.jpg');"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="taxonomy-item taxonomy-card">
                                                    <a class="taxonomy-link hover-effect" href="https://demo03.gethomey.io/type/loft/">
                                                        <div class="taxonomy-title">Loft</div>
                                                        <div class="galary-item galary-item-small" style="background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.8)), url('20-360x360.jpg');"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="taxonomy-item taxonomy-card">
                                                    <a class="taxonomy-link hover-effect" href="https://demo03.gethomey.io/type/studio/">
                                                        <div class="taxonomy-title">Studio</div>
                                                        <div class="galary-item galary-item-large" style="background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.8)), url('15-555x262.jpg');"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container elementor-element">
                        <div class="row elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a href="" class="elementor-button-link ">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">Find More Places To Rent</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <section>
        <div class="container elementor-container">
            <div class="row elementor-row">
                <div class="col-md-12 elementor-column">
                    <div class="elementor-widget-wrap">
                        <div class="container elementor-element">
                            <div class="row elementor-widget-container">
                                <div class="col-md-12 elementor-spacer">
                                    <div class="elementor-spacer-inner">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container elementor-element">
                            <div class="elementor-widget-container">
                                <div class="homey_section_title_wrap_elementor homey-module module-title section-title-module">
                                    <h2 class="homey_section_title">Featured Homes</h2>
                                    <p class="homey_section_subtitle sub-heading">Hand-picked selection of quality places</p>
                                </div>
                            </div>
                        </div>
                        <div class="container elementor-element">
                            <div class="row elementor-widget-container">
                                <div class="col-md-12 elementor-column">
                                    <div class="module-wrap taxonomy-grid taxonomy-grid-2">
                                        <div class="row ">
                                            <div class="col">
                                                <div class="taxonomy-item taxonomy-card">
                                                    <a class="taxonomy-link hover-effect" href="https://demo03.gethomey.io/type/apartment/">
                                                        <div class="taxonomy-title">Los Angeles</div>
                                                        <img loading="lazy" class="img-responsive" src="38-450x300.jpg" width="555" height="246" alt="listing_type">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="taxonomy-item taxonomy-card">
                                                    <a class="taxonomy-link hover-effect" href="https://demo03.gethomey.io/type/bed-breakfast/">
                                                        <div class="taxonomy-title">Miami</div>
                                                        <img loading="lazy" class="img-responsive" src="28-450x300.jpg" width="360" height="246" alt="listing_type">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="taxonomy-item taxonomy-card">
                                                    <a class="taxonomy-link hover-effect" href="https://demo03.gethomey.io/type/condo/">
                                                        <div class="taxonomy-title">New York</div>
                                                        <img loading="lazy" class="img-responsive" src="01-450x300.jpg" width="360" height="246" alt="listing_type">
                                                    </a>
                                                </div>
                                            </div>
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
    <!--  -->
    <section style="height:700px;background-image:url('39-4-1.jpg')">
        <div class="container elementor-container">
            <div class="row elementor-row">
                <div class="col-md-12 elementor-column">
                    <div class="row elementor-column-wrap">
                        <div class="col-md-12 elementor-widget-wrap">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12" style="background: #fff;">
                                        <div class="lementor-column-wrap">
                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-5fbb91af elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5fbb91af" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-51734642" data-id="51734642" data-element_type="column">
                                                            <div class="elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-9b7668f elementor-widget elementor-widget-homey_elementor_section_title" data-id="9b7668f" data-element_type="widget" data-widget_type="homey_elementor_section_title.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="homey_section_title_wrap_elementor homey-module module-title section-title-module">
                                                                                <h2 class="homey_section_title">Modern Apartment</h2>

                                                                                <p class="homey_section_subtitle sub-heading">$79 at night</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-51f8729c elementor-widget elementor-widget-text-editor" data-id="51f8729c" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit
                                                                                    amet, consectetur adipiscing elit.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-38543fc5 elementor-widget elementor-widget-button" data-id="38543fc5" data-element_type="widget" data-widget_type="button.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-button-wrapper">
                                                                                <a href="http://demo02.gethomey.io/half-map/" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                                    <span class="elementor-button-content-wrapper">
                                                                                        <span class="elementor-button-text">Book Now</span>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
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
    <!--  -->
    <section>
        <div class="container elementor-container">
            <div class="row elementor-row">
                <div class="col-md-12 elementor-column">
                    <div class="elementor-widget-wrap">
                        <div class="container elementor-element">
                            <div class="row elementor-widget-container">
                                <div class="col-md-12 elementor-spacer">
                                    <div class="elementor-spacer-inner">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container elementor-element">
                            <div class="elementor-widget-container">
                                <div class="homey_section_title_wrap_elementor homey-module module-title section-title-module">
                                    <h2 class="homey_section_title">Trending Destinations</h2>
                                    <p class="homey_section_subtitle sub-heading">Explore our selection of the best places around the world</p>
                                </div>
                            </div>
                        </div>
                        <div class="container elementor-element">
                            <div class="row elementor-widget-container">
                                <div class="col-md-12 elementor-column">
                                    <div class="module-wrap taxonomy-grid taxonomy-grid-2">
                                        <div class="row ">
                                            <div class="col">
                                                <div class="taxonomy-item taxonomy-card">
                                                    <a class="taxonomy-link hover-effect" href="https://demo03.gethomey.io/type/apartment/">
                                                        <div class="taxonomy-title">Los Angeles</div>
                                                        <img loading="lazy" class="img-responsive" src="los-angeles-2-360x360.png" width="555" height="246" alt="listing_type">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="taxonomy-item taxonomy-card">
                                                    <a class="taxonomy-link hover-effect" href="https://demo03.gethomey.io/type/bed-breakfast/">
                                                        <div class="taxonomy-title">Miami</div>
                                                        <img loading="lazy" class="img-responsive" src="miami-beach-3-360x360.png" width="360" height="246" alt="listing_type">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="taxonomy-item taxonomy-card">
                                                    <a class="taxonomy-link hover-effect" href="https://demo03.gethomey.io/type/condo/">
                                                        <div class="taxonomy-title">New York</div>
                                                        <img loading="lazy" class="img-responsive" src="new-york-2-360x360.png" width="360" height="246" alt="listing_type">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="taxonomy-item taxonomy-card">
                                                    <a class="taxonomy-link hover-effect" href="https://demo03.gethomey.io/type/condo/">
                                                        <div class="taxonomy-title">San Francisco</div>
                                                        <img loading="lazy" class="img-responsive" src="san-fracisco-2-360x360.jpg" width="360" height="246" alt="listing_type">
                                                    </a>
                                                </div>
                                            </div>
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
    <!--  -->
</body>

</html>