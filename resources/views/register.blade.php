<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Hancie Phago -InfoLocket</title>
    <link rel="icon" type="image/x-icon" href="{{ url('assets/images/Logo.ico') }}" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/form-1.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/switches.css') }}">
    <script src="{{ url('assets/js/jquery-3.1.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css"/>
    @livewireStyles
</head>

<body class="form">
    


    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Get started by <br /> creating an account</h1>
                        <p class="signup-link">Already have an account? <a href="{{ url('/') }}" wire:navigate>Log
                                in</a></p>

                        @livewire('registeraccount')


                        <p class="terms-conditions">© <?php echo Date('Y'); ?> All Rights Reserved. <a
                                href="{{ url('/') }}">InfoLocket</a> is a product of Hancie Phago. <a
                                href="javascript:void(0);">Cookie Preferences</a>, <a
                                href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

    <script src="{{ url('assets/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ url('assets/js/form-1.js') }}"></script>
    @livewireScripts

</body>

</html>
