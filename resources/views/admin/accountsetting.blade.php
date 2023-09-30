<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>InfoLocket - Dashboard</title>
    <link href="{{ url('assets/css/account-setting.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/dropify.min.css') }}">
    @include('layouts/adminheader')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>





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
                                <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Account Settings</span>
                                </li>
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

                <div class="account-settings-container layout-top-spacing">

                    <div class="account-content">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll"
                            data-offset="-100">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">


                                    @if (!is_null($biodata))
                                        <form action="{{ url('/admin/profile/store') }}" method="post"
                                            id="general-info" class="section general-info"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="update" name="status" />
                                            <input type="hidden" value="{{ $biodata->bio_id }}" name="bio_id" />
                                            <input type="hidden" value="{{ Session::get('id') }}" name="user_id" />
                                            <div class="info">
                                                <h6 class="">General Information</h6>
                                                <div class="row">
                                                    <div class="col-lg-11 mx-auto">
                                                        <div class="row">
                                                            <div class="col-xl-2 col-lg-12 col-md-4">
                                                                <div class="upload mt-4 pr-md-4">

                                                                    <input type="file" name="profile_image"
                                                                        id="input-file-max-fs" class="dropify"
                                                                        data-default-file="{{ $biodata->getFirstMediaUrl('profile_image') }}"
                                                                        data-max-file-size="2M" />
                                                                    <p class="mt-2"><i
                                                                            class="flaticon-cloud-upload mr-1"></i>
                                                                        Upload
                                                                        Picture</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                                <div class="form">
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label for="fullName">Full
                                                                                    Name</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    id="fullName"
                                                                                    placeholder="Full Name"
                                                                                    name="name"
                                                                                    value="{{ Session::get('name') }}"
                                                                                    readonly>
                                                                                @error('name')
                                                                                    <span
                                                                                        class="text-danger">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label class="dob-input">Date of
                                                                                Birth</label>
                                                                            <div class="d-sm-flex d-block">
                                                                                <div class="form-group mr-1">
                                                                                    <input type="date"
                                                                                        name="dob"
                                                                                        class="form-control"
                                                                                        value="{{ $biodata->dob }}" />
                                                                                    @error('dob')
                                                                                        <span
                                                                                            class="text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="profession">Profession</label>
                                                                        <input type="text" name="profession"
                                                                            class="form-control" id="profession"
                                                                            placeholder="Designer"
                                                                            value="{{ $biodata->profession }}">
                                                                        @error('profession')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="info">

                                                <div class="row">
                                                    <div class="col-md-11 mx-auto">
                                                        <div class="form-group">
                                                            <label for="aboutBio">Bio</label>
                                                            <textarea class="form-control" id="aboutBio" name="bio" placeholder="Tell something interesting about yourself"
                                                                rows="5">{{ $biodata->bio }}</textarea>
                                                            @error('bio')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mx-2 my-2">Save</button>
                                        </form>
                                    @elseif($biodata == null)
                                        <form action="{{ url('/admin/profile/store') }}" method="post"
                                            id="general-info" class="section general-info"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="store" name="status" />
                                            <div class="info">
                                                <h6 class="">General Information</h6>
                                                <div class="row">
                                                    <div class="col-lg-11 mx-auto">
                                                        <div class="row">
                                                            <div class="col-xl-2 col-lg-12 col-md-4">
                                                                <div class="upload mt-4 pr-md-4">
                                                                    <input type="hidden"
                                                                        value="{{ Session::get('id') }}"
                                                                        name="user_id" />
                                                                    <input type="file" name="profile_image"
                                                                        id="input-file-max-fs" class="dropify"
                                                                        data-default-file=""
                                                                        data-max-file-size="2M" />
                                                                    <p class="mt-2"><i
                                                                            class="flaticon-cloud-upload mr-1"></i>
                                                                        Upload
                                                                        Picture</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                                <div class="form">
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label for="fullName">Full
                                                                                    Name</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    value="{{ Session::get('name') }}"
                                                                                    id="fullName"
                                                                                    placeholder="Full Name"
                                                                                    name="name" readonly>
                                                                                @error('name')
                                                                                    <span
                                                                                        class="text-danger">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label class="dob-input">Date of
                                                                                Birth</label>
                                                                            <div class="d-sm-flex d-block">
                                                                                <div class="form-group mr-1">
                                                                                    <input type="date"
                                                                                        name="dob"
                                                                                        class="form-control" />
                                                                                    @error('dob')
                                                                                        <span
                                                                                            class="text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="profession">Profession</label>
                                                                        <input type="text" name="profession"
                                                                            class="form-control" id="profession"
                                                                            placeholder="Designer">
                                                                        @error('profession')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="info">

                                                <div class="row">
                                                    <div class="col-md-11 mx-auto">
                                                        <div class="form-group">
                                                            <label for="aboutBio">Bio</label>
                                                            <textarea class="form-control" id="aboutBio" name="bio" placeholder="Tell something interesting about yourself"
                                                                rows="5"></textarea>
                                                            @error('bio')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mx-2 my-2">Save</button>
                                        </form>
                                    @endif


                                </div>


                            </div>




                            {{-- ---------------- Work Platform ------------------ --}}
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <form id="work-platforms" class="section work-platforms"
                                    action="{{ url('/admin/profile/workplatform/store') }}" method="post">
                                    @csrf

                                    <input type="hidden" value="{{ Session::get('id') }}" name="user_id" />
                                    <div class="info">
                                        <h5 class="">Work Platforms</h5>
                                        <div class="row">
                                            <div class="col-md-12 mx-auto">

                                                <div class="platform-div">
                                                    <div class="form-group">
                                                        <label for="platform-title">Platforms Title</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Platforms Title" name="title">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="platform-description">Description</label>
                                                        <textarea class="form-control" name="description" placeholder="Platforms Description" rows="7"></textarea>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <button id="add-work-platforms" class="btn btn-primary">Save Work
                                            Platform</button>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">
                                            Delete Work Platform
                                        </button>

                                    </div>
                                </form>
                            </div>
                            {{-- ---------------- Work Platform ------------------ --}}
                            <!------------Work Platform Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Work Platform Data</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6"
                                                        y2="18"></line>
                                                    <line x1="6" y1="6" x2="18"
                                                        y2="18"></line>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="table-responsive">
                                                <table id="table_data720" class="table table-striped rounded">
                                                    <thead class="bg-primary text-white">
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Title</th>
                                                            <th>Description</th>
                                                            <th>Created At</th>
                                                            <th>Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach ($workplatform as $data)
                                                            <tr class="row-data-delete"
                                                                id="row-data-delete{{ $data->work_id }}">
                                                                <td>
                                                                    {{ $data->work_id }}</td>
                                                                <td>{{ $data->title }}</td>
                                                                <td>{{ $data->description }}</td>
                                                                <td>{{ $data->created_at->diffForHumans() }}</td>
                                                                <td>
                                                                    <a class="btn btn-primary"
                                                                        onclick="deleteWorkPlatform({{ $data->work_id }})">Delete</a>
                                                                </td>
                                                            </tr>
                                                        @endforeach


                                                    </tbody>

                                                </table>
                                            </div>

                                        </div>
                                        <div class="modal-footer">

                                            <button type="button" data-dismiss="modal"
                                                class="btn btn-primary">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!------------Work Platform Modal -->

                            <script>
                                function deleteWorkPlatform(id) {
                                    $.ajax({
                                        url: '/admin/profile/workplatform/delete/' + id,
                                        type: 'GET', // Change to DELETE method
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        success: function(response) {
                                            if (response.status === 'success') {
                                                toastr.success(response.message);
                                                $('#row-data-delete' + id).remove();
                                            } else {
                                                toastr.error(response.message);
                                            }
                                        },
                                        error: function(xhr, status, error) {
                                            console.error(xhr.responseText);
                                        }
                                    });
                                }
                            </script>






                            @if ($usercontact !== null)
                                {{-- ----------- Contact Section ------------------------ --}}
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form id="contact" action="{{ url('/admin/profile/contact/store') }}"
                                        method="post" class="section contact">
                                        @csrf
                                        <input type="hidden" value="update" name="status" />
                                        <input type="hidden" value="{{ $usercontact->usercontact_id }}"
                                            name="contact_id" />
                                        <input type="hidden" value="{{ Session::get('id') }}" name="user_id" />
                                        <div class="info">
                                            <h5 class="">Contact</h5>
                                            <div class="row">
                                                <div class="col-md-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="country">Country</label>
                                                                <select class="form-control" id="country"
                                                                    name="country">
                                                                    <option>All Countries</option>
                                                                    <option selected>{{ $usercontact->country }}
                                                                    </option>
                                                                    <option>Nepal</option>
                                                                    <option>India</option>
                                                                    <option>China</option>
                                                                    <option>Japan</option>
                                                                    <option>Australia</option>
                                                                    <option>Dubai</option>
                                                                    <option>Brazil</option>
                                                                    <option>Norway</option>
                                                                    <option>Canada</option>
                                                                </select>
                                                                @error('country')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="address">Address</label>
                                                                <input type="text" class="form-control"
                                                                    id="address" placeholder="Address"
                                                                    name="address" value={{ $usercontact->address }}>
                                                                @error('address')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="location">Location</label>
                                                                <input type="text" class="form-control"
                                                                    id="location" placeholder="Location"
                                                                    name="location"
                                                                    value="{{ $usercontact->location }}">
                                                                @error('location')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="phone">Phone</label>
                                                                <input type="text" class="form-control"
                                                                    id="phone"
                                                                    placeholder="Write your phone number here"
                                                                    name="phone" value="{{ $usercontact->phone }}">
                                                                @error('phone')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="website1">Website</label>
                                                                <input type="url" class="form-control"
                                                                    id="website1"
                                                                    placeholder="Write your website here"
                                                                    name="website"
                                                                    value="{{ $usercontact->website }}">
                                                                @error('website')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-0 m-3">Update
                                            Contact</button>
                                    </form>
                                </div>
                                {{-- ----------- Contact Section ------------------------ --}}
                            @else
                                {{-- ----------- Contact Section ------------------------ --}}
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form id="contact" action="{{ url('/admin/profile/contact/store') }}"
                                        method="post" class="section contact">
                                        @csrf
                                        <input type="hidden" value="store" name="status" />
                                        <input type="hidden" value="{{ Session::get('id') }}" name="user_id" />
                                        <div class="info">
                                            <h5 class="">Contact</h5>
                                            <div class="row">
                                                <div class="col-md-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="country">Country</label>
                                                                <select class="form-control" id="country"
                                                                    name="country">
                                                                    <option>All Countries</option>
                                                                    <option selected>Nepal</option>
                                                                    <option>India</option>
                                                                    <option>China</option>
                                                                    <option>Japan</option>
                                                                    <option>Australia</option>
                                                                    <option>Dubai</option>
                                                                    <option>Brazil</option>
                                                                    <option>Norway</option>
                                                                    <option>Canada</option>
                                                                </select>
                                                                @error('country')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="address">Address</label>
                                                                <input type="text" class="form-control"
                                                                    id="address" placeholder="Address"
                                                                    name="address">
                                                                @error('address')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="location">Location</label>
                                                                <input type="text" class="form-control"
                                                                    id="location" placeholder="Location"
                                                                    name="location">
                                                                @error('location')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="phone">Phone</label>
                                                                <input type="text" class="form-control"
                                                                    id="phone"
                                                                    placeholder="Write your phone number here"
                                                                    name="phone">
                                                                @error('phone')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="website1">Website</label>
                                                                <input type="url" class="form-control"
                                                                    id="website1"
                                                                    placeholder="Write your website here"
                                                                    name="website">
                                                                @error('website')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-0 m-3">Save Contact</button>
                                    </form>
                                </div>
                                {{-- ----------- Contact Section ------------------------ --}}
                            @endif



                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <form id="social" class="section social">
                                    <div class="info">
                                        <h5 class="">Social</h5>
                                        <div class="row">

                                            <div class="col-md-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-group social-linkedin mb-3">
                                                            <div class="input-group-prepend mr-3">
                                                                <span class="input-group-text" id="linkedin"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-linkedin">
                                                                        <path
                                                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                                                        </path>
                                                                        <rect x="2" y="9"
                                                                            width="4" height="12"></rect>
                                                                        <circle cx="4" cy="4"
                                                                            r="2"></circle>
                                                                    </svg></span>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                placeholder="linkedin Username" aria-label="Username"
                                                                aria-describedby="linkedin" value="jimmy_turner">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="input-group social-tweet mb-3">
                                                            <div class="input-group-prepend mr-3">
                                                                <span class="input-group-text" id="tweet"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-twitter">
                                                                        <path
                                                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                                                        </path>
                                                                    </svg></span>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                placeholder="Twitter Username" aria-label="Username"
                                                                aria-describedby="tweet" value="@jTurner">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-group social-fb mb-3">
                                                            <div class="input-group-prepend mr-3">
                                                                <span class="input-group-text" id="fb"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-facebook">
                                                                        <path
                                                                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                                        </path>
                                                                    </svg></span>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                placeholder="Facebook Username" aria-label="Username"
                                                                aria-describedby="fb" value="Jimmy Turner">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="input-group social-github mb-3">
                                                            <div class="input-group-prepend mr-3">
                                                                <span class="input-group-text" id="github"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-github">
                                                                        <path
                                                                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                                                        </path>
                                                                    </svg></span>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                placeholder="Github Username" aria-label="Username"
                                                                aria-describedby="github" value="@TurnerJimmy">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <div id="skill" class="section skill">
                                    <div class="info">
                                        <h5 class="">Skills</h5>
                                        <div class="row progress-bar-section">

                                            <div class="col-md-12 mx-auto">
                                                <div class="form-group">

                                                    <div class="row">
                                                        <div class="col-md-11 mx-auto">
                                                            <div class="input-form">
                                                                <input type="text" class="form-control"
                                                                    id="skills" placeholder="Add Your Skills Here"
                                                                    value="">
                                                                <button id="add-skills"
                                                                    class="btn btn-primary">Add</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-md-11 mx-auto">
                                                <div class="custom-progress top-right progress-up"
                                                    style="width: 100%">
                                                    <p class="skill-name">PHP</p>
                                                    <input type="range" min="0" max="100"
                                                        class="custom-range progress-range-counter" value="25">
                                                    <div class="range-count"><span class="range-count-number"
                                                            data-rangecountnumber="25">25</span> <span
                                                            class="range-count-unit">%</span></div>
                                                </div>
                                            </div>
                                            <div class="col-md-11 mx-auto">
                                                <div class="custom-progress top-right progress-up"
                                                    style="width: 100%">
                                                    <p class="skill-name">Wordpress</p>
                                                    <input type="range" min="0" max="100"
                                                        class="custom-range progress-range-counter" value="50">
                                                    <div class="range-count"><span class="range-count-number"
                                                            data-rangecountnumber="50">50</span> <span
                                                            class="range-count-unit">%</span></div>
                                                </div>
                                            </div>
                                            <div class="col-md-11 mx-auto">
                                                <div class="custom-progress top-right progress-up"
                                                    style="width: 100%">
                                                    <p class="skill-name">Javascript</p>
                                                    <input type="range" min="0" max="100"
                                                        class="custom-range progress-range-counter" value="70">
                                                    <div class="range-count"><span class="range-count-number"
                                                            data-rangecountnumber="70">70</span> <span
                                                            class="range-count-unit">%</span></div>
                                                </div>
                                            </div>
                                            <div class="col-md-11 mx-auto">
                                                <div class="custom-progress top-right progress-up"
                                                    style="width: 100%">
                                                    <p class="skill-name">jQuery</p>
                                                    <input type="range" min="0" max="100"
                                                        class="custom-range progress-range-counter" value="60">
                                                    <div class="range-count"><span class="range-count-number"
                                                            data-rangecountnumber="60">60</span> <span
                                                            class="range-count-unit">%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <form id="edu-experience" class="section edu-experience"
                                    action="{{ url('/admin/profile/account-setting/education') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ Session::get('id') }}" name="user_id" />
                                    <div class="info">
                                        <h5 class="">Education</h5>
                                        <div class="row">

                                            <div class="col-md-11 mx-auto">

                                                <div class="edu-section">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="college_name">Enter Your Collage
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="college_name" name="college_name"
                                                                    placeholder="Add your college here">
                                                                @error('college_name')
                                                                    <span class="text-danger">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>Started From</label>
                                                                    <input type="date" class="form-control "
                                                                        id="start_date" name="start_date">
                                                                    @error('start_date')
                                                                        <span class="text-danger">
                                                                            {{ $message }}
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Ended In</label>
                                                                    <input type="date" class="form-control "
                                                                        id="end_date" name="end_date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <br>
                                                            <div class="form-group">
                                                                <label for="course">Enter Your Course</label>
                                                                <input type="text" class="form-control"
                                                                    id="course" name="course"
                                                                    placeholder="Add your course here">
                                                                @error('course')
                                                                    <span class="text-danger">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button id="add-education" class="btn btn-primary"
                                                                type="submit">Add Records</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <form id="work-experience" class="section work-experience"
                                    action="{{ url('/admin/profile/account-setting/work-experience') }}"
                                    method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ Session::get('id') }}" name="user_id" />
                                    <div class="info">
                                        <h5 class="">Work Experience</h5>
                                        <div class="row">

                                            <div class="col-md-11 mx-auto">

                                                <div class="work-section">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="company_name">Company Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="company_name" name="company_name"
                                                                    placeholder="Add your Company Name here">
                                                                @error('company_name')
                                                                    <span class="text-danger">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="job_title">Job Tilte</label>
                                                                        <input type="text" class="form-control"
                                                                            id="job_title" name="job_title"
                                                                            placeholder="Add your Job Title here">
                                                                        @error('job_title')
                                                                            <span class="text-danger">
                                                                                {{ $message }}
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="job_location">Location</label>
                                                                        <input type="text" class="form-control"
                                                                            id="job_location" name="job_location"
                                                                            placeholder="Add your work location here">
                                                                        @error('job_location')
                                                                            <span class="text-danger">
                                                                                {{ $message }}
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>Started From</label>
                                                                    <input type="date" class="form-control "
                                                                        id="started_from" name="started_from">
                                                                    @error('started_from')
                                                                        <span class="text-danger">
                                                                            {{ $message }}
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Ended In</label>
                                                                    <input type="date" class="form-control "
                                                                        id="ended_in" name="ended_in">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <br>
                                                            <button id="add-work-exp" class="btn btn-primary">Add
                                                                Work</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                @include('layouts/adminfooter')
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->









</body>

</html>
