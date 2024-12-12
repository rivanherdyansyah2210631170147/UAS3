<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold mb-6">Data Mahasiswa</h3>

                    @if (session('success'))
                    <div class="mb-4 p-4 bg-red-500 text-white rounded">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="flex justify-between mb-6">
                        <a href="{{ route('mahasiswa-export-excel') }}" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 transition">
                            Export Excel
                        </a>
                        <a href="{{ route('mahasiswa.create') }}" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 transition">
                            Tambah Data Mahasiswa
                        </a>
                    </div>

                    <table class="table-auto w-full border-collapse border border-gray-300 text-sm">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                            <tr>
                                <th class="border px-4 py-2">No</th>
                                <th class="border px-4 py-2">NPM</th>
                                <th class="border px-4 py-2">Nama</th>
                                <th class="border px-4 py-2">Prodi</th>
                                <th class="border px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($mahasiswa as $key => $item)
                            <tr class="{{ $key % 2 === 0 ? 'bg-gray-50 dark:bg-gray-800' : 'bg-white dark:bg-gray-900' }}">
                                <td class="border px-4 py-2 text-center">{{ $key + 1 }}</td>
                                <td class="border px-4 py-2">{{ $item->npm }}</td>
                                <td class="border px-4 py-2">{{ $item->nama }}</td>
                                <td class="border px-4 py-2">{{ $item->prodi }}</td>
                                <td class="border px-4 py-2 text-center">
                                    <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700 transition">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center border px-4 py-2 font-semibold text-gray-500">
                                    Tidak ada data mahasiswa yang tersedia.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>