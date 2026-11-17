<div>
    <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Guru</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Masukkan nama guru" required>
    @error('name')
        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="niy" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">NIY</label>
    <input type="number" name="niy" id="niy" value="{{ old('niy') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Contoh: 1000000001" required>
    @error('niy')
        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="subject_id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Mata Pelajaran</label>
    <select id="subject_id" name="subject_id" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500" required>
        <option value="" selected disabled>Pilih mata pelajaran</option>
        @foreach ($subjects as $subject)
            <option value="{{ $subject->id }}" {{ old('subject_id') == $subject->id ? 'selected' : '' }}>{{ $subject->name }}</option>
        @endforeach
    </select>
    @error('subject_id')
        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="start_date" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Tanggal Mulai</label>
    <input type="date" name="start_date" id="start_date" value="{{ old('start_date') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" required>
    @error('start_date')
        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
</div>