<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <input type="text" placeholder="Name" name="name"><br>
        <input type="text" placeholder="Email" name="email"><br>
        <input type="password" placeholder="Password" name="password"><br>
        <input type="password" placeholder="Password Confirm" name="password_confirmation"><br>
        <button>Login</button>
    </form>
</body>

</html>