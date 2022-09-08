<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Sarpras Web | Daftar</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('login/vendors/images/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('login/vendors/images/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('login/vendors/images/favicon-16x16.png')}}">

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
							<form class="tab-wizard2 wizard-circle wizard clearfix" role="application" id="steps-uid-0">
                                <div class="steps clearfix">
                                    <ul role="tablist">
                                         <!-- <li role="tab" class="first current" aria-disabled="false" aria-selected="true">
                                            <a id="steps-uid-0-t-0" href="#steps-uid-0-h-0" aria-controls="steps-uid-0-p-0">
                                                <span class="current-info audible">current step: </span>
                                                <span class="step">1</span>
                                                <span class="info">Basic Account Credentials</span>
                                            </a>
                                        </li>
                                        <li role="tab" class="disabled" aria-disabled="true">
                                            <a id="steps-uid-0-t-1" href="#steps-uid-0-h-1" aria-controls="steps-uid-0-p-1">
                                                <span class="step">2</span>
                                                <span class="info">Personal Information</span>
                                            </a>
                                        </li>
                                        <li role="tab" class="disabled" aria-disabled="true">
                                            <a id="steps-uid-0-t-2" href="#steps-uid-0-h-2" aria-controls="steps-uid-0-p-2">
                                                <span class="step">3</span>
                                                <span class="info">Payment Method &amp; Info</span>
                                            </a>
                                        </li>
                                        <li role="tab" class="disabled last" aria-disabled="true">
                                            <a id="steps-uid-0-t-3" href="#steps-uid-0-h-3" aria-controls="steps-uid-0-p-3">
                                                <span class="step">4</span>
                                                <span class="info">Overview Information</span>
                                            </a>
                                        </li>-->
                                    </ul>
                                </div>



                                <div class="content clearfix">
								<h5 id="steps-uid-0-h-0" tabindex="-1" class="title current text-center"></h5>
                                <!-- <div class="login-box bg-white box-shadow border-radius-10"> -->
						<div class="login-title">
							<h2 class="text-center text-primary">Daftar Akun</h2>
						</div>
                                <br>
								<section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false">
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Email</label>
											<div class="col-sm-8">
												<input type="email" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Nama Pengguna</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Kata Sandi</label>
											<div class="col-sm-8">
												<input type="password" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Konfirmasi Kata Sandi</label>
											<div class="col-sm-8">
												<input type="password" class="form-control">
											</div>
										</div>
									</div>
								<!-- </section> -->

								<!-- <h5 id="steps-uid-0-h-1" tabindex="-1" class="title">Personal Information</h5>
								<section id="steps-uid-0-p-1" role="tabpanel" aria-labelledby="steps-uid-0-h-1" class="body" aria-hidden="true" style="display: none;">
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Full Name*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Gender*</label>
											<div class="col-sm-8">
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="male" name="gender" class="custom-control-input">
													<label class="custom-control-label" for="male">Male</label>
												</div>
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="female" name="gender" class="custom-control-input">
													<label class="custom-control-label" for="female">Female</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">City</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">State</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</section> -->
<!--
								<h5 id="steps-uid-0-h-2" tabindex="-1" class="title">Payment Method &amp; Info</h5>
								<section id="steps-uid-0-p-2" role="tabpanel" aria-labelledby="steps-uid-0-h-2" class="body" aria-hidden="true" style="display: none;">
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Credit Card Type</label>
											<div class="col-sm-8">
												<div class="dropdown bootstrap-select form-control"><select class="form-control selectpicker" title="Select Card Type" tabindex="-98"><option class="bs-title-option" value=""></option>
													<option value="1">Option 1</option>
													<option value="2">Option 2</option>
													<option value="3">Option 3</option>
												</select><button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Select Card Type"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Select Card Type</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
											</div>
										</div>
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Credit Card Number</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">CVC</label>
											<div class="col-sm-3">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Expiration Date</label>
											<div class="col-sm-8">
												<div class="row">
													<div class="col-6">
														<div class="dropdown bootstrap-select form-control"><select class="form-control selectpicker" title="Month" data-size="5" tabindex="-98"><option class="bs-title-option" value=""></option>
															<option value="01">January</option>
															<option value="02">February</option>
															<option value="03">March</option>
															<option value="04">April</option>
															<option value="05">May</option>
															<option value="06">June</option>
															<option value="07">July</option>
															<option value="08">August</option>
															<option value="09">September</option>
															<option value="10">October</option>
															<option value="11">November</option>
															<option value="12">December</option>
														</select><button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" title="Month"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Month</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-2" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
													</div>
													<div class="col-6">
														<div class="dropdown bootstrap-select form-control"><select class="form-control selectpicker" title="Year" data-size="5" tabindex="-98"><option class="bs-title-option" value=""></option>
															<option>2020</option>
															<option>2019</option>
															<option>2018</option>
															<option>2017</option>
															<option>2016</option>
															<option>2015</option>
															<option>2014</option>
															<option>2013</option>
															<option>2012</option>
															<option>2011</option>
															<option>2010</option>
															<option>2009</option>
														</select><button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-3" aria-haspopup="listbox" aria-expanded="false" title="Year"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Year</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-3" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>

								<h5 id="steps-uid-0-h-3" tabindex="-1" class="title">Overview Information</h5>
								<section id="steps-uid-0-p-3" role="tabpanel" aria-labelledby="steps-uid-0-h-3" class="body" aria-hidden="true" style="display: none;">
									<div class="form-wrap max-width-600 mx-auto">
										<ul class="register-info">
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Email Address</div>
													<div class="col-sm-8">example@abc.com</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Username</div>
													<div class="col-sm-8">Example</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Password</div>
													<div class="col-sm-8">.....000</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Full Name</div>
													<div class="col-sm-8">john smith</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Location</div>
													<div class="col-sm-8">123 Example</div>
												</div>
											</li>
										</ul>
										<div class="custom-control custom-checkbox mt-4">
											<input type="checkbox" class="custom-control-input" id="customCheck1">
											<label class="custom-control-label" for="customCheck1">I have read and agreed to the terms of services and privacy policy</label>
										</div>
									</div> -->
								</section>

                            <!-- <div class="actions clearfix">
                                <ul role="menu" aria-label="Pagination"> -->
                                <div class="input-group mb-0">
										<a class="btn btn-primary btn-lg btn-block" href="/masuk">Simpan</a>
									</div>
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
