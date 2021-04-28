<x-layout>

    <div class="col-12 mt-5">
        <div class="row ms-5">
            <div class="col-lg-3 offset-md-6 ms-5 mb-5">
                <div class="card card-custom ms-5">
                    <div class="card-body text-center">
                        <p class="text-start">DETTAGLIO ARTICOLO</p>
                        <h2 class="card-title mb-4">{{ $announcement->title }}</h2>
                        @if ($announcement->img)
                            <img class="img-fluid img-thumbnail mt-2 mb-4" src="{{ Storage::url($announcement->img) }}"
                                alt="">
                        @else
                            <img src="/img/m4yCTV1rAYfcFhDJzGAFQC8J3jLJMBrlVNKDXHGv.jpg" alt="">
                        @endif
                        <p class="card-text">{{ $announcement->description }}</p>
                        <p class="card-text">{{ $announcement->price }}</p>
                <button class="btn btn-custom mb-2 mt-2">        <a href="{{ route('announcement.index', compact('announcement')) }}" class="link-cat">
                            <b>Torna agli annunci</b> </a></button>
                        <div class="text-start mt-3">{{$announcement->created_at->format('d-m-Y- H:i:s')}} / <i class="text-foot-card">FACEBOOK</i> /
                            <i class="text-foot-card">TWEET</i> / <i class="text-foot-card">EMAIL</i>
                        </div>
                        <hr class="text-danger">
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-layout>