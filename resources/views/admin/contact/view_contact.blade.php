<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('translation.app_title')</title>
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
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center user-member__title mb-30 mt-30">
                            <h4 class="text-capitalize">{{ $contact->name }}</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="user-info-tab w-100 bg-white global-shadow radius-xl mb-50">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade  show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-10">
                                            <div class="mt-sm-40 mb-sm-50 mt-20 mb-20">
                                                <div class="edit-profile__body">
                                                    <form>
                                                        <input type="hidden" name="id"
                                                            value="{{ $contact->id }}">
                                                        <div class="form-group mb-25">
                                                            <label for="name1">name</label>
                                                            <input type="text" class="form-control" id="name1"
                                                                name="name" value="{{ $contact->name }}" readonly>
                                                        </div>
                                                        <div class="form-group mb-25">
                                                            <label for="name2">Email</label>
                                                            <input type="email" class="form-control" id="name2"
                                                                name="email" value="{{ $contact->email }}" readonly>
                                                        </div>
                                                        <div class="form-group mb-25">
                                                            <label for="phoneNumber5">phone number</label>
                                                            <input type="tel" class="form-control" id="phoneNumber5"
                                                                name="phone" value="{{ $contact->phone }}" readonly>
                                                        </div>
                                                        <div class="form-group mb-25">
                                                            <label for="name3">occupation</label>
                                                            <input type="text" class="form-control" id="name3"
                                                                name="occupation" value="{{ $contact->occupation }}" readonly>
                                                        </div>
                                                        <div class="form-group mb-25">
                                                            <label for="phoneNumber2">Address</label>
                                                            <input type="text" class="form-control" id="phoneNumber2"
                                                                name="address" value="{{ $contact->address }}" readonly>
                                                        </div>
                                                        <div
                                                            class="button-group d-flex pt-sm-25 justify-content-md-end justify-content-start ">
                                                            <a href="{{ url('admin/contacts')}}"
                                                                class="btn btn-light btn-default btn-squared fw-400 text-capitalize radius-md btn-sm">back
                                                            </a>
                                                        </div>
                                                    </form>
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
