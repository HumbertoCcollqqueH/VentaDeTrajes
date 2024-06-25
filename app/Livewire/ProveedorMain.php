<?php

namespace App\Livewire;

use App\Models\Proveedor;
use Livewire\Component;

class ProveedorMain extends Component
{
    public function render()
    {   $proveedores=Proveedor::paginate(15);
        return view('livewire.proveedor-main',compact('proveedores'));
    }
}
