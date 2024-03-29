<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>AimsSoft</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700|Dosis:300,400,500,700|Roboto:300,400,500,700"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/products.css" rel="stylesheet" />
</head>

<body class="<?php echo $bg_body_class; ?> bg-page font-merishop width-100percent adjustment">

    <?php include 'inc/logo.php'?>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-11 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <h1 class="logo"><a href="index.html"><img
                                    src="<?php echo isset($logo_path) ? $logo_path : ''; ?>" width="100%" height="auto"
                                    alt="" /></a></h1>
                        <h3 class="page-name" style="padding: 5px;">
                            <?php echo $page_name ?>
                        </h3>
                    </div>
                    <nav id="navbar" class="navbar">
                        <ul class=" ">
                            <?php foreach ($menu_items as $index => $item): ?>
                            <li><a class="nav-link scrollto" href="#<?php echo $pointers_to_section[$index]; ?>">
                                    <?php echo $item; ?>
                                </a></li>
                            <?php endforeach;?>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav>

                </div>
            </div>
        </div>
    </header>