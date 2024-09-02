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
            <a class="nav-link active" aria-current="page" href="{{route('index')}}">Introduction</a>
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

  {{-- 
<section class="container-fluid">
    <div class="row">
      <div class="col-md-12 p-0">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner mb-3">
            <div class="carousel-item active">
              <div class="row d-flex">
                <div class="col-md-12 text-center d-flex flex-column justify-content-center align-items-center mb-2 ">
                  <img src="{{ asset('image/bighouse.png') }}" alt="" srcset="" class="imagecontroller">
                  <div class="flex bannercontent">
                    <div class="bannercontentinner">
                      <p class="sm-text1 mb-3 text-center forhidden">More than <span class="highlight">1000+</span> houses
                        available for
                        sale &
                        rent in the country</p>
                      <h4 class="lg-text1 mb-4">Find Your Dream Home</h4>
                      <div class="d-flex justify-content-center mb-1">
                        <div class="btn-buttonyellow btn-buttonyellowsmall">Buy</div>
                        <div class="btn-buttongreen mx-2">Rent</div>
                      </div>
                      <div class="formsection d-flex flex-column justify-content-center align-items-center py-md-3 py-2 gap-2 col-md-10 px-4 mx-md-4">
                        <div class="d-flex flex-wrap  gap-md-3">
                        <input type="text" class="input bannerinput" placeholder="List type">
                        <input type="text" class="input bannerinput" placeholder="property type">
                        <input type="text" class="input bannerinput" placeholder="Location">
                        <input type="text" class="input bannerinput" placeholder="Price">
                        <input type="text" class="input bannerinput" placeholder="Bedroom">
                        <button class="btn-buttongreen bannerinput ">Search</button>                
                        </div>                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>
  </section>
  --}}


  <!-- bannersection -->

  <section class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="carousel-inner mb-3">
                    <div class="row d-flex">
                        <div
                            class="col-md-12 text-center d-flex flex-column justify-content-center align-items-center mb-2 ">
                            <img src="{{ asset('image/house1.png') }}" alt="" srcset=""
                                class="imagecontroller imagecontrollerheight">
                            <div class="flex bannercontentheight">
                                <div class="bannercontentinnerheight ">
                                    <h4 class="lg-text1">Contact</h4>
                                    <h5 class="md-text1">home <i class="fa-solid fa-angle-right "></i>
                                        <span class="highlight">contact</span> </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>



<!-- Search section -->


   <section class="container-fluid greenbackground ">
     <div class="container">
      <div class="row">
        <div class="d-flex flex-column">
          <label for="" class="sm-text1">Listing type</label>
          <input type="text" class="input bannerinput">
        </div>
        <div class="d-flex flex-column">
          <label for="" class="sm-text1">properties type</label>
          <input type="text" class="input bannerinput">
        </div>
        <div class="d-flex flex-column">
          <label for="" class="sm-text1">Location</label>
          <input type="text" class="input bannerinput">
        </div>

      </div>
     </div>


  </section>


<!-- multiple properties section -->
<section class="container-fluid multipost my-3">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="property-container d-flex justify-content-center align-self-center gap-3 flex-wrap">
                    <div class="btn-buttongreen"> <i class="fa-solid fa-house customicons customiconssmall"></i> sale
                    </div>
                    <div class="btn-buttongreen"> <i class="fa-solid fa-house customicons customiconssmall"></i> Condos
                    </div>
                    <div class="btn-buttongreen "> <i class="fa-solid fa-house customicons customiconssmall"></i> sale
                    </div>
                    <div class="btn-buttongreen "> <i class="fa-solid fa-house customicons customiconssmall"></i> Condos
                    </div>
                    <div class="btn-buttongreen "> <i class="fa-solid fa-house customicons customiconssmall"></i> sale
                    </div>

                </div>

            </div>
            <div class="col-md-12 py-3">
                <div class="row">
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <img class="p-2" src="{{asset('image/blog.png')}}" alt=" cap p">
                            <div class="sell_rent_button d-flex justify-content-between ">
                                <div class="btn-buttonxs btn-buttonxsyellow ">feature</div>
                                <div class="status d-flex justify-content-between">
                                    <div class="btn-buttonxs  btn-buttonxsgreen mx-1">For Sell</div>
                                    <div class="btn-buttonxs btn-buttonxsgreen">Sold</div>

                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="md-text">Modern Office For Rent</h5>
                                <div class=" d-flex gap-3 flex-wrap ">
                                    <h2 class="sm-text"><span class="mx-1">12</span>bedroom</h2>
                                    <h2 class="sm-text"><span class="mx-1">2</span>bathroom</h2>
                                    <h2 class="sm-text"><span class="mx-1">22 meter</span>size</h2>
                                </div>
                                <div class="price-person ">
                                    <div class="d-flex justify-content-between align-content-center">
                                        <div class=" sm-text"> <span class="md-text">$1111 /</span>months </div>
                                        <img src="{{asset('image/blog.png')}}" alt="" sizes="" srcset=""
                                            class="feature-smallimg feature-smallimgdup">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <img class="p-2" src="{{asset('image/blog.png')}}" alt=" cap p">
                            <div class="sell_rent_button d-flex justify-content-between ">
                                <div class="btn-buttonxs btn-buttonxsyellow ">feature</div>
                                <div class="status d-flex justify-content-between">
                                    <div class="btn-buttonxs  btn-buttonxsgreen mx-1">For Sell</div>
                                    <div class="btn-buttonxs btn-buttonxsgreen">Sold</div>

                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="md-text">Modern Office For Rent</h5>
                                <div class=" d-flex gap-3 flex-wrap ">
                                    <h2 class="sm-text"><span class="mx-1">12</span>bedroom</h2>
                                    <h2 class="sm-text"><span class="mx-1">2</span>bathroom</h2>
                                    <h2 class="sm-text"><span class="mx-1">22 meter</span>size</h2>
                                </div>
                                <div class="price-person ">
                                    <div class="d-flex justify-content-between align-content-center">
                                        <div class=" sm-text"> <span class="md-text">$1111 /</span>months </div>
                                        <img src="{{asset('image/blog.png')}}" alt="" sizes="" srcset=""
                                            class="feature-smallimg feature-smallimgdup">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <img class="p-2" src="{{asset('image/blog.png')}}" alt=" cap p">
                            <div class="sell_rent_button d-flex justify-content-between ">
                                <div class="btn-buttonxs btn-buttonxsyellow ">feature</div>
                                <div class="status d-flex justify-content-between">
                                    <div class="btn-buttonxs  btn-buttonxsgreen mx-1">For Sell</div>
                                    <div class="btn-buttonxs btn-buttonxsgreen">Sold</div>

                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="md-text">Modern Office For Rent</h5>
                                <div class=" d-flex gap-3 flex-wrap ">
                                    <h2 class="sm-text"><span class="mx-1">12</span>bedroom</h2>
                                    <h2 class="sm-text"><span class="mx-1">2</span>bathroom</h2>
                                    <h2 class="sm-text"><span class="mx-1">22 meter</span>size</h2>
                                </div>
                                <div class="price-person ">
                                    <div class="d-flex justify-content-between align-content-center">
                                        <div class=" sm-text"> <span class="md-text">$1111 /</span>months </div>
                                        <img src="{{asset('image/blog.png')}}" alt="" sizes="" srcset=""
                                            class="feature-smallimg feature-smallimgdup">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <img class="p-2" src="{{asset('image/blog.png')}}" alt=" cap p">
                            <div class="sell_rent_button d-flex justify-content-between ">
                                <div class="btn-buttonxs btn-buttonxsyellow ">feature</div>
                                <div class="status d-flex justify-content-between">
                                    <div class="btn-buttonxs  btn-buttonxsgreen mx-1">For Sell</div>
                                    <div class="btn-buttonxs btn-buttonxsgreen">Sold</div>

                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="md-text">Modern Office For Rent</h5>
                                <div class=" d-flex gap-3 flex-wrap ">
                                    <h2 class="sm-text"><span class="mx-1">12</span>bedroom</h2>
                                    <h2 class="sm-text"><span class="mx-1">2</span>bathroom</h2>
                                    <h2 class="sm-text"><span class="mx-1">22 meter</span>size</h2>
                                </div>
                                <div class="price-person ">
                                    <div class="d-flex justify-content-between align-content-center">
                                        <div class=" sm-text"> <span class="md-text">$1111 /</span>months </div>
                                        <img src="{{asset('image/blog.png')}}" alt="" sizes="" srcset=""
                                            class="feature-smallimg feature-smallimgdup">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 my-2">
                        <div class="card">
                            <img class="p-2" src="{{asset('image/blog.png')}}" alt=" cap p">
                            <div class="sell_rent_button d-flex justify-content-between ">
                                <div class="btn-buttonxs btn-buttonxsyellow ">feature</div>
                                <div class="status d-flex justify-content-between">
                                    <div class="btn-buttonxs  btn-buttonxsgreen mx-1">Rent</div>
                                    <div class="btn-buttonxs btn-buttonxsgreen">Sold</div>

                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="md-text">Modern Office For Rent</h5>
                                <div class=" d-flex gap-3 flex-wrap ">
                                    <h2 class="sm-text"><span class="mx-1">12</span>bedroom</h2>
                                    <h2 class="sm-text"><span class="mx-1">2</span>bathroom</h2>
                                    <h2 class="sm-text"><span class="mx-1">22 meter</span>size</h2>
                                </div>
                                <div class="price-person ">
                                    <div class="d-flex justify-content-between align-content-center">
                                        <div class=" sm-text"> <span class="md-text">$1111 /</span>months </div>
                                        <img src="{{asset('image/blog.png')}}" alt="" sizes="" srcset=""
                                            class="feature-smallimg feature-smallimgdup">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <img class="p-2" src="{{asset('image/blog.png')}}" alt=" cap p">
                            <div class="sell_rent_button d-flex justify-content-between ">
                                <div class="btn-buttonxs btn-buttonxsyellow ">feature</div>
                                <div class="status d-flex justify-content-between">
                                    <div class="btn-buttonxs  btn-buttonxsgreen mx-1">For Sell</div>
                                    <div class="btn-buttonxs btn-buttonxsgreen">Active</div>

                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="md-text">Modern Office For Rent</h5>
                                <div class=" d-flex gap-3 flex-wrap ">
                                    <h2 class="sm-text"><span class="mx-1">12</span>bedroom</h2>
                                    <h2 class="sm-text"><span class="mx-1">2</span>bathroom</h2>
                                    <h2 class="sm-text"><span class="mx-1">22 meter</span>size</h2>
                                </div>
                                <div class="price-person ">
                                    <div class="d-flex justify-content-between align-content-center">
                                        <div class=" sm-text"> <span class="md-text">$1111 /</span>months </div>
                                        <img src="{{asset('image/blog.png')}}" alt="" sizes="" srcset=""
                                            class="feature-smallimg feature-smallimgdup">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- nextpage section -->
<section class="container-fluid ">
    <div class="container">
        <div class="row  nextpage ">
            <ul class="nextui d-flex gap-1">
                <li class="nextli" onclick="changepage(this)"><a href="" class="md-text"><i
                            class="fa-solid fa-arrow-right"></i></a></li>
                <li class="nextli" onclick="changepage(this)"><a href="" class="md-text ">1</a></li>
                <li class="nextli" onclick="changepage(this)"><a href="" class="md-text ">2</a></li>
                <li class="nextli" onclick="changepage(this)"><a href="" class="md-text ">3</a></li>
                <li class="nextli" onclick="changepage(this)"><a href="" class="md-text"><i
                            class="fa-solid fa-arrow-left"></i></a></li>
            </ul>
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