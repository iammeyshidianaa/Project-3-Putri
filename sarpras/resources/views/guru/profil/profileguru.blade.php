@extends('layout.guru')

@section('content')

<body>
<div class="container">
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6"></div>
                </div>
            </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>
                                </div>
                                <div class="profile-info">
									<div class="profile-photo">
                                    <img src="{{ $profileguru->foto1 }}" class="img-fluid rounded mx-auto d-block rounded-circle" c alt="" >
                                    </div>
									<div class="profile-details">
										<div class="text-center profile-name px-3 pt-2">
											<h2 class="text-primary mb-0">{{ Auth::user()->name }}</h2>
											<h4>({{ Auth::user()->level }})</h4>
										</div>
                                        <div class="mb-3">
										<div class="text-center profile-email px-2 pt-2">
											<h4 class="text-muted mb-0">{{ Auth::user()->email }}</h4>
										</div>
                                </div>
                                <body>
                                    <div class="col-md-12 text-center">
                                    <a href="/editprofileguru" class="btn btn-outline-primary mr-2">Ubah</a>
                                    <a href="/changePasswordg" class="btn btn-outline-primary mr-2">Ganti Password</a>
                                    </div>
                                </body>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
</html>

