@extends('backend.layouts.app')


@section('main')
    <div class="bg-white rounded-lg px-4 lg:px-8 py-4 lg:py-6 mt-8">
       <div class="flex justify-between">
           <h2 class="text-xl text-blue-900 font-bold mb-4 lg:mb-6">All Categories</h2>
           <a href="{{route('categories.create')}}" class="inline-flex flex-col justify-center items-center px-3 py-3 border border-blue-100 rounded-lg hover:bg-blue-50 w-32">
               <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                   <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd"></path>
               </svg>
               <span class="text-blue-900 opacity-70">
                Create File
              </span>
           </a>
       </div>
        <div class="overflow-x-auto">
            <div class="align-middle inline-block min-w-full overflow-hidden">
                <table class="min-w-full">
                    <thead class="text-left bg-blue-50">
                    <tr>
                        <th class="py-2 px-3">ID</th>
                        <th class="py-2 px-3">Name</th>
                        <th class="py-2 px-3">Product Count</th>
                        <th class="py-2 px-3">Image</th>
                        <th class="py-2 px-3">Icon</th>
                        <th class="py-2 px-3">Status</th>
                        <th class="py-2 px-3"> </th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-blue-100 text-blue-900 text-opacity-80 whitespace-nowrap">
                    @foreach($categories as $key=>$category)
                        <tr>
                            <td class="py-3 px-3">#{{$key+1}}</td>
                            <td class="py-3 px-3">{{$category->name}}</td>
                            <td class="py-3 px-3">1</td>
                            <td class="py-3 px-3">

                                <img class="h-7 w-10" src="{{asset('uploads/category/image/'.$category->image)}}" alt="">
                            </td>
                            <td class="py-3 px-3">1</td>
                            <td class="py-3 px-3">12-01-2021</td>
                            <td class="py-3 px-3">
                      <span
                          class="bg-green-100 text-green-500 text-xs rounded-full px-3 py-1  w-16 inline-block text-center  uppercase">Done</span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$categories->links()}}
            </div>
        </div>
    </div>
@endsection
