<div>
    <h1 class="text-3xl font-semibold text-indigo-300 mb-8">Welcome back, <span class="capitalize">{{ auth()->user()->username }}!</span></h1>
    
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

        <div class="border border-indigo-900 rounded-lg shadow-sm p-6">
          <p class="text-sm text-indigo-200 mb-1">Total Users</p>
          <p class="text-2xl font-semibold text-indigo-200">{{ $userCount }}</p>
        </div>
    
        <div class="border border-indigo-900 rounded-lg shadow-sm p-6">
          <p class="text-sm text-indigo-200 mb-1">Example</p>
          <p class="text-2xl font-semibold text-indigo-200">Lorem, ipsum.</p>
        </div>
    
        <div class="border border-indigo-900 rounded-lg shadow-sm p-6">
          <p class="text-sm text-indigo-200 mb-1">Example</p>
          <p class="text-2xl font-semibold text-indigo-200">Lorem, ipsum.</p>
        </div>

        <div class="border border-indigo-900 rounded-lg shadow-sm p-6">
          <p class="text-sm text-indigo-200 mb-1">Example</p>
          <p class="text-2xl font-semibold text-indigo-200">Lorem, ipsum.</p>
        </div>

    </div>

    <!-- Master Action Toolbar -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-4 pt-4">
        <!-- Left Actions -->
        <div class="flex flex-wrap gap-2">
        <button class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium py-2 px-4 rounded">
            Add New
        </button>
        <button class="bg-yellow-600 hover:bg-yellow-700 text-white text-sm font-medium py-2 px-4 rounded">
            Edit
        </button>
        <button class="bg-red-600 hover:bg-red-700 text-white text-sm font-medium py-2 px-4 rounded">
            Delete
        </button>
        <button class="bg-gray-600 hover:bg-gray-700 text-white text-sm font-medium py-2 px-4 rounded">
            Filter
        </button>
        </div>
    
        <!-- Global Search -->
        <div class="relative w-full md:w-64">
        <input type="text" placeholder="Search all..." class="w-full px-4 py-2 pr-10 text-sm bg-gray-800 border text-indigo-100 border-indigo-950 rounded focus:outline-none focus:border-indigo-500 placeholder:text-sm placeholder:text-indigo-300">
        </div>
    </div>
    
    <div class="pb-4 text-white">
        <div class="overflow-x-auto rounded-lg shadow">
            <table class="min-w-full divide-y divide-indigo-800 bg-gray-800">
                <thead>
                    <tr class="bg-indigo-900">
                        <th class="px-6 py-3 text-left text-xs font-semibold text-indigo-200 uppercase tracking-wider">
                            <a href="?sortName=" wire:navigate="">Name</a>
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-indigo-200 uppercase tracking-wider">
                            <a href="?sortEmail=" wire:navigate="">Email</a>
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-indigo-200 uppercase tracking-wider">
                            <a href="?sortStatus=" wire:navigate="">Status</a>
                        </th>
                        <th class="px-6 py-3 text-right text-xs font-semibold text-indigo-200 uppercase tracking-wider w-20">Actions</th>
                    </tr>

                    <tr>
                        <th class="px-6 py-2">
                            <input type="text" placeholder="Search name" class="w-full px-2 py-1 text-sm text-indigo-100 bg-gray-900 border border-indigo-950 rounded focus:outline-none focus:border-indigo-200 placeholder-gray-500 placeholder:text-xs">
                        </th>
                        <th class="px-6 py-2">
                            <input type="text" placeholder="Search email" class="w-full px-2 py-1 text-sm text-indigo-100 bg-gray-900 border border-indigo-950 rounded focus:outline-none focus:border-indigo-200 placeholder-gray-500 placeholder:text-xs">
                        </th>
                        <th class="px-6 py-2">
                            <input type="text" placeholder="Search status" class="w-full px-2 py-1 text-sm text-indigo-100 bg-gray-900 border border-indigo-950 rounded focus:outline-none focus:border-indigo-200 placeholder-gray-500 placeholder:text-xs">
                        </th>
                        <th class="px-6 py-2 text-right"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-indigo-800">
                    <tr class="hover:bg-indigo-700 transition">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white">admin</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-indigo-100">admin@example.com</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-600 text-white">
                        Active
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                        <a href="#" class="text-blue-400 hover:text-white transition">View</a>
                        <a href="#" class="text-indigo-300 hover:text-white transition">Edit</a>
                        <a href="#" class="text-red-400 hover:text-white transition">Delete</a>
                    </td>
                    </tr>

                    <tr class="hover:bg-indigo-700 transition">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white">dedaunan</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-indigo-100">dedaunan@example.com</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-600 text-white">
                        Active
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                        <a href="#" class="text-blue-400 hover:text-white transition">View</a>
                        <a href="#" class="text-indigo-300 hover:text-white transition">Edit</a>
                        <a href="#" class="text-red-400 hover:text-white transition">Delete</a>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

      
</div>