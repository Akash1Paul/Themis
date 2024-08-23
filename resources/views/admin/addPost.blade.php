
@include('admin.header')
<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.blade.php -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.blade.php -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Post</h4>
                  <p class="card-description">
                    You can add post (picture + text / video+ text/ only text)
                  </p>
                  <form action="{{route('admin-save-post')}}" class="forms-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="">
                      <div class="form-group">
                        <label>Picture / Video</label>
                        <input type="file" class="form-control form-control-lg" id="input" name="photo_video" accept="video/mp4, video/mov, image/png, image/gif, image/jpeg" value="{{old('photo_video')}}">
                        <video id="video" width="320" height="240" controls style="display: none;"></video>
                        <img id="image" src="#" alt="Preview" style="display: none; max-width: 320px; max-height: 240px;">
                    </div>
                    <div class="form-group">
                      <label >Link</label>
                      <input type="text" name="link" class="form-control" value="{{old('link')}}">
                    </div>
                    <div class="form-group">
                        <label>Text</label>
                        <textarea class="form-control form-control-lg" id="" cols="30" rows="10" style="min-height: 150px;" name="text">{{old('text')}}</textarea>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{url('admin/posts')}}" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.blade.php -->
        <script>
          document.getElementById("input").addEventListener("change", function() {
              var file = this.files[0];
              if (file) {
                  var media = URL.createObjectURL(file);
                  var video = document.getElementById("video");
                  var image = document.getElementById("image");
                  if (file.type.startsWith('video')) {
                      video.src = media;
                      video.style.display = "block";
                      video.play();
                      image.style.display = "none";
                  } else if (file.type.startsWith('image')) {
                      image.src = media;
                      image.style.display = "block";
                      video.style.display = "none";
                  }
              }
          });
      </script>
@include('admin.footer')  