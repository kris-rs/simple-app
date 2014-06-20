<!doctype html>

<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>
    </head>
    <body>
        <div id='navigation'>
            @yield('navigation')
        </div>
        <div id='container_login'>
            @yield('content')
            
            <!-- Messages -->
            <div class="messages_wrapper">
                @yield('sign_up_success')
            </div>
            
        </div>


    </body>
</html>
