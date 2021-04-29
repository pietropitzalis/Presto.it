<x-layout>
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
   
      <form method="POST" action="{{route('announcement.update',compact('announcement'))}}" class="col-12 col-md-6 offset-md-3" enctype="multipart/form-data">
          @csrf
          <div class="row px-2">
              <div class="col-12 col-md-6 offset-md-2">
                  <h1>Modifica annuncio</h1>
              </div>
          </div>
          <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" value="{{$announcement->title}}" >
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail2" class="form-label">Annuncio</label>
            
  
            </select>
            <form action="{{route('announcement.update' )}}" method="post">
              @csrf
              <select name="category">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
  
                @endforeach
                
              </select>
            
          </div>
  
            <label for="description">Descrizione</label>
            <textarea name="description" id="descr" cols="90" rows="5">{{$announcement->description}}</textarea>
            <div class="mb-3">
              <label for="image" class="form-label">Immagine</label>
              <input type="file" name="img" class="form-control" id="image" >
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Prezzo</label>
              <input type="text" name="price" class="form-control" id="price" value="{{$announcement->price}}" >
            </div>
            <button class="btn btn-warning " type="submit">Modifica</button>
        </form>
  </x-layout>