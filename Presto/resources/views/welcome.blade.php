<x-layout>

    @if (session('access.denied.revisor.only'))

        <div class="alert alert-danger fs-1 text-center my-5">
            Accesso non consentito-solo per revisori
        </div>

    @endif

    <header class="masthead ">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-4 col-md-6 text-start mt-5">
                    <h1 class="title nav-link mt-5">Presto<span style="color:#CD253F">.</span>it</h1>
                    <h2 class="lead subTitle"> {{ __('ui.welcome') }}</h2>
                    <div class="d-flex justify-content-start mt-5 search">
                        <form action="{{ route('announcement.search') }}" method="GET">
                        <div class="searchbar">
                            
                                <input type="text" name="q" placeholder="Ricerca..." id="form1" class="search_input" />
                                <label class="form-label " for="form1"></label>
                                <button type="submit" class="search_icon" >
                                    <i class="fas fa-search"></i>
                                </button>
                            
                        </div>
                    </form>
                    </div>
                </div>
            </div>


    </header>

    <div class="container h-100">
    </div>
    <div class="container">
        <h6 class="tre fs-1 mt-5 text-center">{{ __('ui.slogan') }}<button class="ms-4 btn btn-custom"><a
                    class="link-cat fs-4" href="{{ route('announcement.create') }}"><i
                        class="fs-5 me-2 far fa-plus-square"></i>{{ __('ui.announcement') }}</a></button></h6>
        {{-- SEZIONE CATEGORIE --}}
        <div class="row justify-content-center my-5">
            <h2 class="text-center my-5">{{ __('ui.explore_category') }}</h2>
            @foreach ($categories as $category)
                <div class="col-12 col-md-3 text-center ms-5 ">
                    <div class=" card mt-4 hover">
                        <div class="card-body">
                            <h5 class="card-title text-center my-4"><i class="fas fa-store-alt"></i>
                                {{ $category->name }}</h5>
                            <button class="btn btn-custom text-center"> <a class="link-cat"
                                    href="{{ route('announcement.cat', [$category->name, $category->id]) }}">{{ __('ui.explore') }}</a></button>
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
                                    <h5 class="card-title mt-5">{{ __('ui.carousel1') }}</h5>
                                    <p class="card-text">{{ __('ui.carousel1_text') }}</p>
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
                                    <h5 class="card-title mt-5">{{ __('ui.carousel2') }}</h5>
                                    <p class="card-text">{{ __('ui.carousel2_text') }}</p>
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
                                    <h5 class="card-title mt-5">{{ __('ui.carousel3') }}</h5>
                                    <p class="card-text">{{ __('ui.carousel3_text') }}</p>
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
    </div>
</x-layout>
