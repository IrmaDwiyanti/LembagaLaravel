<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>

    <x-slot name="script">
        <!-- Menyertakan CKEditor CDN -->
        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>

        <!-- Inisialisasi CKEditor -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                ClassicEditor
                    .create(document.querySelector('#content'))
                    .then(editor => {
                        console.log('Editor initialized', editor);
                    })
                    .catch(error => {
                        console.error('Error initializing CKEditor:', error);
                    });
            });
        </script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg p-6">
                <form method="POST" action="{{ route('dashboard.user.update', $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Roles -->
                    <div class="mb-4">
                        <label for="roles" class="block text-sm font-medium text-gray-700">Roles</label>
                        <input type="text" 
                               name="roles" 
                               id="roles" 
                               value="{{ old('roles', $user->roles) }}" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                               required>
                    </div>

                    <!-- Name -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" 
                               name="name" 
                               id="name" 
                               value="{{ old('name', $user->name) }}" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                               required>
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" 
                               name="email" 
                               id="email" 
                               value="{{ old('email', $user->email) }}" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                               required>
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" 
                               name="password" 
                               id="password" 
                               value="{{ old('password', $user->password) }}" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                               required>
                    </div>

                    <!--roles-->
                    <div class="mb-4">
                        <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                        <select name="roles" id="role" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="1" {{ old('roles', $user->roles ?? '') == 1 ? 'selected' : '' }}>Admin</option>
                            <option value="2" {{ old('roles', $user->roles ?? '') == 2 ? 'selected' : '' }}>Author</option>
                        </select>
                    </div>
                    
                                 

                    <!-- Buttons -->
                    <div class="flex justify-end">
                        <a href="{{ route('dashboard.user.index') }}" 
                           class="bg-gray-500 text-white py-2 px-4 rounded shadow-sm hover:bg-gray-700 text-xs">
                            Batal
                        </a>
                        <button type="submit" 
                                class="ml-3 bg-blue-500 text-white py-2 px-4 rounded shadow-sm hover:bg-blue-700 text-xs">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
