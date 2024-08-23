@include('admin.header')

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Users List</h4>
                    </div>
                    <div class="table-responsive pt-3">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>
                              #
                            </th>
                            <th>
                              Name
                            </th>
                            <th>
                              Email
                            </th>
                            {{-- <th>
                              Address
                            </th>
                            <th>
                              Contact
                            </th> --}}
                             <th>
                              Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $key => $user)
                          <tr>
                            <td>
                             {{$key+1}}
                            </td>
                            <td>
                              {{$user->name}}
                            </td>
                            <td>
                              {{$user->email}}
                            </td>
                            {{-- <td>
                              {{$user->address}}
                            </td>
                            <td>
                              {{$user->contact}}
                            </td> --}}
                             <td>
                              <div>
                                  {{-- <button class="btn btn-sm btn-success"><i class="fa-solid fa-file-pen"></i></button> --}}
                                  <a href="{{url('admin/delete/'.$user->id)}}"  onclick="return confirm('Are you sure you want to delete this user?');" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                              </div>
                            </td>
                          </tr>
                                
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
@include('admin.footer')  