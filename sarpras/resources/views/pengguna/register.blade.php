<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Sarpras Web | Daftar</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('login/vendors/images/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('landing/assets/img/logo.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landing/assets/img/logo.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('login/src/plugins/jquery-steps/jquery.steps.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendors/styles/style.css')}}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script type="text/javascript" async="" src="{{ asset('login/https://www.google-analytics.com/analytics.js')}}"></script><script async="" src="{{ asset('login/https://www.googletagmanager.com/gtag/js?id=UA-119386393-1')}}"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
<script src="{{ asset('login/http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js')}}"></script></head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="{{ asset('login/vendors/images/deskapp-logo.svg')}}" alt="">
				</a>
			</div>
			<div class="login-menu">
				<!-- <ul>
					<li><a href="/masuk">Masuk</a></li>
				</ul> -->
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
                                <div class="content clearfix">
								<h5 id="steps-uid-0-h-0" tabindex="-1" class="title current text-center"></h5>
                                <!-- <div class="login-box bg-white box-shadow border-radius-10"> -->
						<div class="login-title">
							<h2 class="text-center text-primary">Daftar Akun</h2><br>
						</div>
                        <form action="/simpanregister" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="select-role">
								<div class="btn-group btn-group-toggle" data-toggle="buttons">
									<label class="btn">
										<input type="radio" name="options" id="admin">
										<div class="icon"><img src="{{ asset('login/vendors/images/briefcase.svg')}}" class="svg" alt=""></div>
										<span>Saya</span>
										Admin
									</label>
									<label class="btn">
										<input type="radio" name="options" id="user">
										<div class="icon"><img src="{{ asset('login/vendors/images/person.svg')}}" class="svg" alt=""></div>
										<span>Saya</span>
										Pengguna
									</label>

								</div>


                                <br>
								<section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false">
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Email</label>
											<div class="col-sm-8">
												<input type="email" class="form-control" name="email">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Nama Pengguna</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="name">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Kata Sandi</label>
											<div class="col-sm-8">
												<input type="password" class="form-control" name="password">
											</div>
										</div>

									</div>

								</section>
                                <div class="input-group mb-0">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block">
								</div>
                             </form>


									<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373" style="color: rgb(112, 115, 115);">Atau</div>
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="/masuk">Kembali</a>
									</div>

                            <!-- </ul>
                        </div> -->
                    </form>

				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html Start -->
	<!-- <button type="button" id="success-modal-btn" hidden="" data-toggle="modal" data-target="#success-modal" data-backdrop="static">Launch modal</button>
	<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered max-width-400" role="document">
			<div class="modal-content">
				<div class="modal-body text-center font-18">
					<h3 class="mb-20">Form Submitted!</h3>
					<div class="mb-30 text-center"><img src="{{ asset('login/vendors/images/success.png')}}"></div>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				</div>
				<div class="modal-footer justify-content-center">
					<a href="login.html" class="btn btn-primary">Done</a>
				</div>
			</div>
		</div>-->
	</div>
	<!-- success Popup html End -->
	<!-- js -->
	<script src="{{ asset('login/vendors/scripts/core.js')}}"></script>
	<script src="{{ asset('login/vendors/scripts/script.min.js')}}"></script>
	<script src="{{ asset('login/vendors/scripts/process.js')}}"></script>
	<script src="{{ asset('login/vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{ asset('login/src/plugins/jquery-steps/jquery.steps.js')}}"></script>
	<script src="{{ asset('login/vendors/scripts/steps-setting.js')}}"></script>


</body>
</html>
