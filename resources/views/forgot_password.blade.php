<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
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
                        <div class="edit-profile">
                            <div class="edit-profile__logos">
                                <a href="index.html">
                                    <img class="dark" src="img/logo-dark.png" alt>
                                    <img class="light" src="img/logo-white.png" alt>
                                </a>
                            </div>
                            <div class="card border-0">
                                <div class="card-header">
                                    <div class="edit-profile__title">
                                        <h6>Forgot Password?</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="edit-profile__body">
                                        <p>Enter the email address you used when you joined and we’ll send you
                                            instructions to reset your password.</p>
                                        <div class="form-group mb-20">
                                            <label for="email">Email Adress</label>
                                            <input type="text" class="form-control" id="email"
                                                placeholder="name@example.com">
                                        </div>
                                        <div class="d-flex">
                                            <button
                                                class="btn btn-primary btn-default btn-squared text-capitalize lh-normal px-md-50 py-15 signIn-createBtn">
                                                Send Reset Instructions
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
