<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Source Code | Free</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../index.css">
    <link rel="icon" href="../asset/img/logo.jpeg">
    <style>
        .img-container img {
            max-width: 400px;
            height: auto;
            cursor: pointer;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">Tecno<span>Code</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownSourceCode" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Source Code
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownSourceCode">
                        <a class="dropdown-item" href="#">Source Code Web</a>
                        <a class="dropdown-item" href="#">Source Code Android</a>
                        <a class="dropdown-item" href="#">Source Code Arduino</a>
                        <a class="dropdown-item" href="#">Semua Source Code</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTemplate" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Koleksi Template
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownTemplate">
                        <a class="dropdown-item" href="#">Template Back-end</a>
                        <a class="dropdown-item" href="#">Template Front-end</a>
                        <a class="dropdown-item" href="#">Semua Template</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">E-Book Tutorial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" style="color: #5fd300;"><b>Donasi</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contact-us/contact_us.php" style="color: #ffc400;"><b>Contact Us</b></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 mb-4">
                <div class="text-center img-container">
                    <img src="../asset/img/qr.jpg" class="img-fluid" alt="QR Code" id="qrImage">
                    <p class="mt-2">Menerima Semua Macam Metode Pembayaran!</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('qrImage').addEventListener('click', function() {
            Swal.fire({
                title: 'Apakah kamu ingin mendownload gambar ini?',
                showCancelButton: true,
                confirmButtonText: 'Iya',
                cancelButtonText: 'Tidak',
                icon: 'question'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Lakukan download
                    const link = document.createElement('a');
                    link.href = this.src;
                    link.download = 'qr.jpg'; // Nama file download
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                }
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../asset/js/script.js"></script>
</body>

</html>