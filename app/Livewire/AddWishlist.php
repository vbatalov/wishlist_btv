<?php

namespace App\Livewire;

use AllowDynamicProperties;
use App\Http\Controllers\Wishlist\Add;
use App\Models\Wishlist;
use Livewire\Component;

#[AllowDynamicProperties] class AddWishlist extends Component
{
    public string $url = "";
    public Wishlist $wishlist;

    public function __construct()
    {
        $this->adder = new Add();
    }

    public function render()
    {
        return view('livewire.add-wishlist');
    }

    public function embed()
    {
        $wishlist = new Wishlist([
            "link" => $this->url
        ]);

        $ember_result = $this->adder->handle($wishlist);
        if ($ember_result instanceof Wishlist) {
            $this->wishlist = $ember_result;
        } else {
            unset($this->wishlist);
            session()->flash("error");
        }
    }
}
