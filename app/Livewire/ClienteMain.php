<?php

namespace App\Livewire;

use App\Models\Cliente;
use Livewire\Component;

class ClienteMain extends Component
{
    public function render()
    {   $clientes=Cliente::paginate(15);
        return view('livewire.cliente-main',compact('clientes'));
    }
}
