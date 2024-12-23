<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Berita Baru') }}
        </h2>
    </x-slot>

    <x-slot name="script">
        @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.7.0/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: 'textarea.content',
                height: 600,
                menubar: true,
                plugins: 'lists link image preview imagetools',
                toolbar: 'undo redo | bold italic underline | bullist numlist | link image | preview', 
                branding: false,
    
                image_title: true,
                automatic_uploads: true,
                images_upload_url: '/uploadImage',  
                file_picker_types: 'image',
                file_picker_callback: function (callback, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');
                    input.onchange = function () {
                        var file = this.files[0];
    
                        var reader = new FileReader();
                        reader.readAsDataURL(file);
                        reader.onload = function () {
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobinfo = blobCache.create(id, file, base64);
                            blobCache.add(blobinfo);
                            callback(blobinfo.blobUrl(), { title: file.name });
                        };
                    };
                    input.click();
                }
            });
        </script>
        @endpush
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg p-6">
                <form method="POST" action="{{ route('pages copy.dashboard.berita.update', $berita->id) }}" enctype="multipart/form-data">
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
                        <textarea name="content" id="content" class="content mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('content', $berita->content) }}</textarea>
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
                        <a href="{{ route('pages copy.dashboard.berita.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded shadow-sm hover:bg-gray-700 text-xs">
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