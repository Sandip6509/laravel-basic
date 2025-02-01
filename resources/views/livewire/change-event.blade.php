<div class="max-w-md mx-auto p-6">
    <label for="citySelect" class="block text-gray-700 font-medium mb-2">Select City:</label>

    <select id="citySelect" class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300 focus:outline-none"
        wire:click="changeEvent($event.target.value)">
        <option value="">-- Select City --</option>
        @foreach($cities as $key => $city)
            <option value="{{ $key }}">{{ $city }}</option>
        @endforeach
    </select>

    <p class="mt-4 text-gray-700">Selected City Name: <span class="font-semibold">{{ $cityName }}</span></p>
</div>
