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
                    <!-- Follow/Unfollow button according to the state in database for current user -->
                    <?php if (!isset($state['state'])) : ;?>
                        <?php echo form_open('users/follow/'.$user['id']);?>
                        <button type="submit" name="follow" value="follow"  class="badge badge-secondary">Follow</button>
                        <span class="badge badge-pill badge-primary"><?php echo $followers['followers'];?> Followers</span>
                        <?php echo form_close();?>
                    <?php elseif (intval($state['state']) == 0) :;?>
                        <?php echo form_open('users/follow/'.$user['id']);?>
                        <button type="submit" name="follow" value="follow"  class="badge badge-secondary">Follow</button>
                        <span class="badge badge-pill badge-primary"><?php echo $followers['followers'];?> Followers</span>
                        <?php echo form_close();?>
                    <?php else : ;?>
                        <?php echo form_open('users/unfollow/'.$user['id']);?>
                        <button type="submit" name="follow" value="follow"  class="badge badge-light">Unfollow</button>
                        <span class="badge badge-pill badge-primary"><?php echo $followers['followers'];?> Followers</span>
                        <?php echo form_close();?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--ACCOUNT FOLLOWED BY THE USER-->
<div class="col-11 mx-auto">
    <h2 class="text-center">Following (<?php echo $amountFollowingAccounts[0]['amount'];?>)</h2>
    <div class="row ">
        <?php foreach ($followingAccounts as $followed) : ?>
            <div class="col-3 mb-2">
                <div class="card hover-shadow h-100">
                    <div class="card-body text-center mx-auto">
                        <img alt="User Pic" src="<?php echo base_url();?>assets/img/uploads/<?php echo $followed['photo'];?>" id="profile-image1" class="d-block img-thumbnail img-responsive float-left " height="100" width="100">
                    </div>
                    <footer class="card-footer text-center">
                        <p class="mt-2"><a class="hover-primary" href="<?php echo site_url('/users/'.$followed['id']);?>"><?php echo $followed['prenom']." ".$followed['nom'];?></a></p>
                    </footer>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>