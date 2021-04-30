<x-layout>

    @if (session('access.denied.revisor.only'))

        <div class="alert alert-danger fs-1 text-center">
            Accesso non consentito-solo per revisori
        </div>

    @endif

    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 justify-content-center">
                <div class="col-12 text-center">
                    <h1 class="title nav-link">Presto.it</h1>
                    <h2 class="lead subTitle">Un mondo di offerte e spedizioni alla velocità della luce!</h2>
                    <div class="container">
                        <div class="col-12">
                        <div class="row justify-content-center">
                                    <div class="col-6 cat">
                                        <form action="{{ route('announcement.search') }}" method="GET">
                                            <input type="text" name="q" placeholder="Ricerca..." id="form1"
                                                class="form-control"/>
                                            <label class="form-label" for="form1"></label>
                                            <button type="submit" class="btn btn-custom">
                                                <i class="fas fa-search me-3"></i>Cerca nelle categorie
                                            </button>
                                        </form>            
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>


    </header>
    <h6 class="subsubTitle mt-5 text-center"> Vuoi vendere in fretta e senza sforzi?   <button class="ms-4 btn btn-custom"><a class="link-cat fs-4"
        href="{{ route('announcement.create') }}"><i class="fs-5 me-2 far fa-plus-square"></i> Inserisci un annuncio!</a></button></h6>
    {{-- SEZIONE CATEGORIE --}}
    <div class="row justify-content-center">
        <h2 class="text-center mt-5">Esplora le categorie:</h2>
        @foreach ($categories as $category)
            <div class="col-12 col-md-3 text-center ms-5">
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title mt-5 text-center my-4"><i class="fs-4 fas fa-store"></i>
                            {{ $category->name }}</h5>
                        <button class="btn btn-custom text-center"> <a class="link-cat"
                                href="{{ route('announcement.cat', [$category->name, $category->id]) }}">Esplora</a></button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner mt-5">
            <div class="carousel-item active carousel-custom">
                <div class="mb-3">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-4">
                            <img src="/img/giphy.gif" alt="..." class="img-fluid">
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card-body mt-5">
                                <h5 class="card-title mt-5">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="mb-3">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-4">
                            <img src="img/tenor.gif" alt="..." class="img-fluid">
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card-body mt-5">
                                <h5 class="card-title mt-5">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="mb-3">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-4">
                            <img src="/img/giphy2.gif" alt="..." class="img-fluid">
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card-body mt-5">
                                <h5 class="card-title mt-5">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</x-layout>
