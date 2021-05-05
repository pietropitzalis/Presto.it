<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 my-5 pt-5">
                <h2 class="my-5">{{__('ui.login')}}</h2>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{__('ui.email')}}</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('ui.password')}}</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-custom mb-5">{{__('ui.login')}}</button>
                </form>
            </div>
            <div class="col-12 col-md-6 my-auto pt-5">
                <img src="/img/hand.png" class="img-fluid mt-5" alt="">
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row my-5">
            
            <div class="col-12 col-md-6 my-auto">
                <img src="/img/hand2.png" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-md-6 my-5">
                <h2 class="my-5">Non ti sei ancora iscritto? Che aspetti?</h2>
                <button class="btn btn-custom"><a class="link-cat" href="{{route('register')}}">Iscriviti ora</a></button>
            </div>
        </div>
    </div>

</x-layout>
