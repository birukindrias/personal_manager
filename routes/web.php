<?php
use Livewire\Livewire;
use App\Livewire\Category\CategoryCreate;
use App\Livewire\Category\CategoryList;

use App\Livewire\Item\ItemCreate;
use App\Livewire\Item\ItemList;
use App\Livewire\Subcategory\SubcategoryCreate;
// use App\Livewire\Subcategory\SubcategoryList;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/categories', CategoryList::class)->name('category.list');

Route::get('/categories', CategoryList::class)->name('category.list');
Route::get('/categories/create', CategoryCreate::class);

 Route::get('/categories/{category}/subcategories', SubcategoryList::class)->name('category.subcategory.list');
// Route::get('/categories/{category}/subcategories/create', SubcategoryCreate::class);

// Route::get('/subcategories', SubcategoryList::class)->name('subcategory.list');
// Route::get('/subcategories/create', SubcategoryCreate::class);

Route::get('/items', ItemList::class)->name('item.list');
Route::get('/items/create', ItemCreate::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
