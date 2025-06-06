<html>
<head>
    <title>Pendaftaran ISE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function validasi() {
            var nrp = document.getElementById("nrp").value;
            var nama = document.getElementById("nama").value;

            if (nrp.length == 0) {
                Swal.fire({
                    title: "Kesalahan Input",
                    text: "NRP tidak boleh kosong!",
                    icon: "error"
                });
                return false;
            }

            if (nrp.length !== 10) {
                Swal.fire({
                    title: "Kesalahan Input",
                    text: "NRP harus terdiri dari 10 digit!",
                    icon: "error"
                });
                return false;
            }

            if (isNaN(nrp)) {
                Swal.fire({
                    title: "Kesalahan Input",
                    text: "NRP hanya boleh berisi angka!",
                    icon: "error"
                });
                return false;
            }

            if (nama.length === 0) {
                Swal.fire({
                    title: "Kesalahan Input",
                    text: "Nama tidak boleh kosong!",
                    icon: "error"
                });
                return false;
            }

            return true; 
        }
    </script>
</head>
<body>
<div class="container mt-4">
    <h3>Form Pendaftaran</h3>
    <form action="https://google.co.id" method="get" onsubmit="return validasi();">
        <div class="form-group">
            <label for="nrp">NRP:</label>
            <input type="text" name="nrp" id="nrp" class="form-control"
                placeholder="Silahkan diisi 10 digit NRP, harus angka, harus diisi!" />
        </div>

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-control"
                placeholder="Isikan nama peserta yang valid!" />
        </div>

        <input type="submit" class="btn btn-success" value="Daftar" />
    </form>
</div>
</body>
</html>