<div>
    <form wire:submit="save">
        <label for="">Please check if you are providing compliment, suggestion, or complaint.</label>
        <input type="checkbox" name="" wire:model="TypesOfFeedback" id="compliment" value="Compliment"> <label for="compliment">Compliment</label>
        <input type="checkbox" name="" wire:model="TypesOfFeedback" id="suggestion" value="Sugggestion"> <label for="suggestion">Sugggestion</label>
        <input type="checkbox" name="" wire:model="TypesOfFeedback" id="complaint" value="Complaint"> <label for="complaint">Complaint</label>
        <textarea name="" wire:model="Details" id="" cols="30" rows="10"></textarea>
        <textarea name="" wire:model="Recommendation" id="" cols="30" rows="10"></textarea>
        <button type="submit">Save</button>
    </form>
</div>