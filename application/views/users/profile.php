<div class ="container col-lg-11 col-md-11 col-sm-11 mb-3 mt-2">
    <div class="card h-50">
        <!--Profil de la personne qui poste-->
        <div class="card-header">
            <div class="row">
                <div class="col-12">
                    <img alt="User Pic" src="<?php echo base_url();?>assets/img/uploads/<?php echo $user['photo'];?>" id="profile-image1" class="ml-auto mr-4 d-block img-thumbnail img-responsive float-left" height="200" width="200">
                    <h1><span class="mt2 mb-2 text-uppercase font-weight-bold"><a class="text-dark bio" href="<?php echo site_url('/users/'.$user['id']);?>"><?php echo $user['prenom']." ".$user['nom'];?></span></h1></a>
                    <small class="font-weight-light mt-2"> joined: <?php echo $user['date_inscription'];?></small>
                    <hr>
                    <?php echo form_open('users/follow/'.$user['id']);?>
                    <button type="submit" name="follow" value="follow"  class="badge badge-secondary">Follow</button>
                    <span class="badge badge-pill badge-primary"><?php echo $followers['followers'];?> Followers</span>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>

<h1 class="text-center mb-3">Recent posts</h1>
<?php foreach ($posts as $post) : ?>
    <div class ="container col-lg-9 col-md-9 col-sm-9 mb-3 mt-2">
        <div class="card h-50">
            <!--Corps du post-->
            <div class="card-body">
                <h5 class="card-title text-center"><?php echo $post['titre'];?></h5>
                <div class="text-center"><small class="font-weight-light mb-4"><a href="<?php echo site_url('/posts/'.$post['id']);?>">Posted: <?php echo $post['date'];?></small></a></div>
                <div class="mb-3 text-center embed-responsive embed-responsive-16by9 col-8 mx-auto"> <iframe class="embed-responsive-item" width="600" height="330" src="<?php echo "https://www.youtube.com/embed/".$post['link'];?>" frameborder="0" allow="autoplay;" allowfullscreen></iframe></div>
                <hr>
                <p class="bg-light mt-2 text-center"><?php echo $post['contenu'];?></p>
                       <div class="text-center"><a href="#" class="btn btn-primary mt-1 mb-2"> Like <span class="ml-1 badge badge-light">471</span></a></div>
                    </div>
                    </div>
                </div>
<?php endforeach;?>

<?php if(empty($posts)) : ?>
    <p class="mt-5 text-center">No recent post to show.</p>
<?php endif;?>
