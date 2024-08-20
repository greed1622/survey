<div>
    <h1>Services Availed</h1>
    <form wire:submit.prevent="save">
        <label>
            <input type="checkbox" id="COE" wire:model="ServiceAvailed" value="Certificate of Employment"> Certificate of Employment
        </label>
        <label>
            <input type="checkbox" id="LoanApplication" wire:model="ServiceAvailed" value="Loan Application"> Loan Application
        </label>
        <label>
            <input type="checkbox" id="Monetization" wire:model="ServiceAvailed" value="Monetization/Terminal Leave Benefits"> Monetization/Terminal Leave Benefits
        </label>
        <label>
            <input type="checkbox" id="JobOrder" wire:model="ServiceAvailed" value="Job Order Application/Signature"> Job Order Application/Signature
        </label>
        <label>
            <input type="checkbox" id="ServiceRecord" wire:model="ServiceAvailed" value="Service Record Issuance"> Service Record Issuance
        </label>
        <label>
            <input type="checkbox" id="PassSlip" wire:model="ServiceAvailed" value="Pass Slip/Leave Application"> Pass Slip/Leave Application
        </label>
        <label>
            <input type="checkbox" id="AppAppointment" wire:model="ServiceAvailed" value="Application/Appointment"> Application/Appointment
        </label>

        <input type="text" wire:model="Purpose" placeholder="Purpose">
        <input type="text" wire:model="PersonTransacted" placeholder="Person Transacted">
        <input type="text" wire:model="OfficeTransacted" placeholder="Office Transacted">

        <button type="submit">Submit</button>
    </form>
</div>
