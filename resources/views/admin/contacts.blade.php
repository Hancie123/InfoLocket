<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>InfoLocket - Dashboard</title>
    <link href="{{ url('assets/css/contacts.css') }}" rel="stylesheet" type="text/css" />
    @include('layouts/adminheader')

</head>

<body>
    @if (Session::has('success'))
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
            };

            toastr.success("{{ Session::get('success') }}");
        </script>
    @endif
    @if (Session()->has('fail'))
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
            };
            toastr.warning("{{ Session::get('fail') }}")
        </script>
    @endif
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    @include('layouts/navbar')

    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">

                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Contact</span></li>
                            </ol>
                        </nav>

                    </div>
                </li>
            </ul>
            @include('layouts/smallnav')
        </header>
    </div>
    <!--  END NAVBAR  -->




    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        @include('layouts/sidebar')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">




            <div class="layout-px-spacing">
                <div class="row layout-spacing layout-top-spacing" id="cancel-row">
                    <div class="col-lg-12">
                        <div class="widget-content searchable-container list">

                            <div class="row">
                                <div
                                    class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                                    <form class="form-inline my-2 my-lg-0">
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65">
                                                </line>
                                            </svg>
                                            <input type="text" class="form-control product-search" id="input-search"
                                                placeholder="Search Contacts...">
                                        </div>
                                    </form>
                                </div>

                                <div
                                    class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">
                                    <div class="d-flex justify-content-sm-end justify-content-center">
                                        <button type="button" class="btn btn-primary mx-2" data-toggle="modal"
                                            data-target="#exampleModal">
                                            Add
                                        </button>

                                        <div class="switch align-self-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-list view-list active-view">
                                                <line x1="8" y1="6" x2="21" y2="6">
                                                </line>
                                                <line x1="8" y1="12" x2="21" y2="12">
                                                </line>
                                                <line x1="8" y1="18" x2="21" y2="18">
                                                </line>
                                                <line x1="3" y1="6" x2="3" y2="6">
                                                </line>
                                                <line x1="3" y1="12" x2="3" y2="12">
                                                </line>
                                                <line x1="3" y1="18" x2="3" y2="18">
                                                </line>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-grid view-grid">
                                                <rect x="3" y="3" width="7" height="7">
                                                </rect>
                                                <rect x="14" y="3" width="7" height="7">
                                                </rect>
                                                <rect x="14" y="14" width="7" height="7">
                                                </rect>
                                                <rect x="3" y="14" width="7" height="7">
                                                </rect>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-uppercase" id="exampleModalLabel">Add Your Contact
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6"
                                                                y2="18"></line>
                                                            <line x1="6" y1="6" x2="18"
                                                                y2="18"></line>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ url('/admin/contacts') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" value="{{ Session()->get('id') }}"
                                                            name="user_id">

                                                        <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                                                        <div class="add-contact-box">
                                                            <div class="add-contact-content">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="contact-name">
                                                                            <i class="flaticon-user-11"></i>
                                                                            <input type="text" id="c-name"
                                                                                class="form-control"
                                                                                placeholder="Name" name="name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="contact-email">
                                                                            <i class="flaticon-mail-26"></i>
                                                                            <input type="text" id="c-email"
                                                                                class="form-control"
                                                                                placeholder="Email" name="email">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="contact-occupation">
                                                                            <i class="flaticon-fill-area"></i>
                                                                            <input type="text" id="c-occupation"
                                                                                class="form-control"
                                                                                placeholder="Occupation"
                                                                                name="occupation">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="contact-phone">
                                                                            <i class="flaticon-telephone"></i>
                                                                            <input type="text" id="c-phone"
                                                                                class="form-control"
                                                                                placeholder="Phone" name="phone">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="contact-location">
                                                                            <i class="flaticon-location-1"></i>
                                                                            <input type="text" id="c-location"
                                                                                class="form-control"
                                                                                placeholder="Location"
                                                                                name="location">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><br>
                                                        <button type="submit" class="btn btn-primary">Save</button>

                                                    </form>



                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>

                            <div class="searchable-items list">
                                <div class="items items-header-section">
                                    <div class="item-content">
                                        <div class="">
                                            <div class="n-chk align-self-center text-center">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                    <input type="checkbox" class="new-control-input"
                                                        id="contact-check-all">
                                                    <span class="new-control-indicator"></span>
                                                </label>
                                            </div>
                                            <h4>Name</h4>
                                        </div>
                                        <div class="user-email">
                                            <h4>Email</h4>
                                        </div>
                                        <div class="user-location">
                                            <h4 style="margin-left: 0;">Location</h4>
                                        </div>
                                        <div class="user-phone">
                                            <h4 style="margin-left: 3px;">Phone</h4>
                                        </div>
                                        <div class="action-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash-2  delete-multiple">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17">
                                                </line>
                                                <line x1="14" y1="11" x2="14" y2="17">
                                                </line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($contact as $data)
                                <div class="items">
                                    <div class="item-content">
                                        <div class="user-profile">
                                            <div class="n-chk align-self-center text-center">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                    <input type="checkbox" class="new-control-input contact-chkbox">
                                                    <span class="new-control-indicator"></span>
                                                </label>
                                            </div>
                                            <img src="{{url('assets/images/contact_profile.jpg')}}" alt="avatar">
                                            <div class="user-meta-info">
                                                <p class="user-name" data-name="Alan Green">{{$data->name}}</p>
                                                <p class="user-work" data-occupation="{{$data->occupation}}">{{$data->occupation}}</p>
                                            </div>
                                        </div>
                                        <div class="user-email">
                                            <p class="info-title">Email: </p>
                                            <p class="usr-email-addr" data-email="{{$data->email}}">{{$data->email}}</p>
                                        </div>
                                        <div class="user-location">
                                            <p class="info-title">Location: </p>
                                            <p class="usr-location" data-location="{{$data->location}}">{{$data->location}}</p>
                                        </div>
                                        <div class="user-phone">
                                            <p class="info-title">Phone: </p>
                                            <p class="usr-ph-no" data-phone="{{$data->phone}}">{{$data->phone}}</p>
                                        </div>
                                        <div class="action-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 edit">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user-minus delete">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="8.5" cy="7" r="4"></circle>
                                                <line x1="23" y1="11" x2="17" y2="11">
                                                </line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <br>
                                {{$contact->links('pagination::bootstrap-5')}}







                            </div>

                        </div>
                    </div>
                </div>
            </div>






            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © <?php echo Date('Y'); ?> <a target="_blank"
                            href="https://hancie-phago.com">Hancie Phago</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-heart">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
    <script src="{{ url('assets/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ url('assets/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ url('assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ url('assets/js/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/js/dash_1.js') }}"></script>
    <script src="{{ url('assets/js/contact.js') }}"></script>
    @livewireScripts

</body>

</html>
