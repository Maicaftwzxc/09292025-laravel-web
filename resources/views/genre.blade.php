<x-layout>
    <x-slot:heading>
        All Music Genres
    </x-slot:heading>

    <x-slot:mainpage>
        <div class="p-6 bg-white bg-opacity-90 rounded-lg shadow-xl"> 
            <ul class="space-y-2">
                @foreach ($genres as $genre)
                    <li>
                        {{-- Use the singular $genre variable for the ID in the link --}}
                        <a href="/genres/{{ $genre['id'] }}" class="text-xl text-blue-600 hover:text-blue-800 font-semibold transition duration-150 ease-in-out">
                            {{ $genre['category'] }} 
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-slot:mainpage>
</x-layout>
