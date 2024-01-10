<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ auth()->user()->name }} Profile</title>
    @include('layouts.header')
</head>

<body class="layout-light side-menu">
    <div class="mobile-search">
        <form action="/" class="search-form">
            <img src="img/svg/search.svg" alt="search" class="svg">
            <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..."
                aria-label="Search">
        </form>
    </div>
    <div class="mobile-author-actions"></div>
    <header class="header-top">
        @include('layouts.nav')
    </header>
    <main class="main-content">
        @include('layouts.sidebar')

        <div class="contents">
            <div class="container-fluid">
                <div class="profile-content mb-50">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">My profile</h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i
                                                        class="uil uil-estate"></i>Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">My profile</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-md-4  ">
                            <aside class="profile-sider">

                                <div class="card mb-25">
                                    <div class="card-body text-center pt-sm-30 pb-sm-0  px-25 pb-0">
                                        <div class="account-profile">
                                            <div class="ap-img w-100 d-flex justify-content-center">

                                                <img class="ap-img__main rounded-circle mb-3  wh-120 d-flex bg-opacity-primary"
                                                    src="{{ Avatar::create(Auth()->user()->name)->toBase64() }}"
                                                    alt="profile">
                                            </div>

                                            <div class="ap-nameAddress pb-3 pt-1">
                                                <h5 class="ap-nameAddress__title">{{auth()->user()->name}}</h5>
                                                <p class="ap-nameAddress__subTitle fs-14 m-0">Mero Locket User</p>
                                                <p class="ap-nameAddress__subTitle fs-14 m-0">
                                                    <img src="{{ url('assets/img/map-pin.svg') }}" alt="map-pin"
                                                        class="svg">London,
                                                    England
                                                </p>
                                            </div>

                                           
                                        </div>

                                        <div class="card-footer mt-20 pt-20 pb-20 px-0 bg-transparent">
                                            <div class="profile-overview d-flex justify-content-between flex-wrap">
                                                <div class="po-details">
                                                    <h6 class="po-details__title pb-1">$72,572</h6>
                                                    <span class="po-details__sTitle">Total Revenue</span>
                                                </div>
                                                <div class="po-details">
                                                    <h6 class="po-details__title pb-1">3,257</h6>
                                                    <span class="po-details__sTitle">order</span>
                                                </div>
                                                <div class="po-details">
                                                    <h6 class="po-details__title pb-1">74</h6>
                                                    <span class="po-details__sTitle">Products</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-25">
                                    <div class="user-bio border-bottom">
                                        <div class="card-header border-bottom-0 pt-sm-30 pb-sm-0  px-md-25 px-3">
                                            <div class="profile-header-title">
                                                User Bio
                                            </div>
                                        </div>
                                        <div class="card-body pt-md-1 pt-0">
                                            <div class="user-bio__content">
                                                <p class="m-0">Nam malesuada dolor tellus pretium amet was hendrerit
                                                    facilisi id
                                                    vitae enim
                                                    sed ornare
                                                    there suspendisse sed orci neque ac sed aliquet risus faucibus in
                                                    pretium
                                                    molestie nisl
                                                    tempor quis odio habitant.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="user-info border-bottom">
                                        <div class="card-header border-bottom-0 pt-sm-25 pb-sm-0  px-md-25 px-3">
                                            <div class="profile-header-title">
                                                Contact info
                                            </div>
                                        </div>
                                        <div class="card-body pt-md-1 pt-0">
                                            <div class="user-content-info">
                                                <p class="user-content-info__item">
                                                    <img class="svg" src="img/svg/mail.svg" alt="mail"><a
                                                        href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                        data-cfemail="ce8da2afb7baa1a08eabb6afa3bea2abe0ada1a3">[email&#160;protected]</a>
                                                </p>
                                                <p class="user-content-info__item">
                                                    <img src="img/svg/phone.svg" alt="phone" class="svg">+44
                                                    (0161) 347
                                                    8854
                                                </p>
                                                <p class="user-content-info__item mb-0">
                                                    <img src="img/svg/globe.svg" alt="globe"
                                                        class="svg">www.example.com
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-skils border-bottom">
                                        <div class="card-header border-bottom-0 pt-sm-25 pb-sm-0  px-md-25 px-3">
                                            <div class="profile-header-title">
                                                Skills
                                            </div>
                                        </div>

                                        <div class="card-body pt-md-1 pt-0">
                                            <ul class="user-skils-parent">
                                                <li class="user-skils-parent__item">
                                                    <a href="#">UI/UX</a>
                                                </li>
                                                <li class="user-skils-parent__item">
                                                    <a href="#">Branding</a>
                                                </li>
                                                <li class="user-skils-parent__item">
                                                    <a href="#">product design</a>
                                                </li>
                                                <li class="user-skils-parent__item">
                                                    <a href="#">Application</a>
                                                </li>
                                                <li class="user-skils-parent__item mb-0">
                                                    <a href="#">web design</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="db-social">
                                        <div class="card-header border-bottom-0 pt-sm-25 pb-sm-0  px-md-25 px-3">
                                            <div class="profile-header-title">
                                                Social Profiles
                                            </div>
                                        </div>
                                        <div class="card-body pt-md-1 pt-0">
                                            <ul class="db-social-parent mb-0">
                                                <li class="db-social-parent__item">
                                                    <a class="color-facebook hover-facebook wh-44 fs-18"
                                                        href="#">
                                                        <i class="lab la-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="db-social-parent__item">
                                                    <a class="color-twitter hover-twitter wh-44 fs-18" href="#">
                                                        <i class="lab la-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="db-social-parent__item">
                                                    <a class="color-ruby hover-ruby  wh-44 fs-18" href="#">
                                                        <i class="las la-basketball-ball"></i>
                                                    </a>
                                                </li>
                                                <li class="db-social-parent__item">
                                                    <a class="color-instagram hover-instagram wh-44 fs-18"
                                                        href="#">
                                                        <i class="lab la-instagram"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>


                        <div class="col-xxl-9 col-md-8">

                            <div class="ap-tab ap-tab-header">
                                <div class="ap-tab-header__img">
                                    <img src="{{ url('assets/img/ap-header.png') }}" alt="ap-header"
                                        class="img-fluid w-100">
                                </div>
                                <div class="ap-tab-wrapper">
                                    <ul class="nav px-25 ap-tab-main" id="ap-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="ap-overview-tab" data-bs-toggle="pill"
                                                href="#ap-overview" role="tab" aria-selected="true">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="activity-tab" data-bs-toggle="pill"
                                                href="#activity" role="tab" aria-selected="false">Activity</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-content mt-25" id="ap-tabContent">
                                <div class="tab-pane fade show active" id="ap-overview" role="tabpanel"
                                    aria-labelledby="ap-overview-tab">
                                    <div class="ap-content-wrapper">
                                        <div class="row">
                                            <div class="col-lg-4 mb-25">

                                                <div class="ap-po-details radius-xl d-flex justify-content-between">
                                                    <div>
                                                        <div class="overview-content">
                                                            <h1>3,257</h1>
                                                            <p>Orders</p>
                                                            <div class="ap-po-details-time">
                                                                <span class="color-success"><i
                                                                        class="las la-arrow-up"></i>
                                                                    <strong>25%</strong>
                                                                </span>
                                                                <small>Since last week</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ap-po-timeChart">
                                                        <div class="overview-single__chart d-md-flex align-items-end">
                                                            <div class="parentContainer">
                                                                <div>
                                                                    <canvas id="mychart8"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-25">

                                                <div class="ap-po-details radius-xl d-flex justify-content-between">
                                                    <div>
                                                        <div class="overview-content">
                                                            <h1>$72,572</h1>
                                                            <p>Total Revenue</p>
                                                            <div class="ap-po-details-time">
                                                                <span class="color-success"><i
                                                                        class="las la-arrow-up"></i>
                                                                    <strong>25%</strong>
                                                                </span>
                                                                <small>Since last week</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ap-po-timeChart">
                                                        <div class="overview-single__chart d-md-flex align-items-end">
                                                            <div class="parentContainer">
                                                                <div>
                                                                    <canvas id="mychart9"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-25">

                                                <div class="ap-po-details radius-xl d-flex justify-content-between">
                                                    <div>
                                                        <div class="overview-content">
                                                            <h1>1,274</h1>
                                                            <p>product sold</p>
                                                            <div class="ap-po-details-time">
                                                                <span class="color-danger"><i
                                                                        class="las la-arrow-down"></i>
                                                                    <strong>25%</strong>
                                                                </span>
                                                                <small>Since last week</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ap-po-timeChart">
                                                        <div class="overview-single__chart d-md-flex align-items-end">
                                                            <div class="parentContainer">
                                                                <div>
                                                                    <canvas id="mychart10"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="activity" role="tabpanel"
                                    aria-labelledby="activity-tab">
                                    <div class="ap-post-content">
                                        <div class="row">
                                            <div class="col-xxl-8">

                                                <div class="card global-shadow mb-25">
                                                    <div class="friends-widget">
                                                        <div class="card-header px-md-25 px-3">
                                                            <h6>Friends</h6>
                                                        </div>
                                                        <div class="card-body p-0 py-10">







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
            </div>
        </div>















    </main>

    @include('layouts.footer')

</body>

</html>
