<?php

namespace App\Livewire;

use App\Models\Ong;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class ListarOngs extends Component
{
    use WithPagination;

    public $causa;
    public $localizacao;
    public $tipo;

    protected $regions = [
        'Norte' => ['AC', 'AP', 'AM', 'PA', 'RO', 'RR', 'TO'],
        'Nordeste' => ['AL', 'BA', 'CE', 'MA', 'PB', 'PE', 'PI', 'RN', 'SE'],
        'Centro-Oeste' => ['DF', 'GO', 'MT', 'MS'],
        'Sudeste' => ['ES', 'MG', 'RJ', 'SP'],
        'Sul' => ['PR', 'RS', 'SC'],
    ];

    public function mount(Request $request)
    {
        $this->causa = $request->query('causa');
        $this->localizacao = $request->query('localizacao');
        $this->tipo = $request->query('tipo');
    }

    public function render()
    {
        $ongs = Ong::query()
            ->when($this->causa, function ($query, $causa) {
                return $query->whereHas('causas', function ($q) use ($causa) {
                    $q->where('nome', $causa);
                });
            })
            ->when($this->localizacao, function ($query, $localizacao) {
                if (isset($this->regions[$localizacao])) {
                    return $query->whereIn('state', $this->regions[$localizacao]);
                }
                return $query;
            })
            ->when($this->tipo, function ($query, $tipo) {
                return $query->whereJsonContains('volunteer_types', $tipo);
            })
            ->paginate(6);

        return view('livewire.listar-ongs', [
            'ongs' => $ongs,
        ]);
    }
}
