@section('navigation')
<nav>
    <ul>
        <li><small><a class="nav_link" href="{{ URL::route('login') }}">Sign in</a></small></li>
        <li style="color: #e1e1e1; cursor: default; "><small>|</small></li>
        <li><small><a class="nav_link" href="{{ URL::route('sign_up') }}">Sign up</a></small></li>
    </ul>
</nav>
@stop