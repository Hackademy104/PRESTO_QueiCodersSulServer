<x-layout>
    <div class = "container-fluid p-5 bg-gradient bg-succes shadow mb-4">
        <div class ="row">
            <h1 class = "display-2">
                {{ $announcement_to_check ? 'Ecco l\' annuncio da revisionare' : 'Non ci sono annunci da revisionare' }}
            </h1>

        </div>
    </div>
    @if ($announcement_to_check)
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


                <h5 class = "card-title">Titolo: {{ $announcement_to_check->title }}</h5>
                <p class="card-text">Descrizione: {{ $announcement_to_check->description }} $</p>
            </div>

            <div class =  "row">
                <div class="col-12 col-md-6">
                    <form action="{{ route('acceptAnnouncement', ['announcement' => $announcement_to_check]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button type = "submit" class = "btn btn-success shadow">Accetta</button>

                    </form>
                </div>
                <div class  ="col-12 col-md-6 text-end">
                    <form action="{{ route('rejectAnnouncement', ['announcement' => $announcement_to_check]) }}"
                        method = "POST">
                        @csrf
                        @method('PATCH')
                        <button type = "submit" class = "btn btn-danger shadow">Rifiuta</button>

                    </form>
                </div>

            </div>
        </div>
    @endif
</x-layout>
