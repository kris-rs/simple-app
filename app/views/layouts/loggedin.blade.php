<!doctype html>

<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>
    </head>
    <body>
        <div id='navigation'>
            @yield('navin')
        </div>
        <div id='container'>
            
            @yield('new_post_area')
            @yield('display_posts')
        </div>

        
    </body>
</html>
