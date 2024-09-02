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
                            <img src="{{ asset('image/abou1.png') }}" alt="" srcset=""
                                class="imagecontroller imagecontrollerheight">
                            <div class="flex bannercontentheight">
                                <div class="bannercontentinnerheight ">
                                    <h4 class="lg-text1">About</h4>
                                    <h5 class="md-text1"><a href="">home</a> <i class="fa-solid fa-angle-right "></i>
                                        <span class="highlight">about</span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>




    <section class="container-fluid companydescription">
        <div class="container">
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col-md-5">
                    <h1 class="md-text text-center">more about us </h1>
                    <p class=" extra-small-text text-center">Utilizing her exceptional experience and knowledge of
                        the luxury waterfront markets, Simone serves an extensive and elite worldwide client base. </p>
                </div>
                <div class="col-md-12">
                    <div class="row d-flex  align-items-center justify-content-center gap-1">
                        <div class="col-md-5">
                            <h1 class="md-text text-center">our vision </h1>
                            <p class=" extra-small-text text-center">Utilizing her exceptional experience and knowledge
                                of
                                the luxury waterfront markets, Simone serves an extensive and elite worldwide client
                                base. </p>
                        </div>
                        <div class="col-md-5">
                            <h1 class="md-text text-center">0ur Mission </h1>
                            <p class=" extra-small-text text-center">Utilizing her exceptional experience and knowledge
                                of
                                the luxury waterfront markets, Simone serves an extensive and elite worldwide client
                                base. </p>
                        </div>
                        <div class="col-md-5">
                            <h1 class="md-text text-center">our Values</h1>
                            <p class=" extra-small-text text-center">Utilizing her exceptional experience and knowledge
                                of
                                the luxury waterfront markets, Simone serves an extensive and elite worldwide client
                                base. </p>
                        </div>
                        <div class="col-md-5">
                            <h1 class="md-text text-center">our Resource </h1>
                            <p class=" extra-small-text text-center">Utilizing her exceptional experience and knowledge
                                of
                                the luxury waterfront markets, Simone serves an extensive and elite worldwide client
                                base. </p>
                        </div>
                    </div>


                </div>

            </div>


        </div>
    </section>

    <!-- team member -->

    <section class="container-fluid teammember py-5 mt-4">
        <div class="container">
            <div class="row d-flex flex-column justify-content-center align-items-center ">
                <div class="col-lg-5">
                    <h1 class="md-text text-center">Core team member</h1>
                    <p class=" extra-small-text text-center">Utilizing her exceptional experience and knowledge of
                        the luxury waterfront markets, Simone serves an extensive and elite worldwide client base. </p>
                </div>

                <div class="col-lg-12 extradiv">
                    <div class="row d-flex justify-content-center align-items-center gap-1 teamimagerow">
                        <div class="col-md-3 member-container">
                            <img class="teamimage" data-src="" alt="" src="{{asset('image/member1.png')}}" />
                            <div class="memberdetail">
                                <h1 class="xs-text">animesh baral</h1>
                                <h1 class="extra-small-text1">front-end developer</h1>
                            </div>

                        </div>
                        <div class="col-md-3 member-container">
                            <img class="teamimage" data-src="" alt="" src="{{asset('image/member2.png')}}" />
                            <div class="memberdetail">
                                <h1 class="xs-text">animesh baral</h1>
                                <h1 class="extra-small-text1">front-end developer</h1>
                            </div>
                        </div>


                        <div class="col-md-3 member-container">
                            <img class="teamimage" data-src="" alt="" src="{{asset('image/member2.png')}}" />
                            <div class="memberdetail">
                                <h1 class="xs-text">animesh baral</h1>
                                <h1 class="extra-small-text1">front-end developer</h1>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>




    <!-- more team member -->

    <section class="container-fluid  py-5 mb-4">
        <div class="container">
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col-lg-5">
                    <h1 class="md-text text-center"> our team member</h1>
                    <p class=" extra-small-text text-center">Utilizing her exceptional experience and knowledge of
                        the luxury waterfront markets, Simone serves an extensive and elite worldwide client base. </p>
                </div>

                <div class="col-lg-12">
                    <div class="row d-flex justify-content-center align-items-center py-2">
                        <div class="col-md-3 member-container">
                            <img class="teamimage" data-src="" alt="" src="{{asset('image/member1.png')}}" />
                            <div class="memberdetail">
                                <h1 class="xs-text">animesh baral</h1>
                                <h1 class="extra-small-text1">front-end developer</h1>
                            </div>

                        </div>
                        <div class="col-md-3 member-container">
                            <img class="teamimage" data-src="" alt="" src="{{asset('image/member2.png')}}" />
                            <div class="memberdetail">
                                <h1 class="xs-text">animesh baral</h1>
                                <h1 class="extra-small-text1">front-end developer</h1>
                            </div>
                        </div>

                        <div class="col-md-3 member-container">
                            <img class="teamimage" data-src="" alt="" src="{{asset('image/member1.png')}}" />
                            <div class="memberdetail">
                                <h1 class="xs-text">animesh baral</h1>
                                <h1 class="extra-small-text1">front-end developer</h1>
                            </div>

                        </div>
                        <div class="col-md-3 member-container">
                            <img class="teamimage" data-src="" alt="" src="{{asset('image/member2.png')}}" />
                            <div class="memberdetail">
                                <h1 class="xs-text">animesh baral</h1>
                                <h1 class="extra-small-text1">front-end developer</h1>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>




    <!-- testimonial -->



    <section class="container-fluid  py-5 mb-4 teammember ">
        <div class="container">
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col-lg-5">
                    <h1 class="md-text text-center"> TESTIMONIALS</h1>
                    <p class=" extra-small-text text-center">Utilizing her exceptional experience and knowledge of
                        the luxury waterfront markets, Simone serves an extensive and elite worldwide client base. </p>
                </div>

                <div class="col-md-12 ">
                    <div class="row d-flex justify-content-center align-items-center py-2 gap-2">
                        <div class="d-flex flex-column col-md-3 customcard card">
                            <strong class="mb-2 text-success">
                                <img src="{{asset('image/dash.png')}}" alt="">

                            </strong>
                            <h3 class="mb-0 md-text">
                                proffesional $ personal
                            </h3>
                            <p class="sm-text mb-auto ">TWe wanted to take a moment to tell you what a pleasure it has
                                been to work
                                with you and your team at Al Asar. Your team professionalism has been by far beyond
                                industry Firms and
                                even ourexpectations.
                                It's a pleasure to work with a firm which not only understands and commodes customers
                                request but a</p>
                            <div class="d-flex  pt-2">
                                <img class=" " data-src="holder.js/200x250?theme=thumb" alt=""
                                    src="{{asset('image/blog.png')}}"
                                    style="height:10vh; width:80px ;border-radius:8px;" />
                                <div class="mx-4">
                                    <div class="md-text media-md-text ">Anil Thapa Magar</div>
                                    <div class="sm-text">software developer</div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex flex-column col-md-3 customcard card">
                            <strong class="mb-2 text-success">
                                <img src="{{asset('image/dash.png')}}" alt="">

                            </strong>
                            <h3 class="mb-0 md-text">
                                proffesional $ personal
                            </h3>
                            <p class="sm-text mb-auto ">TWe wanted to take a moment to tell you what a pleasure it has
                                been to work
                                with you and your team at Al Asar. Your team professionalism has been by far beyond
                                industry Firms and
                                even ourexpectations.
                                It's a pleasure to work with a firm which not only understands and commodes customers
                                request but a</p>
                            <div class="d-flex  pt-2">
                                <img class=" " data-src="holder.js/200x250?theme=thumb" alt=""
                                    src="{{asset('image/blog.png')}}"
                                    style="height:10vh; width:80px ;border-radius:8px;" />
                                <div class="mx-4">
                                    <div class="md-text media-md-text ">Anil Thapa Magar</div>
                                    <div class="sm-text">software developer</div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex flex-column col-md-3 customcard card">
                            <strong class="mb-2 text-success">
                                <img src="{{asset('image/dash.png')}}" alt="">

                            </strong>
                            <h3 class="mb-0 md-text">
                                proffesional $ personal
                            </h3>
                            <p class="sm-text mb-auto ">TWe wanted to take a moment to tell you what a pleasure it has
                                been to work
                                with you and your team at Al Asar. Your team professionalism has been by far beyond
                                industry Firms and
                                even ourexpectations.
                                It's a pleasure to work with a firm which not only understands and commodes customers
                                request but a</p>
                            <div class="d-flex  pt-2">
                                <img class=" " data-src="holder.js/200x250?theme=thumb" alt=""
                                    src="{{asset('image/blog.png')}}"
                                    style="height:10vh; width:80px ;border-radius:8px;" />
                                <div class="mx-4">
                                    <div class="md-text media-md-text ">Anil Thapa Magar</div>
                                    <div class="sm-text">software developer</div>
                                </div>
                            </div>

                        </div>

                    </div>



                </div>

            </div>

        </div>
    </section>






    <section class="container-fluid py-5 ">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <div class="col-lg-5">
                <h1 class="md-text text-center"> Frequently Asked Questions</h1>
                <p class=" extra-small-text text-center">Utilizing her exceptional experience and knowledge of
                    the luxury waterfront markets, Simone serves an extensive and elite worldwide client base. </p>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="accordion accordion-flush" id="accordionFlushExample1">
                            <div class="accordion-item my-2 py-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        <b> What types of items/properties do you offer for rent?</b>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        MWe offer a diverse range of rental items, including [list specific items, e.g.,
                                        cars, apartments, equipment]. For a complete list, please visit our
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item my-2 py-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        <b> How do I make a reservation?</b>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        You can make a reservation online through our website, by calling our customer
                                        service, or visiting our office. Visit our [reservation page/link] for more
                                        details.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item my-2 py-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        <b>What is the minimum rental period? </b>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        minimum rental period varies by item. For most items, the minimum is [e.g., one
                                        day, one week]. Check the specific item’s details on our website for exact
                                        information
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item my-2 py-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                        <b> Can I extend my rental period?</b>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        Yes, you can extend your rental period based on availability. Please contact us
                                        as soon as possible to arrange the extension and ensure availability.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item my-2 py-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false"
                                        aria-controls="flush-collapseFive">
                                        <b> What are your payment options?</b>
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        We accept [list payment options, e.g., credit/debit cards, PayPal, bank
                                        transfers]. Payments can be made online or at our office.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="accordion accordion-flush" id="accordionFlushExample2">
                            <div class="accordion-item my-2 py-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseSix" aria-expanded="false"
                                        aria-controls="flush-collapseSix">
                                        <b> How is the rental price determined?</b>
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        Rental prices are based on [e.g., the type of item, rental duration, season].
                                        Additional fees may apply for extra services or late returns.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item my-2 py-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                        aria-controls="flush-collapseSeven">
                                        <b>Are there any additional fees?</b>
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        Additional fees may include [e.g., late return fees, cleaning fees, security
                                        deposits]. All fees will be outlined in your rental agreement.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item my-2 py-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseEight" aria-expanded="false"
                                        aria-controls="flush-collapseEight">
                                        <b>Do you offer discounts or promotions?</b>
                                    </button>
                                </h2>
                                <div id="flush-collapseEight" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        Yes, we offer various discounts and promotions throughout the year. Check our
                                        [website/promotions page] for current offers.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item my-2 py-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseNine" aria-expanded="false"
                                        aria-controls="flush-collapseNine">
                                        <b>What is your cancellation policy?</b>
                                    </button>
                                </h2>
                                <div id="flush-collapseNine" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        Cancellations can be made up to [number] hours/days before the scheduled pickup
                                        time. Cancellation fees may apply. Refer to our [cancellation policy page] for
                                        details.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS and Popper.js CDN -->

















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