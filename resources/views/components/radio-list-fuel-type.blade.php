<div class="row">

    @foreach($fuelTypes as $value)
        <div class="col">
            <label class="inline-radio">
                <input type="radio" name="fuel_type_id" value="{{ $value->id }}" />
                {{ $value->name }}
            </label>
        </div>
    @endforeach
</div>
