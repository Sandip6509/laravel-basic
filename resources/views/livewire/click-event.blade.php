<div>
    <div class='flex items-center justify-center gap-2'>
        <button type='button' wire:click="showMessage"
            class='py-2.5 px-6 text-sm bg-indigo-500 text-white rounded-lg cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-indigo-700'>Click
            Me</button>
        <button type='button' wire:click="showUserId({{ $userId }})"
            class='py-2.5 px-6 text-sm bg-indigo-500 text-white rounded-lg cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-indigo-700'>Click
            Me</button>
    </div>
    <div class='mt-5 text-center'>
        <p class='text-lg font-semibold text-green-500'>{{ $message }}</p>
    </div>
</div>
