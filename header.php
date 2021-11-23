<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/header.php') ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/main-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRM <?php ($userType == ' | ADMIN') ? printf('Admin') : print('')  ?></title>

</head>

<body>
    <nav id="custom-navbar" class="navbar navbar-light custom-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" onclick="openNav();"><i class="fas fa-bars"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item" id="navbarHomeBtn">
                        <a href="dashboard.php" class="nav-link text-light"><i class="fas fa-home"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="sidebar" class="sidebar">
        <div class="sidebar-brand">
            <h1 class="brand">CRM <?php ($userType == 'ADMIN') ? printf(' | Admin') : print('')?> </h1>
            <div class="navbar-buttons">
                <?php sidebarMainButtons() ?>
                <div class="button-close">
                    <a id="button-close" href="#" onclick="closeNav()"><i class="fas fa-times"></i></a>
                </div>
            </div>
        </div>
        <div class="profile text-light">
            <?php profileInfo() ?>
        </div>
        <hr class="text-light">

        <ul class="nav flex-column">
            <?php sidebarLinks() ?>
        </ul>
    </div>
    

    <div id="content" class="content">