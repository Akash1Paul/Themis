<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{url('vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{url('vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{url('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{url('vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{url('vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{url('vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{url('images/favicon.png')}}" />
  <link rel="stylesheet" href="{{url('css/ownCss.css')}}">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" style="background-color: black;">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 adjust" style="background-color: black;">
              <div class="text-center brand-logo">
                <img src="{{url('images/themis.png')}}" class="mb-3 themish-img" alt="logo">
                <h2 class="themish">THEMIS</h2>
                <h6 class="story">Sharing the true story</h6>
              </div>
              <form class="pt-3">
                <!-- <div class="form-group">
                  <input type="email" class="form-control form-control-lg" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" placeholder="Password">
                </div> -->
                <div class="d-flex justify-content-center mt-3">
                  <!-- <div class="me-2">
                    <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../user/home.html">SIGN IN</a>
                  </div> -->
                  <a href="{{url('auth/google/redirect')}}" class="text-decoration-none">
                    <button type="button" class="btn btn-g">
                        <img src="{{url('images/google.png')}}" alt=""> Continue with Google
                    </button>
                  </a>
                  
                </div>
                <div class="d-flex mt-3">
                  <a href="{{url('admin/login')}}" target="_blank" class="text-decoration-none text-white">
                       Admin Login
                  </a>
                </div>
                <!-- <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div> -->

                <!-- <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div> -->
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
  <!-- plugins:js -->
  <script src="{{url('vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{url('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{url('js/off-canvas.js')}}"></script>
  <script src="{{url('js/hoverable-collapse.js')}}"></script>
  <script src="{{url('js/template.js')}}"></script>
  <script src="{{url('js/settings.js')}}"></script>
  <script src="{{url('js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>
