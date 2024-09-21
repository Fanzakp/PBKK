<!-- resources/views/roles/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-primary leading-tight">
            {{ __('Role Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-secondary overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-primary">
                    <div class="mb-4">
                        <strong>Name:</strong> {{ $role->name }}
                    </div>
                    <div class="mb-4">
                        <strong>Description:</strong> {{ $role->description }}
                    </div>
                    <div class="mb-4">
                        <strong>Created At:</strong> {{ $role->created_at->format('Y-m-d H:i:s') }}
                    </div>
                    <div class="mb-4">
                        <strong>Users with this role:</strong> {{ $role->users->count() }}
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('roles.edit', $role->id) }}" class="bg-accent text-white px-4 py-2 rounded">Edit Role</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>