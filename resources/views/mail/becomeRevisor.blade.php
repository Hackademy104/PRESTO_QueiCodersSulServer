
    <div class="container">
        <div class="row">
            <h1>Un utente vuole lavorare con noi</h1>
            <h2>Ecco i dati</h2>
            <p>Nome: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>Motivazione: {{$motivation}}</p>
            <p>Se vuoi renderlo revisore clicca qui: </p>
            <a href="{{ route('makeRevisor', compact('user')) }}">Rendi revisore</a>
        </div>
    </div>
