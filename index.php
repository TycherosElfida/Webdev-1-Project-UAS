<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Project UAS Sanders</title>
		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<!-- font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="assets/css/styles.css">
		<!-- Minta Font ke mbah google -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets/images/TychePhoto.png">
    </head>
	<body>
		<!-- Bagian Navbar yang gak akan berubah berubaj -->
		<header> <?php include 'includes/navbar.php'; ?> </header>
		<!-- masuk bagian section per page -->
		<main> <?php
            $page = '';
            $mod = "";

            if (isset($_GET['page'])) {
                $mod = $_GET['page'];
            }

            switch ($mod) 
            {
                case null:
                    $page = 'includes/Views/home.php';
                    break;
                case 'home':
                    $page = 'includes/Views/home.php';
                    break;
                case 'products':
                    $page = 'includes/Views/products.php';
                    break;
                case 'packages':
                    $page = 'includes/Views/packages.php';
                    break;
                case 'about':
                    $page = 'includes/Views/about.php';
                    break;
                case 'compare':
                    $page = 'includes/Views/compare.php';
                    break;
                case 'cart':
                    $page = 'includes/Views/cart.php';
                    break;
                case 'account':
                    $page = 'includes/Views/account.php';
                    break;
                case 'easteregg':
                    $page = 'includes/Views/easteregg.php';
                    break;
                case 'item':
                    $page = 'includes/sections/item.php';
                    break;
                case 'transaction':
                    $page = 'includes/Views/transaction.php';
                    break;
                default:
                    $page = 'includes/Views/404.php';
                    break;
            }

            include($page);
        ?> </main>
		<!-- footer juga gak berubah berubah -->
		<footer> <?php include 'includes/footer.php'; ?> </footer>
		<!-- Ini untuk JS ada di bawah semua -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<script src="assets/js/scripts.js"></script>
        <script src="assets/js/script2.js"></script>
	</body>
</html>