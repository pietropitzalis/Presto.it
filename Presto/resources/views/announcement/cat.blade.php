<x-layout>
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if (count($announcements) >= 1)


            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <h1>Annunci in <b>{{ $category->name }}</b></h1>
                </div>
                <div class="row">
                    <div class="col-12 col-md-3">
                        <h3>Categoria: {{ $category->name }}</h3>
                        @foreach ($announcements as $announcement)
                            <div class="card">
                                @if ($announcement->img)
                                    <img src="{{ Storage::url($announcement->img) }}"
                                        alt="{{ $announcement->title }}">
                                @else
                                    <a href="https://placeholder.com"><img src="https://via.placeholder.com/300"
                                            alt="{{ $announcement->title }}"></a>
                                @endif
                                <div class="card-body">
                                    <h3>{{ $announcement->title }}</h3>
                                    <p>{{ $announcement->description }}</p>
                                    <p>{{ $announcement->price }}</p>
                                    <p>Annuncio di: {{ $announcement->user->name }}</p>
                                    <p>Creato il: {{ $announcement->created_at->format('d-m-Y- H:i:s') }}</p>
                                    <div> Categoria: <a
                                            href="{{ route('announcement.cat', [$announcement->category->name, $announcement->category->id]) }}">
                                            {{ $announcement->category->name }}</a></div>
                                    <button class="btn btn-custom"> <a
                                            href="{{ route('announcement.show', compact('announcement')) }}"
                                            class="link-cat">Vai al dettaglio</a></button>
                                </div>
                            </div>
                        @endforeach

                    @else

                        <div class="col-12 text-center my-5 text-danger">
                            <h1><b>Ops,non ci sono annunci qui!</b></h1>
                            <button class="text-center my-5 btn btn-custom"> <a class="link-cat"
                                    href="{{ route('announcement.index') }}">
                                    <h1>Cerca altro nelle categorie</h1>
                                </a></button>
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
