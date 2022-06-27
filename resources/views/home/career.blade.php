@extends('layouts.master')

@section('title')
@lang('nav_HumanResource')
@endsection

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
<style>
    /* ===== Career ===== */
    .career-form {
    background-color: #4e63d7;
    border-radius: 5px;
    padding: 0 16px;
    }

    .career-form .form-control {
    background-color: rgba(255, 255, 255, 0.2);
    border: 0;
    padding: 12px 15px;
    color: #fff;
    }

    .career-form .form-control::-webkit-input-placeholder {
    /* Chrome/Opera/Safari */
    color: #fff;
    }

    .career-form .form-control::-moz-placeholder {
    /* Firefox 19+ */
    color: #fff;
    }

    .career-form .form-control:-ms-input-placeholder {
    /* IE 10+ */
    color: #fff;
    }

    .career-form .form-control:-moz-placeholder {
    /* Firefox 18- */
    color: #fff;
    }

    .career-form .custom-select {
    background-color: rgba(255, 255, 255, 0.2);
    border: 0;
    padding: 12px 15px;
    color: #fff;
    width: 100%;
    border-radius: 5px;
    text-align: left;
    height: auto;
    background-image: none;
    }

    .career-form .custom-select:focus {
    -webkit-box-shadow: none;
            box-shadow: none;
    }

    .career-form .select-container {
    position: relative;
    }

    .career-form .select-container:before {
    position: absolute;
    right: 15px;
    top: calc(50% - 14px);
    font-size: 18px;
    color: #ffffff;
    content: '\F2F9';
    font-family: "Material-Design-Iconic-Font";
    }

    .filter-result .job-box {
    -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
            box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
    border-radius: 10px;
    padding: 10px 35px;
    }

    ul {
    list-style: none; 
    }

    .list-disk li {
    list-style: none;
    margin-bottom: 12px;
    }

    .list-disk li:last-child {
    margin-bottom: 0;
    }

    .job-box .img-holder {
    height: 65px;
    width: 65px;
    background-color: #4e63d7;
    background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
    background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
    font-family: "Open Sans", sans-serif;
    color: #fff;
    font-size: 22px;
    font-weight: 700;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    border-radius: 65px;
    }

    .career-title {
    background-color: #4e63d7;
    color: #fff;
    padding: 15px;
    text-align: center;
    border-radius: 10px 10px 0 0;
    background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
    background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
    }

    .job-overview {
    -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
            box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
    border-radius: 10px;
    }

    @media (min-width: 992px) {
    .job-overview {
        position: -webkit-sticky;
        position: sticky;
        top: 70px;
    }
    }

    .job-overview .job-detail ul {
    margin-bottom: 28px;
    }

    .job-overview .job-detail ul li {
    opacity: 0.75;
    font-weight: 600;
    margin-bottom: 15px;
    }

    .job-overview .job-detail ul li i {
    font-size: 20px;
    position: relative;
    top: 1px;
    }

    .job-overview .overview-bottom,
    .job-overview .overview-top {
    padding: 35px;
    }

    .job-content ul li {
    font-weight: 600;
    opacity: 0.75;
    border-bottom: 1px solid #ccc;
    padding: 10px 5px;
    }

    @media (min-width: 768px) {
    .job-content ul li {
        border-bottom: 0;
        padding: 0;
    }
    }

    .job-content ul li i {
    font-size: 20px;
    position: relative;
    top: 1px;
    }
    .mb-30 {
        margin-bottom: 30px;
    }

        /* Feature Box
    ---------------------*/
    .feature-box-1 {
    padding: 32px;
    box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
    margin: 15px 0;
    position: relative;
    z-index: 1;
    border-radius: 10px;
    overflow: hidden;
    -moz-transition: ease all 0.35s;
    -o-transition: ease all 0.35s;
    -webkit-transition: ease all 0.35s;
    transition: ease all 0.35s;
    top: 0;
    }
    .feature-box-1 * {
    -moz-transition: ease all 0.35s;
    -o-transition: ease all 0.35s;
    -webkit-transition: ease all 0.35s;
    transition: ease all 0.35s;
    }
    .feature-box-1 .icon {
    width: 70px;
    height: 70px;
    line-height: 70px;
    background: #f25900;
    color: #ffffff;
    text-align: center;
    border-radius: 50%;
    margin-bottom: 22px;
    font-size: 27px;
    }
    .feature-box-1 .icon i {
    line-height: 70px;
    }
    .feature-box-1 h5 {
    color: #171796;
    font-weight: 600;
    }
    .feature-box-1 p {
    margin: 0;
    }
    .feature-box-1:after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: auto;
    right: 0;
    border-radius: 10px;
    width: 0;
    background: #171796;
    z-index: -1;
    -moz-transition: ease all 0.35s;
    -o-transition: ease all 0.35s;
    -webkit-transition: ease all 0.35s;
    transition: ease all 0.35s;
    }
    .feature-box-1:hover {
    top: -5px;
    }
    .feature-box-1:hover h5 {
    color: #ffffff;
    }
    .feature-box-1:hover p {
    color: rgba(255, 255, 255, 0.8);
    }
    .feature-box-1:hover:after {
    width: 100%;
    height: 100%;
    border-radius: 10px;
    left: 0;
    right: auto;
    }
    .section {
        padding: 100px 0;
        position: relative;
    }
    .section-title {
        padding-bottom: 45px;
    }
    .section-title h2 {
        font-weight: 700;
        color: #171796;
        font-size: 45px;
        margin: 0 0 15px;
        border-left: 5px solid #f25900;
        padding-left: 15px;
    }

    .iframeContainer{
        position: relative;
        width: 700px;
        height: 600px;
        overflow: hidden;
    }

    .iframeContent{
        position: absolute;
        top: -700px;
        left: -280px;
        width: 1500px;
        height: 2000px;
    }
</style>
@endsection

@section('content')

    <div class="page-title-section" style="background-image: url('{{ asset('src/img/content/khulij.jpg') }}');">
        <div class="black-overlay-70"></div>
        <div class="container">
            <h1>{{ Str::upper(__('nav_HumanResource')) }}</h1>
        </div>
    </div>

    <!--Services START-->
    <div class="section-wrapper section-wrapper--gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8 mb-4">
                    <h3 class="s-subtitle-top textcolor text-center">Meet our service</h3>
                    <h3 class="s-title-md text-center">Таныг найрсаг чадварлаг хамт олон, өсөн дэвших боломж, өрсөлдөхүйц цалин хөлс, нэмэлт урамшууллууд, ажлын тухтай орчин хүлээж байна.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                    <div class="serv-box-text">
                        <i class="icon-handshake"></i>
                        <h3>Ур чадвараа нэмэгдүүлэх боломж</h3>
                        <p>Here is a subscription-based software, which means you just pay an annual subscription fee to use the
                            software, in the cloud or on your own servers.</p>
                        <a href="#" class="button-primary button-lg hvr-sweep-to-right s-mrt-20 ">Find out more</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                    <div class="serv-box-img">
                        <img src="{{ asset('src/img/services/ssquare1.png') }}" alt="">
                        <div class="overlay-img"></div>
                    </div>
                </div>
            </div>
            <div class="row row-reverse-sm">
                <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                    <div class="serv-box-img">
                        <img src="{{ asset('src/img/services/ssquare2.png') }}" alt="">
                        <div class="overlay-img"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                    <div class="serv-box-text">
                        <i class="icon-user-3"></i>
                        <h3>Өсөн дэвших боломж</h3>
                        <p>Here is a subscription-based software, which means you just pay an annual subscription fee to use the
                            software, in the cloud or on your own servers.</p>
                        <a href="#" class="button-primary button-lg hvr-sweep-to-right s-mrt-20 ">Find out more</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                    <div class="serv-box-text">
                        <i class="icon-user-5"></i>
                        <h3>Дадлага</h3>
                        <p>Here is a subscription-based software, which means you just pay an annual subscription fee to use the
                            software, in the cloud or on your own servers.</p>
                        <a href="#" class="button-primary button-lg hvr-sweep-to-right s-mrt-20 ">Find out more</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                    <div class="serv-box-img">
                        <img src="{{ asset('src/img/services/ssquare3.png') }}" alt="">
                        <div class="overlay-img"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Services END-->

    <!-- Start tabs START -->
	<div class="section-wrapper">
		<div class="container overflow-hidden">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="start-title">Ажилд орох <span>процесс</span></h3>
					<p class="start-sub">It is fast, easy and profitable</p>
				</div>
			</div>
			<div class="row s-mrt-80">
				<div class="col-sm-8 col-md-2 tabs-box active-tab-box">
					<div class="tabs-item">
						<div class="tab-icon">
							<i class="icon-paper-plane"></i>
						</div>
						<h3 style="text-align: center;">Анкет хүлээн авах</h3>
						<div class="bar"></div>
						<p> We will explore your business problems and needs co-creatively.</p>
					</div>
				</div>
				<div class="col-sm-8 col-md-2 tabs-box active-tab-box">
					<div class="tabs-item">
						<div class="tab-icon">
							<i class="icon-options-sharp"></i>
						</div>
						<h3 style="text-align: center;">Анкет сонгон шалгаруулах</h3>
						<div class="bar"></div>
						<p> We will explore your business problems and needs co-creatively.</p>
					</div>
				</div>
				<div class="col-sm-8 col-md-2 tabs-box active-tab-box">
					<div class="tabs-item">
						<div class="tab-icon">
							<i class="icon-receipt"></i>
						</div>
						<h3 style="text-align: center;">Эхний шатны ярилцлага</h3>
						<div class="bar"></div>
						<p> We will explore your business problems and needs co-creatively.</p>
					</div>
				</div>
                <div class="col-sm-8 col-md-2 tabs-box active-tab-box">
					<div class="tabs-item">
						<div class="tab-icon">
							<i class="icon-receipt"></i>
						</div>
						<h3 style="text-align: center;">Ур чадварын шалгалт</h3>
						<div class="bar"></div>
						<p> We will explore your business problems and needs co-creatively.</p>
					</div>
				</div>
                <div class="col-sm-8 col-md-2 tabs-box active-tab-box">
					<div class="tabs-item">
						<div class="tab-icon">
							<i class="icon-receipt"></i>
						</div>
						<h3 style="text-align: center;">Хоёрдугаар шатны ярилцлага</h3>
						<div class="bar"></div>
						<p> We will explore your business problems and needs co-creatively.</p>
					</div>
				</div>
				<div class="col-sm-8 col-md-2 tabs-box active-tab-box tabs-box-first">
					<div class="tabs-item">
						<div class="tab-icon">
							<i class="icon-notifications"></i>
						</div>
						<h3 style="text-align: center;">Ажилд авах санал</h3>
						<div class="bar"></div>
						<p> We will explore your business problems and needs co-creatively.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Start tabs END -->

    <!-- Service offers START -->
    {{-- <div class="section-wrapper--sm section-wrapper--parallax" style="background-image: url('img/content/business.jpg')">
        <div class="black-overlay-40"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-offer-box">
                        <i class="icon-like-1"></i>
                        <h4>Marketing Manager</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-offer-box">
                        <i class="icon-user-7"></i>
                        <h4>Insurance Investigator</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-offer-box">
                        <i class="icon-team"></i>
                        <h4>Content Strategist</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-offer-box">
                        <i class="icon-transfer-1"></i>
                        <h4>Investment Advisor</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-offer-box">
                        <i class="icon-desk"></i>
                        <h4>Quality Control</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-offer-box">
                        <i class="icon-settings-2"></i>
                        <h4>Social Media Marketing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Service offers END -->

    <section class="section services-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>What I Do</h2>
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Unique design</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Different Layout</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-comment"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Make it Simple</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-image"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Responsiveness</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-th"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Testing for Perfection</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-cog"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Advanced Options</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
            </div>
        </div>
    </section>
    <!-- OFFER -->

    <div class="section-wrapper py-0">
		<div class="container">
            <div class="iframeContainer">
                <iframe src="https://www.zangia.mn/company/BAYASAKH-KHULIJ-LLC/" scrolling="no" class="iframeContent"></iframe>
            </div>
        </div>
    </div>

    <!--Open Jobs START-->
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-lg-10 mx-auto mb-4">
                    <div class="section-title text-center ">
                        <h3 class="top-c-sep">Нээлттэй ажлын байр</h3>
                        <p>Lorem ipsum dolor sit detudzdae amet, rcquisc adipiscing elit. Aenean socada commodo
                            ligaui egets dolor. Nullam quis ante tiam sit ame orci eget erovtiu faucid.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="career-search mb-60">

                        <div class="filter-result">
                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                        FD
                                    </div>
                                    <div class="job-content">
                                        <h5 class="text-center text-md-left">Front End Developer</h5>
                                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-pin mr-2"></i> Los Angeles
                                            </li>
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-money mr-2"></i> 2500-3500/pm
                                            </li>
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-time mr-2"></i> Full Time
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="job-right my-4 flex-shrink-0">
                                    <a href="#" class="btn d-block w-100 d-sm-inline-block btn-light">Apply now</a>
                                </div>
                            </div>

                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                        UX
                                    </div>
                                    <div class="job-content">
                                        <h5 class="text-center text-md-left">Ui/Ux Developer</h5>
                                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-pin mr-2"></i> Los Angeles
                                            </li>
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-money mr-2"></i> 2500-3500/pm
                                            </li>
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-time mr-2"></i> Full Time
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="job-right my-4 flex-shrink-0">
                                    <a href="#" class="btn d-block w-100 d-sm-inline-block btn-light">Apply now</a>
                                </div>
                            </div>

                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                        GD
                                    </div>
                                    <div class="job-content">
                                        <h5 class="text-center text-md-left">Graphic Designer</h5>
                                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-pin mr-2"></i> Los Angeles
                                            </li>
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-money mr-2"></i> 2500-3500/pm
                                            </li>
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-time mr-2"></i> Full Time
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="job-right my-4 flex-shrink-0">
                                    <a href="#" class="btn d-block w-100 d-sm-inline-block btn-light">Apply now</a>
                                </div>
                            </div>

                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                        JS
                                    </div>
                                    <div class="job-content">
                                        <h5 class="text-center text-md-left">Javascript Developer</h5>
                                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-pin mr-2"></i> Los Angeles
                                            </li>
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-money mr-2"></i> 2500-3500/pm
                                            </li>
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-time mr-2"></i> Full Time
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="job-right my-4 flex-shrink-0">
                                    <a href="#" class="btn d-block w-100 d-sm-inline-block btn-light">Apply now</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Open Jobs END-->
@endsection