<nav id="nav" class="navbar navbar-expand-lg py-1 position-sticky pb-2 mt-1 border-bottom border-secondary-subtle">
    
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="mt-2 collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('indexAnnouncement') }}">{{__('ui.announcements')}}</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="categoriesDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('ui.categories')}}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item"
                                    href="{{ route('categoryShow', compact('category')) }}">{{__("ui.$category->name")  }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                
                
                @auth
                <li class="nav-item">
                    <a href ="{{ route('newAnnouncements') }}" class="nav-link">{{__('ui.create_announcement')}}</a>
                </li>

                    
                    @endauth
                    <li class="nav-item">
                        <a class = "nav-link" href="{{ route('diventaRevisore') }}">{{__('ui.auditor')}}</a>
                    </li>
            </ul>
            <form class="d-flex" action="{{route('searchAnnouncements')}}" method="GET">
                <input name='searched' class="form-control me-2" type="search" placeholder={{__('ui.search')}} aria-label="Search">
                <button class="btn buttonCustom" type="submit">{{__('ui.search')}}</button>
            </form>
        </div>
    </div>
    
</nav>
