<x-layout>

    @if ($announcement)


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12  mt-5 pt-5">
                    <div class="card  mt-5 pt-5">
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

                            <hr>

                            <div class="row">
                                <div class="col-md-2">
                                    <h3>Immagini:</h3>
                                </div>
                                <div class="col-md-10">
                                    <div class="row mb-2">
                                        <div class="col-md-8">
                                            @foreach ($announcement->images as $image)

                                                <img src="{{ $image->getUrl(300, 150) }}" class="rounded float-wright"
                                                    alt="">

                                                <div class="col-md-8">
                                                    Adult:{{ $image->adult }}
                                                    Spoof:{{ $image->spoof }}
                                                    Medical:{{ $image->medical }}
                                                    Violence:{{ $image->violence }}
                                                    Racy:{{ $image->racy }}
                                                    {{ $image->id }} <br>
                                                    {{-- {{ $image->file }} <br>
                                                    {{ Storage::url($image->file) }} <br> --}}
                                                    <b>Etichette</b>
                                                    <br>
                                                    <ul>
                                                        @if ($image->labels)
                                                            @foreach ($image->labels as $label)
                                                                <li>{{ $label }}</li>
                                                            @endforeach
                                                        @endif
                                                    </ul>
                                                </div>
                                                @endforeach
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">

            <div class="col-md-4 text-end  pt-5">
                <form action="{{ route('revisor.reject', $announcement->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Rifiuta</button>
                </form>
            </div>
            <div class="col-md-4 text-end pt-5">
                <form action="{{ route('revisor.accept', $announcement->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Accetta</button>
                </form>

            </div>
        </div>
    </div>

    @else
        <div class="container text-center">
            <div class="col-12  pt-5">
                <div class="row align-items-center">
                    <div class="col-md-6  mt-5 pt-5">
                        <div class="col-12 text-center bg-danger mt-3 my-5">
                            <b class="fs-1">{{__('ui.404_revisor')}}</b>
                        </div>
                    </div>
                    <div class="col-md-6  mt-5 pt-5">
                        <img src="/img/404.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>


    @endif



</x-layout>
