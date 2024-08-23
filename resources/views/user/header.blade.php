<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gil Post Sharing Platform </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{url('vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{url('vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{url('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{url('vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{url('vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{url('vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{url('vendors/select2/select2.min.css')}}">
  <link rel="stylesheet" href="{{url('vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('css/vertical-layout-light/style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- endinject -->
  <link rel="shortcut icon" href="{{url('images/favicon.png')}}" />
  <link rel="stylesheet" href="{{url('css/ownCss.css')}}">

</head>
@section('navbar')
<nav class="navbar navbar-expand-lg  px-lg-4 navbar-light bg-light user">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{url('user/home')}}">Themis</a>
      <img src="https://lh3.googleusercontent.com/a/ACg8ocL2haGUbcSLuCGmU8O_7lP8gv_j6pfwIbg3aVSBTs0DnsjYFEy4=s96-c" alt="" data-bs-toggle="dropdown" aria-expanded="false" hidden>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
       
        <div class="d-flex align-items-center cursor ms-2">
            <div class="img">
              <div class="dropdown">
                <img src="https://lh3.googleusercontent.com/a/ACg8ocL2haGUbcSLuCGmU8O_7lP8gv_j6pfwIbg3aVSBTs0DnsjYFEy4=s96-c" alt="" data-bs-toggle="dropdown" aria-expanded="false">

                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      
                      <li class="m-2">
                          <a class="dropdown-item" href="{{route('user-logout')}}"><i class="fa-solid fa-arrow-right-from-bracket text-danger"></i>
                              <span class="me-3"> Logout</span>
                          </a>
                      </li>
                  </ul>
                </div>
            </div>
          </div>
      </div>
    </div>
  </nav>
  @endsection