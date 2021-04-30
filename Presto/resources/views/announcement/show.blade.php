<x-layout>


    <h3 class="text-center my-5">DETTAGLIO ARTICOLO</h3>

            
            <div class="container my-5">
                <button class="btn btn-custom"><a class="link-cat" href="{{ URL::previous() }}"><i
                    class="fs-1 fas fa-arrow-circle-left"></a></i></button>
                <div class="col-6 offset-md-3 card card-custom shadow">
                    <div class="row my-3 mx-auto">
                        <div class="col-6 ">
                            <div id="carouselExampleSlidesOnly" class="carousel slide carousRemBorder" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="https://via.placeholder.com/300" class="img-fluid">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="https://via.placeholder.com/300" class="img-fluid">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="https://via.placeholder.com/300" class="img-fluid">
                                  </div>
                                </div>
                              </div>
                            {{-- @if ($announcement->img)
                                <img src="{{ Storage::url($announcement->img) }}" class="img-fluid"
                                    alt="{{ $announcement->title }}">
                            @else
                                <img src="https://via.placeholder.com/300" class="img-fluid"
                                    alt="{{ $announcement->title }}">
                            @endif --}}
                        </div>
                        <div class="col-6">
                            <h2><b>{{ $announcement->title }}</b></h2>
                            <p>Creato il: {{ $announcement->created_at->format('d-m-Y- H:i:s') }}</p>
                            <h4 class="text-truncate">{{ $announcement->description }}</h4>
                            <h5>{{ $announcement->price }} $</h5>
                            <h6>Annuncio di: {{ $announcement->user->name }}</h6>
                            <h6> Categoria:<a class="link-cat"
                                    href="{{ route('announcement.cat', [$announcement->category->name, $announcement->category->id]) }}">
                                    {{ $announcement->category->name }}</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        
  

</x-layout>
