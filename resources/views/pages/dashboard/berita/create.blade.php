<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Berita Baru') }}
        </h2>
    </x-slot>

    <x-slot name="script">
        @push('scripts')
            <!-- Summernote Lite CSS -->
            <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
            
            <!-- jQuery -->
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            
            <!-- Summernote Lite JS -->
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>

            <style>
                .note-editable ul {
                    list-style-type: disc; /* Untuk unordered list */
                    margin-left: 20px; /* Memberi jarak */
                }

                .note-editable ol {
                    list-style-type: decimal; /* Untuk ordered list */
                    margin-left: 20px; /* Memberi jarak */
                }

                .note-editor .note-dropdown-menu {
                    box-sizing: content-box;
                }
            </style>
    
            <!-- Inisialisasi Summernote Lite -->
            <script>
                $(document).ready(function () {
                    $('#summernote').summernote({
                        placeholder: 'Masukkan konten di sini...',
                        tabsize: 2,
                        height: 700, // Atur tinggi editor
                        focus: true, // Fokus otomatis saat editor terbuka
                        toolbar: [
                            ['font', ['bold', 'underline', 'italic']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['table', ['table']],
                            ['insert', ['link', 'picture', 'video']],
                            ['view', ['fullscreen', 'codeview', 'help']]

                        ]
                    });
                });
            </script>
        @endpush
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg p-6">
                <form method="POST" action="{{ route('dashboard.berita.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                        <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                    </div>

                    <div class="mb-4">
                        <label for="author" class="block text-sm font-medium text-gray-700">Penulis</label>
                        <input type="text" name="author" id="author" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                    </div>

                    <div class="mb-4">
                        <label for="date" class="block text-sm font-medium text-gray-700">Tanggal</label>
                        <input type="date" name="date" id="date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                    </div>

                    <div class="mt-4">
                        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                        <textarea name="content" id="summernote" class="content mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">Image Cover</label>
                        <input type="file" name="image" id="image" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>

                        <!-- Preview Gambar setelah dipilih -->
                        <div class="mt-2">
                            <img id="image-preview" src="" alt="Preview Gambar" class="w-full h-48 object-cover bg-gray-100" style="display:none;">
                        </div>
                    </div>

                    <!-- Tambahkan dropdown untuk memilih status -->
                    <select name="status" id="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option value="0" {{ old('status', '0') == '0' ? 'selected' : '' }}>Draft</option>
                        <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Published</option>
                    </select>
                        

                    <div class="flex justify-end mt-4 ">
                        <a href="{{ route('dashboard.berita.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded shadow-sm hover:bg-gray-700 text-xs">
                            Batal
                        </a>
                        <button type="submit" class="ml-3 bg-blue-500 text-white py-2 px-4 rounded shadow-sm hover:bg-blue-700 text-xs">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>


