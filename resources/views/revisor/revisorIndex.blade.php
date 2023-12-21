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
                    <div class="col-12 d-flex flex-row card">
                        <div id="showCarousel" class="carousel slide" data-ride="carousel">
                            @if ($announcement_to_check->images)
                                <div class="carousel-inner img-carousel w-100">
                                    @foreach ($announcement_to_check->images as $image)
                                        <div class=" carousel-item @if ($loop->first) active @endif">
                                            <img class="mt-3 item-center img-fluid rounded" src="{{ $image->getUrl(300, 300) }}"
                                            alt="First slide">
                                            <div class="">
                                        
                                                <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev">
                                                    <span class="buttonPrevious carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">{{ __('ui.previous') }}</span>
                                                </button>
                                                <button class=" carousel-control-next" type="button" data-bs-target="#showCarousel" data-bs-slide="next">
                                                    <span class="buttonNext carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">{{ __('ui.next') }}</span>
                                                </button>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @else
                                </div>
                                @endif
                            <div class="col-12 mb-4">
                                <h5 class="card-title">{{ __('ui.title') }} {{ $announcement_to_check->name }}</h5>
                                <p class="card-text">{{ __('ui.description_announcement') }} {{ $announcement_to_check->description }} $</p>
                            
                            </div>
                            <div class="row w-100 justify-content-center mb-4">
                                <div class="col-12 col-md-6 d-flex justify-content-center">
                                    <form action="{{ route('acceptAnnouncement', ['announcement' => $announcement_to_check]) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success shadow">{{ __('ui.accept_announcement') }}</button>
                                    </form>
                                </div>
                                <div class="col-12 col-md-6 d-flex justify-content-center">
                                    <form action="{{ route('rejectAnnouncement', ['announcement' => $announcement_to_check]) }}"
                                        method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-danger shadow">{{ __('ui.refuse_announcement') }}</button>
                                    </form>
                                </div>
                        </div>
                            
                        </div>
                        <div class="col-3 mt-5 ms-5">
                            <div class=" p-3 card card-body">
                                <p>{{__('ui.Adulti')}} <span class="{{$image->adult}}"></span></p>
                                <p>{{__('ui.Satira')}} <span class="{{$image->spoof}}"></span></p>
                                <p>{{__('ui.Medicina')}} <span class="{{$image->medical}}"></span></p>
                                <p>{{__('ui.Violenza')}}: <span class="{{$image->violence}}"></span></p>
                                <p>{{__('ui.Contenuto')}} <span class="{{$image->racy}}"></span></p>
                            </div>
                        </div>
                </div>

        </div>
        </div>
        @endif
    </x-layout>
