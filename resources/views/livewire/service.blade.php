<div class="card-body">
    <h1>Services Availed</h1>
    <form wire:submit.prevent="save">
        <div class="row mb-5">
            <label for="form-control1" class="form-label">
                <input type="checkbox" id="form-control1" class="form-check-input" wire:model="ServiceAvailed" value="Certificate of Employment"> Certificate of Employment
            </label>
            <label for="form-control2" class=form-label">
                <input id="form-control2" class="form-check-input" type="checkbox" wire:model="ServiceAvailed" value="Loan Application"> Loan Application
            </label>
            <label for="form-control3" class="form-label">
                <input type="checkbox" class="form-check-input" id="form-control3" wire:model="ServiceAvailed" value="Monetization/Terminal Leave Benefits"> Monetization/Terminal Leave Benefits
            </label>
            <label for="form-control4" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control4" wire:model="ServiceAvailed" value="Job Order Application/Signature"> Job Order Application/Signature
            </label>
            <label for="form-control5" class="form-label">
                <input type="checkbox"  class="form-check-input" id="form-control5" wire:model="ServiceAvailed" value="Service Record Issuance"> Service Record Issuance
            </label>
            <label for="form-control6" class="form-label">
                <input type="checkbox" class="form-check-input" id="form-control6" wire:model="ServiceAvailed" value="Pass Slip/Leave Application"> Pass Slip/Leave Application
            </label>
            <label for="form-control7" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control7" wire:model="ServiceAvailed" value="Application/Appointment"> Application/Appointment
            </label>
        </div>
        <div class="row mb-5">
            <label for="form-control8" class="form-label">Purpose</label>
            <input type="text" class="form-control" id="form-control8" wire:model="Purpose" placeholder="Purpose">
            <label for="form-control9" class="form-label">Person Transacted With</label>
            <input type="text" class="form-control" id="form-control9" wire:model="PersonTransacted" placeholder="Person Transacted">
            <label for="form-control10" class="form-label">Office Transacted With</label>
            <input type="text" class="form-control" id="form-control10" wire:model="OfficeTransacted" placeholder="Office Transacted">
        </div>
            <button class="btn btn-primary float-end" type="submit">Submit</button>
    </form>
</div>
