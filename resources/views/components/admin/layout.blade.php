<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" /> --}}
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="antialiased bg-gray-900 min-h-screen">

        <x-admin.navbar />

        <!-- Sidebar -->

        <x-admin.sidebar />

        <main class="p-4 md:ml-64 h-auto pt-20">
            @if (session('success'))
                <div class="mb-4 rounded-lg border border-green-200 bg-green-50 p-4 text-sm text-green-800 dark:border-green-800 dark:bg-gray-800 dark:text-green-400">
                    {{ session('success') }}
                </div>
            @endif

            {{-- $slot adalah variable untuk mengambil data dari pengirim --}}
            {{ $slot }}
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</body>

</html>