<?php

namespace App\Http\Livewire;

use App\Models\Shop;
use Livewire\Component;
use Livewire\WithPagination;

class SearchShop extends Component
{
    use WithPagination;

    public string $search = '';

    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function render()
    {

        return view('livewire.search-shop',
            [
                'shops' => Shop::where('name','like',"%{$this->search}%")->paginate(5)
            ]
        );
    }

}
