<div class="max-w-2xl mx-auto p-8 bg-white shadow-xl rounded-lg border border-gray-200">
    @if (!empty($successMessage))
        <div class="p-4 mb-4 text-green-700 bg-green-100 border border-green-400 rounded-lg text-center">
            {{ $successMessage }}
        </div>
    @endif

    <div class="flex justify-center mb-8">
        <div class="flex space-x-6">
            <a href="#step-1"
                class="w-12 h-12 flex items-center justify-center rounded-full text-white font-bold text-lg transition {{ $currentStep != 1 ? 'bg-gray-300' : 'bg-blue-600' }} shadow-md">1</a>
            <a href="#step-2"
                class="w-12 h-12 flex items-center justify-center rounded-full text-white font-bold text-lg transition {{ $currentStep != 2 ? 'bg-gray-300' : 'bg-blue-600' }} shadow-md">2</a>
            <a href="#step-3"
                class="w-12 h-12 flex items-center justify-center rounded-full text-white font-bold text-lg transition {{ $currentStep != 3 ? 'bg-gray-300' : 'bg-blue-600' }} shadow-md">3</a>
        </div>
    </div>

    <div class="{{ $currentStep != 1 ? 'hidden' : '' }}" id="step-1">
        <h3 class="text-3xl font-semibold mb-6 text-center text-gray-800">Step 1</h3>
        <div class="mb-6">
            <label class="block text-gray-700 font-semibold mb-2">Product Name:</label>
            <input type="text" wire:model="name" class="w-full p-4 border rounded-lg focus:ring focus:ring-blue-300">
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 font-semibold mb-2">Product Amount:</label>
            <input type="number" wire:model="amount"
                class="w-full p-4 border rounded-lg focus:ring focus:ring-blue-300">
            @error('amount')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 font-semibold mb-2">Product Description:</label>
            <textarea wire:model="description" class="w-full p-4 border rounded-lg focus:ring focus:ring-blue-300"></textarea>
            @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <button wire:click="firstStepSubmit"
            class="w-full py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition shadow-md">Next</button>
    </div>

    <div class="{{ $currentStep != 2 ? 'hidden' : '' }}" id="step-2">
        <h3 class="text-3xl font-semibold mb-6 text-center text-gray-800">Step 2</h3>
        <div class="mb-6">
            <label class="inline-flex items-center cursor-pointer">
                <input type="checkbox" wire:model="status" class="sr-only peer">
                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600 dark:peer-checked:bg-blue-600"></div>
                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                    {{ $status ? 'Active' : 'Inactive' }}
                </span>
            </label>
            @error('status')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 font-semibold mb-2">Product Stock:</label>
            <input type="number" wire:model="stock"
                class="w-full p-4 border rounded-lg focus:ring focus:ring-blue-300">
            @error('stock')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex justify-between mt-6">
            <button wire:click="back(1)"
                class="py-3 px-6 bg-red-500 text-white rounded-lg hover:bg-red-600 transition shadow-md">Back</button>
            <button wire:click="secondStepSubmit"
                class="py-3 px-6 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition shadow-md">Next</button>
        </div>
    </div>

    <div class="{{ $currentStep != 3 ? 'hidden' : '' }}" id="step-3">
        <h3 class="text-3xl font-semibold mb-6 text-center text-gray-800">Step 3</h3>
        <table class="w-full border-collapse border border-gray-300">
            <tr class="border-b border-gray-300">
                <td class="p-4 font-semibold">Product Name:</td>
                <td class="p-4">{{ $name }}</td>
            </tr>
            <tr class="border-b border-gray-300">
                <td class="p-4 font-semibold">Product Amount:</td>
                <td class="p-4">{{ $amount }}</td>
            </tr>
            <tr class="border-b border-gray-300">
                <td class="p-4 font-semibold">Product Status:</td>
                <td class="p-4">{{ $status ? 'Active' : 'DeActive' }}</td>
            </tr>
            <tr class="border-b border-gray-300">
                <td class="p-4 font-semibold">Product Description:</td>
                <td class="p-4">{{ $description }}</td>
            </tr>
            <tr>
                <td class="p-4 font-semibold">Product Stock:</td>
                <td class="p-4">{{ $stock }}</td>
            </tr>
        </table>
        <div class="flex justify-between mt-6">
            <button type="button" wire:click="back(2)"
                class="py-3 px-6 bg-red-500 text-white rounded-lg hover:bg-red-600 transition shadow-md">Back</button>
            <button type="button" wire:click="submitForm"
                class="py-3 px-6 bg-green-600 text-white rounded-lg hover:bg-green-700 transition shadow-md">Finish</button>
        </div>
    </div>
</div>
