<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ChiSiamo') }}">Chi Siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('servizi') }}">Servizi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"> Articoli </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('article_create') }}">Aggiungi articolo</a></li>
                        <li><a class="dropdown-item" href="{{ route('article_index') }}">Tutti gli Articoli</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"> Categorie </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('category_index') }}">Tutte le categorie</a></li>
                        <li><a class="dropdown-item" href="{{ route('category_create') }}">Aggiungi Categoria</a></li>
                    </ul>
                </li>
                
      
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">

                            Ciao, {{ Auth::user()->name }} benvenuto!
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                            </li>
                            <form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endauth
        </div>
        </ul>
        <div class="conteiner search"> 
            <form action="" method="GET" class="d-flex">
            <input name="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline" type="submit"><i class="fa-solid fa-magnifying-glass" type="submit"></i></button>
        </form>
    </div>
       
        <nav class="navbar sticky-bottom bg-body-tertiary">
            <div class="container-fluid">

                <a class="navbar-brand" href="{{ route('login') }}">
                    <i class="fa-solid fa-user" style="color: #6953aa;"></i></a>

            </div>
        </nav>
    </div>
    </div>
</nav>
