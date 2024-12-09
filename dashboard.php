<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - NBC NEWS</title>

    <!-- Link to the AdminLTE CSS -->
    <link rel="stylesheet" href="css/adminlte.min.css">
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Custom Styles (Optional) -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Dashboard</a>
                </li>
            </ul>
        </nav>
        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <img src="images/logo.png" alt="NBC News" class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light">NBC NEWS</span>
            </a>
            <div class="sidebar">
                <ul class="nav nav-pills nav-sidebar flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="finance.php" class="nav-link">
                            <i class="nav-icon fas fa-money-bill-wave"></i>
                            <p>Finance</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">
                            <i class="nav-icon fas fa-info-circle"></i>
                            <p>About</p>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Dashboard Overview</h3>
                                </div>
                                <div class="card-body">
                                    <p>Welcome to the NBC News Admin Dashboard. Here you can manage your content, view statistics, and more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0
            </div>
            <strong>&copy; 2024 NBC News. All rights reserved.</strong>
        </footer>
    </div>

    <!-- Link to the AdminLTE JS -->
    <script src="js/adminlte.min.js"></script>
    <script src="js/all.min.js"></script>
</body>
</html>
