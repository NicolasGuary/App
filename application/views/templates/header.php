<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MANT</title>
    <link rel="icon" href="<?php echo base_url();?>assets/img/favicon.png">
</head>
<body>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url();?>"> <img src="<?php echo base_url();?>assets/img/logo.png" width="" height="40" class="d-inline-block align-top mr-1" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?php echo base_url();?>posts">Hear the world</a>
            <a class="nav-item nav-link active" href="<?php echo base_url();?>posts">Timeline</a>
            <a class="nav-item nav-link active" href="<?php echo base_url();?>users/3">Profile</a>
            <a class="nav-item nav-link active" href="<?php echo base_url();?>posts/create">Post</a>
            <a class="nav-item nav-link active" href="<?php echo base_url();?>">About us</a>
        </div>

        <div class="navbar-nav ml-auto mr-3">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                    Nicolas Guary
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href=<?php echo base_url();?>user>View Profile</a>
                    <a class="dropdown-item" href="#">Edit Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Log out</a>
                </div>
        </div>
    </div>
</nav>