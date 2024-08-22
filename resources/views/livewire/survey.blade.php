<div class="card-body">
    @if($lastInsertedId)
    <p>Last inserted ID: {{ $lastInsertedId }}</p>
    @endif

    <form wire:submit="save"> 
        <input type="text" wire:model="Barangay" id="" placeholder="Barangay">
        <input type="text" wire:model="Municipality" id="" placeholder="Municipality">
        <input type="text" wire:model="Province" id="" placeholder="Province">
        <button type="submit">Save</button>
    </form>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>