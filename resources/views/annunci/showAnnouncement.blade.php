<x-layout>
    <div class = "container">
        <div class="row">
            <div class="col-12">
                <div id="showCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid p-3 rounded" src="https://picsum.photos/id/27/1200/200"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid p-3 rounded" src="https://picsum.photos/id/28/1200/200"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid p-3 rounded" src="https://picsum.photos/id/29/1200/200"
                                alt="Third slide">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <h5 class="card-title">Nome: {{ $announcement->name }}</h5>
            <p class="card-text">Prezzo: {{ $announcement->price }} $</p>
            <p class="card-text">Descrizione: {{ $announcement->description }}</p>
            <a class="my-2 border-top pt-2 border-dark card-link btn btn-success"
                href="{{ route('categoryShow', ['category' => $announcement->category]) }}">
                Categoria: {{ $announcement->category->name }} </a>
        </div>
    </div>
</x-layout>
