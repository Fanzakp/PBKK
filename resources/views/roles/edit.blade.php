<!-- resources/views/roles/edit.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-primary leading-tight">
            {{ __('Edit Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-secondary overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-primary">
                    <form method="POST" action="{{ route('roles.update', $role->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-primary">Name</label>
                            <input type="text" name="name" id="name" value="{{ $role->name }}" class="mt-1 block w-full rounded-md border-accent shadow-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-primary">Description</label>
                            <textarea name="description" id="description" rows="3" class="mt-1 block w-full rounded-md border-accent shadow-sm">{{ $role->description }}</textarea>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>{{ __('Update Role') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>