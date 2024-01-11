<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('translation.localization')</title>
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
            <div class="demo5 mt-30 mb-25">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-12 mb-25">
                            <div class="card banner-feature--18 new d-flex bg-white">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card-body px-25">
                                                <h1 class="banner-feature__heading color-dark">Hey @lang('translation.index')
                                                    {{ Auth()->user()->name }}! Welcome to
                                                    the Dashboard
                                                </h1>
                                                <p class="banner-feature__para color-dark">We are delighted to have you
                                                    on board.<br>
                                                    As you navigate through, feel free to explore the various
                                                    functionalities tailored to meet your needs.
                                                </p>
                                                <div class="d-flex justify-content-sm-start justify-content-center">
                                                    <button
                                                        class="banner-feature__btn btn btn-primary color-white btn-md radius-xs fs-15"
                                                        type="button">Learn More</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="banner-feature__shape">
                                                <img src="{{ url('assets/img/infoUser.png') }}" alt="img">
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
