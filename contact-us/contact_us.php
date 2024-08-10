<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | TecnoCode</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../index.css">
    <link rel="icon" href="../asset/img/logo.jpeg">
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
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="" style="color: #5fd300;"><b>Donasi</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contact-us/contact_us.php" style="color: #ffc400;"><b>Contact Us</b></a>
                </li>
        </div>
    </nav>

    <!-- Header -->
    <header style="margin-top: 80px;">
    </header>

    <!-- Contact Form -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Contact Us</h5>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['status'])) {
                            if ($_GET['status'] == 'success') {
                                echo '<div class="alert alert-success" role="alert">Message sent successfully!</div>';
                            } elseif ($_GET['status'] == 'error') {
                                echo '<div class="alert alert-danger" role="alert">Failed to send message. Please try again later.</div>';
                            }
                        }
                        ?>
                        <form action="proses_contact_us.php" method="POST">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="wa">No WhatsApp</label>
                                <input type="number" class="form-control" id="wa" name="wa" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-light text-center py-3">
        <?php echo "Copyright © " . date('Y') . " Tecno Code. All rights reserved."; ?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="asset/js/script.js"></script>
</body>

</html>