<x-layout>
    <x-slot:heading>
    Job Details
    </x-slot:heading>

    <h2 class="text-lg font-semibold mb-4">
        {{ $job['title'] }}
    </h2>

    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>

</x-layout>