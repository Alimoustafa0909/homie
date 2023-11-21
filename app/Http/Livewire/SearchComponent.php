<?php

namespace App\Http\Livewire;

use App\Models\Property;
use Livewire\Component;
use Livewire\WithPagination;

class SearchComponent extends Component
{
    use WithPagination;

    public $pageSize = 12;
    public $orderBy = 'Default Sorting';
    public $q;

    // Constructor
    public function mount()
    {
        $this->fill(request()->only('q'));
    }

    // Perform the search and return the results
    public function render()
    {
        $searchTerm = '%' . $this->q . '%';

        $properties_buy = Property::where('status', 'For Buy')->paginate(12);
        $properties_sale = Property::where('status', 'For Sale')->paginate(12);
        $properties_rent = Property::where('status', 'For Rent')->paginate(12);
        $properties = Property::where('title', 'like', $searchTerm)
            ->orWhere('location', 'like', $searchTerm)
            ->orWhere('status', 'like', $searchTerm)
            ->paginate($this->pageSize);

        return view('livewire.search-component', compact('properties','properties_buy','properties_rent','properties_sale'));
    }
}
