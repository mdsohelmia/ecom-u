@extends('backend.layouts.app')

@section('main')
    <form method="post" action="{{route('users.store')}}">
        @csrf
        <div class="mt-6 sm:mt-5">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="username" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                    First Name
                </label>
                <div class="mt-2 sm:mt-0 sm:col-span-2">
                    <div class="max-w-lg flex rounded-md shadow-sm">
                        <input id="username"
                               name="first_name"
                               class="flex-1 py-2 block w-full rounded rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                    </div>
                </div>
            </div>
            <div class="mt-10 pt-10 sm:mt-5">
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="username" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                         Last Name
                    </label>
                    <div class="mt-2 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg flex rounded-md shadow-sm">
                            <input id="username"
                                   name="last_name"
                                   class="flex-1 py-2 block w-full rounded rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                        </div>
                    </div>
                </div>
                <div class="mt-6 sm:mt-5">
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="username"
                               class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                            Role
                        </label>
                        <div class="mt-2 sm:mt-0 sm:col-span-2">
                            <div class="max-w-lg flex rounded-md shadow-sm">
                                <select name="role" id=""
                                        class="flex-1 py-2 block w-full rounded rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option value="admin">Admin</option>
                                    <option value="employee">Employee</option>
                                    <option value="customer support">Customer Support</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 sm:mt-5">
                        <div
                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="username"
                                   class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                Email
                            </label>
                            <div class="mt-2 sm:mt-0 sm:col-span-2">
                                <div class="max-w-lg flex rounded-md shadow-sm">
                                    <input id="username"
                                           name="email"
                                           type="email"
                                           class="flex-1 py-2 block w-full rounded rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 sm:mt-5">
                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="username"
                                       class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                    Password
                                </label>
                                <div class="mt-2 sm:mt-0 sm:col-span-2">
                                    <div class="max-w-lg flex rounded-md shadow-sm">
                                        <input id="username"
                                               name="password"
                                               type="password"
                                               class="flex-1 py-2 block w-full rounded rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="py-2 px-3 rounded bg-green-500 text-white mt-5">Crete users</button>
    </form>
@endsection
