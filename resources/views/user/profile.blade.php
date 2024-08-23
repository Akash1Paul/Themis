@include('user.header')

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    @yield('navbar')
    <!-- partial -->
    <section class="share">
        <div class="container">
             <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="profile-box" style="background-color: white;">
                         <div class="p-3 d-md-flex align-items-center">
                            <div class="Pimg mb-md-0 mb-3 me-3">
                                <img src="../../images/faces/face10.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="name">
                                <div class="d-flex">
                                    <div class="first me-5">
                                        <strong><p class="mb-0">Name:</p></strong>
                                        <strong><p class="mb-0">Email:</p></strong>
                                        <strong><p class="mb-0">Contact:</p></strong>
                                        <strong><p class="mb-0">DOB:</p></strong>
                                        <strong><p class="mb-0">Address:</p></strong>
                                        
                                    </div>
                                    <div class="second">
                                        <strong><p class="mb-0">{{$profile->name}}</p></strong>
                                        <strong><p class="mb-0">{{$profile->email}}</p></strong>
                                        <strong><p class="mb-0">{{$profile->contact}}</p></strong>
                                        <strong><p class="mb-0">{{$profile->dob}}</p></strong>
                                        <strong><p class="mb-0">{{$profile->address}}</p></strong>
                                    </div>
                                </div>
                                <!-- <strong><p class="mb-0">Users Name</p></strong>
                                <strong><p class="mb-0">Users Name</p></strong>
                                <strong><p class="mb-0">Users Name</p></strong> -->
                            </div>
                         </div>
                    </div>
                </div>
             </div>
        </div>
    </section>
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('user.footer')