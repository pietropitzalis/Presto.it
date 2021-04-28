<x-layout>
    <div class="container">
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <h1>Annunci pubblicati</h1>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <h3>Categoria: {{$category->name}}</h3>
                    @foreach ($announcements as $announcement)
                    <div class="card">
                    @if ($announcement->img)
                        <img src="{{Storage::url($announcement->img)}}" alt="{{$announcement->title}}">
                        @else
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/300" alt="{{$announcement->title}}"></a>  
                    @endif
                        <div class="card-body">
                            <h3>{{$announcement->title}}</h3>
                            <p>{{$announcement->description}}</p>
                            <p>{{$announcement->price}}</p>
                            <p>Annuncio di: {{$announcement->user->name}}</p>
                            <p>Creato il: {{$announcement->created_at->format('d-m-Y- H:i:s')}}</p>
                            <div> Categoria:<a href="{{route('announcement.cat', [
                                $announcement->category->name,
                                $announcement->category->id
                            ])}}"> 
                            {{$announcement->category->name}}</a></div>
                            <a href="{{ route('announcement.show', compact('announcement')) }}"
                            class="btn btn-secondary mb-2 mt-2"> <b>Vai al dettaglio</b> </a>
                        </div>
                      </div>
                    @endforeach

                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8">
                            {{$announcements->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>





