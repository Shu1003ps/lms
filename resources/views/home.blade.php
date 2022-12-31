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
        <div class="user_info">
            <!--<h2>{users->name}}</h2>-->
        </div>
        <h1>目標</h1>
        <div class='goals'>
            @foreach($goals as $goal)
                <a href="/home/goals/{{ $goal->id }}"><h2>{{$goal->body}}</h2></a>
                <p>{{$goal->date}}</p>
            @endforeach
        </div>
        <button type="button"><a href="/home/goal_setting">目標を設定する</a></button>
        <h2>学習時間<br></h2>
        <h2>ここにグラフ<br></h2>
        
    </body>
</html>