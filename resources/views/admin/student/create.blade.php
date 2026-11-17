<div>
    <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Siswa</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Masukkan nama siswa" required>
    @error('name')
        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="nis" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">NIS</label>
    <input type="number" name="nis" id="nis" value="{{ old('nis') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Masukkan NIS" required>
    @error('nis')
        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="classroom_id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
    <select id="classroom_id" name="classroom_id" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500" required>
        <option value="" selected disabled>Pilih kelas</option>
        @foreach ($classrooms as $classroom)
            <option value="{{ $classroom->id }}" {{ old('classroom_id') == $classroom->id ? 'selected' : '' }}>{{ $classroom->name }}</option>
        @endforeach
    </select>
    @error('classroom_id')
        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="address" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
    <textarea id="address" name="address" rows="3" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Masukkan alamat siswa" required>{{ old('address') }}</textarea>
    @error('address')
        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
</div>