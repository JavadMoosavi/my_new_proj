<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Success extends Component
{

    public $vCode = 0;

    public function mount()
    {
        if(session()->has('verificationCode'))
        {
            $this->vCode = session('verificationCode');
        }
        else
        {
            $this->vCode = 0;
        }
    }

    public function render()
    {
        return view('livewire.success', ['verificationCode' => $this->vCode]);
    }
}
