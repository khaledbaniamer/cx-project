<!DOCTYPE html>
@if (Session::get('userid'))
    @php
        header('Location:http://127.0.0.1:8000/dashboard');
        exit();
    @endphp
@endif
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="../../assets/images/logo-dark.svg">
                            </div>
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <form class="pt-3" action="checkregister" method="POST">

                                @csrf
                                @if (Session::get('fail'))
                                    <div class=" p-2 text-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg"
                                        id="exampleInputUsername1" placeholder="Username" name="name">
                                    @error('name')
                                        <div>
                                            <p class="text-danger">* {{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                        placeholder="Email" name="email">
                                    @error('email')
                                        <div>
                                            <p class="text-danger">* {{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Password" name='password'>
                                    @error('password')
                                        <div>
                                            <p class="text-danger">* {{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Confirm Password"
                                        name="password-confierm">
                                    @error('password')
                                        <div>
                                            <p class="text-danger">* {{ $message }}</p>
                                        </div>
                                    @enderror

                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                        type="submit">SIGN UP</buttona>
                                </div>
                                <div class="text-center mt-4 font-weight-light"> Already have an account? <a
                                        href="/login" class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>

    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
</body>

</html>
