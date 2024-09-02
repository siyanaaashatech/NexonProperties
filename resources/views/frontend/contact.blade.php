<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <link rel="stylesheet" href="{{asset('boot/css/bootstrap.css')}}">
    <script src="{{ asset('boot/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">



</head>

<body>
    
      <section class="container-fluid">
    <div class="container">
    <div class="button-collection row  gap-sm-5 nav-button-collection py-2">
          <button class="btn-buttonyellow reg-logbutton reg-logbutton-white mb-1 mx-1 coloryellow">register</button>
          <button class="btn-buttonyellow reg-logbutton mx-1 ">login</button>
        </div>
      
    </div>

  </section>

    <!-- navbar -->

    <section class="container-fluid navsection">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light navcustom">
        <a class="navbar-brand" href="#"> <img src="{{ asset('image/logo.png') }}" alt="Logo" /></a>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('/')}}">Introduction</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('properties')}}">Rent</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('properties')}}">Buy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('about') }}">About</a>
            </li>
          
          </ul> 
        
        </div>
      <div class="button-collection  flex-column ">
          <button class="btn-buttonyellow reg-logbutton reg-logbutton-white mb-1">register</button>
          <button class="btn-buttonyellow reg-logbutton ">login</button>
        </div>
          <i class="fa-solid fa-bars customicons mx-4 " onclick="funmenu()"></i>
         
        
      </nav>
    </div>
    <div class="bur-menu py-3" id="bur-menu">
      <div class="activites">
         <h2 class="navdestext pt-3">activities section</h2>
          <li class="nav-item">
          <i class="fa-solid fa-house customiconssmall "></i>
              <a class="nav-link " aria-current="page" href="#">Introduction</a>
            </li>
            <li class="nav-item">
            
            <i class="fa-solid fa-truck-moving  customiconssmall"></i>
              <a class="nav-link " aria-current="page" href="{{route('properties')}}">Rent</a>
            </li>
            <li class="nav-item">
            <i class="fa-solid fa-cart-shopping customiconssmall"></i>
              <a class="nav-link" aria-current="page" href="{{route('properties')}}">Buy</a>
            </li>
            </div>
            <div class="information">
            <h2 class="navdestext">Information section</h2>
            <li class="nav-item d-flex">
            <i class="fa-solid fa-circle-question customiconssmall"></i>
              <a class="nav-link" aria-current="page" href="{{route("about")}}">About</a>
            </li>
          <li class="nav-item">
          <i class="fa-solid fa-blog customiconssmall"></i>
              <a class="nav-link active" aria-current="page" href="{{route("blog")}}">Blog</a>
            </li>
            <li class="nav-item">
            <i class="fa-solid fa-address-book customiconssmall"></i>
              <a class="nav-link active" aria-current="page" href="{{route('contact')}}">contact</a>
            </li>
            </div>
            <h2 class="navdestext">follow us</h2>
            <div class="d-flex font-collection py-2">
            <i class="fa-brands fa-facebook customicons mx-2"></i>
            <i class="fa-brands fa-linkedin customicons mx-2"></i>
           <i class="fa-brands fa-youtube customicons mx-2"></i>
            </div>            
            </div>
  </section>

    <!-- bannersection -->
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="carousel-inner mb-3">
                    <div class="row d-flex">
                        <div
                            class="col-md-12 text-center d-flex flex-column justify-content-center align-items-center mb-2 ">
                            <img src="{{ asset('image/contact.png') }}" alt="" srcset=""
                                class="imagecontroller imagecontrollerheight">
                            <div class="flex bannercontentheight">
                                <div class="bannercontentinnerheight ">
                                    <h4 class="lg-text1">Contact</h4>
                                    <h5 class="md-text1"><a href="">home</a> <i class="fa-solid fa-angle-right "></i>
                                        <span class="highlight">contact</span> </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>



     <!-- detailsection -->
    <section class="container-fluid contact">
        <div class="container">
            <div class="row d-flex  justify-content-center align-items-center">
                <div class="col-md-3 greenbackground d-flex  justify-content-center align-items-center">
                    <i class="fa-solid fa-location-dot customiconslarge"></i>
                    <div class="information">
                        <h2 class="md-text1">office address</h2>
                        <h2 class="extra-small-text1">North road 435673Kth street</h2>

                    </div>

                </div>
                <div class="col-md-3 greenbackground d-flex  justify-content-center align-items-center">
                    <i class="fa-solid fa-envelope  customiconslarge"></i>
                    <div class="information">
                        <h2 class="md-text1">office email </h2>
                        <h2 class="extra-small-text1">Northroad@gmail.com</h2>

                    </div>

                </div>
                <div class="col-md-3 greenbackground d-flex  justify-content-center align-items-center">

                    <i class="fa-solid fa-phone customiconslarge"></i>
                    <div class="information">
                        <h2 class="md-text1">office Contact</h2>
                        <h2 class="extra-small-text1">977-00-3333-33</h2>

                    </div>

                </div>
            </div>

        </div>
</section>


    <section class="container-fluid  my-5 form-map py-4" >

        <div class="row d-flex  justify-content-center align-items-center">
            <div class="col-md-4 contentbackground px-4">
                <div class="d-flex flex-column gap-2">
                    <p class="extra-small-text1">Are you ready to embark on a journey of self-discovery, inner peace, and holistic well-being?
                        Join our Yoga and Meditation class, and connect with us to explore the transformative power of
                        mindfulness and movement.</p>
                        <div class="d-flex flex-column">
                        <label for="" class="xs-text pb-1">Your full Name</label>
                        <input type="text" name="" id="" class="input" placeholder="Person name" />
                        </div>
                        <div class="d-flex flex-column">
                        <label for="" class="xs-text pb-1">Email Address</label>
                        <input type="text" name="" id="" class="input" placeholder="Person name" />
                        </div>
                        <div class="d-flex flex-column">
                        <label for="" class="xs-text pb-1">Message</label>
                        <textarea name="" id="" class="textarea" placeholder="message"></textarea>
                        </div>           
                    <button class="btn-buttonyellow btn-buttonyellowlarge mt-1 ">Send</button>
                </div>

            </div>
            <div class="col-md-6">
                <img src="{{asset("image/map.png")}}" alt="" class="contactbodyimage">
            </div>
        </div>



    </section>





    <!-- <style>
  
@keyframes moveImages {
     0% {
       transform: translatey(0);
     }
     100% {
       transform: translatey(100px);
     }
   }
   
   .propertype-subimage {
     transition: transform 1s ease-in-out;
  
   }
   
   .propertype-subimage.animate {
     animation: moveImages 6s forwards;
   }
</style>
<script>
document.addEventListener("DOMContentLoaded", function() {
  setTimeout(function() {
    document.querySelectorAll('.propertype-subimage').forEach(function(item) {
      item.classList.add('animate');
    });
  }, 3000); // 3 seconds delay
});
</script> -->








    <!-- footer section  -->
    <footer class="container-fluid container-fluid-background mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 flex-col sm-col-12 py-1">
                    <h1 class="lg-text1">NEXON</h1>
                    <span class="sm-text1">@ copyright Welcome to pagename all right reserved</span>

                </div>
                <div class="col-md-4 sm-col-12  py-1">
                    <h1 class="md-text1">Quick link</h1>
                    <ul class="d-flex justify-content-around customui">
                        <li><a href="">home</a></li>
                        <li><a href="">home</a></li>
                        <li><a href="">home</a></li>
                        <li><a href="">home</a></li>
                        <li><a href="">home</a></li>
                    </ul>
                    <p class="sm-text1">
                        Welcome to pagename where our passion for real estate and dedication to
                        client satisfaction converge to create an unparalleled home-buying experience. Founded </p>

                </div>
                <div class="col-md-3 col-sm-12 mx-md-5 py-1">
                    <h1 class="md-text1">Message us</h1>
                    <input type="text" class="input">
                    <textarea name="" id="" rows="1" cols="" class="textarea my-1"></textarea>
                    <button class=" btn-buttonyellow  footer-button">login/register</button>

                </div>
            </div>

        </div>
    </footer>

    <div class="container-fluid button-footer">
        <div class="container d-flex align-items-center  justify-content-center flex-column py-2">
            <div class="d-flex justify-content-around  py-2 ">
                <i class="fa-brands fa-facebook customicons mx-2"></i>
                <i class="fa-brands fa-instagram customicons mx-2"></i>
                <i class="fa-brands fa-linkedin customicons mx-2"></i>
                <i class="fa-brands fa-youtube customicons mx-2"></i>
            </div>
            <ul class="d-flex justify-content-around customui">
                <li><a href="" class=" mx-1 line">fAQ</a></li>
                <li><a href="" class=" mx-1 line">Policy</a></li>
                <li><a href="" class=" mx-2">Term and Condition</a></li>

            </ul>


        </div>
    </div>

    <script>
    function funmenu() {
            const burmenu = document.getElementById("bur-menu");
           
            if (burmenu.style.display === "block") {
                burmenu.style.display = "none";
            } else {
                burmenu.style.display = "block";
              
            }
        }


  </script>




</body>

</html>