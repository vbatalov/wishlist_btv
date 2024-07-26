<?php

namespace App\Livewire;

use App\Models\Wishlist;
use Livewire\Component;

class WishlistViewer extends Component
{

    private $items;

    public function __construct()
    {
        $this->items = Wishlist::orderBy("created_at")->get()->all();
    }

    public function render()
    {
        return view('livewire.wishlist-viewer', [
            "items" => $this->items
        ]);
    }
}
