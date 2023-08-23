<nav>
    <div class="logo">
        <span>BUSBÉNIN</span>
    </div>
    <ul>
        <li><a href="/">Accueil</a></li>
        <li><a href="{{route('trajet')}}">Trajets</a></li>
        <li><a href="{{route('compagnies')}}">Nos compagnies</a></li>
    </ul>
    <div class="login-register">
        <a href="{{route('login')}}" class=" hover:bg-gray-900 hover:text-white">Connexion</a>
        <a href="{{route('register')}}" class=" hover:bg-gray-900 hover:text-white">Inscription</a>
    </div>
</nav>