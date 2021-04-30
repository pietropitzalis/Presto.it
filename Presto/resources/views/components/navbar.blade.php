<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid ms-5">
      <a class="navbar-brand nav-link ms-5 fs-1" href="{{route('homepage')}}"><i class="fs-3 ms-5 fas fa-bullhorn"></i> <b> Presto.it </b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      
        <li class="nav-item flag-icon-it mx-2 mt-4">@include('components._locale',['lang'=>'it','nation'=>'it'])AAA</li>
        <li class="nav-item flag-icon-en mx-2 mt-4">@include('components._locale',['lang'=>'en','nation'=>'gb'])AAA</li>
        <li class="nav-item flag-icon-es mx-2 mt-4">@include('components._locale',['lang'=>'es','nation'=>'es'])AAA</li>
      </ul>
      
          
          @guest
            <li class="nav-item ms-3">
              <a class="nav-link tre fs-5" href="{{route('login')}}"><i class="fs-5 me-2 fas fa-sign-in-alt"></i>{{__('ui.login')}}</a>
            </li>
            <li class="nav-item ms-3">
              <a class="nav-link tre fs-5 " href="{{route('register')}}"><i class="fs-5 me-2 fas fa-clipboard-check"></i>{{__('ui.register')}}</a>
            </li>
            <li class="nav-item ms-3">
              <a class="nav-link tre fs-5 " href="{{route('announcement.index')}}"><i class="fas fs-5 me-2 fa-pager"></i>{{__('ui.announcements')}}</a>
            </li>
            <li class="nav-item ms-3">
              <a class="nav-link tre ins-ann  fs-5" href="{{route('announcement.create')}}"><i class="fs-5 me-2 far fa-plus-square"></i>{{__('ui.insert_ad')}}</a>
            </li>
            @else
            <li class="nav-item ms-3">
              <a class="nav-link login fs-5" href="{{route('announcement.index')}}"><i class="fas me-2 fs-5 fa-archive"></i>{{__('ui.announcements')}}</a>
            </li>
            <li class="nav-item ms-3">
              <a class="nav-link tre fs-5 " href="#"><i class="fas me-2 fs-5 fa-user-cog"></i>{{__('ui.profile')}} </a>
            </li>
            <li class="nav-item ms-3">
              <a class="nav-link tre fs-5" href="{{route('announcement.create')}}"><i class="fs-5 me-2 far fa-plus-square"></i>{{__('ui.insert_ad')}}</a>
            </li>
            @if (Auth::user()->is_revisor)
            <li class="nav-item ms-3">
              <a class="nav-link tre fs-5" href="{{route('revisor.home')}}"><i class="fs-5 me-2 far fa-plus-square"></i> <span>{{\App\Models\Announcement::toBeRevisionedCount()}}</span> </a>
            </li>
            @endif



              
          <li class="nav-item ms-3 dropdown me-5">
            <a class="nav-link tre fs-5 dropdown-toggle me-5 " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fs-5 me-2 fa-user-check"></i>{{__('ui.hello')}}{{Auth::user()->name}} 
            </a>
            <ul class="dropdown-menu  mt-2 log" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-center" href="" onclick="event.preventDefault();
                    document.getElementById('logout').submit();">Logout</a></li>
              <form action="{{ route('logout') }}" method="POST" id="logout">
                @csrf
              </form>
            </ul>
        {{-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
       @endguest
      </div>
    </div>
  </nav>