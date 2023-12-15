<x-layout>
    <div class=" d-flex justify-content-center">
        <h1 class="display-1">{{ __('ui.welcome') }}</h1>
    </div>
    <div class=" d-flex justify-content-center">
        <p>{{ __('ui.browseCategories') }}</p>
    </div>
    <x-main />
    <div class = "container">
        @if (session()->has('access.denied'))
            <div class="alert alert-danger">
                {{ session('access.denied') }}
            </div>
        @endif
        <div class="row justify-content-center">
            @foreach ($announcements as $announcement)
                <div class="card m-5" style="width: 18rem;">
                    <img src="https://picsum.photos/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $announcement->name }}</h5>
                        <p class="card-text">{{ $announcement->price }} $</p>
                        <p class="card-text">{{ $announcement->category->name }}</p>
                        <p class="card-text">{{ $announcement->description }}</p>
                        <a href="{{ route('showAnnouncement', compact('announcement')) }}" class="btn btn-primary">Vedi
                            di più</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
