<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jobs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold">Job Listings</h3>
                        <a href="{{ route('jobs.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Create New Job
                        </a>
                    </div>
                    @foreach ($jobs as $job)
                        <div class="mb-4 p-4 border rounded">
                            <h4 class="text-xl font-bold">{{ $job->title }}</h4>
                            <p class="text-gray-600">{{ $job->company }} - {{ $job->location }}</p>
                            <p class="mt-2">{{ Str::limit($job->description, 150) }}</p>
                            <div class="mt-2">
                                <a href="{{ route('jobs.show', $job) }}" class="text-blue-500 hover:underline">View Details</a>
                            </div>
                        </div>
                    @endforeach
                    {{ $jobs->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>