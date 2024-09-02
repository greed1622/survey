<div class="card-body offset-2 col-8">
    <form wire:submit="save">
        <div class="row">
            <label class="form-label" for="">Please check if you are providing compliment, suggestion, or complaint.</label>
        </div>
        <div class="row mb-5">
            @foreach (['Compliment', 'Suggestion', 'Complaint'] as $option)
            <div class="col">
                <label class="form-label" for="form-control1-{{$loop->index}}">
                <input class="form-check-input" type="checkbox" name="" wire:model="TypesOfFeedback" id="compliment" value="{{$option}}"> {{$option}}</label>
            </div>
            @endforeach
        </div>
        <div class="row mb-5">
            <label for="form-control2" class="form-label">Facts or details about the incident:
            </label>
            <textarea class="form-control" name="" wire:model="Details" id="form-control2" cols="30" rows="10"></textarea>
        </div>
        <div class="row mb-5">
            <label for="form-control3" class="form-label">Recommendation/Suggestion/Desired Action from Office:
            </label>
            <textarea class="form-control" name="" wire:model="Recommendation" id="form-control3" cols="30" rows="10"></textarea>
        </div>

        <button class="btn btn-primary float-end" type="submit">Save</button>
    </form>
</div>