<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
    <style>
        .page {
            display: none;
        }
        .active {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full mx-auto p-6">

        <div class="bg-white rounded-lg shadow-lg p-8">
          
            <div class="mb-6 flex justify-center space-x-4">
                <a href="/login" wire:navigate.hover class="{{ Request::is('login') ? 'text-blue-600': 'text-gray-500'}} font-medium py-1 px-3 rounded hover:bg-blue-50 transition">Login</a>
                <a href="/register" wire:navigate.hover class="{{ Request::is('register') ? 'text-blue-600': 'text-gray-500'}} font-medium py-1 px-3 rounded hover:bg-blue-50 transition">Register</a>
                <a href="/lupa" wire:navigate.hover class="{{ Request::is('lupa') ? 'text-blue-600': 'text-gray-500'}} font-medium py-1 px-3 rounded hover:bg-blue-50 transition">Lupa Password</a>
            </div>

            {{ $slot }}
            
        </div>
    </div>
    @livewireScripts
</body>
</html>