<div>
    <div class="grid grid-cols-2 gap-2 ">
        @foreach($items as $item)
            <x-card :$item/>
        @endforeach

    </div>

    <div class="fixed bottom-0 left-0 w-full p-4 bg-base-200 border-base-300 border-t-[1px]">
        <div class="flex justify-center">
            <button type="button" class="btn btm-nav-sm btn-neutral mx-2">
                change row
            </button>
            <a href="{{route("add-wishlist")}}" class="btn btm-nav-sm btn-neutral mx-2">
                add
            </a>
        </div>

    </div>
</div>

