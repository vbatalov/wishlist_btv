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

<div class="w-full p-6 border-b-[1px] border-base-300 bg-base-200 fixed top-0 z-10 glass  opacity-95 ">
    <a href="{{route("wishlist-viewer")}}">

    <span class="uppercase font-black tracking-widest">
        Wish list | Batalov Family
    </span>
    </a>
</div>
<div class="p-2 pb-32 pt-20 ">

    <div>
        {{$slot}}
    </div>
</div>


</body>
</html>
