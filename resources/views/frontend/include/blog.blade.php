<section class="blog py-4 mt-4">
    <div class="container">
    <div class="title ">
          <div class="xs-text1 dashline">Trusted Real Estate Care</div>
          <div class="lg-text">Latest BLOG for you</div>
        </div>
      <div class="row d-flex  justify-content-center">
        @foreach ($services as $service )
        <div class="col-md-4 my-2">
          <div class="card">
            <img class="img-fluid p-2" src="{{asset('image/blog.png')}}" alt=" cap p">
            <div class="card-body">
              <h5 class="md-text">{{$service -> title}}</h5>
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
              <div class="btn-buttonyellow">{{$service -> title}}</div>
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
      @endforeach
    </div>
  </section>