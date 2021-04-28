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
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    @foreach ($announcements as $announcement)
                    <div class="card">
                    @if ($announcement->img)
                        <img src="{{Storage::url($announcement->img)}}" alt="{{$announcement->title}}">
                        @else
                       <img src="https://via.placeholder.com/150" alt="{{$announcement->title}}"> 
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
                           
                        </div>
                      </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout>





