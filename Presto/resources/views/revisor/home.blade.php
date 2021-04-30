<x-layout>

@if ($announcement)
    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Annuncio: #{{ $announcement->id }}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <h3>Utente</h3>
                            </div>
                            <div class="col-md-10">
                                {{ $announcement->user->id }}
                                {{ $announcement->user->name }}
                                {{ $announcement->user->mail }}
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h3>Titolo:</h3>
                            </div>
                            <div class="col-md-10">
                                {{ $announcement->title }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h3>Descrizione:</h3>
                            </div>
                            <div class="col-md-10">
                                {{ $announcement->description }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h3>Prezzo:</h3>
                            </div>
                            <div class="col-md-10">
                                {{ $announcement->price }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h3>Immagine:</h3>
                            </div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="https://via.placeholder.com/150" alt="{{ $announcement->title }}">
                                    </div>
                                    <div class="col-md-8">... ... ...</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="https://via.placeholder.com/150" alt="{{ $announcement->title }}">
                                    </div>
                                    <div class="col-md-8">... ... ...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-6 ">
                <form action="{{route('revisor.reject', $announcement->id)}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Rifiuta</button>
                    </form>
            </div>
            <div class="col-md-6 text-end">
                <form action="{{route('revisor.accept', $announcement->id)}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Accetta</button>
                    </form>
                
            </div>
        </div>
    </div>
    @else

    <div class="col-12 text-center bg-danger mt-3 text-light">
        <h1>Non ci sono annunci da revisionare</h1>
    </div>
    @endif








</x-layout>
