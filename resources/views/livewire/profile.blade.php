
<div class="card-body offset-2 col-8 p-12">
    <h1>Customer Profile</h1>
    <form wire:submit="save" id="kt_invoice_form">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="formcontrol1" class="form-label">First Name</label>
                        <input type="text" id="formcontrol1" wire:model="FirstName" class="form-control" placeholder="First Name"/>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="formcontrol2" class="form-label">Middle Name</label>
                        <input type="text" id="formcontrol2" wire:model="MiddleName" class="form-control" placeholder="Middle Name"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="formcontrol3" class="form-label">Last Name</label>
                        <input type="text" id="formcontrol3" wire:model="LastName" class="form-control" placeholder="Last Name"/>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="formcontrol4" class="form-label">Suffix</label>
                        <input type="text" id="formcontrol4" wire:model="Suffix" class="form-control" placeholder="Suffix"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3">
                    <button class="btn btn-primary float-end" type="submit">Submit</button>
                </div>
            </div>
            
        </div>
    </form>
</div>