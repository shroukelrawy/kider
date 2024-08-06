<!DOCTYPE html>
<html lang="en">
<head>
  @include('dashincludes.head')
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
                  {{-- -------------------forms start------------------------ --}}
                  <form class="pt-3" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username" name="name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                      <select  name="city" class="form-control form-control-lg" id="exampleFormControlSelect2">
                        <option>Country</option>
                        <option value="usa">United States of America</option>
                        <option value="uk">United Kingdom</option>
                        <option value="india">India</option>
                        <option value="germany">Germany</option>
                        <option value="argento">Argentina</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                    <div class="mb-4">
                      <div class="form-check">
                        <label class="form-check-label text-muted">
                          <input type="checkbox" class="form-check-input " name="agree" >
                          I agree to all Terms & Conditions
                        </label>
                      </div>
                    </div>
                    <div class="mt-3">
                      {{-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="{{route('login')}}">SIGN UP</a> --}}
                      <input type="submit" value="Submit">
                    </div>
                    <div class="text-center mt-4 font-weight-light">
                      Already have an account? <a href="{{route('login')}}" class="text-primary">Login</a>
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
    @include('dashincludes.js')
</body>
</html>