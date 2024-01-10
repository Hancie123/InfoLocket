<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Support Center</title>
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
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Support Center</h4>
                            <div class="breadcrumb-action justify-content-center flex-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i
                                                    class="uil uil-estate"></i>Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Support Center</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="banner-feature--14 card mb-25">
                    <div class="row justify-content-center">
                        <div class="col-md-9">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="card-body d-inline-block">
                                        <h1 class="d-flex">Hello, We are here to help</h1>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                        </p>
                                        <div class="d-flex justify-content-start">
                                            <button class="btn btn-primary btn-default btn-squared btn-shadow-primary"
                                                type="button">Create
                                                Support Ticket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner-feature__shape mt-50 d-flex justify-content-end">
                                        <img src="img/svg/banne-group21.svg" alt="img" class="svg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card banner-feature--16 mb-50  px-xxl-0 px-sm-30 px-15">
                    <div class="row justify-content-center">
                        <div class="col-xxl-9">
                            <div class="row">
                                <div class="col-xxl-4 col-lg-6 mb-25">
                                    <div class="card shadow-none border-0">
                                        <div class="card-body banner-feature--15">
                                            <div class="banner-feature__shape d-flex justify-content-center">
                                                <div class="wh-80 bg-primary rounded-circle content-center">
                                                    <img src="img/svg/idea.svg" alt="img" class="svg">
                                                </div>
                                            </div>
                                            <div class="pb-md-0 pb-30 text-center">
                                                <h4>Knowledgebase</h4>
                                                <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr, sed diam
                                                    nonumy</p>
                                            </div>
                                            <div class="content-center mt-25">
                                                <button
                                                    class="btn btn-primary btn-sm btn-squared btn-transparent-primary rounded-pill">Learn
                                                    More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-lg-6 mb-25">
                                    <div class="card shadow-none border-0">
                                        <div class="card-body banner-feature--15">
                                            <div class="banner-feature__shape d-flex justify-content-center">
                                                <div class="wh-80 bg-info rounded-circle content-center">
                                                    <img src="img/svg/chat.svg" alt="img" class="svg">
                                                </div>
                                            </div>
                                            <div class="pb-md-0 pb-30 text-center">
                                                <h4>FAQ</h4>
                                                <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr, sed diam
                                                    nonumy</p>
                                            </div>
                                            <div class="content-center mt-25">
                                                <button
                                                    class="btn btn-primary btn-sm btn-squared btn-transparent-primary rounded-pill">Learn
                                                    More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-lg-6 mb-25">
                                    <div class="card shadow-none border-0">
                                        <div class="card-body banner-feature--15">
                                            <div class="banner-feature__shape d-flex justify-content-center">
                                                <div class="wh-80 bg-success rounded-circle content-center">
                                                    <img src="img/svg/documents.svg" alt="img" class="svg">
                                                </div>
                                            </div>
                                            <div class="pb-md-0 pb-30 text-center">
                                                <h4>Documentation</h4>
                                                <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr, sed diam
                                                    nonumy</p>
                                            </div>
                                            <div class="content-center mt-25">
                                                <button
                                                    class="btn btn-primary btn-sm btn-squared btn-transparent-primary rounded-pill">Learn
                                                    More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-feature--17 px-xxl-0 px-sm-30 px-0">
                        <div class="row justify-content-center">
                            <div class="col-xxl-9">
                                <div class="card pb-0 mb-md-50 mb-30 border">
                                    <div class="card-header px-30 pt-30 pb-25 border-bottom-0">
                                        <h4 class="fw-500">Frequently Asked Questions</h4>
                                    </div>
                                    <div class="card-body pt-0 pb-30 px-md-30 px-15">
                                        <div class="application-faqs">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">

                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <h4 class="panel-title">
                                                            <a data-bs-toggle="collapse" href="#collapseOne"
                                                                aria-expanded="true">
                                                                How long does it take to download updates?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in show"
                                                        role="tabpanel" aria-labelledby="headingOne"
                                                        data-parent="#accordion">
                                                        <div class="panel-body">
                                                            <p class="mb-sm-35 mb-20">Many support queries and
                                                                technical questions will
                                                                already be answered in supporting documentation such as
                                                                FAQ's
                                                                and comments from previous buyers. Anim pariatur cliche
                                                                reprehenderit, enim eiusmod high life accusamus terry
                                                                richardson
                                                                ad squid. 3 wolf moon officia aute, non cupidatat
                                                                skateboard
                                                                dolor brunch. Food truck quinoa nesciunt laborum
                                                                eiusmod. Brunch
                                                                3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                                single-origin coffee nulla assumenda shoreditch et.</p>
                                                            <span class="fs-14 fw-500 color-dark">Was this article
                                                                helpful?</span>
                                                            <div class="button-group d-flex mt-2 flex-wrap">
                                                                <button
                                                                    class="btn btn-default btn-squared color-success px-15 btn-outline-success px-15 "><img
                                                                        src="img/svg/smile.svg" alt="smile"
                                                                        class="svg">
                                                                    Yes
                                                                </button>
                                                                <button
                                                                    class="btn btn-default btn-squared color-warning px-15 btn-outline-warning px-15 "><img
                                                                        src="img/svg/frown.svg" alt="frown"
                                                                        class="svg">
                                                                    No
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse"
                                                                href="#collapseTwo" aria-expanded="false">
                                                                How to use SCSS variables to build custom color?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse"
                                                        data-parent="#accordion" role="tabpanel"
                                                        aria-labelledby="headingTwo">
                                                        <div class="panel-body">
                                                            <p class="mb-sm-35 mb-20">Many support queries and
                                                                technical questions will
                                                                already be answered in supporting documentation such as
                                                                FAQ's
                                                                and comments from previous buyers. Anim pariatur cliche
                                                                reprehenderit, enim eiusmod high life accusamus terry
                                                                richardson
                                                                ad squid. 3 wolf moon officia aute, non cupidatat
                                                                skateboard
                                                                dolor brunch. Food truck quinoa nesciunt laborum
                                                                eiusmod. Brunch
                                                                3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                                single-origin coffee nulla assumenda shoreditch et.</p>
                                                            <span class="fs-14 fw-500 color-dark">Was this article
                                                                helpful?</span>
                                                            <div class="button-group d-flex mt-2 flex-wrap">
                                                                <button
                                                                    class="btn btn-default btn-squared color-success px-15 btn-outline-success px-15 "><img
                                                                        src="img/svg/smile.svg" alt="smile"
                                                                        class="svg">
                                                                    Yes
                                                                </button>
                                                                <button
                                                                    class="btn btn-default btn-squared color-warning px-15 btn-outline-warning px-15 "><img
                                                                        src="img/svg/frown.svg" alt="frown"
                                                                        class="svg">
                                                                    No
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse"
                                                                href="#collapseThree" aria-expanded="false">
                                                                How long does it take to download updates?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingThree"
                                                        data-parent="#accordion">
                                                        <div class="panel-body">
                                                            <p class="mb-sm-35 mb-20">Many support queries and
                                                                technical questions will
                                                                already be answered in supporting documentation such as
                                                                FAQ's
                                                                and comments from previous buyers. Anim pariatur cliche
                                                                reprehenderit, enim eiusmod high life accusamus terry
                                                                richardson
                                                                ad squid. 3 wolf moon officia aute, non cupidatat
                                                                skateboard
                                                                dolor brunch. Food truck quinoa nesciunt laborum
                                                                eiusmod. Brunch
                                                                3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                                single-origin coffee nulla assumenda shoreditch et.</p>
                                                            <span class="fs-14 fw-500 color-dark">Was this article
                                                                helpful?</span>
                                                            <div class="button-group d-flex mt-2 flex-wrap">
                                                                <button
                                                                    class="btn btn-default btn-squared color-success px-15 btn-outline-success px-15 "><img
                                                                        src="img/svg/smile.svg" alt="smile"
                                                                        class="svg">
                                                                    Yes
                                                                </button>
                                                                <button
                                                                    class="btn btn-default btn-squared color-warning px-15 btn-outline-warning px-15 "><img
                                                                        src="img/svg/frown.svg" alt="frown"
                                                                        class="svg">
                                                                    No
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingfour">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse"
                                                                href="#collapsefour" aria-expanded="false">
                                                                What is the flex layout?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapsefour" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingfour"
                                                        data-parent="#accordion">
                                                        <div class="panel-body">
                                                            <p class="mb-sm-35 mb-20">Many support queries and
                                                                technical questions will
                                                                already be answered in supporting documentation such as
                                                                FAQ's
                                                                and comments from previous buyers. Anim pariatur cliche
                                                                reprehenderit, enim eiusmod high life accusamus terry
                                                                richardson
                                                                ad squid. 3 wolf moon officia aute, non cupidatat
                                                                skateboard
                                                                dolor brunch. Food truck quinoa nesciunt laborum
                                                                eiusmod. Brunch
                                                                3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                                single-origin coffee nulla assumenda shoreditch et.</p>
                                                            <span class="fs-14 fw-500 color-dark">Was this article
                                                                helpful?</span>
                                                            <div class="button-group d-flex mt-2 flex-wrap">
                                                                <button
                                                                    class="btn btn-default btn-squared color-success px-15 btn-outline-success px-15 "><img
                                                                        src="img/svg/smile.svg" alt="smile"
                                                                        class="svg">
                                                                    Yes
                                                                </button>
                                                                <button
                                                                    class="btn btn-default btn-squared color-warning px-15 btn-outline-warning px-15 "><img
                                                                        src="img/svg/frown.svg" alt="frown"
                                                                        class="svg">
                                                                    No
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingfive">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse"
                                                                href="#collapsefive" aria-expanded="false">
                                                                How long does it take to download updates?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapsefive" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingfive"
                                                        data-parent="#accordion">
                                                        <div class="panel-body">
                                                            <p class="mb-sm-35 mb-20">Many support queries and
                                                                technical questions will
                                                                already be answered in supporting documentation such as
                                                                FAQ's
                                                                and comments from previous buyers. Anim pariatur cliche
                                                                reprehenderit, enim eiusmod high life accusamus terry
                                                                richardson
                                                                ad squid. 3 wolf moon officia aute, non cupidatat
                                                                skateboard
                                                                dolor brunch. Food truck quinoa nesciunt laborum
                                                                eiusmod. Brunch
                                                                3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                                single-origin coffee nulla assumenda shoreditch et.</p>
                                                            <span class="fs-14 fw-500 color-dark">Was this article
                                                                helpful?</span>
                                                            <div class="button-group d-flex mt-2 flex-wrap">
                                                                <button
                                                                    class="btn btn-default btn-squared color-success px-15 btn-outline-success px-15 "><img
                                                                        src="img/svg/smile.svg" alt="smile"
                                                                        class="svg">
                                                                    Yes
                                                                </button>
                                                                <button
                                                                    class="btn btn-default btn-squared color-warning px-15 btn-outline-warning px-15 "><img
                                                                        src="img/svg/frown.svg" alt="frown"
                                                                        class="svg">
                                                                    No
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingsix">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse"
                                                                href="#collapsesix" aria-expanded="false">
                                                                Where to buy this UI dashboard?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapsesix" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingsix"
                                                        data-parent="#accordion">
                                                        <div class="panel-body">
                                                            <p class="mb-sm-35 mb-20">Many support queries and
                                                                technical questions will
                                                                already be answered in supporting documentation such as
                                                                FAQ's
                                                                and comments from previous buyers. Anim pariatur cliche
                                                                reprehenderit, enim eiusmod high life accusamus terry
                                                                richardson
                                                                ad squid. 3 wolf moon officia aute, non cupidatat
                                                                skateboard
                                                                dolor brunch. Food truck quinoa nesciunt laborum
                                                                eiusmod. Brunch
                                                                3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                                single-origin coffee nulla assumenda shoreditch et.</p>
                                                            <span class="fs-14 fw-500 color-dark">Was this article
                                                                helpful?</span>
                                                            <div class="button-group d-flex mt-2 flex-wrap">
                                                                <button
                                                                    class="btn btn-default btn-squared color-success px-15 btn-outline-success px-15 "><img
                                                                        src="img/svg/smile.svg" alt="smile"
                                                                        class="svg">
                                                                    Yes
                                                                </button>
                                                                <button
                                                                    class="btn btn-default btn-squared color-warning px-15 btn-outline-warning px-15 "><img
                                                                        src="img/svg/frown.svg" alt="frown"
                                                                        class="svg">
                                                                    No
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingseven">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse"
                                                                href="#collapseseven" aria-expanded="false">
                                                                How long does it take to download updates?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseseven" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingseven"
                                                        data-parent="#accordion">
                                                        <div class="panel-body">
                                                            <p class="mb-sm-35 mb-20">Many support queries and
                                                                technical questions will
                                                                already be answered in supporting documentation such as
                                                                FAQ's
                                                                and comments from previous buyers. Anim pariatur cliche
                                                                reprehenderit, enim eiusmod high life accusamus terry
                                                                richardson
                                                                ad squid. 3 wolf moon officia aute, non cupidatat
                                                                skateboard
                                                                dolor brunch. Food truck quinoa nesciunt laborum
                                                                eiusmod. Brunch
                                                                3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                                single-origin coffee nulla assumenda shoreditch et.</p>
                                                            <span class="fs-14 fw-500 color-dark">Was this article
                                                                helpful?</span>
                                                            <div class="button-group d-flex mt-2 flex-wrap">
                                                                <button
                                                                    class="btn btn-default btn-squared color-success px-15 btn-outline-success px-15 "><img
                                                                        src="img/svg/smile.svg" alt="smile"
                                                                        class="svg">
                                                                    Yes
                                                                </button>
                                                                <button
                                                                    class="btn btn-default btn-squared color-warning px-15 btn-outline-warning px-15 "><img
                                                                        src="img/svg/frown.svg" alt="frown"
                                                                        class="svg">
                                                                    No
                                                                </button>
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
        </div>

    </main>

    @include('layouts.footer')

</body>

</html>
