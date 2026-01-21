<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <style>body{font-family:Arial,Helvetica,sans-serif;padding:2rem}.container{max-width:480px;margin:0 auto}label{display:block;margin-top:1rem}input{width:100%;padding:.5rem;margin-top:.25rem}.errors{background:#ffe6e6;padding:.5rem;border:1px solid #ffcccc}</style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>

        @if($errors->any())
            <div class="errors">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>

            <label style="margin-top:.5rem"><input type="checkbox" name="remember"> Remember me</label>

            <div style="margin-top:1rem">
                <button type="submit">Login</button>
            </div>
        </form>

        <p style="margin-top:1rem">Don't have an account? <a href="{{ route('register') }}">Register</a></p>
    </div>
</body>
</html>
