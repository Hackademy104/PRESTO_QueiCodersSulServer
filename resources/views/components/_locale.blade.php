<form class="d-inline m-1" action="{{route('set_language_locale', $lang)}}" method="POST">
    @csrf
    <button class="flags" type="submit">
        <img class="flags" src="{{asset('vendor/blade-flags/language-' . $lang . '.svg')}}" alt="">
    </button>
</form>