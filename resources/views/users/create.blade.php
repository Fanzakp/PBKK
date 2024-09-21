<!-- resources/views/users/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-primary leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-secondary overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-primary">
                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-primary">Name</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-accent shadow-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-primary">Email</label>
                            <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-accent shadow-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-primary">Password</label>
                            <input type="password" name="password" id="password" class="mt-1 block w-full rounded-md border-accent shadow-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="role" class="block text-sm font-medium text-primary">Role</label>
                            <select name="role_id" id="role" class="mt-1 block w-full rounded-md border-accent shadow-sm">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>{{ __('Create User') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>