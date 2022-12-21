<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>SIN SARPRAS | Daftar</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('login/vendors/images/logo.jpeg')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('landing/assets/img/logo.jpeg')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landing/assets/img/logo.jpeg')}}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendors/styles/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendors/styles/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login/src/plugins/jquery-steps/jquery.steps.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendors/styles/style.css')}}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async="" src="{{ asset('login/https://www.google-analytics.com/analytics.js')}}">
    </script>
    <script async="" src="{{ asset('login/https://www.googletagmanager.com/gtag/js?id=UA-119386393-1')}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
    </script>
    <script
        src="{{ asset('login/http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js')}}">
    </script>
</head>

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="/register">
                    <h3>SIN SARPRAS</h3>
                </a>
            </div>
        </div>
    </div>
    <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{ asset('login/vendors/images/register-page-img.png')}}" alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="register-box bg-white box-shadow border-radius-10">
                        <div class="wizard-content">
                            <div class="tab wizard-circle wizard clearfix" role="application" id="steps-uid-0">
                                <div class="steps-clearfix">
                                    <ul role="tablist">
                                    </ul>
                                </div>

                                <div class="content clearfix">
                                    <h5 id="steps-uid-0-h-0" tabindex="-1" class="title current text-center"></h5>
                                    <div class="login-title">
                                        <h2 class="text-center text-primary">Daftar Siswa</h2><br>
                                    </div>
                                    <form>
                                        <div class="select-role">
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons" a
                                                href="/register">
                                                <label class="btn active">
                                                    <input type="radio" name="options" id="admin">
                                                    <div class="icon">
                                                        <a href="/register">
                                                            <img src="{{ asset('login/vendors/images/briefcase.svg')}}"
                                                                class="svg" alt="">
                                                        </a>
                                                    </div>
                                                    <span>Sebagai</span>
                                                    Guru
                                                </label><br><br><br>

                                                <label class="btn">
                                                    <input type="radio" name="options" id="user">
                                                    <div class="icon">
                                                        <a href="/registersiswa">
                                                            <img src="{{ asset('login/vendors/images/person.svg')}}"
                                                                class="svg" alt="">
                                                        </a>
                                                    </div>
                                                    <span>Sebagai</span>
                                                    Siswa
                                                </label>
                                            </div>
                                        </div>

                                    </form>

                                    <form action="/simpansiswa" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <br>
                                        <section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0"
                                            class="body current" aria-hidden="false">
                                            <div class="form-wrap max-width-600 mx-auto">
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Nama Lengkap</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="name">
                                                    </div>
                                                </div>
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <!-- <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Kelas</label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control" name="kelas">
                                                                </div>
                                                            </div> -->
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Email</label>
                                                    <div class="col-sm-7">
                                                        <input type="email" class="form-control" name="email">
                                                    </div>
                                                </div>
                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Kata Sandi</label>
                                                    <div class="col-sm-7">
                                                        <input type="password" class="form-control" name="password">
                                                    </div>
                                                </div>
                                                @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </section>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-0">
                                                <button type="submit"
                                                    class="btn btn-primary btn-lg btn-block">Daftar</button>
                                            </div>

                                            <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373"
                                                style="color: rgb(112, 115, 115);">Atau</div>
                                            <div class="input-group mb-15">
                                                <a class="btn btn-outline-primary btn-lg btn-block"
                                                    href="/masuk">Kembali</a>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- js -->
        <script src="{{ asset('login/vendors/scripts/core.js')}}"></script>
        <script src="{{ asset('login/vendors/scripts/script.min.js')}}"></script>
        <script src="{{ asset('login/vendors/scripts/process.js')}}"></script>
        <script src="{{ asset('login/vendors/scripts/layout-settings.js')}}"></script>
        <script src="{{ asset('login/src/plugins/jquery-steps/jquery.steps.js')}}"></script>
        <script src="{{ asset('login/vendors/scripts/steps-setting.js')}}"></script>


</body>

</html>
