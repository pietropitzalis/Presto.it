<x-layout>

    @if (session('access.denied.revisor.only'))

    <div class="alert alert-danger fs-1 text-center">
        Accesso non consentito STRONZO - solo per revisori
    </div>
        
    @endif
    
    
    
    
    
    <h1 class="col-12 text-center my-5"> <b> Benvenuto in Presto.it </b> </h1>

    <div class="col-12 text-center my-5">
        <h2>Esplora le nostre categorie</h2>
    </div>
    <div class="row justify-content-center">
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

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mt-5 mb-5">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner text-center">
                            <div class="carousel-item active">
                                <img src="{{Storage::url('img/deal1.png')}}" class="img-fluid" alt="">
                                <div class="carousel-caption d-none d-md-block text-img">
                                <h3>Cerca tra migliaia di annunci e inserisci i tuoi, ovunque tu sia.</h3>
                            </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{Storage::url('img/deal2.png')}}" class="img-fluid" alt="">
                                <div class="carousel-caption d-none d-md-block text-img">
                                <h3>Dai al tuo usato una seconda occasione: vendi quello che non usi più.</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{Storage::url('img/deal3.png')}}" class="img-fluid" alt="">
                                <div class="carousel-caption d-none d-md-block text-img">
                                <h3>Cerco l'oggetto più vicino a te e incontra il venditore.</h3>
                            </div>
                        </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 mt-5 mb-5">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button accordion fs-4" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Chi siamo
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show fs-4" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button accordion collapsed fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Cosa puoi fare su Presto.it
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse fs-4" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button accordion collapsed fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Compra e vendi in modo sicuro: le nostre policy
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </header>
</x-layout>
