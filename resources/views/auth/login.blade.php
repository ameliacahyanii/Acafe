<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo" >
            {{-- <x-authentication-card-logo /> --}}
        </x-slot>
        
        <h1 style="color: #fff; font-size: 25px; background-color: #FDA47E; border-radius: 7px; font-weight:bold; text-align:center; font-family">Log <span style="color: #F9F3E3; font-size: 25px;">In</span></h1>
        <x-validation-errors class="mb-4" />
        <img src="assets/images/login-bg.png" style="width: 80%; height: 290px; margin:auto; position:relative">

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <x-label for="email" value="{{ __('Email') }}" style="color:black"/>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" style="color:black"/>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password"/>
            </div>
            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" style="color:#FDA47E"/>
                    <span class="ml-2 text-sm text-gray-600" style="color:#FDA47E">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}" style="color:#FDA47E"\>
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <x-button class="ml-4" style="background-color: #FDA47E; color:#fff">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>






{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Acafe | Log In</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Log In</h3>
                <form>
                  <div class="form-group">
                    <label style="color:white">Username or email *</label>
                    <input type="text" class="form-control p_input" style="color:white" placeholder="Enter your gmail or username">
                  </div>
                  <div class="form-group">
                    <label style="color:white">Password *</label>
                    <input type="text" class="form-control p_input" placeholder="Enter your password">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook me-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../admin/assets/js/off-canvas.js"></script>
    <script src="../../admin/assets/js/hoverable-collapse.js"></script>
    <script src="../../admin/assets/js/misc.js"></script>
    <script src="../../admin/assets/js/settings.js"></script>
    <script src="../../admin/assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html> --}}