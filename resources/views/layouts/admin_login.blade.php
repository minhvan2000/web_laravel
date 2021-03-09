<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <title>Trang quản lý Admin Web</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="backend\images\favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('backend\css\bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{asset('backend\css\icons.min.css')}}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{asset('backend\css\app.min.css')}}" id="app-style" rel="stylesheet" type="text/css">
        <link href="{{asset('backend\css\formValidation.min.css')}}" rel="stylesheet" type="text/css">

    </head>

    <body>
        <div class="home-btn d-none d-sm-block">
            <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p>Sign in to continue to.  </p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="backend\images\profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message', null);
                            }
                            ?>
                            
                            <div class="card-body pt-0"> 
                                <!--<div>
                                    <a href="index.html">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="images\logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div> -->
                                <div class="p-2">
                                    <form class="form-horizontal" action="{{URL::to('/backend-dashboard-index')}}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" name="admin_account" placeholder="Enter email">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="admin_password" placeholder="Enter password">
                                        </div>
                
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                                        </div>
                                        
                                        <div class="mt-3">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                        </div>
            
                                       

                                        {{-- <div class="mt-4 text-center">
                                            <h5 class="font-size-14 mb-3">Sign in with</h5>
            
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                        </div> --}}
                                    </form>
                                    
                                </div>
                                <a href="{{url('/login-facebook')}}">Login Facebook</a> |
		                        <a href="{{url('/login-google')}}">Login Google</a>
                            </div>
                        </div>
                        {{-- <div class="mt-5 text-center">
                            
                            <div>
                                <p>Don't have an account ? <a href="auth-register.html" class="font-weight-medium text-primary"> Signup now </a> </p>
                                <p>© 2020 Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('backend\libs\jquery\jquery.min.js')}}"></script>
        <script src="{{asset('backend\libs\bootstrap\js\bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('backend\libs\metismenu\metisMenu.min.js')}}"></script>
        <script src="{{asset('backend\libs\simplebar\simplebar.min.js')}}"></script>
        <script src="{{asset('backend\libs\node-waves\waves.min.js')}}"></script>
        <script src="{{asset('backend\js\demoValidation.js')}}"></script>
        
        <!-- App js -->
        <script src="{{asset('backend\js\app.js')}}"></script>
    </body>
</html>