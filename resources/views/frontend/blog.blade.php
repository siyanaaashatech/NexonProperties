  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('boot/css/bootstrap.css')}}">
  <script src="{{ asset('boot/js/bootstrap.min.js')}}"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />



</head>

<body>

<!-- navbar -->

<section class="container-fluid navsection">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light navcustom">
        <a class="navbar-brand" href="#"> <img src="{{ asset('image/nexonlogoa2.png') }}" alt="Logo" /></a>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route("index")}}">Introduction</a>
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
        <div class="button-collection d-flex">
          <button class="btn-buttonyellow btn-buttonyellowextrasmall  btn-buttonyellowextrasmallbac mx-1">register</button>
          <button class="btn-buttonyellow btn-buttonyellowextrasmall ">login</button>
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


  <!-- each team des -->
  <!-- banner section -->
  <section class="singlepage pt-4">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
            <div class="row d-flex flex- col ">
                <div class="col-md-12 mb-3">
                <img src="{{asset('image/bighouse.png')}}" alt="" srcset="" class="imagecontroller">
          <div class=" d-flex gap-3 py-3">
            <div class="d-flex ">
              <i class="fa-solid fa-person customiconssmall pt-1 mx-1"></i>
              <h2 class="sm-text">Real</h2>
            </div>
            <div class="d-flex ">
              <i class="fa-solid fa-calendar-days customiconssmall pt-1 mx-1"></i>
              <h2 class="sm-text text-center">june 8,2024</h2>
            </div>
            <div class="d-flex">
              <i class="fa-solid fa-building customiconssmall pt-1 mx-1"></i>
              <h2 class="sm-text">type</h2>
            </div>

          </div>
          <h5 class="md-text">How does this position align with your career goals?</h5>
          <p class="sm-text py-1">Pará is a state of Brazil, located in northern Brazil and traversed by the lower
            Amazon River. It borders
            the Pará is a state of Brazil, located in northern Brazil and traversed by the lower Amazon River. It
            borders thePará is a state of Brazil, located in northern Brazil and traversed by the lower Amazon River. It
            borders thePará is a state of Brazil, located in northern Brazil and traversed by the lower Amazon River. It
            borders the Brazil, located in northern Brazil and traversed by the lower Amazon River. It
          </p>
          <button class="btn-buttonyellow">Read more</button>
                </div>
                <div class="col-md-12">
                <img src="{{asset('image/bighouse.png')}}" alt="" srcset="" class="imagecontroller">
          <div class=" d-flex gap-3 py-3">
            <div class="d-flex ">
              <i class="fa-solid fa-person customiconssmall pt-1 mx-1"></i>
              <h2 class="sm-text">Real</h2>
            </div>
            <div class="d-flex ">
              <i class="fa-solid fa-calendar-days customiconssmall pt-1 mx-1"></i>
              <h2 class="sm-text text-center">june 8,2024</h2>
            </div>
            <div class="d-flex">
              <i class="fa-solid fa-building customiconssmall pt-1 mx-1"></i>
              <h2 class="sm-text">type</h2>
            </div>

          </div>
          <h5 class="md-text">How does this position align with your career goals?</h5>
          <p class="sm-text py-1">Pará is a state of Brazil, located in northern Brazil and traversed by the lower
            Amazon River. It borders
            the Pará is a state of Brazil, located in northern Brazil and traversed by the lower Amazon River. It
            borders thePará is a state of Brazil, located in northern Brazil and traversed by the lower Amazon River. It
            borders thePará is a state of Brazil, located in northern Brazil and traversed by the lower Amazon River. It
            borders the Brazil, located in northern Brazil and traversed by the lower Amazon River. It
          </p>
          <button class="btn-buttonyellow">Read more</button>
                </div>  

            </div>
         

        </div>
        <div class="col-md-4 sidebar  ">
          <div class="paddingbox">
            <input type="text" name="" id="" class="input">
          </div>
          <div class="paddingbox ">
            <h2 class="md-text1">Recent post</h2>
            <ul class="customui">
              <li class="py-1"><a href="" class="md-text"> <i
                    class="fa-solid fa-hand-point-right customicons customiconssmall "></i>
                  When should I open your gift?</a></li>
              <li class="py-1"><a href="" class="md-text"> <i
                    class="fa-solid fa-hand-point-right customicons customiconssmall "></i>
                  Are you supporting England,</a></li>
              <li class="py-1"><a href="" class="md-text"> <i
                    class="fa-solid fa-hand-point-right customicons customiconssmall "></i>
                  When should I open your gift?</a></li>
              <li class="py-1"><a href="" class="md-text"> <i
                    class="fa-solid fa-hand-point-right customicons customiconssmall "></i>
                  Are you supporting England, </a></li>

            </ul>

          </div>
          <div class="paddingbox nobackground">
            <h2 class="md-text">feature list</h2>
            <div class="featurelist-body">
              <div class="featurelist-content d-flex py-1">
                <img class="feature-smallimg" data-src="holder.js/200x250?theme=thumb" alt=""
                  src="{{asset('image/bighouse.png')}}" />
                <div class="featurlist-description mx-3">
                  <h3 class="sm-text">luxury house in greenville</h3>
                  <p class="sm-text highlight"> $130000</p>

                </div>
              </div>
              <div class="featurelist-content d-flex  py-1">
                <img class="feature-smallimg" data-src="holder.js/200x250?theme=thumb" alt=""
                  src="{{asset('image/bighouse.png')}}" />
                <div class="featurlist-description mx-3">
                  <h3 class="sm-text">luxury house in greenville</h3>
                  <p class="sm-text highlight"> $1900000</p>

                </div>
              </div>
              <div class="featurelist-content d-flex  py-1">
                <img class="feature-smallimg" data-src="holder.js/200x250?theme=thumb" alt=""
                  src="{{asset('image/bighouse.png')}}" />
                <div class="featurlist-description mx-3">
                  <h3 class="sm-text">luxury house in greenville</h3>
                  <p class="sm-text highlight"> $130000</p>

                </div>
              </div>


            </div>
          </div>

        </div>
      </div>

    </div>

  </section>






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
    
    function changepage(element) {
        const pageli = document.getElementsByClassName("nextli");
      for (let i = 0; i < pageli.length; i++) {
        pageli[i].classList.remove("activeli");

      }

      element.classList.add("activeli")
    }



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