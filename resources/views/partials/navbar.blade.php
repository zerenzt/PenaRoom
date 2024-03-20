<link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

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
                <a class="nav-link {{($title == 'About')? 'active':''}}" href="#artikel">Artikel</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{($title == 'Contact')? 'active':''}}" href="#essai">Essai</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{($title == 'Shop')? 'active':''}}" href="#puisi">Puisi</a>
                </li>
            </ul>
            <ul>
            </ul>
            
            </div>
        </div>
    </div>
</nav>