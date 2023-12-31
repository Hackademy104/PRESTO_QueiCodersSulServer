<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            @forelse ($announcements as $announcement)
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
            @empty
                <div class="col-12 mt-4">
                    <div class="alert alert-warning py-3 shadow">
                        <p class="lead">{{ __('ui.isNot_announcement') }}</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center">

        {{ $announcements->links() }}
    </div>


</x-layout>
