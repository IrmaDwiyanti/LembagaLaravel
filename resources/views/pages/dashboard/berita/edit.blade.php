<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Berita Baru') }}
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
                .note-editable ul,
                .note-editable ol {
                    color: #000 !important; /* Mengatur warna teks menjadi hitam */
                    margin-left: 20px; /* Memberikan jarak */
                }

                .note-editable ul {
                    list-style-type: disc !important; /* Untuk unordered list */
                }

                .note-editable ol {
                    list-style-type: decimal !important; /* Untuk ordered list */
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
                        <textarea name="content" id="summernote" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            {{ old('content', $berita->content) }}
                        </textarea>
                    </div>
                    

                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">Image Cover</label>
                        <input type="file" name="image" id="image" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @if($berita->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $berita->image) }}" alt="Preview Image" class="w-32 h-32 object-cover rounded">
                            </div>
                        @else
                            <p class="mt-2 text-sm text-gray-500">Tidak ada gambar.</p>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <select name="status" id="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="0" {{ old('status', $berita->status) == '0' ? 'selected' : '' }}>Draft</option>
                            <option value="1" {{ old('status', $berita->status) == '1' ? 'selected' : '' }}>Published</option>
                        </select>
                    </div>

                    <div class="flex justify-end">
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
