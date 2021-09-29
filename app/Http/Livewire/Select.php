<?php

namespace App\Http\Livewire;
use App\Models\Barang;
use Livewire\Component;
use App\Models\Customer;
use App\Models\Perusahaan;

class Select extends Component
{

    public $perusahaan;

    public function render()
    {
        // if(!empty($this->nama_pt)){
        //     $this->agents = Customer::where('')
        // }

        return view('livewire.select')
        ->withPerusahaans(Perusahaan::orderBy('nama_pt')->get());
    }
}
