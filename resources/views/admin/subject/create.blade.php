<div>
    <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Mata Pelajaran</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Contoh: Pemrograman Web" required>
    @error('name')
        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
</div>