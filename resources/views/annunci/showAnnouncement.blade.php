<x-layout>
    <div class = "container">
        <div class="row d-flex flex-nowrap">
            <div class="col-4">
                <div id="showCarousel" class="carousel slide" data-ride="carousel">
                    @if ($announcement->images)
                        <div class="carousel-inner img-carousel">
                            @foreach ($announcement->images as $image)
                            <div class=" carousel-item @if ($loop->first) active @endif">
                                <img class="ms-5 mt-3 item-center img-fluid rounded" src="{{ $image->getUrl(300, 300) }}"
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
            </div>

        </div>
        <div class="ms-custom">

            <h5 class="card-title">{{ __('ui.product_name') }}: {{ $announcement->name }}</h5>
            <p class="card-text">{{ __('ui.product_price') }}: {{ $announcement->price }} $</p>
            <p class="card-text">{{ __('ui.description') }}: {{ $announcement->description }}</p>
            <a class="my-3 border-dark card-link text-danger-emphasis link-underline link-underline-opacity-0"
            href="{{ route('categoryShow', ['category' => $announcement->category]) }}">
            {{ __('ui.category') }}</a>
        </div>
    </div>
    </div>
</x-layout>
