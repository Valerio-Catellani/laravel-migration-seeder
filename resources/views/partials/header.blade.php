<header class="fixed-top w-100 bg-white shadow">
    <div class="container-lg">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="style-img-container">
                    <img class="img-fluid " src="{{ Vite::asset('resources/img/icon-train.png') }}" alt="logo">
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item rounded-2">
                            <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }} "aria-current="page"
                                href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item rounded-2">
                            <a class="nav-link {{ Route::currentRouteName() == 'trains.index' ? 'active' : '' }}"
                                href="{{ route('trains.index') }}">Trains</a>
                        </li>
                        <li class="nav-item rounded-2">
                            <a class="nav-link {{ Route::currentRouteName() == 'service' ? 'active' : '' }}"
                                href="#">Service</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success style-navbar-search-button text-black "
                            type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

</header>
