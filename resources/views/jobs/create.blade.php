<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
 

<form class="max-w-sm mx-auto" method="POST" action="/jobs">
    @csrf
    <div class="mb-5">
      <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your title</label>
      <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Title" required />
   @error('title')
     <p class="text-xs text-red-500 font-samibold">  {{$message}}</p>
   @enderror
    </div>
    <div class="mb-5">
      <label for="salary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your salary</label>
      <input type="text" name="salary" id="salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
      @error('salary')
      <p class="text-xs text-red-500 font-samibold">  {{$message}}</p>
    @enderror
    </div>
  
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
  
</x-layout>