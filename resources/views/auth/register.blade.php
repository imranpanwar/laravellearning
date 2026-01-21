<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <style>body{font-family:Arial,Helvetica,sans-serif;padding:2rem}.container{max-width:480px;margin:0 auto}label{display:block;margin-top:1rem}input{width:100%;padding:.5rem;margin-top:.25rem}.errors{background:#ffe6e6;padding:.5rem;border:1px solid #ffcccc}.status{background:#e6ffea;padding:.5rem;border:1px solid #c6f1d1}</style>
</head>
<body>
    <div class="container">
        <h1>Register</h1>

        @if($errors->any())
            <div class="errors">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ url('/register') }}">
            @csrf

            <label for="name">Name</label>
            <input id="name" name="name" value="{{ old('name') }}" required autofocus>

            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>

            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>

            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>

            <div style="margin-top:1rem">
                <button type="submit">Register</button>
            </div>
        </form>

        <p style="margin-top:1rem">Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </div>
</body>
</html>
