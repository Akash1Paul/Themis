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
                        <h4 class="card-title">All Posts</h4>
                        <a href="{{route('admin-add-post')}}">
                           <button class="btn-primary btn">Add post</button>
                       </a>
                    </div>
                    <div class="table-responsive pt-3">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>
                              #
                            </th>
                            <th>
                              Text
                            </th>
                            <th>
                              Picture / Video
                            </th>
                            <th>
                              Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($posts as $key => $post)
                          <tr>
                            <td>
                              {{$key+1}}
                            </td>
                            <td style="white-space: wrap;">
                              {{$post->text}}
                            </td>
                            @php
                                $filePath = $post->photo_video;
                                $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
                            @endphp
                            <td>
                              <div class="imgg">
                              @if(in_array($fileExtension, ['mp4', 'mov', 'avi'])) 
                                <video  src="{{url('photo_video/'.$post->photo_video)}}" width="200" height="100" controls ></video>
                              @else
                                <img id="image" src="{{url('photo_video/'.$post->photo_video)}}"  width="200" height="100" alt="Preview" >
                              @endif
                               
                            </div>  

                            </td>
                            <td>
                              <div>
                                  <a href="{{url('admin/edit_post/'.$post->id)}}">
                                    <button class="btn btn-sm btn-success"><i class="fa-solid fa-file-pen"></i></button>
                                  </a>
                                  <a href="{{url('admin/delete_post/'.$post->id)}}"  onclick="return confirm('Are you sure you want to delete this post?');" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
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
       