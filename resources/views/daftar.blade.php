<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>
</head>
<body>
    <form action="/daftar" method="POST">
        @csrf
        <input placeholder="Name" name="name" value="{{ old('name') }}" id="name" required/>
        <br><br>

        <input placeholder="Email" type="email" name="email" value="{{ old('email') }}" id="email" required/>
        @error('email')
            <p> {{ $message }} </p>
        @enderror
        <br><br>

        <input placeholder="Password" value="{{ old('password') }}"type="password" name="password" id="password" required/>
        @error('password')
            <p> {{ $message }}</p>
        @enderror
        <br><br>
        <button>Submit</button><br><br>
        <a href="../login">Login</a>
    </form>
</body>
</html>
