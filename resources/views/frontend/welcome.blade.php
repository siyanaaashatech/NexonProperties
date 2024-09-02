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
  <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->

  {{--navbar --}}

  <section class="container-fluid navsection">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light navcustom">
        <a class="navbar-brand" href="#"> <img src="{{ asset('image/nexonlogoa2.png') }}" alt="Logo" /></a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Introduction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('properties') }}">Rent</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('properties') }}">Buy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('blog') }}">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('contact') }}">Contact</a>
            </li>
       

          </ul>

        </div>
        <div class="button-collection d-flex">
          <button
            class="btn-buttonyellow btn-buttonyellowextrasmall  btn-buttonyellowextrasmallbac mx-1">register</button>
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




  {{--bannersection --}}

  <section class="container-fluid">
    <div class="row">
      <div class="col-md-9 p-0">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner mb-3">
            <!-- First Carousel Item -->
            <div class="carousel-item active">
              <div class="row d-flex">
                <div class="col-md-12 text-center d-flex flex-column justify-content-center align-items-center mb-2 ">
                  <img src="{{ asset('image/bighouse.png') }}" alt="" srcset="" class="imagecontroller">
                  <div class="flex bannercontent">
                    <div class="bannercontentinner">
                      <p class="sm-text1 mb-3 text-center forhidden">More than <span class="highlight">1000+</span>
                        houses
                        available for
                        sale &
                        rent in the country</p>
                      <h4 class="lg-text1 mb-4">Find Your Dream Home</h4>
                      <div class="d-flex justify-content-center mb-1">
                        <div class="btn-buttonyellow btn-buttonyellowsmall">Buy</div>
                        <div class="btn-buttongreen mx-2">Rent</div>
                      </div>
                      <div
                        class="formsection d-flex flex-column justify-content-center align-items-center py-md-3 py-2 gap-2 col-md-10 px-4 mx-md-4">
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
            <div class="carousel-item ">
              <div class="row d-flex">
                <div class="col-md-12 text-center d-flex flex-column justify-content-center align-items-center mb-2 ">
                  <img src="{{ asset('image/abb.png') }}" alt="" srcset="" class="imagecontroller">
                  <div class="flex bannercontent ">
                    <div class="bannercontentinner">
                      <p class="sm-text1 mb-3 text-center forhidden">More than <span class="highlight">1000+</span>
                        houses
                        available for
                        sale &
                        rent in the country</p>
                      <h4 class="lg-text1 mb-4">Find Your Dream Home</h4>
                      <div class="d-flex justify-content-center mb-1">
                        <div class="btn-buttonyellow btn-buttonyellowsmall">Buy</div>
                        <div class="btn-buttongreen mx-2">Rent</div>
                      </div>
                      <div
                        class="formsection d-flex flex-column justify-content-center align-items-center py-md-3 py-2 gap-2 col-md-10 px-4 mx-md-4">
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
      <div class="col-md-3">
        <div class="row">
          <div class="col-md-12 mb-2 p-0">
            <div class="property-container focuspadding">
              <img src="{{asset('image/bighouse.png')}}" alt="Property Image" class="property-image">
              <div class="property-details ">
                <div class="md-text1 ">Modern Office For Rent</div>
                <div class="sm-text highlight text-center p-0 m-0">North road 4 street</div>
                <div class="d-flex justify-content-between gap-3 p-0 mx-4">
                  <p class="detail-item sm-text1">
                    <span class="sm-text1">13</span><br />
                    <i class="fa-solid fa-bed detail-icon"></i>
                  </p>
                  <p class="detail-item sm-text1">
                    <span class="detail-number">02</span><br />
                    <i class="fa-solid fa-bath detail-icon"></i>
                  </p>
                  <p class="detail-item sm-text1">
                    <span class="sm-text1">13</span><br />
                    <i class="fa-solid fa-bed detail-icon"></i>
                  </p>
                </div>
                <p class="extra-small-text1 px-2">We wanted to take a moment to tell you what a We wanted to take a
                  moment to tell
                  you what a We wanted to take </p>
              </div>
            </div>
            <div class="property-container focuspadding">
              <img src="{{asset('image/abb.png')}}" alt="Property Image" class="property-image">
              <div class="property-details">
                <div class="md-text1">Modern Office For Rent</div>
                <div class="sm-text highlight text-center p-0 m-0">North road 4 street</div>
                <div class="d-flex justify-content-between gap-3 p-0 mx-4">
                  <p class="detail-item sm-text1">
                    <span class="sm-text1">13</span><br />
                    <i class="fa-solid fa-bed detail-icon"></i>
                  </p>
                  <p class="detail-item sm-text1">
                    <span class="detail-number">02</span><br />
                    <i class="fa-solid fa-bath detail-icon"></i>
                  </p>
                  <p class="detail-item sm-text1">
                    <span class="sm-text1">13</span><br />
                    <i class="fa-solid fa-bed detail-icon"></i>
                  </p>
                </div>
                <p class="extra-small-text1 px-2">We wanted to take a moment to tell you what a We wanted to take a
                  moment to tell
                  you what a We wanted to take </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>

  </section>

  {{--advantage --}}
  <section class="advantage py-4">
    <div class="container ">
      <div class="title py-2">
        <div class="xs-text1 dashline">Trusted Real estate Care</div>
        <div class="lg-text">company Advantage </div>
      </div>

      <div class="row gap-5 py-2">
        <div class="col-md-2 d-flex flex-column align-items-center justify-content-center">
          <img src="{{asset('image/happy.png')}}" alt="" srcset="">
          <div class="md-text">trust</div>
          <div class="sm-text text-center">to pagename where our where our </div>

        </div>
        <div class="col-md-2 d-flex flex-column align-items-center justify-content-center">
          <img src="{{asset('image/happy2.png')}}" alt="" srcset="">
          <div class="md-text">30 years</div>
          <div class="sm-text text-center">to pagename ss where our where our </div>

        </div>
        <div class="col-md-2 d-flex flex-column align-items-center justify-content-center">
          <img src="{{asset('image/happy.png')}}" alt="" srcset="">
          <div class="md-text">30 years</div>
          <div class="sm-text text-center">to pagename aaaw where our where our </div>

        </div>
        <div class="col-md-2 d-flex flex-column align-items-center justify-content-center">
          <img src="{{asset('image/happy2.png')}}" alt="" srcset="">
          <div class="md-text">location</div>
          <div class="sm-text text-center">to pagename aaa where our where our </div>
        </div>
        <div class="col-md-2 d-flex flex-column align-items-center justify-content-center">
          <img src="{{asset('image/happy.png')}}" alt="" srcset="">
          <div class="md-text">happiness</div>
          <div class="sm-text text-center">to pagename aaa where our where our </div>
        </div>
      </div>
    </div>

  </section>

  {{-- <!-- about --> --}}
  <section class="container-fluid container-fluid-background about">
    <div class="container d-flex flex-column justify-content-center align-items-center">
      <div class="row">
        <div class="col-md-6 d-flex ">
          <div class="image col-md-6">
            <img class="" data-src="" alt="" src="{{asset('image/bighouse.png')}}" />
          </div>
          <div class="image col-md-6  mt-5 mx-1">
            <img class="" data-src="" alt="" src="{{asset('image/bighouse.png')}}" />
          </div>

        </div>
        <div class="col-md-5 mx-md-4">
          <div class="title py-2">
            <div class="xs-text dashline">Trusted Real estate Care</div>
            <div class="lg-text1">Dream living Spaces Setting New Build</div>
          </div>
          <p class="sm-text1">Welcome to pagename where our passion for real estate and dedication to client
            satisfaction
            converge to create an unparalleled home-buying experience. Founded Welcome to pagename where our passion for
            real estate and dedication to client satisfaction converge to create an unparalleled home-buying experience.
            Founded </p>

          <div class="d-flex">
            <i class="fa-solid fa-hand-point-right customicons mx-2"></i>
            <p class="sm-text1">Welcome to pagename where our passion for real estate and dedication to client
              satisfaction
              converge to create an unparalle</p>
          </div>

          <div class="d-flex">
            <i class="fa-solid fa-hand-point-right customicons mx-2"></i>
            <p class="sm-text1">Welcome to pagename where our passion for real estate and dedication to client
              satisfaction
              converge to create an unparalle</p>
          </div>


        </div>
      </div>


    </div>

    </div>
  </section>

  {{-- <!-- project --> --}}

  <section class="project py-4">
    <div class="container ">
      <div class="d-flex justify-content-between">
        <div class="title">
          <div class="xs-text1 dashline">Trusted Real Estate Care</div>
          <div class="lg-text">Latest Project on Sale</div>
        </div>
        <a href="" class="btn-buttonyellow  py-1">View More</a>
      </div>
      <div class="row py-4 property-body">
        <div class="col-md-6 pb-1">
          <div class="property-container">
            <img src="{{asset('image/bighouse.png')}}" alt="Property Image" class="imagecontroller imagecontrollermd">
            <div class="property-details">
              <div class="md-text1 p-0 m-0">Hello</div>
              <div class="md-text highlight text-center p-0 m-0">North road 435673Kth street</div>
              <div class="d-flex justify-content-between gap-3 p-0 mx-4">
                <p class="detail-item sm-text1">
                  <span class="sm-text1">13</span><br />
                  <i class="fa-solid fa-bed detail-icon"></i>
                </p>
                <p class="detail-item sm-text1">
                  <span class="detail-number">02</span><br />
                  <i class="fa-solid fa-bath detail-icon"></i>
                </p>
                <p class="detail-item sm-text1">
                  <span class="sm-text1">13</span><br />
                  <i class="fa-solid fa-bed detail-icon"></i>
                </p>
              </div>
              <p class="extra-small-text1 px-2">We wanted to take a moment to tell you what a We wanted to take a moment
                wanted to take a moment to tell you what a We wanted to take a moment wanted to take a moment to tell
                you what a We wanted to take a moment to tell
                you what a We wanted to take </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 sub-image-content">
          <div class="row">
            <div class="col-md-6 pb-1">
              <div class="property-container">
                <img src="{{asset('image/bighouse.png')}}" alt="Property Image" class="property-image">
                <div class="property-details">
                  <div class="md-text1 p-0 m-0">Modern Office</div>
                  <div class="sm-text highlight text-center p-0 m-0">North road 4 street</div>
                  <div class="d-flex justify-content-between gap-3 p-0 mx-4">
                    <p class="detail-item sm-text1">
                      <span class="sm-text1">13</span><br />
                      <i class="fa-solid fa-bed detail-icon"></i>
                    </p>
                    <p class="detail-item sm-text1">
                      <span class="detail-number">02</span><br />
                      <i class="fa-solid fa-bath detail-icon"></i>
                    </p>
                    <p class="detail-item sm-text1">
                      <span class="sm-text1">13</span><br />
                      <i class="fa-solid fa-bed detail-icon"></i>
                    </p>
                  </div>
                  <p class="extra-small-text1 px-2">We wanted to take a moment to tell you what a We wanted to take a
                    moment to tell
                    you what a We wanted to take </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 pb-1">
              <div class="property-container">
                <img src="{{asset('image/bighouse.png')}}" alt="Property Image" class="property-image">
                <div class="property-details">
                  <div class="md-text1 p-0 m-0">Modern Office</div>
                  <div class="sm-text highlight text-center p-0 m-0">North road 4356 street </div>
                  <div class="d-flex justify-content-between gap-3 p-0 mx-4">
                    <p class="detail-item sm-text1">
                      <span class="sm-text1">13</span><br />
                      <i class="fa-solid fa-bed detail-icon"></i>
                    </p>
                    <p class="detail-item sm-text1">
                      <span class="detail-number">02</span><br />
                      <i class="fa-solid fa-bath detail-icon"></i>
                    </p>
                    <p class="detail-item sm-text1">
                      <span class="sm-text1">13</span><br />
                      <i class="fa-solid fa-bed detail-icon"></i>
                    </p>
                  </div>
                  <p class="extra-small-text1 px-2">We wanted to take a moment to tell you what a We wanted to take a
                    moment to tell
                    you what a We wanted to take </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 pb-1">
              <div class="property-container">
                <img src="{{asset('image/bighouse.png')}}" alt="Property Image" class="property-image">
                <div class="property-details">
                  <div class="md-text1 p-0 m-0">Modern Office</div>
                  <div class="sm-text highlight text-center p-0 m-0">North road Kth streeta </div>
                  <div class="d-flex justify-content-between gap-3 p-0 mx-4">
                    <p class="detail-item sm-text1">
                      <span class="sm-text1">13</span><br />
                      <i class="fa-solid fa-bed detail-icon"></i>
                    </p>
                    <p class="detail-item sm-text1">
                      <span class="detail-number">02</span><br />
                      <i class="fa-solid fa-bath detail-icon"></i>
                    </p>
                    <p class="detail-item sm-text1">
                      <span class="sm-text1">13</span><br />
                      <i class="fa-solid fa-bed detail-icon"></i>
                    </p>
                  </div>
                  <p class="extra-small-text1 px-2">We wanted to take a moment to tell you what a We wanted to take a
                    moment to tell
                    you what a We wanted to take </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 pb-1">
              <div class="property-container">
                <img src="{{asset('image/bighouse.png')}}" alt="Property Image" class="property-image">
                <div class="property-details">
                  <div class="md-text1 p-0 m-0">Modern Office</div>
                  <div class="sm-text highlight text-center p-0 m-0">North road 435673Kth </div>
                  <div class="d-flex justify-content-between gap-3 p-0 mx-4">
                    <p class="detail-item sm-text1">
                      <span class="sm-text1">13</span><br />
                      <i class="fa-solid fa-bed detail-icon"></i>
                    </p>
                    <p class="detail-item sm-text1">
                      <span class="detail-number">02</span><br />
                      <i class="fa-solid fa-bath detail-icon"></i>
                    </p>
                    <p class="detail-item sm-text1">
                      <span class="sm-text1">13</span><br />
                      <i class="fa-solid fa-bed detail-icon"></i>
                    </p>
                  </div>
                  <p class="extra-small-text1 px-2">We wanted to take a moment to tell you what a We wanted to take a
                    moment to tell
                    you what a We wanted to take </p>
                </div>
              </div>
            </div>




          </div>
        </div>
      </div>
      <div class="property-container d-flex justify-content-center align-self-center gap-3 flex-wrap">
        <div class="btn-buttongreen"> <i class="fa-solid fa-house customicons customiconssmall"></i> sale</div>
        <div class="btn-buttongreen"> <i class="fa-solid fa-house customicons customiconssmall"></i> Condos</div>
        <div class="btn-buttongreen "> <i class="fa-solid fa-house customicons customiconssmall"></i> sale</div>
        <div class="btn-buttongreen "> <i class="fa-solid fa-house customicons customiconssmall"></i> Condos</div>
        <div class="btn-buttongreen "> <i class="fa-solid fa-house customicons customiconssmall"></i> sale</div>

      </div>

    </div>
  </section>


  {{-- <!-- testimonial --> --}}


  <section class="container-fluid container-fluid-background">
    <div class="container d-flex flex-column justify-content-center align-items-center">
      <div class="title py-2">
        <div class="xs-text dashline">Trusted Real estate Care</div>
        <div class="lg-text1">Testimonials we give</div>
      </div>
      <div class="content-body d-md-flex justify-content-center align-items-center pt-3">
        <div class="col-md-8">
          <div class="card flex-md-row  box-shadow px-1 py-4">
            <div class="img-container col-md-5">
              <img class="img-fluid" data-src="holder.js/200x250?theme=thumb" alt=""
                src="{{asset('image/bighouse.png')}}" />
            </div>


            <div class="card-body d-flex flex-column col-md-6">
              <strong class="mb-2 text-success">
                <img src="{{asset('image/dash.png')}}" alt="">

              </strong>
              <h3 class="mb-0 md-text">
                proffesional $ personal
              </h3>
              <p class="sm-text mb-auto ">TWe wanted to take a moment to tell you what a pleasure it has been to work
                with you and your team at Al Asar. Your team professionalism has been by far beyond industry Firms and
                even ourexpectations.
                It's a pleasure to work with a firm which not only understands and commodes customers request but a</p>
              <div class="d-flex  pt-2">
                <img class=" " data-src="holder.js/200x250?theme=thumb" alt="" src="{{asset('image/blog.png')}}"
                  style="height:10vh; width:80px ;border-radius:8px;" />
                <div class="mx-4">
                  <div class="md-text media-md-text ">Anil Thapa Magar</div>
                  <div class="sm-text">software developer</div>
                </div>
              </div>

            </div>

          </div>
        </div>
        <div class="col-md-2 mx-md-4 d-flex gap-2 pt-2">
          <button class="next-button"><i class="fa-solid fa-arrow-right "></i></button>
          <button class="next-button"><i class="fa-solid fa-arrow-left "></i></button>

        </div>

      </div>

    </div>
  </section>

  {{--<!-- connect us --> --}}

  {{--
  <section class="container-fluid connect my-4 position-relative">
    <div class="overlay-image" style="background-image: url('{{ asset('image/abb.png') }}');"></div>
    <div class="overlay"></div>
    <div class="container  connectbody">
      <div class="row d-flex justify-content-between">
        <div class="col-md-5">
          <h3 class="md-text1">Let’s Connect with Us</h3>
          <p class="sm-text1">Pará is a state of Brazil, located in northern Brazil and traversed by the lower Amazon
            River.</p>
        </div>
        <div class="col-md-2">
          <h6 class="md-text1">Call Us</h6>
          <h6 class="sm-text1">979-93333-33</h6>
          <a href="https://www.youtube.com/">
            <button class="btn-buttonyellow">Visit Us</button>
          </a>
        </div>
      </div>
    </div>
  </section>
  --}}

  {{-- <!-- blog section --> --}}

  <section class="blog">
    <div class="container">
      <div class="row d-flex  justify-content-center">
        <div class="col-md-4 my-2">
          <div class="card">
            <img class="img-fluid p-2" src="{{asset('image/blog.png')}}" alt=" cap p">
            <div class="card-body">
              <h5 class="md-text">Card title</h5>
              <p class="sm-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <div class="btn-buttonyellow">Read more</div>
            </div>
          </div>
        </div>
        <div class="col-md-4 my-2">
          <div class="card">
            <img class="img-fluid p-2" src="{{asset('image/blog.png')}}" alt=" cap p">
            <div class="card-body">
              <h5 class="md-text">Card title</h5>
              <p class="sm-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <div class="btn-buttonyellow">Read more</div>
            </div>
          </div>
        </div>
        <div class="col-md-4 my-2">
          <div class="card">
            <img class="img-fluid p-2" src="{{asset('image/blog.png')}}" alt=" cap p">
            <div class="card-body">
              <h5 class="md-text">Card title</h5>
              <p class="sm-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <div class="btn-buttonyellow">Read more</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  {{--footer section --}}

  <footer class="container-fluid container-fluid-background mt-5">
    <div class="container">
      <div class="row  d-flex justify-content-between">
        <div class="col-md-5 flex-col sm-col-12 py-1">
          <h1 class="lg-text1 highlight p-0 m-0">NEXON</h1>
          <p class="sm-text1">
            Welcome to pagename where our passion for real estate and dedication to
            client satisfaction converge to create an unparalleled home-buying experience. Founded </p>

        </div>
        <div class="col-md-2 sm-col-12  py-1 px-5">
          <h1 class="md-text1 highlight">Quick link</h1>
          <ul class="d-flex justify-content-around customui flex-column gap-2">
            <li><a href=""> <i class="fa-solid fa-truck-moving  customiconssmall"></i>Rent</a></li>
            <li><a href=""><i class="fa-solid fa-cart-shopping customiconssmall"></i>Buy</a></li>
            <li><a href=""> <i class="fa-solid fa-address-book customiconssmall"></i>About</a></li>
            <li><a href=""><i class="fa-solid fa-blog customiconssmall"></i>Blog</a></li>
          </ul>


        </div>
        <div class="col-md-3 col-sm-12  py-1">
          <h1 class="md-text1 highlight">Message us</h1>
          <input type="text" class="input" placeholder="Your email id here">
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