<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="POST">
        @csrf
        <input type="email" placeholder="Email" name="email" value="{{ old("email") }}" required/>
        @error('email')
        <p> {{ $message }} </p>
        @enderror
        <br><br>


        <input type="password" placeholder="Password" name="password" value="{{ old("password") }}" required/>
        @error('password')
        <p> {{ $message }} </p>
        @enderror
        <br><br>

        <button>Submit</button><br><br>
        <a href="../daftar">Daftar</a>
    </form>
</body>
</html>
