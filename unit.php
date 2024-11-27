<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Desa Turgo</title>
    <style>
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
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-add:hover {
            background-color: #007bff;
        }

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

        .btn-desc {
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-desc:hover {
            background-color: #0056b3;
        }

        .modal {
            background-color: #0056b3;
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            border-radius: 10px;
            padding: 20px;
            width: 500px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .modal img {
            width: 100%;
            border-radius: 10px;
        }

        .modal h2 {
            font-size: 22px;
            margin: 15px 0 10px;
        }

        .modal {
            background-color: #0056b3;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            /* Untuk menempatkan tombol di tengah secara horizontal */
            width: 400px;
            /* Sesuaikan dengan kebutuhan */
        }

        .modal-close {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 10px;
            /* Tambahkan jarak di atas tombol */
        }


        .modal-close:hover {
            background-color: #b12b3b;
        }

        .modal-backdrop {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
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
                <a href="dashboard.php">
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

            <div class="container">
                <div class="head-title">
                    <h1></h1>
                    <button class="btn-add">Add Unit Destinasi</button>
                </div>

                <!-- Table -->
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Destinasi</th>
                            <th>Pemilik</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Makam Syekh Jumadil Kubro</td>
                            <td>Pak Falah</td>
                            <td>Rp. 50.000 - 100.000</td>
                            <td><button class="btn-desc"
                                    onclick="showModal('Makam Syekh Jumadil Kubro', 'img/makamsyeh.png', 'Makam Syekh Jumadil Kubro adalah salah satu destinasi wisata religi yang terletak di kawasan bersejarah. Makam ini menjadi tempat ziarah yang populer bagi umat Muslim karena Syekh Jumadil Kubro dikenal sebagai salah satu penyebar Islam di Nusantara. ')">Baca
                                    Deskripsi</button></td>
                            <td>
                                <a href="#" class="btn-edit">Edit</a>
                                <a href="#" class="btn-delete">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Wisata Puncak Kembar</td>
                            <td>Pak Suryo</td>
                            <td>Rp. 50.000 - 100.000</td>
                            <td><button class="btn-desc"
                                    onclick="showModal('Makam Syekh Jumadil Kubro', 'img/makamsyeh.png', 'Makam Syekh Jumadil Kubro adalah salah satu destinasi wisata religi yang terletak di kawasan bersejarah. Makam ini menjadi tempat ziarah yang populer bagi umat Muslim karena Syekh Jumadil Kubro dikenal sebagai salah satu penyebar Islam di Nusantara. ')">Baca
                                    Deskripsi</button></td>
                            <td>
                                <a href="#" class="btn-edit">Edit</a>
                                <a href="#" class="btn-delete">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Tracking Wild Life</td>
                            <td>Bu Sinah</td>
                            <td>Rp. 25.000 - 50.000</td>
                            <td><button class="btn-desc"
                                    onclick="showModal('Makam Syekh Jumadil Kubro', 'img/makamsyeh.png', 'Makam Syekh Jumadil Kubro adalah salah satu destinasi wisata religi yang terletak di kawasan bersejarah. Makam ini menjadi tempat ziarah yang populer bagi umat Muslim karena Syekh Jumadil Kubro dikenal sebagai salah satu penyebar Islam di Nusantara. ')">Baca
                                    Deskripsi</button></td>
                            <td>
                                <a href="#" class="btn-edit">Edit</a>
                                <a href="#" class="btn-delete">Delete</a>
                            </td>
                        </tr>
                        <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>

            <!-- Modal -->
            <div class="modal-backdrop" id="modalBackdrop"></div>
            <div class="modal" id="modal">
                <h2 id="modalTitle"></h2>
                <img id="modalImage" src="./img/makamsyeh.png" alt="Deskripsi Gambar">
                <p id="modalDescription"></p>
                <button class="modal-close" onclick="closeModal()">Close</button>
            </div>

            <script>
                function showModal(title, image, description) {
                    document.getElementById('modalTitle').textContent = title;
                    document.getElementById('modalImage').src = image;
                    document.getElementById('modalDescription').textContent = description;
                    document.getElementById('modal').style.display = 'block';
                    document.getElementById('modalBackdrop').style.display = 'block';
                }

                function closeModal() {
                    document.getElementById('modal').style.display = 'none';
                    document.getElementById('modalBackdrop').style.display = 'none';
                }
            </script>
</body>

<script src="script.js"></script>
</body>

</html>