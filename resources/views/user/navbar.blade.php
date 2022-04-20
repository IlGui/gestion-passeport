<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <div class="login-logo" style="background: #000; text-align: center;">
         <a style="color: red" class="navbar-brand" href="#"><span style="color: green">Mali</span><span style="color: yellow">passe</span>port</a>
        </div>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="{{url('/')}}" class="nav-item nav-link active">Accueil</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pièces à fournir</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">Au Mali</a>
                            <a href="#" class="dropdown-item">Dans une Embassade</a>
                        </div>
                    </div>
                    
                    <a href="{{route('demande')}}" class="nav-item nav-link">Demandes</a>
                    <a href="#" class="nav-item nav-link">Payements</a>
                    <a href="{{route('rdv')}}" class="nav-item nav-link">RDV</a>
                    <a href="{{route('verif')}}" class="nav-item nav-link">Verification</a>
                    
                </div>
                @if(Route::has('login'))
                @auth
                <x-app-layout>  
                </x-app-layout>
                @else
                <a href="{{route('login')}}" class="btn btn-primary px-3">Connexion</a>
                <a href="{{route('register')}}" class="btn btn-primary px-3">Inscription</a>
                @endauth
                @endif
            </div>
        </nav>
    </div>
    <!-- Navbar End -->