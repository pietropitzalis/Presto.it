<x-layout>

    <form method="POST" action="{{route('announcement.store')}}" class="col-12 col-md-6 offset-md-3" enctype="multipart/form-data">
        @csrf
        <div class="row px-2">
            <div class="col-12 col-md-6 offset-md-2">
                <h1>Inserisci annuncio</h1>
            </div>
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" name="title" class="form-control" id="title" >
        </div>
        {{-- <div class="mb-3">
          <label for="exampleInputEmail2" class="form-label">Annuncio</label>
          <select name="announcement">
              @foreach ($announcements as $announcement)
              <option value="{{$announcement->id}}">{{$announcement->title}}</option>

              @endforeach

          </select>
        </div> --}}

          <label for="description">Descrizione</label>
          <textarea name="description" id="descr" cols="90" rows="5"></textarea>
          <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="file" name="img" class="form-control" id="image" >
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" name="price" class="form-control" id="price" >
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</x-layout>