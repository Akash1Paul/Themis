<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <link rel="stylesheet" href="../../css/ownCss.css">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper pt-0">
          <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
              <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left py-4 px-4 px-sm-5">
                  <div class="brand-logo text-center mb-3">
                    <img src="../../images/logo.svg" alt="logo" />
                  </div>
                  <h4 class="text-center">Hello! let's get started</h4>
                  <h6 class="fw-light text-center">Sign up to continue.</h6>
                  <div class="pt-3">
                    <div class="form-group mb-3">
                      <label class="mb-0"
                        >Profile Image<span class="text-danger">*</span></label
                      >
                      <input
                        type="file"
                        class="form-control"
                      />
                    </div>
                    <div class="form-group mb-3">
                      <label class="mb-0"
                        >Full Name<span class="text-danger">*</span></label
                      >
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Full Name"
                      />
                    </div>
                    <div class="form-group mb-3">
                      <label class="mb-0"
                        >Email<span class="text-danger">*</span></label
                      >
                      <input
                        type="email"
                        class="form-control"
                        autocomplete="one-time-code"
                        placeholder="Email"
                      />
                    </div>
                    <div class="form-group mb-3">
                      <label class="mb-0"
                        >Contact Number<span class="text-danger">*</span></label
                      >
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Contact Number"
                      />
                    </div>
                    <div class="form-group mb-3">
                      <label class="mb-0"
                        >DOB<span class="text-danger">*</span></label
                      >
                      <input
                        type="date"
                        class="form-control"
                      />
                    </div>
                    <div class="form-group mb-3">
                      <label class="mb-0"
                        >Address<span class="text-danger">*</span></label
                      >
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Address"
                      />
                    </div>
                    <div class="form-group mb-3">
                      <label class="mb-0"
                        >Password<span class="text-danger">*</span></label
                      >
                      <input
                        type="password"
                        class="form-control"
                        autocomplete="one-time-code"
                        placeholder="Password"
                      />
                    </div>
                    <div class="form-group mb-3">
                      <label class="mb-0"
                        >Confirm Password<span class="text-danger">*</span></label
                      >
                      <input
                        type="password"
                        v-model="state.confirm_password"
                        class="form-control"
                        autocomplete="one-time-code"
                        placeholder="Confirm Password"
                      />
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <div class="me-2">
                          <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../admin/posts.html">SIGN IN</a>
                        </div>
                        <button type="button" class="btn btn-social-icon-text btn-google">
                          <i class="ti-google"></i>Login With Google
                        </button>
                      </div>
                    <div class="text-center mt-4 fw-light">
                      Already Registered?
                      <a href="../user/login.html" class="text-primary"
                        >Log In</a
                      >
                    </div>
                  </div>
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
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
