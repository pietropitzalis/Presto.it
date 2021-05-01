<x-layout>

    <div class="container my-5">
        <div class="row my-5">
            <div class="col-md-6 offset-md-3 my-5">
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
        </div>
    </div>

</x-layout>
