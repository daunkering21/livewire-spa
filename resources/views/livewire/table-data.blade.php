<div wire:init="load" class="bg-white shadow rounded-md overflow-x-auto">
    <table class="min-w-full table-fixed border-collapse">
        <thead class="bg-gray-100">
            <tr>
                <th class="w-1/4 px-4 py-3 text-left text-sm font-medium text-gray-700 border-b">Name</th>
                <th class="w-3/4 px-4 py-3 text-left text-sm font-medium text-gray-700 border-b">Email</th>
            </tr>
        </thead>
        <tbody>
            @if ($isLoading)
                @for ($i = 0; $i < 5; $i++)
                    <tr class="h-12">
                        <td class="px-4 py-3 border-b">
                            <div class="w-3/4 h-4 bg-gray-200 rounded animate-pulse"></div>
                        </td>
                        <td class="px-4 py-3 border-b">
                            <div class="w-full h-4 bg-gray-200 rounded animate-pulse"></div>
                        </td>
                    </tr>
                @endfor
            @else
                @foreach ($rows as $user)
                    <tr class="h-12 hover:bg-gray-50 transition">
                        <td class="px-4 py-3 border-b text-sm text-gray-800">{{ $user->name }}</td>
                        <td class="px-4 py-3 border-b text-sm text-gray-800">{{ $user->email }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
