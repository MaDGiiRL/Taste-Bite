<div class="container-fluid">
    <div class="row justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-light" data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="1500">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <a class="navbar-brand" href="{{ route('homepage') }}">
                        <img src="/images/Logo 1.png" alt="logo" width="200">
                    </a>

                    <ul class="navbar-nav d-flex align-items-center">
                        <li class="nav-item"><a class="nav-link" href="{{ route('homepage') }}">HOMEPAGE</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('recipe.index') }}">RECIPES</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('categories')}}">CATEGORIES</a></li>
                        <li class="nav-item"><a class="nav-link" href="">ABOUT</a></li>
                        <a class="nav-link" href="">BLOG</a>
                        <li class="nav-item"><a class="nav-link" href="">CONTACT</a></li>
                    </ul>

                    <ul class="navbar-nav d-flex align-items-center">
                        <!-- Right links -->
                        <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0 text-uppercase">
                            <li class="nav-item text-center mx-2 mx-lg-1">
                                <a class="nav-link" href="#!">
                                    <div>
                                        <i class="bi bi-search-heart fs-4"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-center d-flex flex-row align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person fs-3"></i><br>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @auth
                                    <li class="dropdown-item">

                                        Hi, {{ Auth::user()->name }}

                                    </li>
                                    @endauth
                                    @guest
                                    <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
                                    <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a></li>
                                    @endguest

                                    @auth
                                    <li><a class="dropdown-item" href="{{ route('account.edit') }}">My Account</a></li>
                                    <li><a class="dropdown-item" href="{{route('recipe.create')}}">New Recipe</a></li>
                                    <li><a class="dropdown-item" href="#">Orders</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="text-center">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-dark">Logout</button>
                                        </form>
                                    </li>
                                    @endauth
                                </ul>
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>



<!-- Modale Login -->
<div class="modal fade mt-5" id="loginModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="login-email" class="form-label">Email</label>
                        <input type="email" id="login-email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="login-password" class="form-label">Password</label>
                        <input type="password" id="login-password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-custom w-100">Accedi</button>
                    <p class="text-center mt-4 back-to-log">Forgot you password? <a href="{{ route('password.request') }}">Recover Password</a></p>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Modale Registrazione -->
<div class="modal fade" id="registerModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Registrati</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="register-name" class="form-label">Nome</label>
                        <input type="text" id="register-name" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="register-email" class="form-label">Email</label>
                        <input type="email" id="register-email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="register-password" class="form-label">Password</label>
                        <input type="password" id="register-password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-custom w-100">Registrati</button>
                </form>
            </div>
        </div>
    </div>
</div>