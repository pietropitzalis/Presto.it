<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h3 class="mt-5">Registrati</h3>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3 mt-5">
                        <label for="name1" class="form-label">Nome utente</label>
                        <input type="text" name="name" class="form-control" id="name1" aria-describedby="Nome">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary mb-5">Registrati</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
