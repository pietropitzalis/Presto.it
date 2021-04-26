<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}">Presto.it</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          @guest
            <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('register')}}">Registrati</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('announcement.index')}}">Annunci</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('announcement.create')}}">Inserisci annuncio</a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="#">I miei annunci</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profilo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('announcement.create')}}">Inserisci annuncio</a>
            </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ciao,{{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu ms-4 contatti mt-2" aria-labelledby="navbarDropdown">
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