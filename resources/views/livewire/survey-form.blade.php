<div>
    <h1>Survey Form</h1>
    <form wire:submit.prevent="save" method="post">
        <input type="text" wire:model="FirstName" placeholder="First Name">
        <input type="text" wire:model="MiddleName" placeholder="Middle Name">
        <input type="text" wire:model="LastName" placeholder="Last Name">
        <input type="text" wire:model="Suffix" placeholder="Suffix">

        <input type="text" wire:model="Barangay" placeholder="Barangay">
        <input type="text" wire:model="Municipality" placeholder="Municipality">
        <input type="text" wire:model="Province" placeholder="Province">

        <button type="button">Continue</button>
    </form>
</div>