<section class="blog py-4 mt-4">
  <div class="container">
    <div class="title ">
      <div class="xs-text1 dashline">Trusted Real Estate Care</div>
      <div class="lg-text">Latest BLOG for you</div>
    </div>
    <div class="row d-flex  justify-content-center">
      @foreach ($services as $service)
      <div class="col-md-4 my-2">
      <div class="card">
        <img class="img-fluid p-2" src="{{asset('image/blog.png')}}" alt=" cap p">
        <div class="card-body">
        <h5 class="md-text">{{$service->title}}</h5>
        <p class="sm-text">
          {{ strlen($service->description) > 150 ? substr($service->description, 0, 150) . '...' : $service->description }}
        </p>
        <div class="btn-buttonyellow">Read more</div>
        </div>
      </div>
      </div>
    @endforeach
    </div>
  </div>

</section>