<x-layout>
    {{-- Heading slot is a direct child of <x-layout> --}}
    <x-slot:heading>
        Genre: {{ $genre['category'] }}
    </x-slot:heading>

    <x-slot:mainpage>
        <div class="p-6 bg-white bg-opacity-90 rounded-lg shadow-xl text-center">
            
            {{-- Use the singular $genre variable --}}
            <h2 class="font-bold text-2xl mb-2">{{ $genre['category'] }}</h2>
            
            <p class="text-lg text-gray-700 mb-4">
                This is a good choice! Enjoy your music in the **{{ $genre['category'] }}** genre.
            </p>

            <a href="/genres" class="mt-4 inline-block text-sm text-indigo-600 hover:text-indigo-800 font-medium">← Back to all Genres</a>
        </div>
    </x-slot:mainpage>
</x-layout>