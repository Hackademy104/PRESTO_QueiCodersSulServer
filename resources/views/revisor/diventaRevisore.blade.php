<x-layout>
     @if (session()->has('message2'))
            <div class="mt-2 alert alert-success">
                {{ session('message2') }}
            </div>
        @endif
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <h1 class="text-center display-2">{{__('ui.become_auditor')}}</h1>
                <p class="text-center shadow p-3 mb-2 rounded bg-white">{{__('ui.auditor_description')}}</p>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row ">
            <div class="col-12 d-flex justify-content-center">

                <form class="fs-6 dw-normal d-flex flex-column gap-2" method="POST" action={{route('becomeRevisor')}}>
                    @csrf
                    <label for="id">{{__('ui.insert_name')}}</label>
                    <input class=" border-0 rounded" name="name" value="{{Auth::user()->name}}" id="id" type="text">
                    <label for="id2">{{__('ui.auditor_reason')}}</label>
                    <textarea class=" border-0 rounded" name="motivation" id="id2" cols="50" rows="8"></textarea>
                    <div class="">

                        <button class="opacity-75 w-25 bg-success  border-0 rounded" type="submit">{{__('ui.button_becomeAuditor')}}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</x-layout>