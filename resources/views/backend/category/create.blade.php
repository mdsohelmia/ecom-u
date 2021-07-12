@extends('backend.layouts.app')

@section('main')
    <form method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mt-5">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="username" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                     Name
                </label>
                <div class="mt-2 sm:mt-0 sm:col-span-2">
                    <div class="max-w-lg flex rounded-md shadow-sm">
                        <input id="username"
                               name="name"
                               class="flex-1 py-2 block w-full rounded rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="username" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                    Icon
                </label>
                <div class="mt-2 sm:mt-0 sm:col-span-2">
                    <div class="max-w-lg flex rounded-md shadow-sm">
                        <input id="username"
                               name="icon"
                               type="file"
                               class="flex-1 py-2 block w-full rounded rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="username" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                    Logo
                </label>
                <div class="mt-2 sm:mt-0 sm:col-span-2">
                    <div class="max-w-lg flex rounded-md shadow-sm">
                        <input id="username"
                               type="file"
                               name="image"
                               class="flex-1 py-2 block w-full rounded rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="username" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                    Description
                </label>
                <div class="mt-2 sm:mt-0 sm:col-span-2">
                    <div class="max-w-lg flex rounded-md shadow-sm">
                       <textarea name="description" class="flex-1 py-2 block w-full rounded rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="py-2 px-3 rounded bg-green-500 text-white mt-5">Crete users</button>
    </form>
@endsection
