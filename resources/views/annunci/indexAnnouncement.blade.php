<x-layout>

    <div class = "container">
        <div class="row">
            @foreach ($announcements as $announcement)
            <div class="col-12 col-md-4 my-4"></div>
                <div class="card m-5" style="width: 18rem;">
                    <img src="https://picsum.photos/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $announcement->name }}</h5>
                        <p class="card-text">{{ $announcement->price }}</p>
                        <p class="card-text">{{ $announcement->description }}</p>
                        <a class="my-2 border-top pt-2 border-dark card-link btn btn-success" href="{{route('categoryShow',['category=>$announcement->category'])}}">Categoria: {{ $announcement->category->name }} </a>
                        <p class="card-footer">Autore {{$announcement->user->name ?? ''}}</p>
                    </div>
                </div>
            </div>
                @endforeach
{{$announcements->links()}}
        </div>
    </div>

</x-layout>