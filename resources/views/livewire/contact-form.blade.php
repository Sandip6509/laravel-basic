<form wire:submit.prevent="submit" class="max-w-lg mx-auto">
    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-medium">Name</label>
        <input type="text" placeholder="Enter name" wire:model="name"
            class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
        @error('name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-4">
        <label for="email" class="block text-gray-700 font-medium">Email</label>
        <input type="text" placeholder="Enter email" wire:model="email"
            class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
        @error('email')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-4">
        <label for="body" class="block text-gray-700 font-medium">Body</label>
        <textarea placeholder="Enter body" wire:model="body"
            class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300 focus:outline-none"></textarea>
        @error('body')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit"
        class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
        Save Contact
    </button>
</form>
