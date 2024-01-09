<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Account</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/plugin.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/img/infolocket-favicon-color.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
</head>

<body>
    <main class="main-content">
        <div class="admin">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-8">
                       <br><br>
                            <div class="edit-profile__logos  mt-5">
                                <a href="index.html">
                                     <img class="dark"
                                        src="{{ url('assets/img/infolocket-high-resolution-logo-transparent.png') }}"
                                        alt>
                                    <img class="light"
                                        src="{{ url('assets/img/infolocket-high-resolution-logo-transparent.png') }}"
                                        alt>
                                </a>
                            </div>
                            <div class="card border-0">
                                <div class="card-header">
                                    <div class="edit-profile__title">
                                        <h6>Sign Up HexaDash</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="edit-profile__body">
                                        <div class="edit-profile__body">
                                            <div class="form-group mb-20">
                                                <label for="name">name</label>
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Full Name">
                                            </div>
                                            <div class="form-group mb-20">
                                                <label for="email">Email Adress</label>
                                                <input type="text" class="form-control" id="email"
                                                    placeholder="name@example.com">
                                            </div>
                                            <div class="form-group mb-15">
                                                <label for="password-field">password</label>
                                                <div class="position-relative">
                                                    <input id="password-field" type="password" class="form-control"
                                                        name="password" placeholder="Password">
                                                    <div
                                                        class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                <button
                                                    class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn ">
                                                    Create Account
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="admin-topbar">
                                    <p class="mb-0">
                                        Don't have an account?
                                        <a href="login.html" class="color-primary">
                                            Sign In
                                        </a>
                                    </p>
                                </div>
                            </div>
                       
                    </div>
                </div>
            </div>
        </div>
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
    <div class="enable-dark-mode dark-trigger">
        <ul>
            <li>
                <a href="#">
                    <i class="uil uil-moon"></i>
                </a>
            </li>
        </ul>
    </div>

    <script src="{{ url('assets/js/plugins.min.js') }}"></script>
    <script src="{{ url('assets/js/script.min.js') }}"></script>

</body>

</html>
