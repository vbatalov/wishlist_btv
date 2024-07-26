<div>
    <form wire:submit="embed" class="form-control mb-4">
        <label>
            <input type="text" class="input input-bordered w-full mb-4" placeholder="Ссылка на товар"
                   wire:model.live="url"/>
        </label>

        <button type="submit" class="btn btn-md w-full">
            Найти по ссылке
        </button>
    </form>

    @isset($this->wishlist)
        <div class="">
            <x-card :item="$this->wishlist"/>
        </div>

    <div class="mt-4">
        <label>
            <input type="text" class="input input-bordered w-full" placeholder="Наименование"/>
        </label>
    </div>
        <div class="mt-4">
        <label>
            <select class="select select-all select-bordered">
                <option>Категория 2</option>
                <option>Категория 1</option>
            </select>
        </label>
    </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary btn-md w-full">
                Добавить с фото сайта
            </button>
        </div>

        <div class="mt-4">
            <input type="file" class="file-input w-full input-bordered mb-4">
            <button type="submit" class="btn btn-base btn-md w-full">
                Заменить фото и добавить
            </button>
        </div>

    @endisset

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
