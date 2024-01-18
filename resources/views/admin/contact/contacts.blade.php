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
                    <div class="col-12">
                        <div class="contact-breadcrumb">
                            <div class="breadcrumb-main add-contact justify-content-sm-between ">
                                <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                                    <div
                                        class="d-flex align-items-center add-contact__title justify-content-center me-sm-25">
                                        <h4 class="text-capitalize fw-500 breadcrumb-title">@lang('translation.contacts_btn')</h4>
                                        <span class="sub-title ms-sm-25 ps-sm-25"></span>
                                    </div>
                                    <form action="/"
                                        class="d-flex align-items-center add-contact__form my-sm-0 my-2">
                                        <img src="img/svg/search.svg" alt="search" class="svg">
                                        <input class="form-control me-sm-2 border-0 box-shadow-none" type="search" name="search"
                                            placeholder="Search by Name" aria-label="Search">
                                    </form>
                                </div>
                                <div class="action-btn">
                                    <a href="#" class="btn px-15 btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#add-contact">
                                        <i class="las la-plus fs-16"></i>@lang('translation.add_new_btn')
                                    </a>

                                    {{-- model here --}}
                                    @include('admin.contact.add_contact')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="contact-list-wrap mb-25">
                            <div class="contact-list radius-xl w-100">
                                <div class="table-responsive table-responsive--dynamic">
                                    <table class="table mb-0 table-borderless table-rounded">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="d-flex align-items-center">
                                                        <div class="custom-checkbox  check-all">
                                                            <input class="checkbox" type="checkbox" id="check-33">
                                                            <label for="check-33">
                                                                <span
                                                                    class="checkbox-text userDatatable-title">Name</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th class="c-email">
                                                    <span>emaill</span>
                                                </th>
                                                <th class="c-company">
                                                    <span>occupation</span>
                                                </th>
                                                <th class="c-position">
                                                    <span class>address</span>
                                                </th>
                                                <th class="c-phone">
                                                    <span class>Phone</span>
                                                </th>
                                                <th class="c-action">
                                                    <span class="float-end"></span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contacts as $data)
                                                <tr>
                                                    <td>
                                                        <div class="contact-item d-flex align-items-center">
                                                            <div class="contact-personal-wrap">
                                                                <div class="checkbox-group-wrapper">
                                                                    <div class="checkbox-group d-flex">
                                                                        <div
                                                                            class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                            <input class="checkbox" type="checkbox"
                                                                                id="check-grp-c-1">
                                                                            <label for="check-grp-c-1"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="contact-personal-info d-flex">
                                                                <div class="contact_title">
                                                                    <a href="#">{{ $data->name }}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="com-name">{{ $data->email }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="com-name">{{ $data->occupation }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="position">{{ $data->address }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="email">{{ $data->phone }}</span>
                                                    </td>
                                                    <td>
                                                        <div class="table-actions">

                                                            <div class="dropdown dropdown-click">
                                                                <button class="btn-link border-0 bg-transparent p-0"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <img class="svg" src="img/svg/more-vertical.svg"
                                                                        alt="more-vertical">
                                                                </button>
                                                                <div
                                                                    class="dropdown-default dropdown-menu dropdown-menu--dynamic">
                                                                    <a class="dropdown-item" href="{{ url('admin/contacts/view') }}/{{ $data->id }}">view</a>
                                                                    <a class="dropdown-item" href="{{ url('admin/contacts/edit') }}/{{ $data->id }}">edit</a>
                                                                    <a class="dropdown-item" href="{{ url('admin/contacts') }}/{{ $data->id }}">delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    </main>

    @include('layouts.footer')

</body>

</html>
