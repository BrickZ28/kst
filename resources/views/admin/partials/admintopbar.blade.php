<ul class="navbar-nav ml-auto ">
    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
        <a class="nav-link " href="/about">About us</a>
    </li>
    <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
        <a class="nav-link" href="/contact">Contact</a>
    </li>
    @if (!Auth::check())
        <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
            <a class="nav-link" href="/login" >Admin</a>
        </li>
    @endif

    @if (Auth::check())
        @if (Request::is('/'))
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin') }}"> Admin Panel </a>
            </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/logout') }}"> logout </a>
        </li>
    @endif
</ul>