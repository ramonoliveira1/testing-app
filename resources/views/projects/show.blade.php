<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __($project->name) }}
            </h2>
            <p class="mt-4">
                <strong class="font-bold text-{{ $project->color($project->status) }}-400">{{ mb_strtoupper($project->status) }}</strong>
            </p>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach($tasks as $task)
                <a href="#" class="mb-4 block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $task->name }}</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $task->description }}</p>
                    <p class="mt-2 text-gray-400">Status: <strong class="font-bold text-{{ $task->color($task->status) }}-400">{{ mb_strtoupper($task->status) }}</strong></p>
                </a>
            @endforeach
        </div>
    </div>
</x-app-layout>
