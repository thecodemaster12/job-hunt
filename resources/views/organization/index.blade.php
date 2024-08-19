<x-layout>
    <x-slot:pageTitle>Organization</x-slot:pageTitle>
    <div class="py-6 mb-6">
        <a class="bg-blue-700 text-white py-3 px-4 rounded-md font-bold hover:bg-blue-500" href="{{route('org.create')}}">Create new Organization</a>
    </div>
    <dib class="grid grid-cols-3 gap-4">
        @forelse ($orgs as $org)    
        <div class="flex justify-between items-center mb-4 rounded-md border-2 p-4">
            <div class="flex min-w-0 gap-x-4">
                <div class="min-w-0 flex-auto">
                    <p class="text-md font-semibold leading-6 text-gray-900">{{$org->name}}</p>
                    <p class="mt-1 truncate text-sm leading-5 text-gray-500"><strong>Email: </strong>{{$org->email}}</p>
                    {{-- <p class="mt-1 truncate text-sm leading-5 text-gray-500"><strong>Total Job Posted: </strong>{{count($org->job)}}</p> --}}
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col">
                <div class="">
                    <a class="bg-blue-700 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-500" href="/organization/{{$org->id}}">View</a>
                </div>
            </div>
        </div>
        @empty
        <h1
            class="text-center rounded-md bg-red-50 px-2 py-1 text-lg font-medium text-red-700 ring-1 ring-inset ring-red-600/10">
            The list is empty</h1>
        @endforelse
    </dib>
</x-layout>
