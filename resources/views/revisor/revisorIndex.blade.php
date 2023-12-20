<x-layout>
    <div class="container-fluid p-5 bg-gradient shadow mb-4">
        <div class="row">
            <h1 class="display-2">
                @if ($announcement_to_check)
                    {{ __('ui.is_announcement') }}
                @else
                    {{ __('ui.isnot_announcement') }}
                @endif
            </h1>
        </div>
    </div>

    @if ($announcement_to_check)
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div id="showCarousel" class="carousel slide " data-ride="carousel">
                        @if ($announcement_to_check->images)
                            <div class="carousel-inner img-carousel">
                                @foreach ($announcement_to_check->images as $image)
                                    <div class="carousel-item @if ($loop->first) active @endif">
                                        <img class="img-fluid p-3 rounded" src="{{ $image->getUrl(300, 300) }}"
                                            alt="First slide">
                                    </div>

                            </div>
                            <div class="col-6 ">
                                <div class="card-body">
                                    <h5 class="tc-accent">Revisione immagini</h5>
                                    <p>Adulti: <span class="{{ $image->adult }}"></span></p>
                                    <p>Satira: <span class="{{ $image->spoof }}"></span></p>
                                    <p>Medicina: <span class="{{ $image->medical }}"></span></p>
                                    <p>Violenza: <span class="{{ $image->violence }}"></span></p>
                                    <p>Contenuto Ammiccante: <span class="{{ $image->racy }}"></span></p>
                                </div>
                            </div>
                        @endforeach
                    @else
                    </div>
    @endif
    <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">{{ __('ui.previous') }}</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#showCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">{{ __('ui.next') }}</span>
    </button>
    </div>
    </div>

    <div class="col-12">
        <h5 class="card-title">{{ __('ui.title') }} {{ $announcement_to_check->title }}</h5>
        <p class="card-text">{{ __('ui.description_announcement') }} {{ $announcement_to_check->description }} $</p>
    </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-6">
            <form action="{{ route('acceptAnnouncement', ['announcement' => $announcement_to_check]) }}"
                method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-success shadow">{{ __('ui.accept_announcement') }}</button>
            </form>
        </div>
        <div class="col-12 col-md-6 text-end">
            <form action="{{ route('rejectAnnouncement', ['announcement' => $announcement_to_check]) }}"
                method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-danger shadow">{{ __('ui.refuse_announcement') }}</button>
            </form>
        </div>
    </div>
    </div>
    @endif
</x-layout>
