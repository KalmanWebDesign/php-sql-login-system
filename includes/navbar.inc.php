<!-- php here -->
<nav class="navbar fixed-top" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Login System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <?php
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                        echo '<li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
                                </li>';
                        echo '<li class="nav-item">
                                <a class="nav-link active" href="logout.php">
                                    <button class="btn btn-danger">Logout</button>
                                </a>
                              </li>';
                    }

                    ?>
                    
                </ul>
            </div>
        </div>
    </div>
</nav>