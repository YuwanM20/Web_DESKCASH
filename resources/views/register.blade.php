<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bikin Akun </title>
    <link rel="icon" href="{{asset('gambar/iconlogo.jpg')}}" type="image/png">
    <link href="{{asset('sbadmin')}}/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="{{asset('sbadmin')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

</head>

<body class="" style="background: #081226;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-sm-6 d-none d-lg-block"></div>
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-900 mb-4" style="color: #081226;">Bikin Akun</h1>
                                    </div>
                                    
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror "
                                                id="exampleInputEmail" name="name" value="{{ old('name') }}"
                                                placeholder="Masukan Nama"  required autocomplete="name" autofocus>
                                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>

                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user @error('email') is-invalid @enderror "
                                                id="exampleInputEmail" name="email" value="{{ old('email') }}"
                                                placeholder="Masukan email"  required autocomplete="email" autofocus>
                                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>


                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                                id="exampleInputPassword" name="password" placeholder="Masukkan password" required autocomplete="current-password">

                                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user "name="password_confirmation" required autocomplete="new-password" 
                                                id="exampleInputPassword" placeholder="Masukkan password" >
                                        </div>

                                        
                                        {{-- <button class="btn btn-user text-white btn-block" type="submit" style="background: #f39;">
                                            bikin akun
                                        </button> --}}
                                    </form>
                                    <hr>
                                    {{-- <div class="text-center " >
                                        <a class="medium" style="color: #f39;" href="#">Buat Akun</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('sbadmin')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('sbadmin')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('sbadmin')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('sbadmin')}}/js/sb-admin-2.min.js"></script>



</body>

</html>