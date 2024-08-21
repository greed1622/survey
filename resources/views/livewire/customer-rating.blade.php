<div>
    <h1>Customer Rating</h1>
    <form wire:submit="save">
        <label>How satisfied were you in terms of the response time to your transaction given by the office?
        </label>
        <input type="checkbox" id="Outstanding" wire:model="Rating1" value="Outstanding">
        <input type="checkbox" id="VerySatisfactory" wire:model="Rating1" value="Very Satisfactory">
        <input type="checkbox" id="Satisfactory" wire:model="Rating1" value="Satisfactory">
        <input type="checkbox" id="Fair or Needs Improvement" wire:model="Rating1" value="Fair or Needs Improvement">
        <input type="checkbox" id="Poor" wire:model="Rating1" value="Poor">

        <label>How satisfied were you with the outcome of the service provided?
        </label>
        <input type="checkbox" id="Outstanding" wire:model="Rating2" value="Outstanding">
        <input type="checkbox" id="VerySatisfactory" wire:model="Rating2" value="Very Satisfactory">
        <input type="checkbox" id="Satisfactory" wire:model="Rating2" value="Satisfactory">
        <input type="checkbox" id="Fair or Needs Improvement" wire:model="Rating2" value="Fair or Needs Improvement">
        <input type="checkbox" id="Poor" wire:model="Rating2" value="Poor">

        <label>How satisfied were you with the service provider's extensive information on understanding of the service
            being provided?
        </label>
        <input type="checkbox" id="Outstanding" wire:model="Rating3" value="Outstanding">
        <input type="checkbox" id="VerySatisfactory" wire:model="Rating3" value="Very Satisfactory">
        <input type="checkbox" id="Satisfactory" wire:model="Rating3" value="Satisfactory">
        <input type="checkbox" id="Fair or Needs Improvement" wire:model="Rating3" value="Fair or Needs Improvement">
        <input type="checkbox" id="Poor" wire:model="Rating3" value="Poor">

        <label>How satisfied were you with the service provider's competence or the skill in delivering service?
        </label>
        <input type="checkbox" id="Outstanding" wire:model="Rating4" value="Outstanding">
        <input type="checkbox" id="VerySatisfactory" wire:model="Rating4" value="Very Satisfactory">
        <input type="checkbox" id="Satisfactory" wire:model="Rating4" value="Satisfactory">
        <input type="checkbox" id="Fair or Needs Improvement" wire:model="Rating4" value="Fair or Needs Improvement">
        <input type="checkbox" id="Poor" wire:model="Rating4" value="Poor">

        <label>How satisfied were you with the service provider's friendliness, courteousness/politeness, fair treatment
            and willingness to do more than what is expected or going the extra mile?
        </label>
        <input type="checkbox" id="Outstanding" wire:model="Rating5" value="Outstanding">
        <input type="checkbox" id="VerySatisfactory" wire:model="Rating5" value="Very Satisfactory">
        <input type="checkbox" id="Satisfactory" wire:model="Rating5" value="Satisfactory">
        <input type="checkbox" id="Fair or Needs Improvement" wire:model="Rating5" value="Fair or Needs Improvement">
        <input type="checkbox" id="Poor" wire:model="Rating5" value="Poor">

        <label>How would you rate OVERALL SATISFACTION with regard to the quality of service delivery?
        </label>
        <input type="checkbox" id="Outstanding" wire:model="Rating6" value="Outstanding">
        <input type="checkbox" id="VerySatisfactory" wire:model="Rating6" value="Very Satisfactory">
        <input type="checkbox" id="Satisfactory" wire:model="Rating6" value="Satisfactory">
        <input type="checkbox" id="Fair or Needs Improvement" wire:model="Rating6"
            value="Fair or Needs Improvement">
        <input type="checkbox" id="Poor" wire:model="Rating6" value="Poor">

        <button type="submit">Submit</button>
    </form>
</div>
