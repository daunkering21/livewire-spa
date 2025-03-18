<div>
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>
    <form class="space-y-4">
        <div>
            <label for="loginEmail" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" id="loginEmail" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="email@example.com">
        </div>
        <div>
            <label for="loginPassword" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" id="loginPassword" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="••••••••">
        </div>
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input id="remember" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <label for="remember" class="ml-2 block text-sm text-gray-700">Ingat saya</label>
            </div>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">Login</button>
    </form>
</div>
