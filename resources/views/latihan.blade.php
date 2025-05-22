<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HomePage Teknisi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <style>
        .card {
            margin: 2px;
            padding: 3px;
            border: 1px solid #727272;
            border-radius: 10px;
            text-align: center;
            /*box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1); */

            height: 120px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card img {
            max-width: 100%;
            border-radius: 5px;

            height: 80px;
            width: auto;
            object-fit: contain;
            margin: 0 auto;
        }

        .row {
            --bs-gutter-x: 2px;
            --bs-gutter-y: 2px;
            margin-left: -1px;
            margin-right: -1px;
        }

        .col-3 {
            padding-left: 1px;
            padding-right: 1px;
        }

        .logo-container {
            display: flex;
            position: relative;
            left: 10px;
            top: 10px;
            flex-direction: column;
            align-items: left;
            margin-bottom: 10px;
        }

        .logo-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 1px solid #000;
        }

        .status {
            font-size: 14px;
        }

        body {
            font-size: 12px;
        }

        h5 {
            background-color: #f0f0f2;
            font-size: 16px;
            padding: 10px;
            position:relative;
            top: 5px;
        }

        h6{
            font-size: 16px;
            top : 20px;
        }

        .card h6 {
            font-size: 8px;
            text-align: left;
            min-height: 10px;
            display: flex;
            align-items: center;
        }

        .card p {
            font-size: 6px;
            text-align: left;
            min-height: 7px;
            display: flex;
            align-items: center;
        }

        button {
            font-size: 14px;
        }

        .custom-btn {
            width: 70%;
            background-color: #d3d3d3;
            border-color: #d3d3d3;
            color: #090909;
            font-weight: bold;
            font-size: 20px;
        }

        .container-fluid {
            padding-left: 5px;
            padding-right: 5px;
        }

        .status-pending {
            font-size: 12px;
            display: flex;
            align-items: flex-start;
            gap: 3px;
        }

        .status-borrowed {
            font-size: 12px;
            display: flex;
            align-items: center;
            gap: 3px;
            flex-wrap: nowrap;
            line-height: 1.2;
        }
    </style>
</head>
<body class="bg-light">
    <!-- Logo dan Header -->
    <div class="logo-container">
        <img src="fotokamera/logocekdong.png" alt="Logo" class="logo-circle">
    </div>
    <h5 class="font-weight-bold mt-2">HomePage Teknisi</h5>
    <div class="container-fluid mt-3">
        <!-- Alat yang Sedang Disewa -->
        <h6 class="text-center mt-3 font-weight-bold"><br>ALAT YANG SEDANG DISEWA</h6>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <img src="fotokamera/sonycinemaline.png" alt="Sony Cinema Line">
                    <h6 class="mt-2">SONY Cinema Line</h6>
                    <p class="status-borrowed"><i class="bi bi-x-circle-fill text-danger"></i> Dipinjam, kembali pada 10/12/24</p>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="fotokamera/sonynp.png" alt="Sony NP">
                    <h6 class="mt-2">SONY NP-FZ100</h6>
                    <p class="status-borrowed"><i class="bi bi-x-circle-fill text-danger"></i> Dipinjam, kembali pada 10/12/24</p>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="fotokamera/sonyfe24.png" alt="Sony FE 24-70mm">
                    <h6 class="mt-2">SONY FE 24-70mm</h6>
                    <p class="status-borrowed"><i class="bi bi-x-circle-fill text-danger"></i> Dipinjam, kembali pada 10/12/24</p>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="fotokamera/sonymaximum.png" alt="Sony Maximum">
                    <h6 class="mt-2">Sony Maximum</h6>
                    <p class="status-borrowed"><i class="bi bi-x-circle-fill text-danger"></i> Dipinjam, kembali pada 10/12/24</p>
                </div>
            </div>
        </div>

        <!-- Tombol Cek Alat -->
        <div class="text-center mt-3">
            <button class="btn custom-btn btn-lg">Cek Alat</button>
        </div>

        <!-- Menunggu Persetujuan -->
        <h6 class="text-center mt-4 font-weight-bold">MENUNGGU PERSETUJUAN</h6>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <img src="fotokamera/nikond7500.png" alt="Nikon D7500">
                    <h6 class="mt-2">Nikon D7500</h6>
                    <p class="status-pending"><i class="bi bi-check-circle-fill text-success"></i> Diajukan pada 2/12/24</p>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="fotokamera/canonlens.png" alt="Canon Lens">
                    <h6 class="mt-2">Canon Lens 18-135mm</h6>
                    <p class="status-pending"><i class="bi bi-check-circle-fill text-success"></i> Diajukan pada 2/12/24</p>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="fotokamera/sonycamcorder.png" alt="Sony Camcorder">
                    <h6 class="mt-2">Sony PXW-Z90T XDCAM camcorder</h6>
                    <p class="status-pending"><i class="bi bi-check-circle-fill text-success"></i> Diajukan pada 2/12/24</p>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="fotokamera/canoneos400d.png" alt="Canon EOS 4000D">
                    <h6 class="mt-2">Canon EOS 4000D</h6>
                    <p class="status-pending"><i class="bi bi-check-circle-fill text-success"></i> Diajukan pada 2/12/24</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <img src="fotokamera/instaxmini11.png" alt="Instax mini11">
                    <h6 class="mt-2">Instax mini11</h6>
                    <p class="status-pending"><i class="bi bi-check-circle-fill text-success"></i> Diajukan pada 2/12/24</p>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="fotokamera/instaxslimgo.png" alt="Instax slim-go">
                    <h6 class="mt-2">Instax slim-go</h6>
                    <p class="status-pending"><i class="bi bi-check-circle-fill text-success"></i> Diajukan pada 2/12/24</p>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="fotokamera/canoneos400d.png" alt="Canon EOS 80D">
                    <h6 class="mt-2">Canon EOS 80D</h6>
                    <p class="status-pending"><i class="bi bi-check-circle-fill text-success"></i> Diajukan pada 2/12/24</p>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="fotokamera/sonyzeiss.png" alt="Sony Zeiss">
                    <h6 class="mt-2">Sony Zeiss</h6>
                    <p class="status-pending"><i class="bi bi-check-circle-fill text-success"></i> Diajukan pada 2/12/24</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
