<!doctype html>
<html lang="mn" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">

<head>
    <meta charset="utf-8" />
    <title>Анкет илгээх</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('src/img/favicon.ico') }}">
    <!-- Layout config Js -->
    <script src="{{ asset('src/hr/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('src/hr/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('src/hr/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('src/hr/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('src/hr/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />


</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="/careers" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('src/hr/assets/images/logo.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('src/hr/assets/images/logo-light.png') }}" alt="" height="42">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none"
                    id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-md-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Хайх..." autocomplete="off"
                            id="search-options" value="">
                        <span class="mdi mdi-magnify search-widget-icon"></span>
                        <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                            id="search-close-options"></span>
                    </div>
                </form>
            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                        id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                        data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button"
                        class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode shadow-none">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>

            </div>
        </div>
    </div>
</header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Light Logo-->
                <a href="/careers" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('src/hr/assets/images/logo.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('src/hr/assets/images/logo-light.png') }}" alt="" height="42">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">
            
                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/careers">
                                <i class="mdi mdi-form-select"></i> <span data-key="t-forms">Анкет бөглөх</span>
                            </a>
                        </li>
                
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarTables">
                                <i class="mdi mdi-grid-large"></i> <span data-key="t-tables">Нээлттэй ажлын байр</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Анкет бөглөх</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Хүний нөөц</a></li>
                                        <li class="breadcrumb-item active">Анкет бөглөх</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Анкет</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Албан тушаал</label>
                                                    <select class="form-select mb-3" aria-label="Default select example">
                                                        <option selected>Сонгох</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Цалингийн доод хэмжээ</label>
                                                    <input type="text" class="form-control" id="labelInput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Цалингийн дээд хэмжээ</label>
                                                    <input type="text" class="form-control" id="labelInput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Ажилд орох боломжтой хугацаа</label>
                                                    <input type="date" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Ерөнхий мэдээлэл</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row align-items-center g-3">
                                            <div class="col-lg-4">
                                                    <label for="labelInput" class="form-label">Эцэг, эхийн нэр</label>
                                                    <input type="text" class="form-control" id="labelInput">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="labelInput" class="form-label">Өөрийн нэр</label>
                                                <input type="text" class="form-control" id="labelInput">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="labelInput" class="form-label">Регистрийн дугаар</label>
                                                <input type="text" class="form-control" id="labelInput">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="labelInput" class="form-label">Төрсөн огноо</label>
                                                <input type="date" class="form-control" id="exampleInputdate">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="labelInput" class="form-label">Нас</label>
                                                <input type="text" class="form-control" id="labelInput">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="labelInput" class="form-label">Хүйс</label>
                                                <select class="form-select">
                                                    <option selected>Сонгох</option>
                                                    <option value="1">Эрэгтэй</option>
                                                    <option value="2">Эмэгтэй</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="labelInput" class="form-label">Одоо оршин суугаа хаяг аймаг/дүүрэг</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Сонгох</option>
                                                    <option value="1">Баянзүрх</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="labelInput" class="form-label">Сум/Хороо</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Сонгох</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="labelInput" class="form-label">Гудамж</label>
                                                <input type="text" class="form-control" id="labelInput">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="labelInput" class="form-label">Байр</label>
                                                <input type="text" class="form-control" id="labelInput">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="labelInput" class="form-label">Хаалга/Тоот</label>
                                                <input type="text" class="form-control" id="labelInput">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="labelInput" class="form-label">Утасны дугаар</label>
                                                <input type="text" class="form-control" id="labelInput">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="labelInput" class="form-label">И-мэйл хаяг</label>
                                                <input type="text" class="form-control" id="labelInput">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="labelInput" class="form-label">Оршин суух хаяг</label>
                                                <input type="text" class="form-control" id="labelInput">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="labelInput" class="form-label">Яаралтай үед холбоо барих утасны дугаар</label>
                                                <input type="text" class="form-control" id="labelInput">
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Гэр бүлийн мэдээлэл</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-6">
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Таны хэн болох</label>
                                                    <select class="form-select mb-3" aria-label="Default select example">
                                                        <option selected>Сонгох</option>
                                                        <option value="1">Эцэг</option>
                                                        <option value="2">Эх</option>
                                                        <option value="3">Дүү</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Нэр</label>
                                                    <input type="text" class="form-control" id="labelInput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Төрсөн огноо</label>
                                                    <input type="date" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Утасны дугаар</label>
                                                    <input type="text" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Ажилладаг байгууллага</label>
                                                    <input type="text" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Албан тушаал</label>
                                                    <input type="text" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Боловсролын мэдээлэл</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-8">
                                            <div class="col-xxl-1 col-md-8">
                                                <div>
                                                    <label for="basiInput" class="form-label">Элссэн</label>
                                                    <input type="date" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-8">
                                                <div>
                                                    <label for="labelInput" class="form-label">Төгссөн</label>
                                                    <input type="date" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-8">
                                                <div>
                                                    <label for="labelInput" class="form-label">Хаана</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Сонгох</option>
                                                        <option value="1">Монгол улс</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-8">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Сургуулийн нэр</label>
                                                    <input type="text" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-md-8">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Мэргэжил</label>
                                                    <input type="text" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-8">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Түвшин</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Сонгох</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxl-1 col-md-8">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Зэрэг цол</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Сонгох</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxl-1 col-md-8">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Голч</label>
                                                    <input type="text" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Гадаад хэлний мэдлэг</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-6">
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Хэл</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Сонгох</option>
                                                        <option value="1">Англи</option>
                                                        <option value="2">Орос</option>
                                                        <option value="3">Солонгос</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Сонсож ойлгох</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Сонгох</option>
                                                        <option value="1">Сайн</option>
                                                        <option value="2">Дунд</option>
                                                        <option value="3">Муу</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Уншиж ойлгох</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Сонгох</option>
                                                        <option value="1">Сайн</option>
                                                        <option value="2">Дунд</option>
                                                        <option value="3">Муу</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Ярих чадвар</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Сонгох</option>
                                                        <option value="1">Сайн</option>
                                                        <option value="2">Дунд</option>
                                                        <option value="3">Муу</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Бичих чадвар</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Сонгох</option>
                                                        <option value="1">Сайн</option>
                                                        <option value="2">Дунд</option>
                                                        <option value="3">Муу</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Суралцсан хугацаа</label>
                                                    <input type="text" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Ажлын туршлага</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-6">
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Байгууллагын нэр</label>
                                                    <input type="text" class="form-control" id="labelInput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Албан тушаал</label>
                                                    <input type="text" class="form-control" id="labelInput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Орсон огноо</label>
                                                    <input type="date" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Гарсан огноо</label>
                                                    <input type="date" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Цалин</label>
                                                    <input type="text" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Гарсан шалтгаан</label>
                                                    <input type="text" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>

                    <button type="button" class="btn btn-success btn-label right ms-auto"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> Илгээх</button>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('src/hr/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('src/hr/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('src/hr/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('src/hr/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('src/hr/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('src/hr/assets/js/plugins.js') }}"></script>

    <!-- prismjs plugin -->
    <script src="{{ asset('src/hr/assets/libs/prismjs/prism.js') }}"></script>
    <script src="{{ asset('src/hr/assets/js/app.js') }}"></script>

</body>
</html>