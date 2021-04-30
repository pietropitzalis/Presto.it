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

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3 mt-5">
                <h1 class="my-5 text-center">Inserisci annuncio</h1>

                <form method="POST" action="{{ route('announcement.store') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="my-3">
                        <label for="exampleInputEmail2" class="form-label me-3">Seleziona la categoria</label>
    
    
                        </select>
                        <form action="{{ route('announcement.store') }}" method="post">
                            @csrf
                            <select name="category">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
    
                                @endforeach
    
                            </select>
                    </div>

                    
                <div class="mb-3">
                    <label for="image" class="form-label">Immagine</label>
                    <input type="file" name="img" class="form-control" id="image">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" name="price" class="form-control" id="price">
                </div>
                <label for="description">Descrizione</label>
                <textarea name="description" id="descr" cols="102" rows="5"></textarea>
                <button class="btn btn-warning my-3" type="submit">Inserisci</button>
            </form>
            </div>
        </div>
    </div>

    
</x-layout>
