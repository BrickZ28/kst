<nav class="navbar navbar-expand-md fixed-top nav-bg navbar-custom">
    <a class="navbar-brand" href="#">
        Knuths
        <span style="font-family: 'Love Ya Like A Sister', cursive">Sweet Treats</span>
    </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse navbar-custom" id="navbarsExampleDefault">
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
            <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                <a class="nav-link" href="/login" >Admin</a>
            </li>
        </ul>
    </div>
</nav>

