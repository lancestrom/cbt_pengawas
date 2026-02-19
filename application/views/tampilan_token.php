<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="5">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <title>CBT PENGAWAS SMK TUNAS HARAPAN</title>
    <link rel="icon" href="https://smkth-jakbar.com/assets/images/logo.png">

    <style>
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #3498db;
        --success-color: #27ae60;
        --danger-color: #e74c3c;
    }

    body {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding-top: 2rem;
        padding-bottom: 2rem;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .header-section {
        text-align: center;
        margin-bottom: 3rem;
        animation: slideDown 0.6s ease-out;
    }

    .header-section img {
        max-width: 120px;
        height: auto;
        filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.15));
        margin-bottom: 1rem;
    }

    .header-section h1 {
        color: white;
        font-weight: 700;
        font-size: 2.5rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .token-card {
        background: white;
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .token-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    }

    .card-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        padding: 1.5rem;
    }

    .card-header h4 {
        color: white;
        font-weight: 700;
        font-size: 1.25rem;
        margin: 0;
        letter-spacing: 1px;
    }

    .card-body {
        padding: 2rem 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-grow: 1;
        background: #f8f9fa;
    }

    .token-value {
        font-size: 2rem;
        font-weight: 700;
        color: var(--primary-color);
        font-family: 'Courier New', monospace;
        letter-spacing: 2px;
        word-break: break-all;
        text-align: center;
    }

    .token-label {
        text-muted;
        font-size: 0.875rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .token-badge {
        display: inline-block;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        margin-top: 0.5rem;
    }

    .token-keluar-badge {
        background-color: #ffe5e5;
        color: #c23b22;
    }

    .token-masuk-badge {
        background-color: #e5f5e5;
        color: #1e6b1e;
    }

    .refresh-info {
        text-align: center;
        color: white;
        font-size: 0.875rem;
        margin-top: 2rem;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }

    .refresh-info i {
        margin-right: 0.5rem;
        animation: spin 2s linear infinite;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    @media (max-width: 768px) {
        .header-section h1 {
            font-size: 1.75rem;
        }

        .token-value {
            font-size: 1.5rem;
        }

        .token-card {
            margin-bottom: 1.5rem;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header-section">
            <img class="img-fluid" src="https://smkth-jakbar.com/assets/images/logo.png" alt="Logo SMK Tunas Harapan">
            <h1>Token Sistem</h1>
            <p style="color: rgba(255, 255, 255, 0.9); font-size: 1rem;">CBT PENGAWAS SMK TUNAS HARAPAN</p>
        </div>

        <!-- Token Cards Row -->
        <div class="row g-4">
            <!-- Token Keluar Card -->
            <div class="col-md-6">
                <div class="token-card">
                    <div class="card-header">
                        <h4><i class="bi bi-box-arrow-out"></i> Token Keluar</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="token-value">
                                <?= $token_keluar['token'] ?>
                            </div>
                            <div style="text-align: center; margin-top: 1rem;">
                                <span class="token-badge token-keluar-badge">
                                    <i class="bi bi-exclamation-circle"></i> Keluar
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Token Masuk Card -->
            <div class="col-md-6">
                <div class="token-card">
                    <div class="card-header">
                        <h4><i class="bi bi-box-arrow-in"></i> Token Masuk</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="token-value">
                                <?= $token_masuk['token'] ?>
                            </div>
                            <div style="text-align: center; margin-top: 1rem;">
                                <span class="token-badge token-masuk-badge">
                                    <i class="bi bi-check-circle"></i> Masuk
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Refresh Info -->
        <!-- <div class="refresh-info">
            <i class="bi bi-arrow-repeat"></i>
            <span>Halaman otomatis refresh setiap 5 detik</span>
        </div> -->
    </div>


    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>

</body>

</html>