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
    <?php if($this->CookieModel->isLoggedIn()) : ;?>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?php echo base_url();?>posts">Hear the world</a>
            <a class="nav-item nav-link active" href="<?php echo base_url();?>posts/timeline">Timeline</a>
            <?php if(isset($loggedUser)) : ;?>
            <a class="nav-item nav-link active" href=<?php echo base_url();?>users/<?php echo $loggedUser[0]['id'];?>>Profile</a>
            <?php endif;?>
            <a class="nav-item nav-link active" href="<?php echo base_url();?>posts/create">Post</a>
            <a class="nav-item nav-link active" href="<?php echo base_url();?>users/following/<?php echo $loggedUser[0]['id'];?>">Following</a>
            <a class="nav-item nav-link active" href="<?php echo base_url();?>users/followers/<?php echo $loggedUser[0]['id'];?>">Followers</a>
        </div>

        <?php if(isset($loggedUser)) : ;?>
        <div class="navbar-nav ml-auto mr-3">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                    <?php echo $loggedUser[0]['prenom']." ".$loggedUser[0]['nom'];?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href=<?php echo base_url();?>users/<?php echo $loggedUser[0]['id'];?>>View Profile</a>
                    <a class="dropdown-item" href="#">Edit Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url();?>users/logout" data-toggle="modal" data-target="#logout">Log out</a>
                </div>
        </div>
            <!-- Modal -->
            <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="logout-warning">Warning</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to log out?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-danger" href="<?php echo base_url();?>users/logout">Log out</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <?php endif ;?>
    <?php else : ;?>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <div class="navbar-nav ml-auto mr-3">
                <a href="<?php echo base_url();?>users/register" class="btn btn-primary ">Sign up</a>
                <a href="<?php echo base_url();?>users/login" class="btn btn-link ml-2">Sign in</a>
            </div>
        </div>
    <?php endif;?>
</nav>