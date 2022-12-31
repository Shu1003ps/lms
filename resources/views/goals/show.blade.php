<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Goals</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body class="antialiased">
        <div class='goal'>
            <h1 class='body'>
                {{$goal->body}}
            </h1>
            <div class='content'>
                <h3 class="deadline">
                    期日：{{$goal->deadline}}
                </h3>
            </div>
        </div>
        <div class='milestones'>
            <h2><!-- 今週の目標:  milestone- }}--><br></h2>
            <h2>やるべきタスク<br>・<a href="/stopwatch">50p~70pのインプット</a><p>進捗グラフ</p><br>・<br></h2>
        </div>
        
        
        <dev class='record'>
            <button type="button" onclick="/home/records">記録する</button>
        </dev>
        
            
    </body>
        
        
        
        <div class="footer">
            <a href="/">BACK</a>
        </div>
    </body>
</html>