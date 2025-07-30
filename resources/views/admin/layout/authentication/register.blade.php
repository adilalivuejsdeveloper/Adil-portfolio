@include('admin.include.head')

<div class="hero-static col-md-12 d-flex align-items-center bg-white">
        <div class="p-3 w-100 col-11 card shadow-sm border rounded rounded-4 col-md-4 mx-auto">
            <!-- Header -->
            <div class="mb-3 mt-5 text-center">
                <a class="link-fx font-w700 font-size-h1" href="{{ route('login') }}">
                    <span class="text-dark">Od</span><span class="text-primary">Talent</span>
                </a>
                <p class="text-uppercase font-w700 font-size-sm text-muted"> Admin Register</p>
            </div>
            <!-- END Header -->

            <!-- Sign In Form -->
            <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
            <div class="row no-gutters justify-content-center">
                <div class="col-sm-10 col-xl-8">
                    <form class="js-validation-signin mb-3" action="{{ route('store') }}" method="post">
                        @csrf
                        <div class="py-3">
                            <div class="form-group">
                                <input type="text" class="form-control shadow-sm form-control-sm form-control-alt"
                                    id="login-username" name="name" placeholder="name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control shadow-sm form-control-sm form-control-alt"
                                    id="login-username" name="email" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control shadow-sm form-control-sm form-control-alt"
                                    id="login-password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <button type="submit" class="btn btn-block btn-hero-sm btn-hero-primary">
                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> SignUp
                            </button>
                        </div>
                        <div class="form-group ">
                            if you have already acount  <a href="{{ route('login') }}" class=" text-primary">Login Now</a>
                          </div>
                    </form>
                </div>
            </div>
            <!-- END Sign In Form -->
        </div>
    </div>
