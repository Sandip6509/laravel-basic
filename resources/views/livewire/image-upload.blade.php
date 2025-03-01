<form wire:submit.prevent="submit" enctype="multipart/form-data"
    class="max-w-lg mx-auto bg-white p-6 rounded-2xl shadow-xl space-y-6">

    <!-- Success Message -->
    @if (session()->has('message'))
        <div class="flex items-center p-4 mb-4 text-green-800 bg-green-100 border-l-4 border-green-500 rounded-lg">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            {{ session('message') }}
        </div>
    @endif

    <!-- Title Input -->
    <div class="space-y-2">
        <label for="title" class="block text-gray-700 font-semibold">Title:</label>
        <input type="text" id="title" placeholder="Enter title" wire:model="title"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 
                   focus:outline-none transition-all duration-200 shadow-sm">
        @error('title')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <!-- File Input -->
    <div class="space-y-2">
        <label for="file" class="block text-gray-700 font-semibold">Upload File:</label>
        <input type="file" id="file" wire:model="file"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-gray-50 hover:bg-gray-100 
                   focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all duration-200 shadow-sm">
        @error('file')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <!-- Submit Button -->
    <button type="submit"
        class="w-full flex items-center justify-center px-6 py-3 text-white font-semibold 
           bg-green-600 rounded-xl hover:bg-green-700 transition duration-200 ease-in-out 
           focus:ring-2 focus:ring-green-400"
        wire:loading.attr="disabled">

        <!-- Loader (Spinning Circle) -->
        <svg wire:loading class="w-5 h-5 mr-2 animate-spin text-white" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
            </circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4l3-3-3-3v4a8 8 0 01-8 8z"></path>
        </svg>

        <span wire:loading.remove>Save</span>
        <span wire:loading>Saving...</span>
    </button>

</form>
