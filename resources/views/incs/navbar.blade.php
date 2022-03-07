<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <i class="fas fa-home"></i>
            Acceuil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link " aria-current="page" href="#">Link</a>
                </li>
            </ul>
            <ul class="navbar-nav m-lg-auto">
                @if(Auth::user())
                    <li class="nav-item active">
                        <a class="nav-link " aria-current="page" href="#">Déconnexion</a>
                    </li>
                @else
                    <li class="nav-item active">
                        <a class="nav-link " aria-current="page" href="#">Me connecter</a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>
