<form class="max-w-lg mx-auto">
    <!-- Title Input -->
    <div class="mb-4">
        <label for="input" class="block text-gray-700 font-semibold mb-2">Title:</label>
        <input type="text" id="input"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
            placeholder="Enter Title" wire:model="title">
        @error('title')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <!-- Body Input -->
    <div class="mb-4">
        <label for="body" class="block text-gray-700 font-semibold mb-2">Body:</label>
        <textarea id="body"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
            placeholder="Enter Body" wire:model="body"></textarea>
        @error('body')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <!-- Save Button -->
    <button wire:click.prevent="save"
        class="w-15 bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
        Save
    </button>
</form>
