import Dropzone from 'Dropzone';

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
                <h1 class="my-5 text-center">{{__('ui.insert_announcement')}}</h1>

                
                <h3>DEBUG:: SECRET {{$uniqueSecret}}</h3>
                <form method="POST" action="{{ route('announcement.store') }}" enctype="multipart/form-data">
                    @csrf 
                    <input type="hidden" name="uniqueSecret" class="form-control" value="{{$uniqueSecret}}">


                    <div class="mb-4">
                        <label for="title" class="form-label">{{__('ui.title')}}</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="my-3">
                        <label for="exampleInputEmail2" class="form-label me-3">{{__('ui.select_category')}}</label>
    
    
                        </select>
                        <form action="{{ route('announcement.store') }}" method="post">
                            @csrf
                            <select name="category">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
    
                                @endforeach
                                
                            </select>
                        
                    </div>

                    
                        <div class="mb-3 form-group row">
                            <label for="images" class="form-label ">{{__('ui.image')}}</label>
                            
                                <div action="{{ route('announcement.images.upload')}}"  id="drophere" class="dropzone">
                                    
                                </div>
                           
                        </div>




                        <div class="mb-3">
                            <label for="price" class="form-label">{{__('ui.price')}}</label>
                            <input type="text" name="price" class="form-control" id="price">
                        </div>
                        <label for="description">{{__('ui.description')}}</label>
                        <textarea name="description" id="descr" cols="102" rows="5"></textarea>
                        <button class="btn btn-warning my-3" type="submit">{{__('ui.insert')}}</button>
                </form>
            </div>
        </div>
    </div>

    
</x-layout>
