<!-- Footer START -->
<footer class="py-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 foot-col-1 foot-col">
                <h3>{{ Str::upper(__('nav_KhulijCompany')) }}</h3>
                <p class="s-mrt-20">@lang('footer_Address')</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2 offset-lg-1 foot-col-2 foot-col">
                <h3>{{ Str::upper(__('footer_AboutUs')) }}</h3>
                <ul>
                    <li><a href="/about">@lang('footer_Introduction')</a>
                    </li>
                    <li><a href="#">@lang('footer_OurSuccess')</a><span class="new">NEW</span>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 foot-col-3 foot-col">
                <h3>{{ Str::upper(__('footer_Other')) }}</h3>
                <ul>
                    <li><a href="/careers">@lang('n_OpenJobs')</a><span class="new">WE’RE HIRING</span>
                    </li>
                    <li><a href="/storelocation">@lang('footer_StoreLocation')</a>
                    </li>
                    <li><a href="/contact">@lang('footer_Feedback')</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 foot-col-4 foot-col">
                <h3>{{ Str::upper(__('footer_LetsStayConnected')) }}</h3>
                <ul>
                    <a class="btn btn-primary" style="background-color: #3b5998;" href="https://www.facebook.com/bayasakh.khulij" target="_blank" role="button"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary" style="background-color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-primary" style="background-color: #0082ca;" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-primary" style="background-color: #ed302f;" href="#!" role="button"><i class="fab fa-youtube"></i></a>
                    {{-- <li><a href="https://www.facebook.com/bayasakh.khulij" target="_blank">Facebook</a>
                    </li>
                    <li><a href="https://www.zangia.mn/company/BAYASAKH-KHULIJ-LLC" target="_blank">Zangia</a>
                    </li> --}}
                </ul>
            </div>
        </div>
        <div class="row s-mrt-60 footer-bottom">
            <div class="col-sm-12 col-md-7 copyr">
                <p>© {{ strftime("%Y"); }} {{ Str::upper(__('nav_KhulijCompany')) }}</p>
            </div>
            <div class="col-sm-12 col-md-5 term">
                <ul class="termlist">
                    <li><a href="mailto:info@bayasakh.com">info@bayasakh.com</a></li>
                    <li><a href="tel:+97670001010">(+976) 7000-1010</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Footer END -->