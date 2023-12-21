<x-layout>

    <div class = "container-fluid">
        <div class="row justify-content-center">
            <div class="d-flex w-100 justify-content-center">

                <h1>{{__('ui.category')}}: {{__("ui.$category->name")  }}</h1>
            </div>
            @forelse ($category->announcements as $announcement)
            <div class="card m-5" style="width: 18rem;">
                <div class="card-body">
                    <img src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(300, 300): 'https://picsum.photos/200' }}"
                        class="card-img-top" alt="Foto del prodotto">
                    <h5 class="card-title">{{__('ui.title')}} {{ $announcement->name }}</h5>
                    <p class="card-text">{{__('ui.price')}} {{ $announcement->price }} €</p>
                    <p class="card-text">{{__('ui.description')}} {{ $announcement->description }}</p>
                    <p class="">{{ __('ui.user_name') }} {{ $announcement->user->name ?? '' }}</p>
                    <a href="{{ route('showAnnouncement', compact('announcement')) }}"
                        class="btn buttonCustom">{{ __('ui.show_more') }}</a>

                </div>
            </div>
                @empty 
                    <div class="col-12">
                        <p>{{__('ui.isNot_announcementCategory')}}</p>
                        <p>{{__('ui.public_one')}} <a class="btn buttonCustom" href="{{route('newAnnouncements')}}">{{__('ui.create_announcement')}}</a></p>
                    </div>
                @endforelse

        </div>
    </div>

</x-layout>