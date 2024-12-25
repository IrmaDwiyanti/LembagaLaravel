<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('dashboard.user.create') }}" class="bg-blue-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded shadow-lg ml-4">
                    + User baru
                </a>
            </div>
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="overflow-x-auto">

                    <table id="userTable" class="min-w-full table-auto border-collapse border border-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-sm font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th class="px-6 py-3 text-sm font-medium text-gray-500 uppercase tracking-wider">Roles</th>
                                <th class="px-6 py-3 text-sm font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 text-sm font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                <th class="px-6 py-3 text-sm font-medium text-gray-500 uppercase tracking-wider">Password</th>
                                <th class="px-6 py-3 text-sm font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $index => $user)
                            <tr class="border-t hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ ucfirst($user->roles) }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $user->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $user->email }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900 max-w-xs truncate">{{ $user->password }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    <div class="flex space-x-2 ml-8">
                                        <a href="{{ route('dashboard.user.edit', $user->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded text-xs">Edit</a>
                                        <form action="{{ route('dashboard.user.delete', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded text-xs">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="border px-4 py-2 text-center">No users available.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                </div>
            </div>
            <div class="mt-4">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
