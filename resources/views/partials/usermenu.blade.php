<!-- Right Side Of Navbar -->
<ul class="nav navbar-nav navbar-right">
    <!-- Authentication Links -->
    <li class="dropdown">
        @if(Auth::check())
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        @endif

        <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/projects') }}"><i class="fa fa-btn fa-th-list"></i>Manage Projects</a></li>
            <li><a href="{{ url('/projects/create/new') }}"><i class="fa fa-btn fa-plus"></i>Add new project</a></li>
            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
        </ul>
    </li>
</ul>