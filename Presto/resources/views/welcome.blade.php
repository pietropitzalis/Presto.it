<x-layout>

    @if (session('access.denied.revisor.only'))

    <div class="alert alert-danger fs-1 text-center">
        Accesso non consentito STRONZO - solo per revisori
    </div>
        
    @endif
    
    <header class="masthead">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
              <h1 class="">Presto.it</h1>
              <p class="lead ">Perchè tenere la roba che non utilizzi più?Mettila in vedita con noi!</p>
              <button class="btn btn-custom"><a class="link-cat" href="{{route('announcement.create')}}">Inserisci annuncio</a></button>
              <form action="{{route('announcement.search')}}" method="GET">
                <input type="text" name="q" placeholder="Ricerca...">
                <button type="submit">Cerca</button>
              </form>
            </div>
          </div>
        </div>
      </header>

    {{-- SEZIONE CATEGORIE --}}
    <div class="row justify-content-center">
        <h2 class="text-center mt-5">Le nostre categorie:</h2>
        @foreach ($categories as $category)
            <div class="col-12 col-md-2 text-center ms-5">
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title text-center my-4"><i class="fs-4 fas fa-store"></i> {{ $category->name }}</h5>
                        <button class="btn btn-custom text-center"> <a class="link-cat" href="{{route('announcement.cat',[
                            $category->name,
                            $category->id
                          ]) }}">Cerca in {{ $category->name }}</a></button>
                    </div>
                </div>
            </div>
        @endforeach
    </div> 

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner mt-5">
          <div class="carousel-item active carousel-custom">
            <div class="card mb-3">
                <div class="row align-items-center">
                  <div class="col-12 col-md-6">
                    <img src="{{Storage::url('img/giphy.gif')}}" alt="..." class="img-fluid">
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="card mb-3">
                <div class="row align-items-center">
                  <div class="col-12 col-md-6">
                    <img src="{{Storage::url('img/tenor.gif')}}" alt="..." class="img-fluid">
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="card mb-3">
                <div class="row align-items-center">
                  <div class="col-12 col-md-6">
                    <img src="{{Storage::url('img/giphy.gif')}}" alt="..." class="img-fluid">
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
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
   
</x-layout>
