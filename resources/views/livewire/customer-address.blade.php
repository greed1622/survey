<div class="card-body offset-2 col-8">
    {{-- @if($lastInsertedId)
    <p>Last inserted ID: {{ $lastInsertedId }}</p>
    @endif --}}
    <h1>Customer Address</h1>
    <form wire:submit="save"> 
        <div class="row mb-5">
            <div class="col">
                <label for="formcontrol1" class="form-label">House No.</label>
                <input type="text" id="formcontrol1" wire:model="HouseNo" class="form-control" placeholder="House No." id="">
            </div>
            <div class="col">
                <label for="formcontrol2" class="form-label">Street</label>
                <input type="text" id="formcontrol2" wire:model="Street" class="form-control" id="" placeholder="Street">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <label for="formcontrol3" class="form-label required">Barangay</label>
                <input type="text" id="formcontrol3" class="form-control" wire:model="Barangay" id="" placeholder="Barangay">
            </div>
            <div class="col">
                <label for="formcontrol4" class="form-label required">Municipality</label>
                <input type="text" id="formcontrol4" class="form-control" wire:model="Municipality" id="" placeholder="Municipality">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <label for="formcontrol5" class="form-label required">Province</label>
                <input type="text" id="formcontrol5" class="form-control" wire:model="Province" id="" placeholder="Province">
            </div>
            <div class="col">
                <label for="formcontrol6" class="form-label">Zip Code</label>
                <input type="text" id="formcontrol6" wire:model="Zip" class="form-control" id="" placeholder="Zip Code">
            </div>
        </div>
        <button type="submit" class="btn btn-primary float-end">Next</button>
    </form>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>