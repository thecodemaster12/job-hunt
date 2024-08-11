<x-layout>
    <x-slot:pageTitle>Jobs</x-slot:pageTitle>

    <a class="bg-blue-700 text-white py-3 px-4 rounded-md font-bold hover:bg-blue-500" href="/create">Create new Job</a>

    @forelse ($jobs as $job)        
    <x-job>
        <x-slot:jobTitle>{{$job->title}}</x-slot:jobTitle>
        <x-slot:jobTime>Full-Time</x-slot:jobTime>
        <x-slot:jobLocation>{{$job->address}}</x-slot:jobLocation>
        <x-slot:salary>{{$job->salary}}</x-slot:salary>
        <x-slot:deadline>{{$job->deadline}}</x-slot:deadline>
        <x-slot:publish>{{$job->publish}}</x-slot:publish>
        <x-slot:id>{{$job->id}}</x-slot:id>
    </x-job>
    @empty
    <h1
    class="text-center rounded-md bg-red-50 px-2 py-1 text-lg font-medium text-red-700 ring-1 ring-inset ring-red-600/10">
    The list is empty</h1>
    @endforelse

</x-layout>