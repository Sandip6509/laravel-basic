<div class="max-w-lg mx-auto p-6">
    <!-- State Dropdown -->
    <div class="mb-4">
        <label for="state" class="block text-sm font-medium text-gray-700">State</label>
        <select wire:model.live="state" id="state"
            class="w-full mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option value="">Choose state</option>
            @foreach ($this->states as $state)
                <option value="{{ $state->id }}">{{ $state->name }}</option>
            @endforeach
        </select>
    </div>
    <!-- City Dropdown -->
    @if (!empty($this->cities))
        <div class="mb-4">
            <label for="city" class="block text-sm font-medium text-gray-700">City</label>
            <select wire:model.live="city" id="city" class="w-full mt-1 p-2 border border-gray-300 rounded-md shadow-sm">
                <option value="" selected>Choose city</option>
                @foreach($this->cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
</div>
