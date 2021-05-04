<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Risultati per ricerca: {{$q}}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($announcements as $announcement)
    <div class="container my-5">
        <div class="col-12 col-md-7 card">
            <div class="row my-3 justify-content-center">
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
                    <p>Creato il: {{ $announcement->created_at->format('d-m-Y- H:i:s') }}</p>
                    <h4 class="text-truncate">{{ $announcement->description }}</h4>
                    <h5>{{ $announcement->price }} $</h5>
                    <p>Annuncio di: {{ $announcement->user->name }}</p>
                    <div> Categoria:<a
                            href="{{ route('announcement.cat', [$announcement->category->name, $announcement->category->id]) }}">
                            {{ $announcement->category->name }}</a></div>
                    <button class="btn btn-custom my-3"> <a
                            href="{{ route('announcement.show', compact('announcement')) }}"
                            class="link-cat"> <b>Vai al dettaglio</b> </a></button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
        </div>
    </div>
</x-layout>