<x-layout>

    <h2 class="text-center display-3 my-4">{{__('ui.login')}}</h2>

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
                <form method="POST" action="/login">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">{{__('ui.user_email')}}</label>
                        <input name="email" type="email" class="form-control" id="email"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">{{__('ui.user_password')}}</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn buttonCustom">{{__('ui.login_button')}}</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>
