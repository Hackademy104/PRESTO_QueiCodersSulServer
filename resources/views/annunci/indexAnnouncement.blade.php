<x-layout>

    <div class="d-flex flex-wrap">

        @foreach ($announcements as $announcement)
        
                <div class="card m-5" style="width: 18rem;">
                    <div class="card-body">
                        <img src="https://picsum.photos/300" class="card-img-top" alt="...">
                        <h5 class="card-title">{{ $announcement->name }}</h5>
                        <p class="card-text">{{ $announcement->price }}</p>
                        <p class="card-text">{{ $announcement->description }}</p>
                        <a class="my-2 border-top pt-2 border-dark card-link btn btn-success" href="{{route('categoryShow',['category=>$announcement->category'])}}">Categoria: {{ $announcement->category->name }} </a>
                        <p class="card-footer">Autore {{$announcement->user->name ?? ''}}</p>
                    </div>
                </div>
            
            @endforeach
            
        </div>

        <div class="d-flex justify-content-center">

            {{$announcements->links()}}
        </div>
    </x-layout>