<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Job Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-2xl font-bold mb-4">{{ $job->title }}</h3>
                    <p class="text-gray-600 mb-2">{{ $job->company }} - {{ $job->location }}</p>
                    @if($job->salary)
                        <p class="text-gray-600 mb-4">Salary: ${{ number_format($job->salary, 2) }}</p>
                    @endif
                    <div class="mb-4">
                        <h4 class="text-lg font-semibold mb-2">Description:</h4>
                        <p>{{ $job->description }}</p>
                    </div>
                    <div class="flex space-x-4">
                        <a href="{{ route('jobs.edit', $job) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                        <form action="{{ route('jobs.destroy', $job) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this job?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>