<div class="card bg-base-100 w-full shadow-xl">
    <figure>
        <img
            src="{{$item->image}}"
            alt="Shoes"
            class="w-fit"
        />
    </figure>
    <div class="card-body p-4">
        <span>{{$item->name}}</span>
        <div class="card-actions justify-end">
            <a class="btn btn-base-300 w-full uppercase" href="{{$item->link}}" target="_blank">
                Перейти
            </a>
        </div>
    </div>
</div>
