
  <section class="container-fuild ">
    <div class="container gapbetweensection">
    <div class="title ">
      <div class="xs-text1 dashline">Trusted Real Estate Care</div>
      <div class="lg-text">Latest BLOG for you</div>
    </div>

    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        @foreach ($services as $service)
          <div class="swiper-slide">
            <div class="card">
              <img class="img-fluid" src="{{ asset('image/blog.png') }}" alt="cap p">
              <div class="card-body">
                <h5>{{ $service->title }}</h5>
                <p>
                  {{ strlen($service->description) > 150 ? substr($service->description, 0, 150) . '...' : $service->description }}
                </p>
                <a href="#" class="btn-buttonyellow">Read more</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>

    </div>
    </div>
  </section>

 