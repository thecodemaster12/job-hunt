<x-layout>
    <x-slot:pageTitle>{{$id->name}}</x-slot:pageTitle>

    <div>
        <div class="my-6 border-2 p-4  rounded-lg border-gray-300">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-lg font-medium leading-6 text-gray-900">Organization name</dt>
                    <dd class="mt-1 text-lg leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$id->name}}</dd>
                </div>
                <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-lg font-medium leading-6 text-gray-900">Email address</dt>
                    <dd class="mt-1 text-lg leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$id->email}}</dd>
                </div>
                <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-lg font-medium leading-6 text-gray-900">Location</dt>
                    <dd class="mt-1 text-lg leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$id->address}}</dd>
                </div>
            </dl>
            <div class="pt-4 flex gap-2">
                <form action="/organization/{{$id->id}}/edit" method="get">
                    @csrf
                    <button class="bg-blue-700 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-500" type="submit">Edit</button>
                </form>
                <form action="/organization/{{$id->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="bg-red-600 text-white font-bold py-2 px-4 rounded-md hover:bg-red-500" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>

    <div class="bg-gray-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-6">
                <h2 class="text-2xl font-bold text-gray-900">Total Job Post: {{count($id->job)}}</h2>

                <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-6 lg:space-y-0">
                    @forelse ($id->job as $job)                        
                    <div class="group relative">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg"
                                alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-4 text-md text-gray-500">
                            <a href="/{{$job->id}}">
                                <span class="absolute inset-0"></span>
                                Dealine: {{$job->deadline}}
                                @if ($job->publish == '1')    
                                <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-sm font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Published</span>
                                @else
                                <span class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-sm font-medium text-red-700 ring-1 ring-inset ring-red-600/10">Unpublished</span>
                                @endif
                            </a>
                        </h3>
                        <p class="text-lg font-semibold text-gray-900">{{$job->title}}</p>
                    </div>
                    @empty
                    <h1
                    class="text-center rounded-md bg-red-50 px-2 py-1 text-lg font-medium text-red-700 ring-1 ring-inset ring-red-600/10">
                    The list is empty</h1>
                    @endforelse
                </div>
            </div>
        </div>
    </div>


</x-layout>