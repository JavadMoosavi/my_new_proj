<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Work;
use Illuminate\Support\Facades\Storage;


class ShowResult extends Component
{

    public $result;

    public function mount()
    {
        $this->result = Work::all();        
    }

    public function downloadfile($filename)
    {
        return Storage::disk('workFiles')->download($filename);
    }

    public function render()
    {
        return view('livewire.show-result');
    }
}
