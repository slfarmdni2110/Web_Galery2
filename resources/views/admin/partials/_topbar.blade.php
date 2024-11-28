<header class="topbar" style="background-color: #0069B4; color: #fe9814; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 10px 20px;">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid" style="display: flex; justify-content: space-between; align-items: center;">
            <!-- Logo -->
            <a href="/" class="navbar-brand d-flex align-items-center" style="color: #fe9814; text-decoration: none;">
                <span style="font-size: 1.25rem; font-weight: bold;">Dashboard Admin</span>
            </a>

            <!-- Toggle button for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar content -->
            <div class="collapse navbar-collapse" id="navbarContent" style="display: flex; justify-content: flex-end;">
                <ul class="navbar-nav d-flex align-items-center" style="list-style: none; margin: 0; padding: 0;">
                    <!-- User Profile -->
                    <li class="nav-item dropdown" style="position: relative;">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #fe9814; text-decoration: none;">
                            <i class="fas fa-user-circle" style="font-size: 1.5rem; margin-right: 8px;"></i>
                            <span class="ms-2" style="font-size: 1rem;">Hello, <strong>{{ Auth::user()->name }}</strong></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown" style="background-color: #004f8d; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <li>
                                <a class="dropdown-item" href="/logout" style="padding: 10px 15px; color: #fe9814; font-weight: bold; text-decoration: none; transition: background 0.3s ease;">
                                    <i class="fas fa-sign-out-alt me-2"></i>Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
