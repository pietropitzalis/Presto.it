<x-layout>
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="row mt-5">
        <div class="container col-12">
            <div class="col-md-6 offset-md-3 my-5 text-center ">
                <h1>{{__('ui.announcement')}}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-space-between">
            @foreach ($announcements as $announcement)
            
        <div class="col-12 my-5 col-md-4 card card-custom shadow">
               <div class="row">
                    <div class="col-6">
                        <div class="row mb-2">
                            <div class="col-md-4">
                
                         
                       @foreach ($announcement->images as $image)
                      
                       <img src="{{$image->getUrl(300,150)}}" class="rounded float-wright" alt="">
                        
                       @endforeach
                    </div>
                </div>
                    </div>
                    <div class="col-6">
                        <h2><b>{{ $announcement->title }}</b></h2>
                        <p>{{__('ui.created_on')}} {{ $announcement->created_at->format('d-m-Y- H:i:s') }}</p>
                        <h5>{{__('ui.price')}} {{ $announcement->price }} $</h5>
                        <h6>{{__('ui.created_by')}} {{ $announcement->user->name }}</h6>
                        <div>{{__('ui.category')}}<a class="link-cat"
                                href="{{ route('announcement.cat', [$announcement->category->name, $announcement->category->id]) }}">
                                {{ $announcement->category->name }}</a></div>
                        <button class="btn btn-custom my-3"> <a
                                href="{{ route('announcement.show', compact('announcement')) }}" class="link-cat">
                                <b>{{__('ui.go_detail')}}</b> </a></button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-layout>
