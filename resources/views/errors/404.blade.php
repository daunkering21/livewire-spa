<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | Lotto Group</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-[#141424] to-[#0a0a15] flex items-center justify-center min-h-screen px-4">
    <div class="w-full max-w-md bg-[#1e1e2e] rounded-2xl shadow-2xl border border-[#2c2c3e] text-center p-8">
        
        <h1 class="text-5xl font-bold text-white mb-4">404</h1>
        <h2 class="text-2xl text-gray-300 mb-4">Page Not Found</h2>
        
        <p class="text-gray-400 mb-6">
            Oops! The page you are looking for 
            seems to have gone missing or does not exist.
        </p>
    
        <a href="{{ url()->previous() }}" class="inline-block py-3 px-6 bg-gradient-to-r from-purple-600 to-blue-600 text-white rounded-lg hover:from-purple-700 hover:to-blue-700 transition duration-300 ease-in-out transform hover:scale-105">
            Go back
        </a>
        
        <div class="text-center text-gray-400 mt-6 text-sm">
            © Copyright 2010 - 2025 L2I All Rights Reserved.
        </div>
    </div>
</body>
</html>