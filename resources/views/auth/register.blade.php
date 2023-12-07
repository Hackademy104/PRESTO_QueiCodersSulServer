<x-layout>

    <h2 class="text-center display-3 my-4">Registrati!</h2>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-7">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="/register">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Utente</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>