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
                <a href="{{ route('dashboard.berita.create') }}" class="bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                    + Create Document
                </a>
            </div>
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="crudTable" class="min-w-full table-auto border-collapse border border-gray-200">
                        <thead>
                        <tr>
                            <th class="border px-4 py-2">ID</th>
                            <th class="border px-4 py-2">Judul</th>
                            <th class="border px-4 py-2">Author</th>
                            <th class="border px-4 py-2">Tanggal</th>
                            <th class="border px-4 py-2">Konten</th>
                            <th class="border px-4 py-2">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($berita as $item)
                            <tr>
                                <td class="border px-4 py-2">{{ $item->id }}</td>
                                <td class="border px-4 py-2">{{ $item->title }}</td>
                                <td class="border px-4 py-2">{{ $item->author }}</td>
                                <td class="border px-4 py-2">{{ $item->date }}</td>
                                <td class="border px-4 py-2">{{ Str::limit($item->content, 50) }}</td>
                                <td class="border px-4 py-2">
                                    <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded">Edit</a>
                                    <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="border px-4 py-2 text-center">Data tidak tersedia.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>