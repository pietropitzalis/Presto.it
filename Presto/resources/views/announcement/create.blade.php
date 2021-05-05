<x-layout>
    

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5 pt-5">
                @if ($errors->any())
        <div class="alert alert-danger mt-5">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                <h1 class="my-5 text-center  mt-5 pt-5">{{ __('ui.insert_announcement') }}</h1>


                {{-- <h3>DEBUG:: SECRET {{ $uniqueSecret }}</h3> --}}

                <form method="POST" action="{{ route('announcement.store') }}" enctype="multipart/form-data"
                class="py-4 my-4 px-4">
                
                @csrf
                <input type="hidden" name="uniqueSecret" value="{{ $uniqueSecret }}">

                <div class="mb-3">
                    <label for="title" class="form-label">{{ __('ui.title') }}</label>
                    <input type="text" name="title" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">{{ __('ui.select_category') }}</label>
                    <select name="category" class="mb-3">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ ucfirst($category->name) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">{{ __('ui.description') }}</label>
                    <textarea name="description" id="description" class="form-control rounded" cols="30"
                        rows="5"></textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">{{ __('ui.price') }}</label>
                    <input type="text" name="price" class="form-control" id="price">
                </div>
                <div class="mb-3">
                    

                    <label for="drophere" class="form-label">{{ __('ui.image') }}</label>

                    <div class="dropzone" name="img" id="drophere"></div>
                </div>

                <button type="submit" class="btn btn-custom tc-base">{{ __('ui.insert') }}</button>

            </form>
            </div>
        </div>
    </div>

</x-layout>
