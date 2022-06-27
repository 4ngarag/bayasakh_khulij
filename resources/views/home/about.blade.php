@extends('layouts.master')

@section('title')
@lang('nav_AboutUs')
@endsection

@section('styles')
<link rel='stylesheet' href="{{ asset('src/css/timeline.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('src/assets/jvectormap/jquery-jvectormap-2.0.5.css') }}" type="text/css" media="screen"/>
    
<style>
    .jvectormap-legend-inner {
    margin-bottom: 3px;
    }

    .jvectormap-legend-cnt-h .jvectormap-legend-tick {
    width: auto;
    margin-right: 10px;
    }

    .jvectormap-legend-cnt-h .jvectormap-legend-tick-text {
    display: inline-block;
    vertical-align: middle;
    line-height: 13px;
    }

    .jvectormap-legend-cnt-h .jvectormap-legend-tick-sample {
    width: 15px;
    height: 15px;
    display: inline-block;
    vertical-align: middle;
    }
</style>
@endsection

@section('content')

    <!-- Page Title START -->
    <div class="page-title-section" style="background-image: url('{{ asset('src/img/content/warehouse.jpg') }}');">
        <div class="black-overlay-70"></div>
        <div class="container">
            <h1>{{ Str::upper(__('nav_AboutUs')) }}</h1>
        </div>
    </div>
    <!-- Page Title END -->

    <!-- Timeline START -->
    <div class="row">
        <div class="col-md-4 text-center mx-auto">
            <div class="mt-6 mb-5">
                <h6 class="font-weight-bold">Бидний түүх</h6>
            </div>
        </div>
    </div>
    <!-- End of Title -->
    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
            <!-- Timeline -->
            <div class="timeline timeline-four">
                <!-- Timeline Item 1 -->
                <div class="timeline-item">
                    <div class="icon"></div>
                    <div class="date-content">
                        <div class="date-outer"><span class="date"><i class="far fa-calendar"></i> <span class="year mt-1">1993</span></span></div>
                    </div>
                    <div class="timeline-content">
                        <h5 class="title">Үүсгэн байгуулагдсан</h5>
                        <p>1993 онд “Баясах трейд” худалдааны компанийг 40 хүний бүрэлдэхүүнтэй анх үүсгэн байгуулсан. Тухайн үедээ Монгол Улсын гадаад худалдааны салбарын ууган аж ахуйн нэгжүүдийн нэг байсан бөгөөд Монголдоо дэлхийн брэндийг нэвтрүүлж, шинэ брэнд бүтээгдэхүүнүүдийг монголын хэрэглэгчдэд таниулах томоохон хувьсал болсон юм.</p>
                    </div>
                </div>
                <!-- Timeline Item 2 -->
                <div class="timeline-item">
                    <div class="icon"></div>
                    <div class="date-content">
                        <div class="date-outer"><span class="date"><i class="far fa-lightbulb"></i> <span class="year mt-1">2003</span></span></div>
                    </div>
                    <div class="timeline-content">
                        <h5 class="title">Баясах Өргөө ХХК</h5>
                        <p>Баясах Өргөө ХХК үүсгэн байгуулагдав. 2003 оны  12  дугаар  сарын  03  нд  "HIT-1"  супермаркетыг,  2007  оны  2  сард  "HIT-2" супермаркетыг ашиглалтад оруулж 2010 оны 12-р сараас үйл ажиллагаагаа өргөжүүлэн Сүлжээ супермаркетын стандартад нийцүүлэн “Баясах супермаркет” нэртэйгээр 4 салбар дэлгүүрүүдээ нээсэн.</p>
                    </div>
                </div>
                <!-- Timeline Item 3 -->
                <div class="timeline-item">
                    <div class="icon"></div>
                    <div class="date-content">
                        <div class="date-outer"><span class="date"><i class="far fa-paper-plane"></i> <span class="year mt-1">2013</span></span></div>
                    </div>
                    <div class="timeline-content">
                        <h5 class="title">Баясах Хульж ХХК</h5>
                        <p>2013 оноос компаний нэрээ Баясах Хульж ХХК хэмээн өөрчилж хүнс шингэн хүнс, ахуйн хэрэглээний бараа, хөлдөөсөн хүнс, банк бус санхүүгийн байгууллага, барилгын материал зэрэг салбарт охин компаниа нээж үйл ажиллагаагаа өргөтгөсөн.</p>
                    </div>
                </div>
                <!-- Timeline Item 3 -->
                <div class="timeline-item">
                    <div class="icon"></div>
                    <div class="date-content">
                        <div class="date-outer"><span class="date"><i class="far fa-paper-plane"></i> <span class="year mt-1">2017</span></span></div>
                    </div>
                    <div class="timeline-content">
                        <h5 class="title">Трастфинанс ББСБ</h5>
                        <p>“Трастфинанс ББСБ” ХХК 2017 онд СЗХ-с зөвшөөрөлөө авч үйл ажиллагаагаа эхэлсэн. Бид одоогоор зөвхөн зээлийн үйлчилгээ үзүүлж байгаа бөгөөд цаашид Финтек чиглэлээр үйл ажиллагаагаа өргөтгөхөөр судлаж байна.</p>
                    </div>
                </div>
                <!-- Timeline Item 3 -->
                <div class="timeline-item">
                    <div class="icon"></div>
                    <div class="date-content">
                        <div class="date-outer"><span class="date"><i class="far fa-paper-plane"></i> <span class="year mt-1">2018</span></span></div>
                    </div>
                    <div class="timeline-content">
                        <h5 class="title">Баясах Констракшн ХХК</h5>
                        <p>Баясах Констракшн ХХК үүсгэн байгуулагдав. Монгол улсын хөгжилд үнэтэй хувь нэмэр оруулж буй Барилгын компаниудад БНХАУ-ын барилгын материалын нийлүүлэлт хийж байна.</p>
                    </div>
                </div>
                <!-- Timeline Item 3 -->
                <div class="timeline-item">
                    <div class="icon"></div>
                    <div class="date-content">
                        <div class="date-outer"><span class="date"><i class="far fa-paper-plane"></i> <span class="year mt-1">2019</span></span></div>
                    </div>
                    <div class="timeline-content">
                        <h5 class="title">Хульж Гоо ХХК</h5>
                        <p>Хульж Гоо ХХК үүсгэн байгуулагдав. хойд хөрш ОХУ-н "Невская Косметика" ХХК, Украйн улсын "Киевский картонно-бумажный комбинат" ХХК, Саянскхимпласт ХХК-тай хамтарч ажилладаг бөгөөд эдгээр компаний  нийт 240 гаруй нэр төрлийн гоо сайхан, ахуйн барааг импортоор оруулж ирж, хэрэглэгчдэд нийлүүлж байна.</p>
                    </div>
                </div>
                <!-- Timeline Item 3 -->
                <div class="timeline-item">
                    <div class="icon"></div>
                    <div class="date-content">
                        <div class="date-outer"><span class="date"><i class="far fa-paper-plane"></i> <span class="year mt-1">2021</span></span></div>
                    </div>
                    <div class="timeline-content">
                        <h5 class="title">Ашиддарь ХХК</h5>
                        <p>Ашиддарь ХХК үүсгэн байгуулагдав. Дани улсаас төрөл бүрийн сүү сүүн бүтээгдэхүүнийг импортлон зах зээлд нэвтрүүлж, 60 гаруй нэр төрлийн өргөн хэрэглээний бүтээгдэхүүн Монголын зах зээлд нийлүүлж байна.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Timeline END -->

    <!--Steps START-->
    <div class="section-wrapper py-0">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-12 col-lg-8 col-centered text-center">
                    <h3 class="s-title">@lang('n_About_Mission')</h3>
                </div>
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <figure class="text-center bg-white py-5 px-4 shadow-2" style="border-radius: .75rem;">
                        <i class="far fa-gem fa-lg mb-4" style="color: #f9a169;"></i>
                        <blockquote class="blockquote pb-2">
                            <p>
                                <i class="fas fa-angle-double-left" style="color: #f9a169;"></i>
                                <span class="lead font-italic">Чанар бүтээгдэхүүнээр дамжуулан нийлүүлж хэрэглээний шинэ соёлыг түгээнэ.</span>
                                <i class="fas fa-angle-double-right" style="color: #f9a169;"></i>
                            </p>
                        </blockquote>
                        <figcaption class="blockquote-footer mb-0 font-italic">
                            {{ Str::upper(__("nav_KhulijCompany")) }}
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--Steps END-->

    <!--Steps START-->
    <div class="section-wrapper py-0">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-12 col-lg-8 col-centered text-center">
                    <h3 class="s-title">@lang('n_About_Value')</h3>
                </div>
            </div>
            <div class="process-steps-xs process-steps-background">
                <ul class="center-holder row">
                    <li class="col">
                        <div class="process-step-xs center-holder">
                            <div class="process-step-icon">
                                <span>1</span>
                            </div>
                            <h3 class="text-center">@lang('n_About_Value_Cooperation')</h3>
                        </div>
                    </li>
                    <li class="col">
                        <div class="process-step-xs center-holder">
                            <div class="process-step-icon">
                                <span>2</span>
                            </div>
                            <h3 class="text-center">@lang('n_About_Value_Partners')</h3>
                        </div>
                    </li>
                    <li class="col">
                        <div class="process-step-xs center-holder">
                            <div class="process-step-icon">
                                <span>3</span>
                            </div>
                            <h3 class="text-center">@lang('n_About_Value_Culture')</h3>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--Steps END-->

    <!--Steps START-->
    <div class="section-wrapper py-0">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-12 col-lg-8 col-centered text-center">
                    <h3 class="s-title">@lang('n_About_Vision')</h3>
                </div>
                <div class="col col-lg-9 col-xl-7">
                    <div>
                        <div class="p-5">
            
                            <div class="text-center mb-4 pb-2">
                                <img src="{{ asset('src/img/bulb.webp') }}" alt="Bulb" width="100">
                            </div>
            
                            <figure class="text-center mb-0">
                                <blockquote class="blockquote">
                                    <p class="pb-3">
                                        <i class="fas fa-quote-left fa-xs text-primary"></i>
                                        <span class="lead font-italic">Бид Монголын хэрэглэгчдээ ирээдүйд эрүүл амьдрахад нь туслах жинхэнэ чанартай, гарал үүсэл тодорхой бүтээгдэхүүнийг хангахыг эрмэлздэг.</span>
                                        <i class="fas fa-quote-right fa-xs text-primary"></i>
                                    </p>
                                </blockquote>
                                <figcaption class="blockquote-footer mb-0">
                                    {{ Str::upper(__("nav_KhulijCompany")) }}
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Steps END-->

    <!-- Map START -->
    <div class="section-wrapper py-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8 col-centered s-mrb-60">
                    <h3 class="s-title text-center">{{ Str::upper(__('n_import_Title')) }}</h3>
                </div>
            </div>
            <div id="world-map-markers" style="height: 420px"></div>
        </div>
    </div>
    <!-- Map END -->

    <!--Testmonials START-->
    {{-- <div class="section-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-centered">
                    <h3 class="s-title text-center">Customers testimonials</h3>
                </div>
                <div id="testim" class="testmonials">
                    <span id="right-arrow" class="arrow right"><i class="ti-arrow-right"></i></span>
                    <span id="left-arrow" class="arrow left"><i class="ti-arrow-left"></i></span>
                    <ul id="testim-dots" class="dots">
                        <li class="dot active"></li>
                        <li class="dot"></li>
                    </ul>
                    <div id="testim-content" class="cont">
                        <div class="active carousel-box">
                            <div class="img"><img src="img/team/team-1.png" alt=""></div>
                            <h4>Овог нэр</h4>
                            <p>Санал хүсэлт</p>
                        </div>

                        <div class="carousel-box">
                            <div class="img"><img src="img/team/team-2.png" alt=""></div>
                            <h4>Овог нэр</h4>
                            <p>Санал хүсэлт</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--Testmonials END-->

    <!--Brands START-->
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="owl-brands owl-carousel owl-theme s-mrb-70 s-mrt-70">
                    @php $brands = App\Models\Brand::inRandomOrder()->select('id','name','logo')->get() @endphp
                    @foreach($brands as $brand)
                    <div class="item brands-item">
                        <img src="{{ Storage::url($brand->logo) }}" alt="" style="width: 74px; height: 38px; float: left;">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--Brands END-->
@endsection

@section('scripts')
<script src="{{ asset('src/assets/jvectormap/jquery-jvectormap-2.0.5.min.js') }}"></script>
<script src="{{ asset('src/assets/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
<script>
    var plants = [
        {name: "Denmark", coords: [56, 8.9], status: 'ashiddari', offsets: [0, 2]},
        {name: "Poland", coords: [52, 20], status: 'khulij'},
        {name: "Korea", coords: [36.235, 127.9253], status: 'khulij'},
        // {name: "Mongolia", coords: [46.8206, 103.8025], status: 'closed'},
        {name: "Russia", coords: [61, 100], status: 'khulijgoo', offsets: [0, 20]},
        {name: "Russia", coords: [61, 110], status: 'khulij', offsets: [0, -2]},
        {name: "Ukraine", coords: [49.379433, 32.16558], status: 'khulij'},
        {name: "Moldova", coords: [47, 28.8], status: 'khulij'},
        {name: "Vietnam", coords: [21.5, 105.8], status: 'khulij'},
    ];

    $(function(){
        $('#world-map-markers').vectorMap({
            map: 'world_mill',
            backgroundColor: "tranparent",
            zoomOnScroll: !0,
	        zoomButtons: !0,
            markers: plants.map(function(h){ return {name: h.name, latLng: h.coords} }),
            regionStyle: {
                initial: {
                    stroke: "#9599ad",
                    strokeWidth: .25,
                    fill: "#9599ad",
                    fillOpacity: 1
                }
            },
            // labels: {
            //     markers: {
            //         render: function(index){
            //             return plants[index].name;
            //         },
            //         offsets: function(index){
            //             var offset = plants[index]['offsets'] || [0, 0];

            //             return [offset[0] - 7, offset[1] + 3];
            //         }
            //     }
            // },
            series: {
                markers: [{
                    attribute: 'image',
                    scale: {
                        'khulij': 'http://khulij.test/src/img/map/khulij.png',
                        'ashiddari': 'http://khulij.test/src/img/map/ashiddari.png',
                        'khulijgoo': 'http://khulij.test/src/img/map/khulijgoo.png'
                    },
                    values: plants.reduce(function(p, c, i){ p[i] = c.status; return p }, {}),
                    legend: {
                        horizontal: true,
                        title: 'Branch companies',
                        labelRender: function(v){
                            return {
                                khulij: 'Bayasakh Khulij LLC',
                                ashiddari: 'Ashiddari LLC',
                                khulijgoo: 'Khulij Goo LLC'
                            }[v];
                        }
                    }
                }]
            }
        });
    });
</script>
@endsection