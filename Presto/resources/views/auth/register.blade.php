<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3 class="mt-5">{{__('ui.register')}}</h3>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3 mt-5">
                        <label for="name1" class="form-label">{{__('ui.user_name')}}</label>
                        <input type="text" name="name" class="form-control" id="name1" aria-describedby="Nome">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{__('ui.insert_email')}}</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('ui.password')}}</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">{{__('ui.confirm_password')}}</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-custom mb-5">{{__('ui.register')}}</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
