@props(['count' => 0])

<p class="flex text-gray-700">
    <svg fill="none" viewBox="0 0 24 24" class="w-6 h-6" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
    </svg>
    {{ $count }}
</p>