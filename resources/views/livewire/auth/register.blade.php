<div>
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Register</h2>
    <form class="space-y-4">
        <div>
            <label for="registerName" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
            <input type="text" id="registerName" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Nama Lengkap">
        </div>
        <div>
            <label for="registerEmail" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" id="registerEmail" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="email@example.com">
        </div>
        <div>
            <label for="registerPassword" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" id="registerPassword" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="••••••••">
        </div>
        <div>
            <label for="registerConfirmPassword" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password</label>
            <input type="password" id="registerConfirmPassword" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="••••••••">
        </div>
        <div class="flex items-center">
            <input id="terms" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
            <label for="terms" class="ml-2 block text-sm text-gray-700">Saya setuju dengan <a href="#" class="text-blue-600 hover:underline">Syarat & Ketentuan</a></label>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">Register</button>
    </form>
</div>