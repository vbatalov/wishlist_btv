<?php

namespace App\Livewire;

use AllowDynamicProperties;
use App\Http\Controllers\Wishlist\Add;
use App\Models\Wishlist;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[AllowDynamicProperties] class AddWishlist extends Component
{
    use WithFileUploads;

    #[Validate(['required'])]
    public string $link;

    #[Validate(['required'])]
    public string $name;

    #[Validate(['required'])]
    public int $category_id;

    public Wishlist $wishlist;
    public $photo;

    public function __construct()
    {
        $this->adder = new Add();
        $this->wishlist = new Wishlist();
    }

    public function render()
    {
        return view('livewire.add-wishlist');
    }

//    public function embed()
//    {
//        dd($this->wishlist->link);
//
//        $embed_result = $this->adder->handle($wishlist);
//        if ($embed_result instanceof Wishlist) {
//            $this->wishlist = $embed_result;
//        } else {
////            unset($this->wishlist);
////            session()->flash("error");
//        }
//    }

    public function save()
    {

//        dd($this->photo);
//
//        $this->validate([
//            "name" => "required",
//            "link" => "required",
//            "photo" => "required|image",
//        ]);

        $upload_photo = $this->photo->store("public");


        $this->wishlist->updateOrCreate(
            [
                "link" => $this->link
            ],
            [
                "name" => $this->name,
                "image" => $upload_photo,
                "category_id" => $this->category_id
            ]
        );

        return to_route("wishlist-viewer");
    }
}
