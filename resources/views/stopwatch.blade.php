<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Doing</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>
    <body class="antialiased">
        <h1>StopWatch</h1>
        <div class="display">
            <span id="hours" class="time">00</span>
            <span id="minutes" class="time">00</span>
            <span id="seconds" class="time">00</span>
        </div>
        <div class="buttons">
            <button type="button" class="button" id="start">START</button>
            <button type="button" class="button" id="stop">STOP</button>
            <button type="button" class="button" id="reset">RESET</button>
            <button type="button" class="button" id="done">終了</button>
        </div>
        <script src="script.js"></script>
    </body>
</html>    
    