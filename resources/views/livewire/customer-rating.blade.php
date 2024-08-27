<div class="card-body offset-2 col-8">
    <h1>Customer Rating</h1>
    <form wire:submit="save">
        <div class="row">
            <label class="form-label">How satisfied were you in terms of the response time to your transaction given by the office?</label>
        </div>
        <div class="row">
            <label for="form-control1" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control1" wire:model="Rating1" value="Outstanding"> Outstanding
            </label>
            <label for="form-control2" class="form-label form-start">
                <input class="form-check-input" type="checkbox" id="form-control2" wire:model="Rating1" value="Very Satisfactory"> Very Satisfactory
            </label>
            <label for="form-control3" class="form-label form-start">
                <input class="form-check-input" type="checkbox" id="form-control3" wire:model="Rating1" value="Satisfactory"> Satisfactory
            </label>
            <label for="form-control4" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control4" wire:model="Rating1" value="Fair or Needs Improvement"> Fair or Needs Improvement
            </label>
            <label for="form-control5" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control5" wire:model="Rating1" value="Poor"> Poor
            </label>
        </div>
        <div class="row">
            <label class="form-label">How satisfied were you with the outcome of the service provided?</label>
            <label for="form-control6" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control6" wire:model="Rating2" value="Outstanding"> Outstanding
            </label>
            <label for="form-control7" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control7" wire:model="Rating2" value="Very Satisfactory"> Very Satisfactory
            </label>
            <label for="form-control8" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control8" wire:model="Rating2" value="Satisfactory"> Satisfactory
            </label>
            <label for="form-control9" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control9" wire:model="Rating2" value="Fair or Needs Improvement"> Fair or Needs Improvement
            </label>
            <label for="form-control10" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control10" wire:model="Rating2" value="Poor"> Poor
            </label>
        </div>
        <div class="row">
            <label class="form-label">How satisfied were you with the service provider's extensive information on understanding of the service
                being provided?
            </label>
            <label for="form-control11" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control11" wire:model="Rating3" value="Outstanding"> Outstanding
            </label>
            <label for="form-control12" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control12" wire:model="Rating3" value="Very Satisfactory"> Very Satisfactory
            </label>
            <label for="form-control13" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control13" wire:model="Rating3" value="Satisfactory"> Satisfactory
            </label>
            <label for="form-control14" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control14" wire:model="Rating3" value="Fair or Needs Improvement"> Fair or Needs Improvement
            </label>
            <label for="form-control15" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control15" wire:model="Rating3" value="Poor"> Poor
            </label>
        </div>
        <div class="row">
            <label class="form-label">How satisfied were you with the service provider's competence or the skill in delivering service?</label>
            <label for="form-control16" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control16" wire:model="Rating4" value="Outstanding"> Outstanding
            </label>
            <label for="form-control17" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control17" wire:model="Rating4" value="Very Satisfactory"> Very Satisfactory
            </label>
            <label for="form-control18" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control18" wire:model="Rating4" value="Satisfactory"> Satisfactory
            </label>
            <label for="form-control19" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control19" wire:model="Rating4" value="Fair or Needs Improvement"> Fair or Needs Improvement
            </label>
            <label for="form-control20" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control20" wire:model="Rating4" value="Poor"> Poor
            </label>
        </div>
        <div class="row">
            <label class="form-label">How satisfied were you with the service provider's friendliness, courteousness/politeness, fair treatment
                and willingness to do more than what is expected or going the extra mile?
            </label>
            <label for="form-control21" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control21" wire:model="Rating5" value="Outstanding"> Outstanding
            </label>
            <label for="form-control22" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control22" wire:model="Rating5" value="Very Satisfactory"> Very Satisfactory
            </label>
            <label for="form-control23" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control23" wire:model="Rating5" value="Satisfactory"> Satisfactory
            </label>
            <label for="form-control24" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control24" wire:model="Rating5" value="Fair or Needs Improvement"> Fair or Needs Improvement
            </label>
            <label for="form-control25" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control25" wire:model="Rating5" value="Poor"> Poor
            </label>
        </div>
        <div class="row">
            <label class="form-label">How would you rate OVERALL SATISFACTION with regard to the quality of service delivery?</label>
            <label for="form-control26" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control26" wire:model="Rating6" value="Outstanding"> Outstanding
            </label>
            <label for="form-control27" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control27" wire:model="Rating6" value="Very Satisfactory"> Very Satisfactory
            </label>
            <label for="form-control28" class="form-label">
                <input class="form-check-input" type="checkbox" id="Satisfactory" wire:model="Rating6" value="Satisfactory"> Satisfactory
            </label>
            <label for="form-control29" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control29" wire:model="Rating6" value="Fair or Needs Improvement"> Fair or Needs Improvement
            </label>
            <label for="form-control30" class="form-label">
                <input class="form-check-input" type="checkbox" id="form-control30" wire:model="Rating6" value="Poor"> Poor
            </label>
        </div>
        <button class="btn btn-primary float-end" type="submit">Next</button>
    </form>
</div>
