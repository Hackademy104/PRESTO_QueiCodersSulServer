<div class="container-fluid d-flex gap-2 flex-column box-header px-5  z-1 top-0">

    <div id = "header-custom" class="row justify-content-between ">
        <div class="col-3">
            {{-- inserimento bandiere per cambiamento linguaggio --}}
        </div>
        <div class="col-6 d-flex justify-content-center">
            <a href="{{ route('welcome') }}">
                <img class="logo-img" src="/media/PRESTO.png" alt="img">
            </a>
        </div>
        <div class="col-3 d-flex flex-column justify-content-center gap-2">
            @guest
                <div>
                    <a class="register" href="/register"><i
                            class="fa-regular fa-user fa-lg logo-register"></i>Registrati</a>
                </div>
                <div>
                    <a class="login" href="/login"><i class="fa-solid fa-user fa-lg logo-login"></i>Login</a>
                </div>
            @endguest

            @auth
                <div class="btn-group dropdown">
                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <form method="POST" action="/logout">
                                @csrf
                                <button type="submit" class="nav-link">Logout</button>
                            </form>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link" href="">Profilo</a>
                        </li>
                    </ul>
                </div>
            @endauth
        </div>



    </div>
</div>
</div>
</div>
</div>
