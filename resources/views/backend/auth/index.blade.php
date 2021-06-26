<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('backend/css/main.css')}}">
</head>
<body>
<!-- component -->
<!-- component -->

<div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12">



    <div class="p-10 xs:p-0 mx-auto md:w-full w-1/2">
        @if(session()->has('message'))
            <p>{{session('message')}}</p>
        @endif
        <h1 class="font-bold text-center text-2xl mb-5">Your Logo</h1>
        <div class="bg-white shadow rounded-lg divide-y divide-gray-200 py-10" style="width: 500px">
            <form class="px-5 py-7 w-full" method="post" action="{{route('admin.loginprocess')}}">
                @csrf
                <div>
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">E-mail</label>
                    <input type="text" name="email"
                           value="{{old('email')}}"
                           class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full @error('email') border-blue-900 @enderror"/>
                    @error('email')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">Password</label>
                    <input type="password" name="password"
                           value="{{old('password')}}"
                           class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full"/>
                    @error('password')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit"
                        class="transition mt-5 duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                    <span class="inline-block mr-2 py-2 px-3">Login</span>
                </button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
