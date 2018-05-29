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
    <h2 class="text-center"><a class="text-dark bio" href="<?php echo site_url('/users/following/'.$user['id']);?>">Following (<?php echo $amountFollowingAccounts[0]['amount'];?>)</h2></a>
    <div class="row ">
        <?php $cpt = 0;?>
        <?php foreach ($followingAccounts as $followed) : ?>
            <?php if($cpt>7){ break;};?>
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
            <?php $cpt++;?>
        <?php endforeach;?>
    </div>
</div>
<?php if($amountFollowingAccounts[0]['amount'] ==0) : ?>
    <p class="text-center">Not following anyone yet.</p>
<?php endif;?>
<hr />
<!--USER'S FOLLOWERS-->
<div class="col-11 mx-auto">
    <h2 class="text-center"><a class="text-dark bio" href="<?php echo site_url('/users/followers/'.$user['id']);?>">Followers (<?php echo $amountFollowerAccounts[0]['amount'];?>)</h2></a>
    <div class="row ">
        <?php $tmp = 0;?>
        <?php foreach ($followersAccounts as $follows) : ?>
            <?php if($tmp>7) { break;};?>
            <div class="col-3 mb-2">
                <div class="card hover-shadow h-100">
                    <div class="card-body text-center mx-auto">
                        <img alt="User Pic" src="<?php echo base_url();?>assets/img/uploads/<?php echo $follows['photo'];?>" id="profile-image1" class="d-block img-thumbnail img-responsive float-left " height="100" width="100">
                    </div>
                    <footer class="card-footer text-center">
                        <p class="mt-2"><a class="hover-primary" href="<?php echo site_url('/users/'.$follows['id']);?>"><?php echo $follows['prenom']." ".$follows['nom'];?></a></p>
                    </footer>
                </div>
            </div>
            <?php $tmp ++;?>
        <?php endforeach;?>
    </div>
</div>
<?php if($amountFollowerAccounts[0]['amount'] ==0) : ?>
    <p class="text-center">No followers yet.</p>
<?php endif;?>
<hr />
<!--RECENT POSTS SECTION -->
<h2 class="text-center mb-3">Recent posts</h2>
<?php $iterate = 0;?>
<?php foreach ($posts as $post) : ?>
    <?php if($iterate>4) { break;};?>
    <div class ="container col-lg-9 col-md-9 col-sm-9 mb-3 mt-2">
        <div class="card h-50">
            <!--BODY POST-->
            <div class="card-body">
                <h5 class="card-title text-center"><?php echo $post['titre'];?></h5>
                <div class="text-center"><small class="font-weight-light mb-4"><a href="<?php echo site_url('/posts/'.$post['id']);?>">Posted: <?php echo $post['date'];?></small></a></div>
                <div class="mb-3 text-center embed-responsive embed-responsive-16by9 col-8 mx-auto"> <iframe class="embed-responsive-item" width="600" height="330" src="<?php echo "https://www.youtube.com/embed/".$post['link'];?>" frameborder="0" allow="autoplay;" allowfullscreen></iframe></div>
                <hr>
                <p class="bg-light mt-2 text-center"><?php echo $post['contenu'];?></p>
                <!-- Like/Unlike button according to the state in database for current post -->
                <?php if (!isset($stateLike[$iterate]['state'])) : ;?>
                    <?php echo form_open('posts/like/'.$post['id']);?>
                    <div class="col-lg-2 col-sm-4">
                        <button type="submit" class="btn btn-primary mt-1 mb-2"> Like <span class="ml-1 badge badge-light"><?php echo $likes[$iterate]['likes'];?></span></button>
                    </div>
                    <?php echo form_close();?>
                <?php elseif (intval($stateLike[$iterate]['state']) == 0) :;?>
                    <?php echo form_open('posts/like/'.$post['id']);?>
                    <div class="col-lg-2 col-sm-4">
                        <button type="submit" class="btn btn-primary mt-1 mb-2"> Like <span class="ml-1 badge badge-light"><?php echo $likes[$iterate]['likes'];?></span></button>
                    </div>
                    <?php echo form_close();?>
                <?php else : ;?>
                    <?php echo form_open('posts/unlike/'.$post['id']);?>
                    <div class="col-lg-2 col-sm-4">
                        <button type="submit" class="btn btn-outline-primary mt-1 mb-2"> Liked <span class="ml-1 badge badge-light"><?php echo $likes[$iterate]['likes'];?></span></button>
                    </div>
                    <?php echo form_close();?>
                <?php endif;?>
                <!--END LIKE-->
            </div>
        </div>
    </div>
    <?php $iterate ++;?>
<?php endforeach;?>
<?php if(empty($posts)) : ?>
    <p class="mt-5 text-center">No recent post to show.</p>
<?php endif;?>
