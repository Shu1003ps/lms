<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body class="antialiased">
        <h1>目標</h1>
        <form action="/goals" method="POST">
            @csrf
            <h2>目標</h2>
            <textarea placeholder="達成したい目標を入力"></textarea>
            <input type="submit" value="保存" />
        </form>
        
    
        
    </body>
</html>