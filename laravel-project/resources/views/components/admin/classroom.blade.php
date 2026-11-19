<div>
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $title }}</h1>
            <p class="text-sm text-gray-500 dark:text-gray-400">{{ $subtitle }}</p>
        </div>
    </div>

    <div class="relative overflow-x-auto bg-white dark:bg-gray-800 shadow-md rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
                <tr>
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">Class Name</th>
                    <th class="px-4 py-3">Students</th>
                    <th class="px-4 py-3">Major</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($classrooms as $classroom)
                    <tr class="border-b dark:border-gray-700">
                        <td class="px-4 py-3">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3">{{ $classroom->name }}</td>
                        <td class="px-4 py-3 font-medium text-gray-900 dark:text-white">
                            @foreach ($classroom->students as $student)
                                {{ $student->name }}<br>
                            @endforeach
                        </td>
                        <td class="px-4 py-3">{{ $classroom->major }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-6 text-center text-gray-500 dark:text-gray-400">Belum ada data kelas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
