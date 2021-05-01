<x-layout>


    <div class="row mt-5">
        <div class="container col-12">
            <div class="col-md-6 offset-md-3 mt-5 text-center ">
                <h1>{{ __('ui.detail') }}</h1>
            </div>
        </div>
    </div>
    
    <div class="container mb-5">
      <button class="btn btn-custom"> <a
        href="{{ route('announcement.index')}}" class="link-cat">
        <i class="fs-2 fas fa-arrow-circle-left"></i> </a></button>
        <div class="row justify-space-between justify-content-center">
            <div class="col-md-8 shadow">
                <div class="row my-5">
                    <div class="col-6">
                        @if ($announcement->img)
                            <img src="{{ Storage::url($announcement->img) }}" class="img-fluid"
                                alt="{{ $announcement->title }}">
                        @else
                            <img src="https://via.placeholder.com/300" class="img-fluid"
                                alt="{{ $announcement->title }}">
                        @endif
                    </div>
                    <div class="col-6">
                        <h2><b>{{ $announcement->title }}</b></h2>
                        <p>{{ __('ui.created_on') }} {{ $announcement->created_at->format('d-m-Y- H:i:s') }}</p>
                        <h5>{{ __('ui.price') }} {{ $announcement->price }} $</h5>
                        <h6>{{ __('ui.created_by') }} {{ $announcement->user->name }}</h6>
                        <div>{{ __('ui.category') }}<a class="link-cat"
                                href="{{ route('announcement.cat', [$announcement->category->name, $announcement->category->id]) }}">
                                {{ $announcement->category->name }}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-layout>
