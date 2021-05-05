<x-layout>
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if (count($announcements) >= 1)



           

            
                
                @foreach ($announcements as $announcement)
                    <div class="container">
                        <div class="row">
                            <div class="text-center my-5 pt-5 ann">
                                <h1>Annunci in <b>{{ $category->name }}</b></h1>
                                <h3>Categoria: {{ $category->name }}</h3>
                            </div>
                            <div>
                            <button class="btn btn-custom col-1"><a class="link-cat" href="{{ URL::previous() }}"><i
                                class="fs-1 fas fa-arrow-circle-left"></a></i></button>
                            </div>
                            <div class="col-6 offset-md-3 card card-custom hover shadow">
                                <div class="row my-3 mx-auto">
                                    <div class="col-6">
                        
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
                                    <div class="col-6">
                                        <h2><b>{{ $announcement->title }}</b></h2>
                                        <p>{{__('ui.created_on')}} {{ $announcement->created_at->format('d-m-Y- H:i:s') }}</p>
                                        <h4 class="text-truncate">{{ $announcement->description }}</h4>
                                        <h5>{{__('ui.price')}} {{ $announcement->price }} $</h5>
                                        <h6>{{__('ui.created_by')}} {{ $announcement->user->name }}</h6>
                                        <div>{{__('ui.category')}}<a class="link-cat"
                                                href="{{ route('announcement.cat', [$announcement->category->name, $announcement->category->id]) }}">
                                                {{ $announcement->category->name }}</a></div>
                                        <button class="btn btn-custom my-3"> <a
                                                href="{{ route('announcement.show', compact('announcement')) }}"
                                                class="link-cat">
                                                <b>{{__('ui.go_detail')}}</b> </a></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            @else


                <div class="container text-center">
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-md-6 my-5 pt-5">
                                <h1><b>{{__('ui.category')}} {{$category->name}}</b></h1>
                                <button class="text-center my-5 btn btn-custom">
                                    <a class="link-cat" href="{{ route('announcement.index') }}">
                                        {{__('ui.search_other')}}</a>
                                </button>
                            </div>
                            <div class="col-md-6 my-5 pt-5">
                                <img src="/img/404.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    @endif

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            {{ $announcements->links() }}
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

</x-layout>
