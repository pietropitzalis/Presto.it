<x-layout>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-4 mt-5 mb-5">
    
                    <h3 class="mb-5 mt-5">Vuoi diventare un revisore e lavorare con noi? Compila il form!</h3>
                    <form method="POST" action="{{ route('contatti.submit') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="inputuser" class="col-sm-4 col-form-label">Inserisci il tuo nome</label>
                            <div class="col-sm-10">
                                <input name="user" type="user" class="form-control" id="inputuser" placeholder="Nome">
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <label for="inputmessage" class="col-sm-4 col-form-label">Convinci il team di Presto.it a sceglierti come revisore</label>
                            <div class="col-sm-10">
                                <input name="message" type="message" class="form-control" id="inputmessage" placeholder="Messaggio">
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <label for="inputemail" class="col-sm-4 col-form-label">Inserisci la tua email</label>
                            <div class="col-sm-10">
                                <input name="email" type="email" class="form-control" id="inputemail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-custom">Invia</button>
                            </div>
                        </div>
                    </form>
                    <div class="form-group row mt-3">
                        @if (session('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                            
                        @endif
                    </div>
                </div>
            </div>
        </div>

</x-layout>