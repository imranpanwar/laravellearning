<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <style>body{font-family:Arial,Helvetica,sans-serif;padding:2rem}.container{max-width:800px;margin:0 auto}</style>
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        <p>Welcome, {{ auth()->user()->name ?? 'Guest' }}.</p>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>
