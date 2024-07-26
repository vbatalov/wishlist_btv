<div class=" card bg-base-100 shadow-md">
    <div class="absolute">
        <button>

        </button>
    </div>
    <figure>
        <img
            src="{{\Illuminate\Support\Facades\Storage::url($item->image)}}"
            alt="Shoes"
            class="w-fit"
        />
    </figure>
    <div class="card-body p-4">
        <span class="badge badge-primary opacity-80"> {{$item->category->name ?? null}}</span>
        <span class="grow">{{$item->name ?? null}}</span>
        <div class="card-actions items-end">
            <a class="btn btn-base-300 w-full uppercase" href="{{$item->link}}" target="_blank">
                Перейти
            </a>
        </div>
    </div>
</div>
