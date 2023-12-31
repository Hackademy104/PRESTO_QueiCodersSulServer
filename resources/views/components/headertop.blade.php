<div class="container-fluid d-flex gap-2 flex-column box-header px-5  z-1 top-0">

    <div id = "header-custom" class="row justify-content-between ">
        <div class="col-3 d-flex flex-column justify-content-center align-items-end">
            <div>
                <x-_locale lang="en"/>
                <x-_locale lang="it"/>
                <x-_locale lang="es"/>
            </div>

        </div>
        <div class="col-6 d-flex justify-content-center">
            <a href="{{ route('welcome') }}">
                <img class="logo-img" src="/media/PRESTO.png" alt="img">
            </a>
        </div>
        <div class=" col-3 d-flex flex-column justify-content-center gap-2">
            @guest
                <div>
                    <a class="register" href="/register"><i
                            class="fa-regular fa-user fa-lg logo-register"></i>{{__('ui.register')}}</a>
                </div>
                <div>
                    <a class="login" href="/login"><i class="fa-solid fa-user fa-lg logo-login"></i>{{__('ui.login')}}</a>
                </div>
            @endguest

            @auth
                <div class="btn-group dropdown">
                    <button type="button" class="btn buttonCustom dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('ui.greeting')}} {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <form method="POST" action="/logout">
                                @csrf
                                <button type="submit" class="nav-link">{{__('ui.logout')}}</button>
                            </form>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link" href="">{{__('ui.profile')}}</a>
                        </li>
                        @if (Auth::user()->is_revisor)
                        <li class = "dropdown-item">
                            <a class="nav-link btn"
                            href="{{ route('revisorIndex') }}">{{__('ui.Auditor_Zone')}}
                                        <span class="translate-middle badge rounded-pill bg-danger">
                                            {{ App\Models\Announcement::toBeRevisionedCount() }}
                                            <span class="visually-hidden">{{__('ui.Unread_Message')}}</span>
                                        </span></a>
        
                                        
                                        
                                    </li>
                            @endif
                    </ul>
                </div>
            @endauth
        </div>



    </div>
</div>

