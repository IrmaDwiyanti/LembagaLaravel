<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Berita Baru') }}
        </h2>
    </x-slot>

    <x-slot name="script">
        <!-- Menyertakan CKEditor CDN -->
        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
    
        <!-- Inisialisasi CKEditor -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Inisialisasi CKEditor pada textarea dengan id 'content'
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
                <form method="POST" action="{{ route('dashboard.berita.update', $berita->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $berita->title) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                    </div>

                    <div class="mb-4">
                        <label for="author" class="block text-sm font-medium text-gray-700">Penulis</label>
                        <input type="text" name="author" id="author" value="{{ old('author', $berita->author) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                    </div>

                    <div class="mb-4">
                        <label for="date" class="block text-sm font-medium text-gray-700">Tanggal</label>
                        <input type="date" name="date" id="date" value="{{ old('date', $berita->date) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                    </div>

                    <div class="mt-4">
                        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                        <textarea name="content" id="content" class="editor mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('content', $berita->content) }}</textarea>
                    </div> 
                    
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" name="image" id="image" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @if($berita->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $berita->image) }}" alt="Preview Image" class="w-32 h-32 object-cover rounded">
                            </div>
                        @else
                            <p class="mt-2 text-sm text-gray-500">Tidak ada gambar.</p>
                        @endif
                    </div>

                    <div class="flex justify-end">
                        <a href="{{ route('dashboard.berita.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded shadow-sm hover:bg-gray-700">
                            Batal
                        </a>
                        <button type="submit" class="ml-3 bg-blue-500 text-white py-2 px-4 rounded shadow-sm hover:bg-blue-700">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
