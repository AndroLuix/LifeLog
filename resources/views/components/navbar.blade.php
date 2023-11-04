<!-- style -->
<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

<!-- style -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <i class="fab fa-github fa-2x mx-3 ps-4"></i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="me-3">
                <div class="form-white input-group" style="width: 250px;">
                    <input type="search" class="form-control rounded" placeholder="Search..." aria-label="Search"
                        aria-describedby="search-addon" />
                </div>
            </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Activity</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Other</a>
                </li>
            </ul>
            <!-- drop-down-->
            <div class="dropdown me-5">
                <div class="btn-group">

                    <button type="button" class="btn btn-secondary">
                        Profile
                    </button>
                    <button class="btn btn-secondary dropdown-toggle me-5" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">

                    </button>
                    <ul class="dropdown-menu me-5" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">1</a></li>
                        <li><a class="dropdown-item" href="#"> 2</a></li>
                        <li><a class="dropdown-item" href="#">3</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Bootstrap Bundle with Popper -->
<!-- Navbar -->
