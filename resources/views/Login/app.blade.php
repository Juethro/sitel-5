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
    <div>
        <div>
            <form action='/login' method="post">
                @csrf
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br>
            
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>
                
        
                <button type="submit">Login</button>
            </form>
        </div>
        <div>
            @if(Session::has('message'))
                <p class="alert">{{ Session::get('message') }}</p>
            @endif
        </div>
    </div>
    
</body>
</html>