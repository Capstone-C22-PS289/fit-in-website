<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="flex justify-center pt-20">
        <div class="bg-slate-300 flex w-[375px] h-[810px]">
            <div class="m-auto">
                <p class="text-4xl justify-center flex pb-10">Fit In</p>
                @if($errors->any())
                    <p class="text-center bg-red-600">username or password is incorrect</p>
                @endif
                <form action="{{route('actionLogin')}}" method="post">
                    @csrf
                    <p class="text-base">Email</p>
                    <input type="email" class=" mt-1 block w-full rounded-full border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="ambatukam@example.com" name="email" id="email" required>
                    <p class="text-base">Password</p>
                    <input type="password" class=" mt-1 block w-full rounded-full border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="" name="password" id="password" required>
                    <p class="flex justify-center text-gray-500 font-normal pt-5">Dont have an account? &nbsp;<a href="/register" class="font-normal text-base text-blue-400 justify-end hover:text-blue-500">Register
                            Now</a>
                    </p>
                    <button type="submit" class="rounded-full text-white bg-green-600 w-full py-3 mt-7 hover:bg-green-700">Login now</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>