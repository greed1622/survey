<div class="card-body p-12">
    <h1>Customer Profile</h1>
    <form wire:submit="save" id="kt_invoice_form">
        {{-- <input type="text" wire:model="FirstName" placeholder="First Name"> --}}
        <input type="text" wire:model="FirstName" class="form-control" placeholder="First Name"/>
        <input type="text" wire:model="MiddleName" placeholder="Middle Name">
        <input type="text" wire:model="LastName" placeholder="Last Name">
        <input type="text" wire:model="Suffix" placeholder="Suffix">
        <button type="submit">Submit</button>
    </form>
</div>