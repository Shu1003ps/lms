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
        <h1>Test</h1>
        <div class='records'>
            @foreach($records as $record)
                <div class='record'>
                    <h2 class='title'>
                        <a href="/records/{{$record->id}}">{{ $record->title }}</a>
                    </h2>
                    <p class='body'>{{ $record->body }}</p>
                </div>
            @endforeach    
        </div>
        <div class='paginate'>
            {{ $records->links()}}
        </div>
    </body>
</html>
