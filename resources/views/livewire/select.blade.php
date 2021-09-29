<div>
    <div class="form-group">
        <label for="" class="form-label">Perusahaan</label> 
        <select name="nama_pt" wire:model="perusahaan" class="form-control">
            <option selected disabled>Pilih Perusahaan</option>
            {{-- @foreach ($customers as $customer)
                <option value={{ $customer->id }}>{{ $customer->perusahaan->nama_pt }}</option>
            @endforeach --}}
        </select>
    </div>
    {{-- @if (count($data_customer)> 0)
        <div class="form-group">
            <label for="" class="form-label">Perusahaan</label> 
            <select name="nama_agent" wire:model="customer" class="form-control">
                <option selected disabled>Pilih Agent</option>
                @foreach ($customers as $customer)
                    <option value={{ $customer->id }}>{{ $customer->nama_agent }}</option>
                @endforeach
            </select>
        </div>
    @endif --}}
</div>

