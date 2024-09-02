<div class="card-body offset-2 col-8">
    <h1>Customer Rating</h1>
    <form wire:submit.prevent="save">
        <div class="row">
            <label class="form-label">How satisfied were you in terms of the response time to your transaction given by the office?</label>
        </div>
        <div class="row">
            @foreach (['Outstanding', 'Very Satisfactory', 'Satisfactory', 'Fair or Needs Improvement', 'Poor'] as $option)
                <label for="form-control1-{{ $loop->index }}" class="form-label">
                    <input class="form-check-input" type="radio" id="form-control1-{{ $loop->index }}" wire:model="Rating1" value="{{ $option }}"> {{ $option }}
                </label>
            @endforeach
        </div>
        <div class="row">
            <label class="form-label">How satisfied were you with the outcome of the service provided?</label>
            @foreach (['Outstanding', 'Very Satisfactory', 'Satisfactory', 'Fair or Needs Improvement', 'Poor'] as $option)
                <label for="form-control2-{{ $loop->index }}" class="form-label">
                    <input class="form-check-input" type="radio" id="form-control2-{{ $loop->index }}" wire:model="Rating2" value="{{ $option }}"> {{ $option }}
                </label>
            @endforeach
        </div>
        <div class="row">
            <label class="form-label">How satisfied were you with the service provider's extensive information on understanding of the service being provided?</label>
            @foreach (['Outstanding', 'Very Satisfactory', 'Satisfactory', 'Fair or Needs Improvement', 'Poor'] as $option)
                <label for="form-control3-{{ $loop->index }}" class="form-label">
                    <input class="form-check-input" type="radio" id="form-control3-{{ $loop->index }}" wire:model="Rating3" value="{{ $option }}"> {{ $option }}
                </label>
            @endforeach
        </div>
        <div class="row">
            <label class="form-label">How satisfied were you with the service provider's competence or the skill in delivering service?</label>
            @foreach (['Outstanding', 'Very Satisfactory', 'Satisfactory', 'Fair or Needs Improvement', 'Poor'] as $option)
                <label for="form-control4-{{ $loop->index }}" class="form-label">
                    <input class="form-check-input" type="radio" id="form-control4-{{ $loop->index }}" wire:model="Rating4" value="{{ $option }}"> {{ $option }}
                </label>
            @endforeach
        </div>
        <div class="row">
            <label class="form-label">How satisfied were you with the service provider's friendliness, courteousness/politeness, fair treatment and willingness to do more than what is expected or going the extra mile?</label>
            @foreach (['Outstanding', 'Very Satisfactory', 'Satisfactory', 'Fair or Needs Improvement', 'Poor'] as $option)
                <label for="form-control5-{{ $loop->index }}" class="form-label">
                    <input class="form-check-input" type="radio" id="form-control5-{{ $loop->index }}" wire:model="Rating5" value="{{ $option }}"> {{ $option }}
                </label>
            @endforeach
        </div>
        <div class="row">
            <label class="form-label">How would you rate OVERALL SATISFACTION with regard to the quality of service delivery?</label>
            @foreach (['Outstanding', 'Very Satisfactory', 'Satisfactory', 'Fair or Needs Improvement', 'Poor'] as $option)
                <label for="form-control6-{{ $loop->index }}" class="form-label">
                    <input class="form-check-input" type="radio" id="form-control6-{{ $loop->index }}" wire:model="Rating6" value="{{ $option }}"> {{ $option }}
                </label>
            @endforeach
        </div>
        <button class="btn btn-primary float-end" type="submit">Next</button>
    </form>
</div>
