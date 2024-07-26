<?php

namespace App\Http\Controllers\Wishlist;

use App\Models\Wishlist;
use Embed\Embed;
use Embed\Http\NetworkException;
use Embed\Http\RequestException;
use Illuminate\Support\Str;

class Add
{

    public function handle(Wishlist $wishlist): Wishlist|bool
    {
        if (($wishlist = $this->embed($wishlist)) instanceof Wishlist) {
            return $wishlist;
        }

        return false;
    }

    private function embed(Wishlist $wishlist): Wishlist|bool
    {
        $embed = new Embed();

        try {
            $info = $embed->get($wishlist->link);

            $wishlist->image = $info->image;
            $wishlist->name = $info->title;

            return $wishlist;

            $wishlist->updateOrCreate(
                [
                    "link" => $wishlist->link,

                ],
                [
                    "name" => Str::excerpt($info->title, null, [
                        "radius" => 36
                    ]),
                    "image" => $info->image
                ]);

            return true;
        } catch (RequestException|NetworkException) {
            return false;
        }
    }
}
