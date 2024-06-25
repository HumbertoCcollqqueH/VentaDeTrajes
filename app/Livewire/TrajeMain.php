<?php

namespace App\Livewire;

use App\Models\Traje;
use Livewire\Component;

class TrajeMain extends Component
{
    public function render()
    {   $trajes=Traje::paginate(15);
        return view('livewire.traje-main',compact('trajes'));
    }
}
