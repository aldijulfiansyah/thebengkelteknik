<div class="form-group">
    <label for="perusahaan">{{ __('Perusahaan') }}</label>
    <select wire:model="selectedPerusahaan" class="form-control">
    <option value="">Pilih Perusahaan</option>
    @foreach($perusahaans as $perusahaan)
        <option value="{{ $perusahaan->id }}">{{ $perusahaan->nama_pt }}</option>
    @endforeach
    </select>
</div>

@if(!is_null($selectedPerusahaan)) 
    <div class="form-group">
        <label for="customer">{{ __('Customer') }}</label>
        <select name="customer_id" wire:model="selectedCustomer" class="form-control">
        <option value="">Choose A Customer</option>
        @foreach($this->customers as $customer)
            <option value="{{ $customer->id }}">{{ $customer->nama_agent }}</option>
        @endforeach
        </select>
    </div>
@endif