<x-layout>
    <div class="video_welcome">
        <div class="container-fluid container-video h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="titolo-welcome text-white display-1">{{ __('ui.welcome') }}</h1>
                </div>
            </div>
        </div>
        <video id="video-background" autoplay muted loop>
            <source src="{{ asset('media/video_presto.mp4') }}" type="video/mp4">
            Il tuo browser non supporta la riproduzione di video.
        </video>
    </div>

    <div class="mt-5 display-5 d-flex justify-content-center">
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
                    <img src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(300, 300): 'https://picsum.photos/200' }}"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $announcement->name }}</h5>
                        <p class="card-text">{{ $announcement->price }} €</p>
                        <p class="card-text">{{ $announcement->category->name }}</p>
                        <p class="card-text">{{ $announcement->description }}</p>
                        <a href="{{ route('showAnnouncement', compact('announcement')) }}" class="btn buttonCustom btn-primary">Vedi
                            di più</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
