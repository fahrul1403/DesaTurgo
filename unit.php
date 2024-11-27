<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Desa Turgo</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 18px;
        text-align: left;
    }

    table thead th {
        background-color: #f4f4f4;
        border: 1px solid #ddd;
        padding: 10px;
    }

    table tbody td {
        border: 1px solid #ddd;
        padding: 10px;
    }

    table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .btn-edit {
        background-color: #17a2b8;
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
    }

    .btn-edit:hover {
        background-color: #138496;
    }

    .btn-delete {
        background-color: #dc3545;
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
    }

    .btn-delete:hover {
        background-color: #c82333;
    }
</style>

<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">Desa Turgo</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="index.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="active">
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



        <body>
            <section id="content">
                <!-- MAIN -->
                <main>
                    <div class="head-title">
                        <div class="left">
                            <h1>Unit Destinasi</h1>
                            <ul class="breadcrumb">
                                <li>
                                    <a href="#">Unit Destinasi</a>
                                </li>
                                <li><i class='bx bx-chevron-right'></i></li>
                                <li>
                                    <a class="active" href="#">Home</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Table -->
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Owner</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Desa Turgo</td>
                                <td>Admin</td>
                                <td>
                                    <a href="#" class="btn-edit">Edit</a>
                                    <a href="#" class="btn-delete">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Tech Innovations</td>
                                <td>Admin</td>
                                <td>
                                    <a href="#" class="btn-edit">Edit</a>
                                    <a href="#" class="btn-delete">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Creative Solutions</td>
                                <td>Ryo Kurniawan</td>
                                <td>
                                    <a href="#" class="btn-edit">Edit</a>
                                    <a href="#" class="btn-delete">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </main>
            </section>
            <script src="script.js"></script>
        </body>

</html>