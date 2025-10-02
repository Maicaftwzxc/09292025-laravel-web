<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
     
    <div class="space-y-4">
       <!-- <a href="/jobs/create" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Post a Job</a> -->
        @foreach ($jobs as $job) 
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-red-300 rounded-lg hover:border-orange-700 bg-white/80 backdrop-blur-md">
                <div class="font-bold text-blue-500 text-2xl"> {{$job->employer->name}}</div>
            
                <div> 
                    <strong>{{ $job['title'] }}:</strong> Pays {{$job['salary']}}
                </div>
            </a>           
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>