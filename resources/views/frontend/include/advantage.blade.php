 {{--
  <section class="advantage py-4">
    <div class="container ">
      <div class="title py-2">
        <div class="xs-text1 dashline">Trusted Real estate Care</div>
        <div class="lg-text">company Advantage </div>
      </div>

      <div class="row gap-5 py-2">
      @foreach ($services as $service )
        <div class="col-md-2 d-flex flex-column align-items-center justify-content-center">
          <img src="{{asset('image/happy.png')}}" alt="" srcset="">
          <div class="md-text text-center">{{$service->subtitle}}</div>
          <div class="sm-text text-center">{{strlen($service->description) >40 ? substr($service->description , 0 ,40) .'...': $service->description }} </div>

        </div>
       

        @endforeach
        
--}}

        <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trending Games Carousel</title>
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <style>
    /* Your existing styles here */
    .clear {
      clear: both;
    }
    img {
      max-width: 100%;
      border: 0px;
    }
    ul,
    ol {
      list-style: none;
    }
    a {
      text-decoration: none;
      color: inherit;
      outline: none;
      transition: all 0.4s ease-in-out;
      -webkit-transition: all 0.4s ease-in-out;
    }
    a:focus,
    a:active,
    a:visited,
    a:hover {
      text-decoration: none;
      outline: none;
    }
    a:hover {
      color: #e73700;
    }
    h2 {
      margin-bottom: 48px;
      padding-bottom: 16px;
      font-size: 20px;
      line-height: 28px;
      font-weight: 700;
      position: relative;
      text-transform: capitalize;
    }
    h3 {
      margin: 0 0 10px;
      font-size: 28px;
      line-height: 36px;
    }
    button {
      outline: none !important;
    }
    /* Title style */
    .line-title {
      position: relative;
      width: 400px;
    }
    .line-title::before,
    .line-title::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      height: 4px;
      border-radius: 2px;
    }
    .line-title::before {
      width: 100%;
      background: #f2f2f2;
    }
    .line-title::after {
      width: 32px;
      background: #e73700;
    }
    /* Middle section CSS */
    .game-section {
      padding: 60px 50px;
    }
    .game-section .owl-stage {
      margin: 15px 0;
      display: flex;
      display: -webkit-flex;
    }
    .game-section .item {
      margin: 0 15px 60px;
      width: 320px;
      height: 400px;
      display: flex;
      display: -webkit-flex;
      align-items: flex-end;
      -webkit-align-items: flex-end;
      background: #343434 no-repeat center center / cover;
      border-radius: 16px;
      overflow: hidden;
      position: relative;
      transition: all 0.4s ease-in-out;
      -webkit-transition: all 0.4s ease-in-out;
      cursor: pointer;
    }
    .game-section .item.active {
      width: 500px;
      box-shadow: 12px 40px 40px rgba(0, 0, 0, 0.25);
      -webkit-box-shadow: 12px 40px 40px rgba(0, 0, 0, 0.25);
    }
    .game-section .item:after {
      content: "";
      display: block;
      position: absolute;
      height: 100%;
      width: 100%;
      left: 0;
      top: 0;
      background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1));
    }
    .game-section .item-desc {
      padding: 0 24px 12px;
      color: #fff;
      position: relative;
      z-index: 1;
      overflow: hidden;
      transform: translateY(calc(100% - 54px));
      -webkit-transform: translateY(calc(100% - 54px));
      transition: all 0.4s ease-in-out;
      -webkit-transition: all 0.4s ease-in-out;
    }
    .game-section .item.active .item-desc {
      transform: none;
      -webkit-transform: none;
    }
    .game-section .item-desc p {
      opacity: 0;
      -webkit-transform: translateY(32px);
      transform: translateY(32px);
      transition: all 0.4s ease-in-out 0.2s;
      -webkit-transition: all 0.4s ease-in-out 0.2s;
    }
    .game-section .item.active .item-desc p {
      opacity: 1;
      -webkit-transform: translateY(0);
      transform: translateY(0);
    }
    .game-section .owl-theme.custom-carousel .owl-dots {
      margin-top: -20px;
      position: relative;
      z-index: 5;
    }
    /* Responsive Design */
    @media (min-width: 992px) and (max-width: 1199px) {
      h2 {
        margin-bottom: 32px;
      }
      h3 {
        margin: 0 0 8px;
        font-size: 24px;
        line-height: 32px;
      }
      .game-section {
        padding: 50px 30px;
      }
      .game-section .item {
        margin: 0 12px 60px;
        width: 260px;
        height: 360px;
      }
      .game-section .item.active {
        width: 400px;
      }
      .game-section .item-desc {
        transform: translateY(calc(100% - 46px));
        -webkit-transform: translateY(calc(100% - 46px));
      }
    }
    @media (min-width: 768px) and (max-width: 991px) {
      h2 {
        margin-bottom: 32px;
      }
      h3 {
        margin: 0 0 8px;
        font-size: 24px;
        line-height: 32px;
      }
      .line-title {
        width: 330px;
      }
      .game-section {
        padding: 50px 30px 40px;
      }
      .game-section .item {
        margin: 0 12px 60px;
        width: 240px;
        height: 330px;
      }
      .game-section .item.active {
        width: 360px;
      }
      .game-section .item-desc {
        transform: translateY(calc(100% - 42px));
        -webkit-transform: translateY(calc(100% - 42px));
      }
    }
    @media (max-width: 767px) {
      body {
        font-size: 14px;
      }
      h2 {
        margin-bottom: 20px;
      }
      h3 {
        margin: 0 0 8px;
        font-size: 19px;
        line-height: 24px;
      }
      .line-title {
        width: 250px;
      }
      .game-section {
        padding: 30px 15px 20px;
      }
      .game-section .item {
        margin: 0 10px 40px;
        width: 200px;
        height: 280px;
      }
      .game-section .item.active {
        width: 270px;
        box-shadow: 6px 10px 10px rgba(0, 0, 0, 0.25);
        -webkit-box-shadow: 6px 10px 10px rgba(0, 0, 0, 0.25);
      }
      .game-section .item-desc {
        padding: 0 14px 5px;
        transform: translateY(calc(100% - 42px));
        -webkit-transform: translateY(calc(100% - 42px));
      }
    }
  </style>
</head>








<body>
  <section class="game-section container-fluid">
    <div class="container">
    <div class="title py-2">
        <div class="xs-text1 dashline">Trusted Real estate Care</div>
        <div class="lg-text">company Advantage </div>
      </div>
    <div class="owl-carousel custom-carousel owl-theme">

  @foreach ($services as $index => $service )
  <div class="item {{ $index === 0 ? 'active' : '' }}" style="background-image: url(https://www.yudiz.com/codepen/expandable-animated-card-slider/dota-2.jpg);">
        <div class="item-desc">
          <h3>{{$service->title}}</h3>
          <p>Dota 2 is a multiplayer online battle arena by Valve. The game is a sequel to Defense of the Ancients, which was a community-created mod for Blizzard Entertainment's Warcraft III.</p>
        </div>
      </div>
  
  @endforeach
    </div>
    </div>
  </section>

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script>
    $(document).ready(function () {
      // Initialize Owl Carousel
      $(".custom-carousel").owlCarousel({
        autoWidth: true,
        loop: true,
        margin:3, // Adjust margin if needed
      });

      // Toggle active class on click
      $(".custom-carousel .item").click(function () {
        $(".custom-carousel .item").not($(this)).removeClass("active");
        $(this).toggleClass("active");
      });
    });
  </script>
</body>

</html>
