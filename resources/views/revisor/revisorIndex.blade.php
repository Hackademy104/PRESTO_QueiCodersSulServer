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
                <div class="col-12">
                    <div id="showCarousel" class="carousel slide" data-ride="carousel">
                        @if ($announcement_to_check->images)
                            <div class="carousel-inner img-carousel">
                                @foreach ($announcement_to_check->images as $image)
                                    <div class="carousel-item @if($loop->first)active @endif">
                                        <img class="img-fluid p-3 rounded" src="{{Storage::url($image->path)}}"
                                            alt="First slide">
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="carousel-item">
                                <img class="img-fluid p-3 rounded" src="https://picsum.photos/id/28/1200/200"
                                    alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid p-3 rounded" src="https://picsum.photos/id/29/1200/200"
                                    alt="Third slide">
                            </div>
                        </div>
                        @endif
                        <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">{{__('ui.previous')}}</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">{{__('ui.next')}}</span>
                        </button>
                    </div>
                </div>

                <div class="col-12">
                    <h5 class="card-title">{{__('ui.title')}} {{ $announcement_to_check->title }}</h5>
                    <p class="card-text">{{__('ui.description_announcement')}} {{ $announcement_to_check->description }} $</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6">
                    <form action="{{ route('acceptAnnouncement', ['announcement' => $announcement_to_check]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success shadow">{{__('ui.accept_announcement')}}</button>
                    </form>
                </div>
                <div class="col-12 col-md-6 text-end">
                    <form action="{{ route('rejectAnnouncement', ['announcement' => $announcement_to_check]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger shadow">{{__('ui.refuse_announcement')}}</button>
                    </form>
                </div>
            </div>
        </div>
    @endif
</x-layout>
