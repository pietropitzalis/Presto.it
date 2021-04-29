<x-layout>

    @foreach ($announcements as $announcement)


    <h3 class="text-center my-5">I tuoi annunci</h3>

    <div class="container my-5">
        <div class="col-1 ms-5 mb-3">
            <button class="btn btn-custom"><a class="link-cat" href="{{ URL::previous() }}"><i
                        class="fs-1 fas fa-arrow-circle-left"></a></i></button>
        </div>
        <div class="col-12 card">
            <div class="row my-5 justify-content-center">
                <div class="col-3">
                    @if ($announcement->img)
                        <img class="img-fluid mt-2 mb-4" src="{{ Storage::url($announcement->img) }}" alt="">
                    @else
                        <img src="/img/m4yCTV1rAYfcFhDJzGAFQC8J3jLJMBrlVNKDXHGv.jpg" alt="">
                    @endif
                </div>
                <div class="col-6">
                    <h2 class="card-title mb-4">{{ $announcement->title }}</h2>

                    <h3 class="card-text text-truncate">{{ $announcement->description }}</h3>
                    <h5 class="card-text">{{ $announcement->price }}</h5>
                    <div class="text-start mt-3">Creato il: {{ $announcement->created_at->format('d-m-Y- H:i:s') }}
                    </div>
                    <button class="btn btn-custom my-3"> <a
                        href="{{ route('announcement.edit', compact('announcement')) }}"
                        class="link-cat"> <b>Modifca</b> </a></button>
                </div>
            </div>
        </div>
    </div>
        
    @endforeach
</x-layout>