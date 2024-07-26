<div>
    <form wire:submit="save" class="form-control mb-4">
        <label>
            <input type="text" class="input input-bordered w-full mt-4" placeholder="Ссылка на товар"
                   wire:model.live="link"/>
        </label>

        {{--        <button type="submit" class="btn btn-md w-full">--}}
        {{--            Найти по ссылке--}}
        {{--        </button>--}}

{{--        @isset($this->wishlist)--}}
{{--            <div class="">--}}
{{--                <x-card :item="$this->wishlist"/>--}}
{{--            </div>--}}
{{--        @endisset--}}

        <div class="mt-4">
            <label>
                <input wire:model="name" type="text" class="input input-bordered w-full" placeholder="Наименование"/>
            </label>
        </div>
        <div class="mt-4">
            <label>
                <select wire:model.live="category_id" class="select w-full select-bordered">
                    <option  value=""></option>

                    @foreach(\App\Models\Category::all() as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </label>
        </div>

        <div class="mt-4">
            <input wire:model="photo" type="file" class="file-input w-full input-bordered mb-4">
        </div>
        <div wire:loading wire:target="photo">Загрузка изображения...</div>


        <div class="mt-4">
            <button type="submit" class="btn btn-primary btn-md w-full">
                Добавить
            </button>
        </div>

        @foreach($errors->getMessages() as $messages)
            @foreach($messages as $message)
                <span class="mt-2 alert alert-error">
                {{($message)}}
            </span>
            @endforeach

        @endforeach

    </form>


    @if (session()->has("error"))
        <div class="alert-error alert">
            Ошибка при автоматическом добавлении, используйте ручной ввод
        </div>
    @endif

    @if(session()->has("success"))
        <div class="alert alert-success">
            Товар добавлен!
        </div>
    @endif
</div>
