<x-layout>
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="col-12 col-md-6 offset-md-3 my-5 text-center">
            <h1>Annunci</h1>
        </div>
    </div>

    @foreach ($announcements as $announcement)
        <div class="container my-5">
            <div class="col-12 card">
                <div class="row my-3 justify-content-center">
                    <div class="col-3">
                        @if ($announcement->img)
                            <img src="{{ Storage::url($announcement->img) }}" class="img-fluid"
                                alt="{{ $announcement->title }}">
                        @else
                            <img src="https://via.placeholder.com/150" alt="{{ $announcement->title }}">
                        @endif
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
                                href="{{ route('announcement.show', compact('announcement')) }}" class="link-cat">
                                <b>Vai al dettaglio</b> </a></button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</x-layout>
