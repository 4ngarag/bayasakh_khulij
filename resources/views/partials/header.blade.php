<!-- Navbar START -->
<header id="nav-transparent">
	<nav id="navigation4" class="container navigation">
		<div class="nav-header">
			<a class="nav-brand" href="/">
				<img src="{{ asset('src/img/logo/khulij-light-'.app()->getLocale().'.png') }}" alt="logo" class="main-logo" id="light_logo">
				<img src="{{ asset('src/img/logo/khulij-'.app()->getLocale().'.png') }}" alt="logo" class="main-logo" id="main_logo">
			</a>
			<div class="nav-toggle"></div>
		</div>
		<div class="nav-menus-wrapper">
			<ul class="nav-menu align-to-right">
				<li><a href="/">@lang('nav_HomePage')</a></li>
				<li><a href="/about">@lang('nav_AboutUs')</a></li>
				<li><a href="/branch-companies">@lang('nav_BranchCompanies')</a>
					<ul class="nav-dropdown">
						<li><a href="/branch-companies/1">@lang('n_Company_Khulij')</a></li>
						<li><a href="/branch-companies/2">@lang('n_Company_Ashiddari')</a></li>
						<li><a href="/branch-companies/3">@lang('n_Company_KhulijGoo')</a></li>
						<li><a href="/branch-companies/4">@lang('n_Company_Urguu')</a></li>
						<li><a href="/branch-companies/5">@lang('n_Company_TrustFinance')</a></li>
						<li><a href="/branch-companies/6">@lang('n_Company_Construction')</a></li>			
					</ul>
				</li>
				<li><a href="/brands">@lang('nav_Brands')</a></li>
				<li><a href="/career">@lang('nav_HumanResource')</a></li>
				<li><a href="/contact">@lang('nav_ContactUs')</a></li>
			</ul>
			<ul class="nav-menu align-to right">
				@php if(session()->missing('language')) session()->put('language', config('app.locale')) @endphp
				<li><a>{{ Session::get('language') }}</a>
					<ul class="nav-dropdown" style="min-width: 10px">
						@foreach(config('app.available_locales') as $locale)
						<li style="@if(session()->get('language') == $locale) display:none; @endif"><a href="{{ request()->url() }}?language={{ $locale }}">{{ strtoupper($locale) }}</a></li>
						@endforeach
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>
<!-- Navbar END -->