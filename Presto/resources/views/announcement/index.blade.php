<x-layout>
   
    <div class="container">
    <div class="row">
        <div class="container col-12 mt-5 pt-5">
            <div class="col-md-6 offset-md-3 my-3 text-center mt-5 pt-5">
                @if (count($announcements) >= 1)

                <div class="container flash">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <h1>{{__('ui.announcement')}}</h1>
                <div class="container h-100">

                    <div class="d-flex justify-content-center h-100 mt-5">
                        <form action="{{ route('announcement.search') }}" method="GET">
                        <div class="searchbar">
                            
                                <input type="text" name="q" placeholder="Ricerca..." id="form1" class="search_input" />
                                <label class="form-label" for="form1"></label>
                                <button type="submit" class="search_icon" >
                                    <i class="fas fa-search"></i>
                                </button>
                            
                        </div>
                    </form>
                    </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center mb-5">
            @foreach ($announcements as $announcement)
            
        <div class="col-12 my-5 col-md-3 mx-5 card card-custom shadow  ">
               <div class="row">
                    <div class="col-12 mt-3 px-auto my-5">
                        
                            
                        @foreach ($announcement->images as $image)
                        
                            <img src="{{$image->getUrl(300,150)}}" class="rounded float-wright img-fluid" alt="">
                         
                            @break
                       @endforeach
                    
               
                    </div>
                    <div class="row">
                        <div class="col-12">
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
            </div>
            @endforeach
        </div>
    </div>
</div>

@else
<div class="container text-center">
    <div class="col-12">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="col-12 text-center bg-danger mt-3 my-5">
                    <b class="fs-1">{{__('ui.404_1')}}</b>
                    
                </div>
                <button class="btn btn-custom my5"> <a class="link-cat" href="{{ route('homepage')}}">{{__('ui.404_sub')}}</a></button>
            </div>
            
            <div class="col-md-6">
                <img src="/img/404.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>


@endif
</x-layout>
