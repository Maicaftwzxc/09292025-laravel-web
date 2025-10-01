<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
     
    <ul>
     @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}" class="underline text-blue-600">
            <strong>{{ $job['title'] }}:</strong> Pays {{$job['salary']}}
            </a>
            
        </li>
     @endforeach
    </ul>
</x-layout>