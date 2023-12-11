<x-layout>
    <x-main />
    <div class = "container">
        <div class="row">
            @foreach ($announcements as $announcement)
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $announcement->name }}</h5>
                        <p class="card-text">{{ $announcement->price }}</p>
                        <p class="card-text">{{ $announcement->category }}</p>
                        <p class="card-text">{{ $announcement->description }}</p>

                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-layout>
