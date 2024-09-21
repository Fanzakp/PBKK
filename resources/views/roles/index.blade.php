<!-- resources/views/roles/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-primary leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-secondary overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-primary">
                    <div class="mb-4">
                        <a href="{{ route('roles.create') }}" class="bg-accent text-white px-4 py-2 rounded">Create New Role</a>
                    </div>
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b border-accent text-left text-xs leading-4 font-medium uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 border-b border-accent text-left text-xs leading-4 font-medium uppercase tracking-wider">Description</th>
                                <th class="px-6 py-3 border-b border-accent text-left text-xs leading-4 font-medium uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-accent">{{ $role->name }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-accent">{{ $role->description }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-accent">
                                        <a href="{{ route('roles.edit', $role->id) }}" class="text-accent hover:text-accent-dark">Edit</a>
                                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700 ml-2" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>