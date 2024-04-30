<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased ">
    <div class=" bg-gray-100 ">
        <livewire:layout.navigation />
        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif
        <div class="grid grid-cols-8">
            <div class="col-span-1">
                <!-- Sidebar -->
                <div class="bg-gray-200 dark:bg-gray-800 p-4 h-96 text-white">
                    <ul>
                        <li><a href="/manage" wire:navigate>مدیریت مقاله ها</a></li>
                        <li><a href="/create" wire:navigate>ایجاد مقاله</a></li>
                    </ul>
                </div>
            </div>

            <!-- Page Content -->
            <div class="col-span-7">

                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>
</body>

</html>
