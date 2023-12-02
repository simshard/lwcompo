<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class DataTables extends Component
{
    use WithPagination;

   // #[Url(history: true)]
    public $search='';
    public $active = true;
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
        return view('livewire.data-tables', [
            'users' => User::where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');
                })->where('active', $this->active)
                ->when($this->sortField, function ($query) {
                    $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
                })
            ->paginate(10)
        ]);
    }


}
