<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
                                                <h1 class="banner-feature__heading color-dark">Hey Danial! Welcome to
                                                    the Dashboard
                                                </h1>
                                                <p class="banner-feature__para color-dark">There are many variations of
                                                    passages of
                                                    Lorem Ipsum available,<br>
                                                    ut the majority have suffered passages of Lorem Ipsum available
                                                    alteration in
                                                    some form
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
        <footer class="footer-wrapper">
            <div class="footer-wrapper__inside">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-copyright">
                                <p><span>© 2023</span><a href="#">Sovware</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-menu text-end">
                                <ul>
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Team</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <div id="overlayer">
        <div class="loader-overlay">
            <div class="dm-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </div>
    </div>
    <div class="overlay-dark-sidebar"></div>
    <div class="customizer-overlay"></div>
    

    <script src="{{ url('assets/js/plugins.min.js') }}"></script>
    <script src="{{ url('assets/js/script.min.js') }}"></script>

</body>

</html>
