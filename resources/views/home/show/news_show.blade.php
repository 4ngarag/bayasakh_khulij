@extends('layouts.master')

@section('title')
    {{ $post->{'title_'.app()->getLocale()} }}
@endsection

@section('content')

    <!-- Page Title START -->
    <div class="page-title-section-without-background">
        <div class="black-overlay-70"></div>
    </div>
    <!-- Page Title END -->

    <!-- Blog Post START -->
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <!-- Left Side START -->
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="blog-post pr-lg-4 pr-0">
                        <img src="{{ Storage::url($post->image) }}" alt="img" class="mb-15">
                        <h4>{{ $post->{'title_'.app()->getLocale()} }}</h4>
                        <ul class="blog-post-info">
                            <li><i class="far fa-user"></i><span>Admin</span></li>
                            <li><i class="far fa-calendar-alt"></i><span>{{ $post->created_at->format('Y.m.d') }}</span></li>
                        </ul>
                        <p>{!! $post->{'full_text_'.app()->getLocale()} !!}</p>
                    </div>
                    <!-- Comments Start -->
                    {{-- <div class="blog-comments">
                        <h3>All Comments:</h3>
                        <div class="blog-comment-user">
                            <div class="row">
                                <div class="col-md-1 hidden-sm-down pr-0">
                                    <img src="img/team/team-01.jpg" alt="user">
                                </div>
                                <div class="col-md-11 col-xs-12">
                                    <div class="comment-block">
                                        <div class="d-flex justify-content-between">
                                            <h6>Нэр</h6>
                                            <strong>09.08.2022</strong>
                                        </div>
                                        <p>
                                            Сэтгэгдэл энд
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Comments End -->
                </div>
                <!-- Left Side END -->

                <!-- Right Side START -->
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="blog-post-right">
                        <h4>@lang('n_news_RecentNews')</h4>
                        <div class="recent-post mt-20">
                            @php $recentnews = App\Models\Post::where('id', '!=', $post->id)->limit(5)->get() @endphp
                            @foreach($recentnews as $news)
                            <div class="recent-post-info">
                                <div class="row align-items-center">
                                    <div class="col-md-4 col-sm-4 col-12 pr-0">
                                        <img src="{{ Storage::url($news->image) }}" alt="">
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-12">
                                        <h3><a href="/news/{{ $news->id }}">{{ ucfirst($news->{'title_'.app()->getLocale()}) }}</a></h3>
                                        <h6>{{ $post->created_at->format('Y.m.d') }}</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        {{-- <h4>Share Links</h4>
                        <div class="blog-post-follow mt-20">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <!-- Right Side END -->
            </div>
        </div>
    </div>
    <!-- Blog Post END -->
@endsection