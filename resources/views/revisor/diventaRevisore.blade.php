<x-layout>
     @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <h1 class="text-center display-1">{{__('ui.become_auditor')}}</h1>
                <p class="text-center">{{__('ui.auditor_description')}}</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <form class="d-flex flex-column gap-3" method="POST" action={{route('becomeRevisor')}}>
                    @csrf
                    <label for="id">{{__('ui.insert_name')}}</label>
                    <input name="name" value="{{Auth::user()->name}}" id="id" type="text">
                    <label for="id2">{{__('ui.auditor_reason')}}</label>
                    <textarea name="motivation" id="id2" cols="20" rows="10"></textarea>
                    <button type="submit">{{__('ui.button_becomeAuditor')}}</button>
                </form>

            </div>
        </div>
    </div>

</x-layout>