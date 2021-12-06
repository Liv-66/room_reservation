@include('layouts.header')

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Welcome to the homestay page</a>
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
            </ul>
            <div>
                @auth
                <span style="color: white;margin-right: 10px;">Hi, {{ Auth::user() -> name }}</span>
                <!-- <a href="/users/profile" style="color: white;margin-right: 10px;">Profile</a> -->
                <a href="/logout"><button class="btn btn-outline-success my-2 my-sm-0">LogOut</button></a>
                @endauth
                @guest
                <a href="/login"><button class="btn btn-outline-success my-2 my-sm-0">Login</button></a>
                @endguest
            </div>
        </div>
    </nav>

    <br />

    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </main>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

@include('layouts.footer')