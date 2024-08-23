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
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Post</h4>
                  <p class="card-description">
                    You can add post (picture + text / video+ text/ only text)
                  </p>
                  <form action="{{url('admin/update-post/'.$post->id)}}" class="forms-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="">
                        <div class="form-group">
                            <label>Picture / Video</label>
                            <input type="file" class="form-control form-control-lg" id="newfile" name="photo_video" accept="video/mp4, video/mov, image/png, image/gif, image/jpeg" value="{{$post->photo_video}}">

                            <input type="text" hidden  id="input"  value="{{$post->photo_video}}">
                              <div id="video" style="display: none;">
                                <video  src="{{url('photo_video/'.$post->photo_video)}}" width="200" height="100" controls ></video>
                              </div>
                              <div id="image" style="display: none;">
                                <img id="image" src="{{url('photo_video/'.$post->photo_video)}}" alt="Preview" style=" max-width: 320px; max-height: 240px;">
                              </div>

                              <video id="newvideo" width="320" height="240" controls style="display: none;"></video>
                              <img id="newimage" src="#" alt="Preview" style="display: none; max-width: 320px; max-height: 240px;">
                          </div>
                          <div class="form-group">
                            <label >Link</label>
                            <input type="text" name="link" class="form-control" value="{{$post->link}}">
                          </div>
                        <div class="form-group">
                            <label>Text</label>
                            <textarea class="form-control form-control-lg" id="" cols="30" rows="10" style="min-height: 150px;" name="text"> {{$post->text}}</textarea>
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
        <!-- partial:../../partials/_footer.html -->
@include('admin.footer')  
<script>
  window.onload = function() {
    var input = document.getElementById("input");
      var video = document.getElementById("video");
      var image = document.getElementById("image");
      
      // Get the file extension from the value attribute
      var fileExtension = input.value.split('.').pop().toLowerCase();
      
      // Check if the file extension indicates a video
      if (fileExtension === 'mp4' || fileExtension === 'mov') {
          video.style.display = "block";
          image.style.display = "none";
      } else { // Assume it's an image otherwise
          image.src = input.value; // assuming value contains image URL
          image.style.display = "block";
          video.style.display = "none";
      }
  };
</script>
<script>
          document.getElementById("newfile").addEventListener("change", function() {
              var file = this.files[0];
              if (file) {
                  var media = URL.createObjectURL(file);
                  var video = document.getElementById("newvideo");
                  var image = document.getElementById("newimage");
                  var oldimage = document.getElementById("image");
                  var oldvideo = document.getElementById("video");
                  if (file.type.startsWith('video')) {
                      video.src = media;
                      video.style.display = "block";
                      video.play();
                      image.style.display = "none";
                      oldimage.style.display = "none";
                      oldvideo.style.display = "none";
                  } else if (file.type.startsWith('image')) {
                      image.src = media;
                      image.style.display = "block";
                      video.style.display = "none";
                      oldimage.style.display = "none";
                      oldvideo.style.display = "none";
                  }
              }
          });
      </script>
      