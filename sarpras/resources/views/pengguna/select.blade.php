<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>SIN SARPRAS | Masuk</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('login/vendors/images/logo.jpeg')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('landing/assets/img/logo.jpeg')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landing/assets/img/logo.jpeg')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendors/styles/style.css')}}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script type="text/javascript" async="" src="{{ asset('login/https://www.google-analytics.com/analytics.js')}}"></script><script async="" src="{{ asset('login/https://www.googletagmanager.com/gtag/js?id=UA-119386393-1')}}"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
<script src="{{ asset('login/http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js') }}"></script></head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="/masuk">
                <img src="{{ asset('login/vendors/images/deskapp-logo.svg')}}" alt="">
				</a>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="{{ asset('login/vendors/images/login-page-img.png')}}" alt="">
				</div>

                <form>
							<div class="select-role">
								<div class="btn-group btn-group-toggle" data-toggle="buttons" a href="/register">
									<label class="btn active">
										<input type="radio" name="options" id="admin">
										<div class="icon">
                                        <a href="/register">
                                             <img src="{{ asset('login/vendors/images/briefcase.svg')}}" class="svg" alt="">
                                    </a></div>
										<span>Saya</span>
										Guru
									</label><br><br><br>

									<label class="btn">
										<input type="radio" name="options" id="user">
										<div class="icon">
                                        <a href="/registersiswa">
                                            <img src="{{ asset('login/vendors/images/person.svg')}}" class="svg" alt="">
                                        </a></div>
										<span>Saya</span>
										Siswa
									</label>
								</div>
							</div>

				</form>


            </div>
		</div>
	</div>
	<!-- js -->
	<script src="{{ asset('login/vendors/scripts/core.js')}}"></script>
	<script src="{{ asset('login/vendors/scripts/script.min.js')}}"></script>
	<script src="{{ asset('login/vendors/scripts/process.js')}}"></script>
	<script src="{{ asset('login/vendors/scripts/layout-settings.js')}}"></script>

</body>
</html>




