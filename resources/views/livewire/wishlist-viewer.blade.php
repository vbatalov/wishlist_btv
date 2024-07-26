<div>

    <div class="flex-grow mt-2 mb-4 ">
        <button class="btn btn-primary btn-sm my-2 text-base-100" wire:click="set_filter(0)">
            Все
        </button>
        @foreach(\App\Models\Category::all() as $category)
            <button class="btn btn-primary text-base-100 btn-sm my-2" wire:click="set_filter({{$category->id}})">
                {{$category->name}}
            </button>
        @endforeach
    </div>

    <div class="grid grid-cols-{{$this->row}} gap-2">
        @foreach($items as $item)
            <x-card :$item/>
        @endforeach

    </div>

    <div class="fixed bottom-0 left-0 w-full p-6 opacity-95 bg-base-200 border-base-300 border-t-[1px]">
        <div class="flex justify-center ">
            <div>
                <label id="" class="swap swap-flip ">
                    <!-- this hidden checkbox controls the state -->
                    <input id="changeRow" type="checkbox" wire:click="change_row"/>

                    <div class="swap-on">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z"/>
                        </svg>
                    </div>
                    <div class="swap-off">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M16.5 8.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v8.25A2.25 2.25 0 0 0 6 16.5h2.25m8.25-8.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-7.5A2.25 2.25 0 0 1 8.25 18v-1.5m8.25-8.25h-6a2.25 2.25 0 0 0-2.25 2.25v6"/>
                        </svg>

                    </div>
{{--                    <div class="contents content-center">--}}
{{--                        Вид--}}
{{--                    </div>--}}
                </label>

            </div>

            @auth
                <div>
                    <a href="{{route("add-wishlist")}}" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>

                    </a>
                </div>
            @endauth


        </div>

    </div>

    <script>
        let buttonChangeRow = document.getElementById('changeRow');

        buttonChangeRow.addEventListener('click', () => {
            console.log({{$col ?? null}});

            @php
                //                $col = $col == 1 ? 2:1;
                            $col = 2;
            @endphp
            console.log({{$col ?? null}});


        })


    </script>
</div>

