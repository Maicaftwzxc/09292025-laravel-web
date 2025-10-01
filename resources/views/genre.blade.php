<x-layout>
<x-slot:mainpage>
    <x-slot:heading>
        Genre
    </x-slot:heading>

    <ul>
        <div class="p-6 bg-white bg-opacity-90 rounded-lg shadow-xl"> 
            @foreach ($genres as $genre)
                <li>
                    <a href="/genre/{{ $genres['id'] }}">
                    <strong>{{ $genre['category'] }}</strong> 
                </li>
            @endforeach
        </div>
    </ul>
</x-slot:mainpage>
</x-layout>
