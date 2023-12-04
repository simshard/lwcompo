<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class MYForm extends Component
{
    public $month;
    public $year;

    public function store(Request $request)
    {
        dd(request()->post());
    }

    public function show( ) 
    {
         return view('getxr');   
    }


    public function render()
    {
        return view('livewire.m-y-form');
    }
}
