<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wishlist - Batalov Family</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="min-h-screen">

<div class="flex w-full p-6 border-b-[1px] border-base-300 bg-base-200 fixed top-0 z-10 glass  opacity-95 ">

    <div class="grow">
        <a href="{{route("wishlist-viewer")}}">

    <span class="uppercase font-black tracking-widest">
        Wish list | Batalov Family
    </span>
        </a>
    </div>

    <div>
        <a href="{{route("add-wishlist")}}" class="">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
            </svg>

        </a>
    </div>
</div>
<div class="p-2 pb-32 pt-20 ">

    <div>
        {{$slot}}
    </div>
</div>


</body>
</html>
