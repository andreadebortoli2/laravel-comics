<header>
    <div class="top-header">
        <div class="wrapper">
            <div>
                DC POWER VISA
            </div>
            <div class="dropdown">
                <button class="dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
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
    <div class="bottom-header">
        <div class="wrapper">
            <nav>
                <a class="brand" href="#">
                    <img src="{{ Vite::asset('resources/images/img/dc-logo.png') }}" alt="">
                </a>

                <ul class="m-0">
                    <li>
                        <a href="#">CHARACTERS</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRouteName() == 'comics.index' ? 'active' : '' }}"
                            href="{{ route('comics.index') }}">COMICS</a>
                    </li>
                    <li>
                        <a href="#">MOVIES</a>
                    </li>
                    <li>
                        <a href="#">TV</a>
                    </li>
                    <li>
                        <a href="#">GAMES</a>
                    </li>
                    <li>
                        <a href="#">COLLECTIBLES</a>
                    </li>
                    <li>
                        <a href="#">VIDEOS</a>
                    </li>
                    <li>
                        <a href="#">FANS</a>
                    </li>
                    <li>
                        <a href="#">NEWS</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">SHOPS</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>

                <form class="nav-search">
                    <input class="form-control" type="text" placeholder="Search" />
                </form>
            </nav>
        </div>
    </div>
    <div class="jumbotron"></div>
</header>
