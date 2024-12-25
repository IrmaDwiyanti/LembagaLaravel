<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documents') }}
        </h2>
    </x-slot>
    
    <x-slot name="script">
        <!-- Script JavaScript bisa ditambahkan jika ada -->
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('dashboard.berita.create') }}" class="bg-blue-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded shadow-lg  ml-4">
                    + Create Document
                </a>
            </div>
            
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="overflow-x-auto">

                    <table id="crudTable" class="min-w-full table-auto border-collapse border border-gray-200 ">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-sm font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th class="px-6 py-3 text-sm font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-sm font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                                <th class="px-6 py-3 text-sm font-medium text-gray-500 uppercase tracking-wider">Author</th>
                                <th class="px-6 py-3 text-sm font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                                <th class="px-6 py-3 text-sm font-medium text-gray-500 uppercase tracking-wider">Konten</th>
                                <th class="px-6 py-3 text-sm font-medium text-gray-500 uppercase tracking-wider">Cover</th>
                                <th class="px-6 py-3 text-sm font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-sm font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($berita as $index => $item) 
                            <tr class="border-t hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $item->id }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ Str::limit($item->title, 30) }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $item->author }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $item->date }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ Str::limit(strip_tags($item->content), 35) }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    @if($item->image)
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-16 h-16 object-cover rounded-lg">
                                    @else
                                        <span class="text-gray-500">Tidak ada gambar</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    @if($item->status === "1")
                                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">Published</span>
                                    @else
                                        <span class="bg-red-500 text-white py-1 px-2 rounded-full text-xs">Draft</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('dashboard.berita.detail', $item->id) }}" class="bg-gray-500 hover:bg-gray-700 text-white px-4 py-2 rounded text-xs">Detail</a>
                                        <a href="{{ route('dashboard.berita.edit', $item->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded text-xs">Edit</a>
                                        <form action="{{ route('dashboard.berita.delete', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded text-xs">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="border px-4 py-2 text-center">Data tidak tersedia.</td> 
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
            <div class="mt-4">
                {{ $berita->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
