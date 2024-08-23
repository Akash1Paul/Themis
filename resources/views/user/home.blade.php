@include('user.header')
<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
		<link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
<style>
  #social-links ul{
       padding-left: 0;
  }
  #social-links ul li {
       display: inline-block;
  } 
  #social-links ul li a {
       padding: 6px;
       border: 1px solid #ccc;
       border-radius: 5px;
       margin: 1px;
       font-size: 25px;
  }
  #social-links .fa-facebook{
        color: #0d6efd;
  }
  #social-links .fa-twitter{
        color: deepskyblue;
  }
  #social-links .fa-linkedin{
        color: #0e76a8;
  }
  #social-links .fa-whatsapp{
       color: #25D366
  }
  #social-links .fa-reddit{
       color: #FF4500;;
  }
  #social-links .fa-telegram{
       color: #0088cc;
  }
  </style>
  <style>
    * {
	box-sizing: border-box;
}

.view-modal,
.popup {
	position: absolute;
	left: 50%;
}

button {
	outline: none;
	cursor: pointer;
	font-weight: 500;
	border-radius: 4px;
	border: 2px solid transparent;
	transition: background 0.1s linear, border-color 0.1s linear, color 0.1s linear;
}

.popup {
	background: rgb(255, 254, 254);
	padding: 25px;
	border-radius: 15px;
	top: 10%;
	max-width: 444px;
	width: 100%;
	opacity: 0;
	pointer-events: none;
	box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
	transform: translate(-50%, -50%) scale(1.2);
	transition: top 0s 0.2s ease-in-out,
		opacity 0.2s 0s ease-in-out,
		transform 0.2s 0s ease-in-out;
}

.popup.show {
	top: 50%;
	left: 50%;
	opacity: 1;
	pointer-events: auto;
	transform: translate(-50%, -50%) scale(1);
	transition: top 0s 0s ease-in-out,
		opacity 0.2s 0s ease-in-out,
		transform 0.2s 0s ease-in-out;

}

.popup :is(header, .icons, .field) {
	display: flex;
	align-items: center;
	justify-content: space-between;
}

.popup header {
	padding-bottom: 15px;
	border-bottom: 1px solid #ebedf9;
}

header span {
	font-size: 21px;
	font-weight: 600;
}

header .close,
.icons a {
	display: flex;
	align-items: center;
	border-radius: 50%;
	justify-content: center;
	transition: all 0.3s ease-in-out;
}

header .close {
	color: #878787;
	font-size: 17px;
	background: #f3f3f3;
	height: 33px;
	width: 33px;
	cursor: pointer;
}

header .close:hover {
	background: #ebedf9;
}

.popup .content {
	margin: 20px 0;
}

.popup .icons {
	margin: 15px 0 20px 0;
}

.content p {
	font-size: 16px;
}

.content .icons a {
	height: 50px;
	width: 50px;
	font-size: 20px;
	text-decoration: none;
	border: 1px solid transparent;
}

.icons a i {
	transition: transform 0.3s ease-in-out;
}

.icons a:nth-child(1) {
	color: #1877F2;
	border-color: #b7d4fb;
}

.icons a:nth-child(1):hover {
	background: #1877F2;
}

.icons a:nth-child(2) {
	color: #46C1F6;
	border-color: #b6e7fc;
}

.icons a:nth-child(2):hover {
	background: #46C1F6;
}

.icons a:nth-child(3) {
	color: #e1306c;
	border-color: #f5bccf;
}

.icons a:nth-child(3):hover {
	background: #e1306c;
}

.icons a:nth-child(4) {
	color: #25D366;
	border-color: #bef4d2;
}

.icons a:nth-child(4):hover {
	background: #25D366;
}

.icons a:nth-child(5) {
	color: #0088cc;
	border-color: #b3e6ff;
}

.icons a:nth-child(5):hover {
	background: #0088cc;
}

.icons a:hover {
	color: #fff;
	border-color: transparent;
}

.icons a:hover i {
	transform: scale(1.2);
}

.content .field {
	margin: 12px 0 -5px 0;
	height: 45px;
	border-radius: 4px;
	padding: 0 5px;
	border: 1px solid #757171;
}

.field.active {
	border-color: #7d2ae8;
}

.field i {
	width: 50px;
	font-size: 18px;
	text-align: center;
}

.field.active i {
	color: #7d2ae8;
}

.field input {
	width: 100%;
	height: 100%;
	border: none;
	outline: none;
	font-size: 15px;
}

.field button {
	color: #fff;
	padding: 5px 18px;
	background: #00B807;
}

.field button:hover {
	background: #8d39fa;
}

.popup.show {
	z-index: 999;
}

.popup.show+.backdrop {
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	background: rgba(0, 0, 0, 0.5);
}
  </style>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @yield('navbar')
    <!-- partial -->
    <section class="share">
        <div class="container">
             <div class="row flex-column align-items-center" style="height: 100vh;">
                <div class="col-md-6 px-4 mt-3">
                    <div class="p-md-3 p-2 box" style="background-color: white; border-radius: 9px; box-shadow: 0px 4px 2px 0px #0000001f;">
                         <div class="shareImg mb-1">
                            {{-- <img src="{{url('images/dashboard/lion.jpg')}}" class="img-fluid"  alt=""> --}}


                            <input type="text" hidden  id="input"  value="{{$post->photo_video}}">
                              <div id="video" style="display: none;">
                                <video src="{{url('photo_video/'.$post->photo_video)}}" width="580" height="200" controls autoplay style="max-width:100%"></video>

                              </div>
                              <div id="image" style="display: none;width: 100%;
                              height: 200px;">
                                <img src="{{url('photo_video/'.$post->photo_video)}}" alt="Preview">
                              </div>
                         </div><br>
                         <div class="texts mt-1">
                             <p class="">{{$post->text}} <br><span class="text-primary"><a href="{{$post->link}}" target="_blank">{{$post->link}}</a></span></p>
                        </div>
                    </div>
                </div>
                {{-- <div class="social-btn-sp">
                  {!! $shareButtons1 !!}
            </div>  --}}
                <div class="col-md-6 px-4" style="flex: 1; align-content: center;">
                  <div class="text-center">
                    <a target="_blank" href="#" data-w-id="bef2cf86-f61f-a654-31b1-df5a1423ef1f" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="btn-calendar1 w-inline-block">
                    <button class="btn btn-share btn-calendar1-text">
                       Share
                    </button><script type="application/json" class="w-json">{
                      "items": [],
                      "group": ""
                      }
                    </script>
                  </a>
                    
                  </div>
                </div>
             </div>
        </div>
    </section>
  </div>

  <div class="popup">
    <header>
      <span>Share</span>
      <div class="close"><i class="uil uil-times"></i></div>
    </header>
    <div class="content">
      <p>Share this link via</p>
      <ul class="icons justify-content-center">
        <button id="share-instagram"  style="background: none !important;"><img src="{{url('images/Instagram_icon.png.webp')}}" alt="" class="img-fluid bg-none" style="width:25px;"></button>
       
        {!! $shareButtons1 !!}
      </ul>
      <script>
        const url = '{{$post->link}}';
        const text = '{{$post->text}}';
        
        document.getElementById('share-instagram').addEventListener('click', function() {
            const shareUrl = `https://www.instagram.com/?url=${encodeURIComponent(url)}&text=${encodeURIComponent(text)}`;
            window.open(shareUrl, '_blank');
        });
    </script>
    <script>
      const url = '{{$post->link}}';
      const text = '{{$post->text}}';
      
      document.getElementById('share-tiktok').addEventListener('click', function() {
        const shareUrl = `https://www.tiktok.com/?url=${encodeURIComponent(url)}&text=${encodeURIComponent(text)}`;
            window.open(shareUrl, '_blank');
      });
  </script>
      <p>Or copy link</p>
      <div class="field">
        <i class="url-icon uil uil-link"></i>
        <input type="text" readonly value="{{$post->link}}">
        <button>Copy</button>
      </div>
    
    </div>
  </div>
  {{-- <div class="backdrop"></div> --}}
  {{-- <a target="_blank" href="#" data-w-id="bef2cf86-f61f-a654-31b1-df5a1423ef1f" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="btn-calendar1 w-inline-block">
    <div class="btn-calendar2-svg w-embed new-modal">
    </div>
    <div class="btn-calendar1-text">i want this button to open the popup</div>
    <script type="application/json" class="w-json">{
      "items": [],
      "group": ""
      }
    </script>
  </a> --}}



  @include('user.footer')
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
    const viewBtn = document.querySelector(".btn-calendar1"),
    popup = document.querySelector(".popup"),
    close = popup.querySelector(".close"),
    field = popup.querySelector(".field"),
    input = field.querySelector("input"),
    copy = field.querySelector("button");

viewBtn.onclick = (e) => {
    e.preventDefault();
    popup.classList.toggle("show");
}
close.onclick = () => {
    viewBtn.click();
}

copy.onclick = () => {
    input.select(); //select input value
    if (document.execCommand("copy")) { //if the selected text is copied
        field.classList.add("active");
        copy.innerText = "Copied";
        setTimeout(() => {
            window.getSelection().removeAllRanges(); //remove selection from page
            field.classList.remove("active");
            copy.innerText = "Copy";
        }, 3000);
    }
}

document.querySelector('.backdrop').addEventListener("click", function(e) {
    popup.classList.remove("show");
});
  </script>