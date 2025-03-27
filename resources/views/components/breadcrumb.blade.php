<nav class="flex py-2 mb-4 text-gray-700 rounded-md" aria-label="breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        @foreach ($links as $index => $link)
            @if ($index < count($links) - 1)
                <li class="inline-flex items-center">
                    <a href="{{ $link['url'] }}" wire:navigate class="inline-flex items-center text-sm font-medium text-indigo-200 hover:text-indigo-300">
                        {{ $link['name'] }}
                    </a>
                    <svg class="w-4 h-4 ml-4 text-gray-600" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.293 14.707a1 1 0 010-1.414L10.586 10 6.293 5.707a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </li>
            @else
                <li class="text-sm font-medium text-gray-500">{{ $link['name'] }}</li>
            @endif
        @endforeach
    </ol>
</nav>