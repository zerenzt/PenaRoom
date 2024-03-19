<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/style.css">

<nav class="navbar navbar-expand-lg navbar-light bg-white bg-body-tertiary">
    <div class="container">
        <!-- <a class="navbar-brand" href="/">
            {{-- <img src="{{ asset('public\images\logo1.png') }}" height="40"> --}}
        </a> -->
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start mx-auto">
            <ul>
                <li class="nav-item">
                <a class="nav-link {{($title == 'Home')? 'active':''}}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{($title == 'About')? 'active':''}}" href="/about">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{($title == 'Contact')? 'active':''}}" href="/contact">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{($title == 'Shop')? 'active':''}}" href="/shop">Home</a>
                </li>
            </ul>
            {{-- <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Register</a>
                </li>
            </ul> --}}
            <ul>
            <div class="navbar-end is-align-items-center ml-0">          
                <form class="search-bar">
                <input id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
                </form>
            </div>
            </ul>
            
            </div>
        </div>
    </div>
</nav>