<!-- resources/views/users/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-primary leading-tight">
            {{ __('User Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-secondary overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-primary">
                    <div class="mb-4">
                        <strong>Name:</strong> {{ $user->name }}
                    </div>
                    <div class="mb-4">
                        <strong>Email:</strong> {{ $user->email }}
                    </div>
                    <div class="mb-4">
                        <strong>Role:</strong> {{ $user->role->name }}
                    </div>
                    <div class="mb-4">
                        <strong>Created At:</strong> {{ $user->created_at->format('Y-m-d H:i:s') }}
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('users.edit', $user->id) }}" class="bg-accent text-white px-4 py-2 rounded">Edit User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>