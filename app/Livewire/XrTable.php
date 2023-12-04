<?php

namespace App\Livewire;

use App\Models\Xcrate;
use Livewire\Component;
use Livewire\WithPagination;

class XrTable extends Component
{
    use WithPagination;
 
    public $search='';
    public $sortField;
    public $sortAsc = true;
    protected $queryString = [
        'search' => ['except' => ''],
        'active' => ['except' => true],
        'sortAsc',
        'sortField'];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function search()
    {
        $this->resetPage();
    }
   

   
 
    public function render()
    {
        return view('livewire.xr-table', [
            'xrdata' => Xcrate::where(function ($query) {
                $query->where('countryName', 'like', '%' . $this->search . '%')
                    ->orWhere('currencyName', 'like', '%' . $this->search . '%');
                })
                ->when($this->sortField, function ($query) {
                    $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
                })
            ->paginate(50)
        ]);
        
        
        //return view('livewire.xr-table');
    }
}
