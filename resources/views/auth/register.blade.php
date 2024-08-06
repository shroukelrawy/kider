<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PolluxUI Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{asset('dashassets/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('dashassets/vendor/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('dashassets/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('dashassets/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('dashassets/images/logo-dark.svg')}}" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputname" placeholder="name" name="name">
                </div>
                @error('name')
                    <p>{{ $message }}</p>
                @enderror

                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUser_name" placeholder="Username" name="user_name">
                </div>
                @error('user_name')
                    <p>{{ $message }}</p>
                @enderror

                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email">
                </div>
                @error('email')
                    <p>{{ $message }}</p>
                @enderror

                <div class="form-group">
                  <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="city">
                    <option value="">Country</option>
                    <option value="United States of America">United States of America</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="India">India</option>
                    <option value="Germany">Germany</option>
                    <option value="Argentina">Argentina</option>
                  </select>
                </div>

                @error('city')
                    <p>{{ $message }}</p>
                @enderror

                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password" >
                </div>

                @error('password')
                    <p>{{ $message }}</p>
                @enderror
  
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" name="agree">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                @error('agree')
                    <p>{{ $message }}</p>
                @enderror

                <div class="mt-3">
                  {{-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN UP</a> --}}
                  <input type="submit" value="Submit">
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.html" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{asset('dashassets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('dashassets/js/off-canvas.js')}}"></script>
  <script src="{{asset('dashassets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('dashassets/js/template.js')}}"></script>
  <script src="{{asset('dashassets/js/settings.js')}}"></script>
  <script src="{{asset('dashassets/js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>
