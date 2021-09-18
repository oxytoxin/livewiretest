<div class="p-8 container mx-auto">
    {{-- The Master doesn't talk, he acts. --}}
    <input type="text" wire:model="query" class="ring-2">
    <div class="space-y-4">
        @forelse ($users as $user)
            <h3>{{ $user->name }}</h3>
        @empty
            <h4>No users found.</h4>
        @endforelse
    </div>
    {{ $users->links() }}
</div>
