<nav id="nav" class="navbar navbar-expand-lg py-1 position-sticky pb-2">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('indexAnnouncement') }}">Annunci</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="categoriesDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item"
                                    href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                @auth
                    <li class="nav-item">
                        <a href ="{{ route('newAnnouncements') }}" class="nav-link">Crea Annuncio</a>
                    </li>
                    @if (Auth::user()->is_revisor)
                        <li class = "nav-item">
                            <a class="nav-link btn btn-outline-success position-relative"
                                href="{{ route('revisorIndex') }}">Zona Revisore</a>
                            <span class = "postion-absolute top-0 start-100 translate-middle-badge rounded-pill bg-danger">
                                {{ App\Models\Announcement::toBeRevisionedCount() }}
                                <span class="visually-hidden"> unread message</span>
                            </span>

                        </li>
                    @endif

                @endauth
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
