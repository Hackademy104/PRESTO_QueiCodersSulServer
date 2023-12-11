<x-layout>

    <div class = "container">
        <div class="row">
            @forelse ($category->announcements as $announcement)
                <div class="card m-5" style="width: 18rem;">
                    <img src="https://picsum.photos/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $announcement->name }}</h5>
                        <p class="card-text">{{ $announcement->price }}</p>
                        <p class="card-text">{{ $announcement->category->name }}</p>
                        <p class="card-text">{{ $announcement->description }}</p>

                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                @empty 
                    <div class="col-12">
                        <p>Non sono presenti annunci per questa categoria!</p>
                        <p>Pubblicane uno: <a class="btn btn-primary" href="{{route('newAnnouncements')}}">Crea Annuncio</a></p>
                    </div>
                @endforelse

        </div>
    </div>

</x-layout>