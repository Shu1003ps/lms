<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Record</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body class="antialiased">
        <h1 class='title'>
            {{$record->title}}
        </h1>
        <div class='content'>
            <div class="content_record">
                <h3>honbun</h3>
                <p>{{$record->body}}</p>
            </div>
        </div>
        
        <div class="footer">
            <a href="/">BACK</a>
        </div>
    </body>
</html>
