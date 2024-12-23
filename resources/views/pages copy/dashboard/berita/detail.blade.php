<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Berita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg p-6">
                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Judul</h3>
                    <p class="mt-1 text-sm text-gray-700">{{ $berita->title }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Penulis</h3>
                    <p class="mt-1 text-sm text-gray-700">{{ $berita->author }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Tanggal</h3>
                    <p class="mt-1 text-sm text-gray-700">{{ \Carbon\Carbon::parse($berita->date)->format('d M Y') }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Konten</h3>
                    <div class="mt-1 text-sm text-gray-700">
                        {!! $berita->content !!}
                    </div>                    
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Status</h3>
                    <div class="mt-1 text-sm text-gray-700">
                        {{ $berita->status === "1" ? 'Published' : 'Draft' }}
                    </div>
                </div>
                

                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Cover</h3>
                    @if($berita->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $berita->image) }}" alt="Preview Image" class="w-64 h-64 object-cover rounded">
                        </div>
                    @else
                        <p class="mt-2 text-sm text-gray-500">Tidak ada gambar.</p>
                    @endif
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('pages copy.dashboard.berita.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded shadow-sm hover:bg-gray-700 text-xs">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
