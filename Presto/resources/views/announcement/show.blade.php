<x-layout>


    <div class="row mt-5">
        <div class="container col-12">
            <div class="col-md-6 offset-md-3 mt-5 text-center ">
                <h1>{{ __('ui.detail') }}</h1>
            </div>
        </div>
    </div>
    
    <div class="container mb-5">
      <button class="btn btn-custom"> <a
        href="{{ route('announcement.index')}}" class="link-cat">
        <i class="fs-2 fas fa-arrow-circle-left"></i> </a></button>
        <div class="row justify-space-between justify-content-center">
            <div class="col-md-8 shadow">
                <div class="row my-5">
                    <div class="col-8">
                        
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner active">

                            @foreach ($announcement->images as $image) 
                                <div class="carousel-item  {{$loop->iteration ==1 ? 'active' :''}}" >
                                    
                                    <img src="{{$image->getUrl(300,150)}}" class="rounded d-block w-100 float-wright" alt="">

                                </div>
                                
                              @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                          <div class="row mt-3">
                            <div class="col-6">
                              <h5>{{ __('ui.price') }} {{ $announcement->price }} $</h5>
                          <h6>{{ __('ui.created_by') }} {{ $announcement->user->name }}</h6>
                          <p>{{ __('ui.created_on') }} {{ $announcement->created_at->format('d-m-Y- H:i:s') }}</p>
                            </div>
                          </div>
                          
                        
                        
                    </div>
                    <div class="col-4">
                        <h2><b>{{ $announcement->title }}</b></h2>
                        <p>{{ __('ui.description') }} {{ $announcement->description }}</p>
                        <div>{{ __('ui.category') }}<a class="link-cat"
                                href="{{ route('announcement.cat', [$announcement->category->name, $announcement->category->id]) }}">
                                {{ $announcement->category->name }}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-layout>
