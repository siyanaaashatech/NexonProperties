 
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
        


      </div>
    </div>

  </section>