<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: url('./img/login.jpg') no-repeat center center fixed;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-container {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        padding: 30px 40px;
        width: 350px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #007bff;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-size: 14px;
        margin-bottom: 5px;
        color: #333;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ddd;
        border-radius: 5px;
        outline: none;
    }

    .form-group input:focus {
        border-color: #007bff;
    }

    .form-group .remember-me {
        display: flex;
        align-items: center;
    }

    .form-group .remember-me input {
        margin-right: 10px;
    }

    .login-btn {
        width: 100%;
        padding: 10px;
        background: #007bff;
        border: none;
        border-radius: 5px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }

    .login-btn:hover {
        background: #e68900;
    }
    </style>
</head>

<body>
<<<<<<< HEAD
    <div class="login-container">
        <h2>Login</h2>
        <form action="dashboard.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="admin@example.com" required>
=======



    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <img src="./img/logo.png" alt="Logo Desa Turgo" style="width: 250px; height: 130px; padding-top:20px">
        </a>

        <ul class="side-menu top">
            <li class="active">
                <a href="index.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="user.php">
                    <i class='bx bxs-group'></i>
                    <span class="text">User</span>
                </a>
            </li>
            <li>
                <a href="unit.php">
                    <i class='bx bxs-map'></i>
                    <span class="text">Unit Destinasi</span>
                </a>
            </li>
            <li>
                <a href="posisi.php">
                    <i class='bx bxs-briefcase'></i>
                    <span class="text">Position</span>
                </a>
            </li>
            <li>
                <a href="task.php">
                    <i class='bx bxs-book'></i>
                    <span class="text">Task</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="index.php" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="img/people.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download'></i>
                    <span class="text">Download PDF</span>
                </a>
>>>>>>> 64159b05ba8f97ca1d74887d61d18c55bc646f3d
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required>
            </div>
            <div class="form-group remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
</body>

</html>