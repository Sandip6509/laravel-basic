<div x-data x-init="
    let observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                @this.call('loadMore'); // Load more when the target becomes visible
            }
        });
    });

    observer.observe(document.querySelector('#load-more-trigger'));
">
    <!-- User Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-3 px-4 border-b text-left font-semibold text-gray-700">No.</th>
                    <th class="py-3 px-4 border-b text-left font-semibold text-gray-700">Name</th>
                    <th class="py-3 px-4 border-b text-left font-semibold text-gray-700">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr class="{{ $loop->even ? 'bg-gray-50' : 'bg-white' }} hover:bg-gray-100 transition-colors">
                        <td class="py-3 px-4 border-b text-gray-700">{{ $user->id }}</td>
                        <td class="py-3 px-4 border-b text-gray-700">{{ $user->name }}</td>
                        <td class="py-3 px-4 border-b text-gray-700">{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Load More Trigger -->
    @if($users->hasMorePages())
        <div id="load-more-trigger" class="mt-4 text-center">
            <span class="text-gray-500">Loading more users...</span>
        </div>
    @endif

    <!-- Loading Spinner -->
    <div wire:loading class="mt-4 flex justify-center">
        <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-gray-900"></div>
    </div>
</div>
