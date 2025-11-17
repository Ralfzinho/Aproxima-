<?php

namespace App\Livewire;

use App\Models\Ong;
use Livewire\Component;
use Livewire\WithPagination;

class ListarOngs extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.listar-ongs', [
            'ongs' => Ong::paginate(6),
        ]);
    }
}
