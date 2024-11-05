<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Organisation;
use App\Models\Trip;


class AdminMainSectionComponent extends Component
{
    public $organisation = null;
    public $trips = null;


    public function mount(){
        $this->organisation = Organisation::find(1);
        $this->trips = Trip::all();
    }




    public function render()
    {
        return view('livewire.admin-main-section-component');
    }
}
