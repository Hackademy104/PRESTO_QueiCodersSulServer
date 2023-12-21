<x-layout>
    <div class="video_welcome">
        <div class="container-fluid container-video h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="FontDirty titolo-welcome text-white display-1">{{ __('ui.welcome') }}</h1>
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
    <div class = "container-fluid">
        @if (session()->has('access.denied'))
            <div class="alert alert-danger">
                {{ session('access.denied') }}
            </div>
        @endif
        <div class="row justify-content-center">
            @foreach ($announcements as $announcement)
            <div class="card m-5" style="width: 18rem;">
                <div class="card-body">
                    <img src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(300, 300): 'https://picsum.photos/200' }}"
                        class="card-img-top" alt="Foto del prodotto">
                    <h5 class="card-title">{{__('ui.title')}} {{ $announcement->name }}</h5>
                    <p class="card-text">{{__('ui.price')}} {{ $announcement->price }} €</p>
                    <p class="card-text">{{__('ui.description')}} {{ $announcement->description }}</p>
                    <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}" class="my-3 border-dark card-link text-danger-emphasis link-underline link-underline-opacity-0">{{ __('ui.category') }}
                        {{-- <a class="text-danger-emphasis link-underline link-underline-opacity-0" ></a> --}}
                    </a>
                    <p class="">{{ __('ui.user_name') }} {{ $announcement->user->name ?? '' }}</p>
                    <a href="{{ route('showAnnouncement', compact('announcement')) }}"
                        class="btn buttonCustom">{{ __('ui.show_more') }}</a>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
