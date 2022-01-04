<?php

namespace App\Http\Livewire;

use App\Liga;
use App\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    public $search;
    protected $updateQueryString = ['search'];
    use WithPagination;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        if ($this->search) {
            $products = Product::where('nama', 'like', '%' . $this->search . '%')->paginate(8);
        } else {
            $products = Product::paginate(8);
        }

        return view('livewire.product-index', [
            'products' => $products,
            'title' => 'List Jersey'
        ]);
    }
}
