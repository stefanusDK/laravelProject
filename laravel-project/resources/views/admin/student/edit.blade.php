<x-admin.layout>
    <div class="max-w-2xl">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $title }}</h1>
            <p class="text-sm text-gray-500 dark:text-gray-400">{{ $subtitle }}</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.student.update', $student->id) }}" method="POST"
            class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 grid gap-4 grid-cols-2">
            @csrf
            @method('PUT')

            <div class="col-span-2">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Siswa</label>
                <input type="text" name="name" id="name" value="{{ old('name', $student->name) }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="nisn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NISN</label>
                <input type="text" name="nisn" id="nisn" value="{{ old('nisn', $student->nisn) }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="classroom_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Classroom</label>
                <select name="classroom_id" id="classroom_id" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" disabled>Pilih kelas</option>
                    @foreach ($classrooms as $classroom)
                        <option value="{{ $classroom->id }}" @selected(old('classroom_id', $student->classroom_id) == $classroom->id)>
                            {{ $classroom->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-span-2">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $student->email) }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="col-span-2">
                <label for="sekolah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sekolah</label>
                <input type="text" name="sekolah" id="sekolah" value="{{ old('sekolah', $student->sekolah) }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ old('tempat_lahir', $student->tempat_lahir) }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir', $student->tanggal_lahir) }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <div class="col-span-2 flex justify-end gap-2 mt-2">
                <a href="/admin/student"
                    class="text-gray-700 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-4 py-2.5 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-700">
                    Kembali
                </a>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-admin.layout>
