<?php

namespace App\Livewire;

use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class WishlistViewer extends Component
{

    public int $filter = 0;
    private $items;

    public int $row = 2;

    public function __construct()
    {
        Auth::loginUsingId(1);
        $this->items = Wishlist::orderBy("created_at", "desc")->get()->all();
    }

    public function render()
    {
        if ($this->filter != 0) {
            $this->items = Wishlist::orderBy("created_at")
                ->whereCategoryId($this->filter)->get()->all();
        }

        return view('livewire.wishlist-viewer', [
            "items" => $this->items
        ]);
    }

    public function set_filter(int $category_id)
    {
        return $this->filter = $category_id;
    }

    public function change_row()
    {
        $this->row = $this->row == 2 ? 1:2;
    }
}
