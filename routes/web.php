<?php

use App\Livewire\AddWishlist;
use App\Livewire\WishlistViewer;
use Illuminate\Support\Facades\Route;

Route::get("/", WishlistViewer::class)->name("wishlist-viewer");
Route::get("add", AddWishlist::class)->name("add-wishlist");
