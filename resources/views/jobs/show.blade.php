<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
   
    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
<div>
    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>
</div>
    
    <a href="/jobs/{{$job->id}}/edit" class="my-5px text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit Job</a>

</x-layout>