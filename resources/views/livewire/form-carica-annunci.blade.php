<div class="h-100 d-flex align-items-center justify-content-center">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <form class="w-50">
        <div class="mb-3">
            <label for="name" class="form-label">Nome Prodotto: </label>
            <input wire:model='name' type="text" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div>
            <label for="" class="mb-2">Categoria:</label>
            <select wire:model='category' class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">Fotocamere</option>
                <option value="2">FrancoBolli</option>
                <option value="3">Lampadari</option>
                <option value="4">Libri</option>
                <option value="5">Mobili</option>
                <option value="6">Monete</option>
                <option value="7">Quadri</option>
                <option value="8">Utensili</option>
                <option value="9">Vasi</option>
                <option value="10">Vinili</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label mt-3">Prezzo Prodotto: </label>
            <input wire:model='price' type="text" class="form-control" id="price" aria-describedby="emailHelp">
        </div>

        <label for="floatingTextarea2" class="mb-2">Descrizione:</label>
        <div class="form-floating">
            <textarea wire:model='description' class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                style="height: 100px"></textarea>
        </div>


        <a href="{{route('welcome')}}" class="btn btn-primary mt-3">Crea Annuncio</a>
    </form>

</div>
