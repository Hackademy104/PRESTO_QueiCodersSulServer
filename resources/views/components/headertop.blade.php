<div class="container">
    <div class="row justify-content-between">
        <div class="col-3">

        </div>
        <div class="col-6 d-flex justify-content-center">
            <a href="">
                <img class="logo-img" src="media/PRESTO.png" alt="img">
            </a>
        </div>
        <div class="col-3 d-flex gap-2">
            @guest
            <ul>
                <li class="my-3">
                <a class="nav-link" href="{{route('register')}}">Registrati</a>
                </li>
                <li class="">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
            </ul>
            @endguest

            @auth
            <div class="btn-group dropdown">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Ciao
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

