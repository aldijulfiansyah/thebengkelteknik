<?php

namespace App\Http\Livewire;
use App\Models\Customer;
use App\Models\Barang;
use Livewire\Component;

class Select extends Component
{

    public $customer;
    public $nama_agent;
    public $nama_pt;
    public $agents;

    public function render()
    {
        // if(!empty($this->nama_pt)){
        //     $this->agents = Customer::where('')
        // }

        return view('livewire.select');
        // ->withCustomers(Customer::orderBy('nama_pt')->get());
    }
}
