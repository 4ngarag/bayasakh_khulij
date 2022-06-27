@extends('layouts.master')

@section('title')
@lang('nav_ContactUs')
@endsection

@section('styles')
<style>
    .gradient-brand-color {
        background-image: -webkit-linear-gradient(0deg, #376be6 0%, #6470ef 100%);
        background-image: -ms-linear-gradient(0deg, #376be6 0%, #6470ef 100%);
        color: #fff;
    }
    .contact-info__wrapper {
        overflow: hidden;
        border-radius: .625rem .625rem 0 0
    }

    @media (min-width: 1024px) {
        .contact-info__wrapper {
            border-radius: 0 .625rem .625rem 0;
            padding: 5rem !important
        }
    }
    .contact-info__list span.position-absolute {
        left: 0
    }
    .z-index-101 {
        z-index: 101;
    }
    .list-style--none {
        list-style: none;
    }
    .contact__wrapper {
        background-color: #fff;
        border-radius: 0 0 .625rem .625rem
    }

    @media (min-width: 1024px) {
        .contact__wrapper {
            border-radius: .625rem 0 .625rem .625rem
        }
    }
    @media (min-width: 1024px) {
        .contact-form__wrapper {
            padding: 5rem !important
        }
    }
    .shadow-lg, .shadow-lg--on-hover:hover {
        box-shadow: 0 1rem 3rem rgba(132,138,163,0.1) !important;
    }
</style>
@endsection

@section('content')

    <!-- Page Title START -->
    <div class="page-title-section" style="background-image: url('{{ asset('src/img/content/contact.jpg') }}');">
        <div class="black-overlay-70"></div>
        <div class="container">
            <h1>{{ Str::upper(__('nav_ContactUs')) }}</h1>
        </div>
    </div>
    <!-- Page Title END -->

    <div class="section-wrapper">
        <div class="container">
            <div class="contact__wrapper shadow-lg mt-n9">
                <div class="row no-gutters">
                    <div class="col-lg-5 contact-info__wrapper gradient-brand-color p-5 order-lg-2">
                        <h3 class="color--white mb-5">Get in Touch</h3>
            
                        <ul class="contact-info__list list-style--none position-relative z-index-101">
                            <li class="mb-4 pl-4">
                                <span class="position-absolute"><i class="fas fa-envelope"></i></span> info@bayasakh.com
                            </li>
                            <li class="mb-4 pl-4">
                                <span class="position-absolute"><i class="fas fa-phone"></i></span> (+976) 7000-1010
                            </li>
                            <li class="mb-4 pl-4">
                                <span class="position-absolute"><i class="fas fa-map-marker-alt"></i></span> @lang('footer_Address')
                                <div class="mt-3">
                                    <a href="https://goo.gl/maps/Kkn1rau9h8Q7vA3L8" target="_blank" class="text-link link--right-icon text-white">Get directions <i class="link__icon fa fa-directions"></i></a>
                                </div>
                            </li>
                        </ul>
            
                        <figure class="figure position-absolute m-0 opacity-06 z-index-100" style="bottom:0; right: 10px">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="444px" height="626px">
                                <defs>
                                    <linearGradient id="PSgrad_1" x1="0%" x2="81.915%" y1="57.358%" y2="0%">
                                        <stop offset="0%" stop-color="rgb(255,255,255)" stop-opacity="1"></stop>
                                        <stop offset="100%" stop-color="rgb(0,54,207)" stop-opacity="0"></stop>
                                    </linearGradient>
            
                                </defs>
                                <path fill-rule="evenodd" opacity="0.302" fill="rgb(72, 155, 248)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                                <path fill="url(#PSgrad_1)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                            </svg>
                        </figure>
                    </div>
            
                    <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1">
                        <form action="#" class="contact-form form-validate" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="required-field" for="firstName">@lang('n_ContactForm_Name')</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Wendy">
                                    </div>
                                </div>
            
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Appleseed">
                                    </div>
                                </div>
            
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="required-field" for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="wendy.apple@seed.com">
                                    </div>
                                </div>
            
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="phone">@lang('n_ContactForm_Phone')</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="(021)-454-545">
                                    </div>
                                </div>
            
                                <div class="col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label class="required-field" for="message">@lang('n_ContactForm_Message')</label>
                                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Hi there, I would like to....."></textarea>
                                    </div>
                                </div>
            
                                <div class="col-sm-12 mb-3">
                                    <button type="submit" name="submit" class="btn btn-primary">@lang('n_ContactForm_Send')</button>
                                </div>
            
                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form Wrapper -->
            
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="section-wrapper section-wrapper--sm">
        <div class="container">
            <div class="row mt-40">
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="feature-float clearfix">
                        <div class="feature-float-icon">
                            <i class="icon-cursor"></i>
                        </div>
                        <div class="feature-float-content">
                            <h4>@lang('n_Contact_FindUs')</h4>
                            <p>@lang('footer_Address')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="feature-float clearfix">
                        <div class="feature-float-icon">
                            <i class="icon-speech-bubbles"></i>
                        </div>
                        <div class="feature-float-content">
                            <h4>@lang('n_Contact_WriteUs')</h4>
                            <p><a href="mailto:info@bayasakh.com" style="color:black">info@bayasakh.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="feature-float clearfix">
                        <div class="feature-float-icon">
                            <i class="icon-smartphone"></i>
                        </div>
                        <div class="feature-float-content">
                            <h4>@lang('n_Contact_CallUs')</h4>
                            <p>(+976) 7000-1010</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Let's Talk START-->
    <div class="section-wrapper section-wrapper--gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8 mb-4">
                    <h3 class="s-subtitle-top textcolor text-center">@lang('n_ContactForm_ContactUs')</h3>
                    <h3 class="s-title-lg text-center">@lang('n_ContactForm_FeedbackContact')</h3>
                </div>
            </div>
            <!-- Form Start -->
            <form class="white-form mt-3">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-12">
                        <input type="text" name="name" placeholder="@lang('n_ContactForm_Name') *" autocomplete="off">
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <input type="phone" name="phone" placeholder="@lang('n_ContactForm_Phone') *" autocomplete="off">
                    </div>
                    <div class="col-md-4 col-sm-12 col-12">
                        <select name="contactform" id="contactform">
                            <option></option>
                            <option value="marketing">@lang('n_ContactForm_Marketing')</option>
                            <option value="sales">@lang('n_ContactForm_Sales')</option>
                            <option value="feedback">@lang('n_ContactForm_Feedback')</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <textarea name="message" placeholder="@lang('n_ContactForm_Message') *"></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="button-primary button-xl hvr-sweep-to-right mt-3">@lang('n_ContactForm_Send')</button>
                    </div>
                </div>
            </form>
            <!-- Form End -->
        </div>
    </div> --}}
    <!--Let's Talk END-->

    <div class="section-wrapper map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3836.636307144611!2d106.94313004138418!3d47.916709548730296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d969223ede752a1%3A0x65a94722bbb24c2!2z0JHQsNGP0YHQsNGFINCl0YPQu9GM0LYg0KXQpdCa!5e0!3m2!1smn!2smn!4v1654754867745!5m2!1smn!2smn" width="100%" height="400" style="border:0;"></iframe>
    </div>
@endsection