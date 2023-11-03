@include('components.doctype')
@section('content')

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarTogglerDemo03"
                    aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"> {{$title}} </a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Activity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ">Other</a>
                        </li>
                    </ul>
                    <form class="d-flex input-group w-auto">
                        <input type="search" class="form-control" placeholder="Type query" aria-label="Search" />
                        <button class="btn btn-outline-primary" type="button" data-mdb-ripple-color="dark">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </nav>


        </html>
