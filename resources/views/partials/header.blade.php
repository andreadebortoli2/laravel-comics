<header>
    <div class="top-header bg-primary text-white py-2">
        <div class="container">
            <div class="d-flex justify-content-end">

                <div class="px-3">
                    DC POWER VISA
                </div>
                <div class="dropdown">
                    <button class="border-0 dropdown-toggle bg-transparent text-white" type="button" id="triggerId"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ADDITIONAL DC SITES
                    </button>
                    <div class="dropdown-menu" aria-labelledby="triggerId">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item disabled" href="#">Disabled action</a>
                        <h6 class="dropdown-header">Section header</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">After divider action</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="center-header">
        <div class="container py-2">
            <nav class="navbar navbar-expand-sm navbar-light justify-content-between">
                <a class="navbar-brand" href="#">
                    <img src="{{ Vite::asset('resources/images/img/dc-logo.png') }}" alt="">
                </a>

                <div class="collapse navbar-collapse" id="collapsibleNavId">

                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">CHARACTERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'comics.index' ? 'active' : '' }}"
                                href="{{ route('comics.index') }}">COMICS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MOVIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">TV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">GAMES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">COLLECTIBLES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">VIDEOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FANS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">NEWS</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">SHOPS</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </li>
                    </ul>

                    <form class="d-flex my-2 my-lg-0 border-bottom border-primary">
                        <input class="form-control me-sm-2 border-0 rounded-0" type="text" placeholder="Search" />
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <div class="bottom-header"></div>
</header>
