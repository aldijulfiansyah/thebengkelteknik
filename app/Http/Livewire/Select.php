<?php

namespace App\Http\Livewire;
use App\Models\Barang;
use Livewire\Component;
use App\Models\Customer;
use App\Models\Perusahaan;



class Select extends Component
{

    public $perusahaans;
    public $customers;

    public $selectedPerusahaan = NULL;
    
    public function mount()
    {
        $this->perusahaans = Perusahaan::all();
        $this->customers = collect();
    }
    
    public function render()
    {
    
    return view('livewire.select');
    }
    
    public function updatedSelectedPerusahaan($perusahaan)
    {
        if (!is_null($perusahaan)){
        $this->customers = Customer::where('perusahaan_id', $perusahaan)->get();
        }
    
    }
}
