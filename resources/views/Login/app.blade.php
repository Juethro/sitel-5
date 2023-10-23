<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Login</title>
</head>
<body>
    <div class="bg-[url('C:\Users\Kridha\Downloads\sitel-5\public\images\bg.jpg')]">
        <div class="flex justify-center h-screen items-center">
            <div class="bg-white w-[250px] rounded-[12px] drop-shadow-md h-[41vh]">
                <div class="text-[#DC4295] text-2xl font-semibold flex justify-center mt-[20px]">WELCOME</div><br><br>
                <form class="mx-[20px]" action="/login" method="post">
                    @csrf
                    <input placeholder="Username" type="text" id="username" name="username" required class="border-b border-[#DC4295]"><br><br>
                    <input placeholder="Password" type="password" id="password" name="password" required class="border-b border-[#DC4295]"><br><br><br>
                    <div class="flex justify-center">
                        <button type="submit" class="w-[100px] btn btn-primary rounded-[8px] bg-[#DC4295] p-2 ps-2 text-white">Login</button>
                    </div>
                </form>
            </div>
            <div>
                @if(Session::has('message'))
                    <p class="alert">{{ Session::get('message') }}</p>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
