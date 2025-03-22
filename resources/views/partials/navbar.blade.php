   <!-- Bootstrap Icons CDN -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
   <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4caf50;">
    <div class="container">
        <a class="navbar-brand animate__animated animate__pulse" href="{{ url('/') }}">
            Green Roots 🌱
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                {{-- Always visible --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
            

                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>

                {{-- If user is logged in --}}
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-cart3 me-1"></i> Cart
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-bag-check me-1"></i> Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profile') ? 'active' : '' }}" href="{{ url('/profile') }}">
                            <i class="bi bi-person-circle me-1"></i> Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/logout') }}">
                            <i class="bi bi-box-arrow-right me-1"></i> Logout
                        </a>
                    </li>
                @endauth

                {{-- If guest --}}
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">
                            <i class="bi bi-person-fill me-1"></i> Login
                        </a>
                        
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>




