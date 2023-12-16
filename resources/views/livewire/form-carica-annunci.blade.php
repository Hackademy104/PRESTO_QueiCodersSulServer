<div class="h-100 d-flex flex-column align-items-center justify-content-center">
    <div class="w-100">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <h2 class="display-2 text-center mt-5">{{__('ui.create_your_announcement')}}</h2>

    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <form wire:submit.prevent="store" class="w-50" method="POST" wire:submit="store">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">{{__('ui.product_name')}} </label>
            <input wire:model='name' type="text" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div>

            <label for="" class="mb-2">{{__('ui.category')}}</label>
            <select wire:model='category' class="form-select" aria-label="Default select example">
                <option selected>{{__('ui.category_list')}}</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label mt-3">{{__('ui.product_price')}}</label>
            <input wire:model='price' type="text" class="form-control" id="price" aria-describedby="emailHelp">
        </div>

        <label for="floatingTextarea2" class="mb-2">{{__('ui.description')}}</label>
        <div class="form-floating">
            <textarea wire:model='description' class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                style="height: 100px"></textarea>
        </div>


        <button type="submit" class="btn btn-primary mt-3">{{__('ui.button_create')}}</button>
    </form>


</div>
