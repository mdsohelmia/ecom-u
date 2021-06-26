@extends('backend.layouts.app')

@section('main')

    <div class="bg-white rounded-lg px-4 lg:px-8 py-4 lg:py-6 mt-8">
        <h2 class="text-xl text-blue-900 font-bold mb-4 lg:mb-6">Recent orders</h2>
        <div class="overflow-x-auto">
            <div class="align-middle inline-block min-w-full overflow-hidden">
                <table class="min-w-full">
                    <thead class="text-left bg-blue-50">
                    <tr>
                        <th class="py-2 px-3">ID</th>
                        <th class="py-2 px-3">First Name</th>
                        <th class="py-2 px-3">Last Name</th>
                        <th class="py-2 px-3">Email</th>
                        <th class="py-2 px-3">Status</th>
                        <th class="py-2 px-3">Created at</th>
                        <th class="py-2 px-3">Action</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-blue-100 text-blue-900 text-opacity-80 whitespace-nowrap">
                    @foreach($users as  $user)
                        <tr>
                            <td class="py-3 px-3">{{$user->id}}</td>
                            <td class="py-3 px-3">{{$user->first_name}}</td>
                            <td class="py-3 px-3">{{$user->last_name}}</td>
                            <td class="py-3 px-3">{{$user->email}}</td>
                            <td class="py-3 px-3">
                      <span
                          class="bg-green-100 text-green-500 text-xs rounded-full px-3 py-1  w-16 inline-block text-center  uppercase">
                          active
                      </span>
                            </td>
                            <td>{{$user->created_at}}</td>
                            <td>

                                <form action="{{route('users.destroy',$user->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$users->links()}}
            </div>
        </div>
        <a href="#" class="font-bold text-blue-600 inline-block mt-5 hover:underline">View all orders</a>
    </div>
@endsection
