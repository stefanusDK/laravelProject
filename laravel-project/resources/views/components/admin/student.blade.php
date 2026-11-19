<div>
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $title }}</h1>
            <p class="text-sm text-gray-500 dark:text-gray-400">{{ $subtitle }}</p>
        </div>
        <a href="#" data-modal-target="tambah-siswa-modal" data-modal-toggle="tambah-siswa-modal" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2.5">
            + Tambah Siswa
        </a>
    </div>

    @if (session('success'))
        <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800">
            {{ session('success') }}
        </div>
    @endif

    <div class="relative overflow-x-auto bg-white dark:bg-gray-800 shadow-md rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
                <tr>
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">NISN</th>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Classroom</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">TTL</th>
                    <th class="px-4 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                    <tr class="border-b dark:border-gray-700">
                        <td class="px-4 py-3">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3">{{ $student->nisn }}</td>
                        <td class="px-4 py-3 font-medium text-gray-900 dark:text-white">{{ $student->name }}</td>
                        <td class="px-4 py-3">{{ $student->classroom->name }}</td>
                        <td class="px-4 py-3">{{ $student->email }}</td>
                        <td class="px-4 py-3">
                            {{ $student->tempat_lahir }}, {{ \Carbon\Carbon::parse($student->tanggal_lahir)->format('d M Y') }}
                        </td>
                        <td class="px-4 py-3">
                            <a href="{{ route('admin.student.edit', $student->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('admin.student.destroy', $student->id) }}" method="POST" class="inline"
                                onsubmit="return confirm('Yakin mau hapus data {{ $student->name }}?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline ml-3">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-6 text-center text-gray-500 dark:text-gray-400">
                            Belum ada data siswa.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @include('admin.student.create')
</div>
