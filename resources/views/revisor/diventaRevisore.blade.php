<x-layout>
     @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <h1 class="text-center display-1">Diventa revisore del nostro sito</h1>
                <p class="text-center">Potrai accettare o rifiutare annunci creati dagli utenti</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <form class="d-flex flex-column gap-3" method="POST" action={{route('becomeRevisor')}}>
                    @csrf
                    <label for="id">Inserisci il tuo nome:</label>
                    <input name="name" value="{{Auth::user()->name}}" id="id" type="text">
                    <label for="id2">Perché vuoi diventare revisore?</label>
                    <textarea name="motivation" id="id2" cols="20" rows="10"></textarea>
                    <button type="submit">Richiedi di diventare revisore</button>
                </form>

            </div>
        </div>
    </div>

</x-layout>