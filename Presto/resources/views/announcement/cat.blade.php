<x-layout>
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if (count($announcements) >= 1)



            <div class="text-center my-5">
                <h1>Annunci in <b>{{ $category->name }}</b></h1>
                <h3>Categoria: {{ $category->name }}</h3>
            </div>

            <button class="btn btn-custom"><a class="link-cat" href="{{ URL::previous() }}"><i
                class="fs-1 fas fa-arrow-circle-left"></a></i></button>
                
                @foreach ($announcements as $announcement)
                    <div class="container my-5">
                        <div class="col-6 offset-md-3 card card-custom shadow">
                            <div class="row my-3 mx-auto">
                                <div class="col-6 ">
                                    @if ($announcement->img)
                                        <img src="{{ Storage::url($announcement->img) }}" class="img-fluid"
                                            alt="{{ $announcement->title }}">
                                    @else
                                        <img src="https://via.placeholder.com/300" class="img-fluid"
                                            alt="{{ $announcement->title }}">
                                    @endif
                                </div>
                                <div class="col-6">
                                    <h2><b>{{ $announcement->title }}</b></h2>
                                    <p>Creato il: {{ $announcement->created_at->format('d-m-Y- H:i:s') }}</p>
                                    <h4 class="text-truncate">{{ $announcement->description }}</h4>
                                    <h5>{{ $announcement->price }} $</h5>
                                    <h6>Annuncio di: {{ $announcement->user->name }}</h6>
                                    <div> Categoria:<a class="link-cat"
                                            href="{{ route('announcement.cat', [$announcement->category->name, $announcement->category->id]) }}">
                                            {{ $announcement->category->name }}</a></div>
                                    <button class="btn btn-custom my-3"> <a
                                            href="{{ route('announcement.show', compact('announcement')) }}"
                                            class="link-cat">
                                            <b>Vai al dettaglio</b> </a></button>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            @else


                <div class="container text-center">
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1><b>Ops,non ci sono annunci qui!</b></h1>
                                <button class="text-center my-5 btn btn-custom">
                                    <a class="link-cat" href="{{ route('announcement.index') }}">
                                        Cerca altro nelle categorie</a>
                                </button>
                            </div>
                            <div class="col-md-6">
                                <img src="/img/404.jpg" alt="">
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
