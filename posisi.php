<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Desa Turgo</title>
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

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            padding: 20px;
        }

        .head-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .head-title h1 {
            font-size: 24px;
            color: #333;
        }

        .btn-add {
            background-color: #5d87ff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-add:hover {
            background-color: #5d87ff;
        }

        .table-wrapper {
            width: 100%;
            /* Pastikan elemen mengambil seluruh lebar */
            max-width: 100%;
            /* Hindari overflow */
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .table-wrapper ul {
            list-style: none;
            padding: 0;
        }

        .table-wrapper ul li {
            margin: 10px 0;
        }

        .table-wrapper ul li .title {
            font-size: 18px;
            font-weight: bold;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .table-wrapper ul li .title:hover {
            color: #ff9800;
        }

        .table-wrapper ul li .sub-item {
            margin-left: 20px;
            background-color: #ffc107;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table-wrapper ul li .sub-item span {
            font-size: 16px;
        }

        /* Main content */
        .container {
            margin-left: 250px;
            padding: 20px;
        }

        .head-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .head-title h1 {
            font-size: 24px;
            color: #333;
        }

        .table-wrapper {
            background-color: #5d87ff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .table-wrapper ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .table-wrapper ul li {
            margin: 10px 0;
        }

        .table-wrapper ul li .title {
            font-size: 18px;
            font-weight: bold;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .table-wrapper ul li .sub-item {
            margin-left: 40px;
            background-color: #ffcc57;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table-wrapper ul li .sub-middle-item {
            margin-left: 80px;
            /* Geser lebih ke tengah */
            background-color: #ffdd75;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table-wrapper ul li .sub-sub-item {
            margin-left: 120px;
            /* Geser lebih jauh ke dalam dibanding sub-middle-item */
            background-color: #ffe27a;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <img src="./img/logo.png" alt="Logo Desa Turgo" style="width: 250px; height: 130px; padding-top:20px">
        </a>
        <ul class="side-menu top">
            <li>
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
            <li class="active">
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
                <a href="#" class="logout">
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


        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Posisi</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Posisi</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- CONTENT -->
            <section id="content">
                <div class="container">
                    <div class="head-title">
                        <h1></h1>
                        <button class="btn-add">Add Posisi</button>
                    </div>
            </section>
            <div class="table-wrapper">
                <ul>
                    <li>
                        <div class="title">
                            <i class="bx bx-chevron-right"></i>
                            Makam Syekh Jumadil Kubro
                        </div>
                        <ul>
                            <li class="sub-item">
                                <span>1. Supriadi</span>
                                <span>Ketua Unit</span>
                            </li>
                            <li class="sub-middle-item">
                                <span>1.1 Sasnita</span>
                                <span>Bendahara</span>
                            </li>
                            <li class="sub-middle-item">
                                <span>1.2 Wintiana</span>
                                <span>Sekretaris</span>
                            </li>
                            <li class="sub-sub-item">
                                <span>1.2.1 Sadro</span>
                                <span>Sekbid Jalur</span>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="title">
                            <i class="bx bx-chevron-right"></i>
                            Wisata Pucang Kembar
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <i class="bx bx-chevron-right"></i>
                            Tracking Wilt
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <i class="bx bx-chevron-right"></i>
                            Sport Bird Watching
                        </div>
                    </li>
                </ul>
            </div>
            </div>
    </section>
    </main>
</body>