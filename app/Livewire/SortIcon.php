<?php
// namespace App\Livewire;


namespace App\View\Components;

use Illuminate\View\Component;
// use Livewire\Component;

class SortIcon extends Component
{
    public $field;
    public $sortField;
    public $sortAsc;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($field, $sortField, $sortAsc)
    {
        $this->field = $field;
        $this->sortField = $sortField;
        $this->sortAsc = $sortAsc;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.sort-icon');
    }
}
