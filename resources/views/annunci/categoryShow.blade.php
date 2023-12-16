<x-layout>

    <div class = "container-fluid">
        <div class="row justify-content-center">
            @forelse ($category->announcements as $announcement)
                <div class="card m-5" style="width: 18rem;">
                    <img src="https://picsum.photos/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $announcement->name }}</h5>
                        <p class="card-text">{{ $announcement->price }}</p>
                        <p class="card-text">{{ $announcement->category->name }}</p>
                        <p class="card-text">{{ $announcement->description }}</p>

                        <a href="{{route('showAnnouncement', compact('announcement'))}}" class="btn btn-primary">{{__('ui.show_more')}}</a>
                    </div>
                </div>
                @empty 
                    <div class="col-12">
                        <p>{{__('ui.isNot_announcementCategory')}}</p>
                        <p>{{__('ui.public_one')}} <a class="btn btn-primary" href="{{route('newAnnouncements')}}">{{__('ui.create_announcement')}}</a></p>
                    </div>
                @endforelse

        </div>
    </div>

</x-layout>