@extends('layouts.master')

@section('title')
Дэлгүүрийн байршил
@endsection

@section('styles')

@endsection

    <style>
        hr {
            border-top: 1px solid #007bff;
            width:70%;
        }

        a {color: #000;}


        .card{
            background-color: #FFFFFF;
            padding:0;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius:4px;
            box-shadow: 0 4px 5px 0 rgba(0,0,0,0.14), 0 1px 10px 0 rgba(0,0,0,0.12), 0 2px 4px -1px rgba(0,0,0,0.3);
        }


        .card:hover{
            box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 6px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
            color:black;
        }

        address{
        margin-bottom: 0px;
        }




        #author a{
        color: #fff;
        text-decoration: none;
            
        }
    </style>

@section('content')

    <!-- Page Title START -->
    <div class="page-title-section" style="background-image: url('{{ asset('src/img/content/warehouse.jpg') }}');">
        <div class="black-overlay-70"></div>
        <div class="container">
            <h1>ДЭЛГҮҮРИЙН БАЙРШИЛ</h1>
        </div>
    </div>
    <!-- Page Title END -->

    <div class="container-fluid">
        <div class="row">
        <div class="col-md-4 mt-5">
            <div class="card text-center">
                <img class="card-img-top" src="{{ asset('src/img/branch/bayasakh-supermarket.png') }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">Баясах Супермаркет (Салбар 1)</h5>
                    <hr>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.0106711353956!2d106.94243631558504!3d47.91683097920643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d969223ede752a1%3A0x65a94722bbb24c2!2z0JHQsNGP0YHQsNGFINCl0YPQu9GM0LYg0KXQpdCa!5e0!3m2!1smn!2smn!4v1655824999903!5m2!1smn!2smn" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <a href="https://goo.gl/maps/tbxpdtKqu8rgyjWP8" target="_blank"><address class="font-italic">13-р хороолол</address></a>
                </div>
                <div class="card-footer text-muted">
                    <div class="row">
                        <div class="col">
                            <a href="mailto:bayasakh_1@bayasakh.com"><i class="fas fa-envelope"></i></a>
                        </div>
                        <div class="col">
                            <a href="#"><i class="fas fa-phone"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="card text-center">
                <img class="card-img-top" src="{{ asset('src/img/branch/bayasakh-supermarket.png') }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">Баясах Супермаркет (Салбар 2)</h5>
                    <hr>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2673.6919407238734!2d106.94042581558541!3d47.92299787920698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d9693c5094bde0b%3A0x50e886082cac22d3!2z0JHQsNGP0YHQsNGFINCh0YPQv9C10YDQvNCw0YDQutC10YIgKNCh0LDQu9Cx0LDRgCAyKQ!5e0!3m2!1smn!2smn!4v1655824592462!5m2!1smn!2smn" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <a href="https://goo.gl/maps/jognVpzZTc4VSJSr9" target="_blank"><address class="font-italic">Сансар</address></a>
                </div>
                <div class="card-footer text-muted">
                    <div class="row">
                        <div class="col">
                            <a href="mailto:bayasakh_2@bayasakh.com"><i class="fas fa-envelope"></i></a>
                        </div>
                        <div class="col">
                            <a href="#"><i class="fas fa-phone"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="card text-center">
                <img class="card-img-top" src="{{ asset('src/img/branch/bayasakh-supermarket.png') }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">Баясах Супермаркет (Салбар 5)</h5>
                    <hr>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2673.4144393065526!2d106.92483031558551!3d47.92836657920722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d96931109390d03%3A0xecb6e3ceb4679d47!2z0JHQsNGP0YHQsNGFINCh0YPQv9C10YDQvNCw0YDQutC10YIgKNCh0LDQu9Cx0LDRgCA1KQ!5e0!3m2!1smn!2smn!4v1655864949554!5m2!1smn!2smn" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <a href="https://goo.gl/maps/d5Kzu2fmUu2o1Nn48" target="_blank"><address class="font-italic">11-р хороолол</address></a>
                </div>
                <div class="card-footer text-muted">
                    <div class="row">
                        <div class="col">
                            <a href="mailto:bayasakh_5@bayasakh.com"><i class="fas fa-envelope"></i></a>
                        </div>
                        <div class="col">
                            <a href="#"><i class="fas fa-phone"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="card text-center">
                <img class="card-img-top" src="{{ asset('src/img/branch/bayasakh-supermarket.png') }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">Баясах Супермаркет (Салбар 6)</h5>
                    <hr>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2673.612869658385!2d106.80792871558539!3d47.924527679206925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d96ed12aa7bd03b%3A0x37f490d23e9f1b!2z0JHQsNGP0YHQsNGFINCh0YPQv9C10YDQvNCw0YDQutC10YIgKNCh0LDQu9Cx0LDRgCA2KQ!5e0!3m2!1smn!2smn!4v1655824709650!5m2!1smn!2smn" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <a href="https://goo.gl/maps/n4193tmRBPqE167R7" target="_blank"><address class="font-italic">21-р хороолол</address></a>
                </div>
                <div class="card-footer text-muted">
                    <div class="row">
                        <div class="col">
                            <a href="mailto:bayasakh_6@bayasakh.com"><i class="fas fa-envelope"></i></a>
                        </div>
                        <div class="col">
                            <a href="#"><i class="fas fa-phone"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

    <!--Let's Talk END-->
@endsection