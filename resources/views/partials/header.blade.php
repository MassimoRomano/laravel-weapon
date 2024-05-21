<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <<<<<<< HEAD <a class="navbar-brand text-light" href="{{ route('home') }}">Weapon</a>
                =======
                <a class="navbar-brand text-light" href="{{-- {{ route('guests.home') }} --}}">Weapon</a>
                >>>>>>> 3540217 (allineamento con auth)
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0 ">
                        <li class="nav-item ">
                            <a class="nav-link active text-light" href="{{ route('home') }}" aria-current="page">Home
                                <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-light" href="{{ route('weapon') }}">Weapon</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-light" href="{{ route('characters') }}">Character</a>
                        </li>

                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        <input class="form-control me-sm-2" type="text" placeholder="Search" />
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                            Search
                        </button>
                    </form>
                </div>
        </div>
    </nav>


</header>
