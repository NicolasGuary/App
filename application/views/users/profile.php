<div class ="container col-lg-11 col-md-11 col-sm-11 mb-3 mt-2">
    <div class="card h-50">
        <!--Profil de la personne qui poste-->
        <div class="card-header">
            <div class="row">
                <div class="col-12">
                    <!--Delete user button-->
                    <?php if ($user['id'] == $loggedUser[0]['id'] || $loggedUser[0]['admin']) :?>
                        <button name="delete" value="delete" data-toggle="modal" data-target="#deletePost" class="btn btn-danger ml-2 mt-1 mb-2 float-right">Delete</button>
                        <!-- Modal -->
                        <div class="modal fade" id="deletePost" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="logout-warning">Warning</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete your profile? All your posts, comments and likes will be deleted.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <?php echo form_open('users/delete/'.$user['id']);?>
                                        <button type="submit" name="delete" value="delete" class="btn btn-danger">Delete</button>
                                        <?php echo form_close();?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                    <!--End of user post-->
                    <img alt="User Pic" src="<?php echo $user['photo'];?>" id="profile-image1" class="ml-auto mr-4 d-block img-thumbnail img-responsive float-left" height="200" width="200">
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
                        <img alt="User Pic" src="<?php echo $followed['photo'];?>" id="profile-image1" class="d-block img-thumbnail img-responsive float-left " height="100" width="100">
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
                        <img alt="User Pic" src="<?php echo $follows['photo'];?>" id="profile-image1" class="d-block img-thumbnail img-responsive float-left " height="100" width="100">
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
                <div class="row">
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
                    <!--Edit button-->
                    <?php if ($post['idUser'] == $loggedUser[0]['id'] || $loggedUser[0]['admin']) :?>
                        <button type="button" class="btn btn-secondary mt-1 mb-2 mr-3" data-toggle="modal" data-target="#editTrack">
                            Edit
                        </button>
                        <div class="modal fade" id="editTrack" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <?php echo form_open('posts/update/'.$post['id']);?>
                                    <?php echo validation_errors('<div class="text-center mx-auto"><p class="badge badge-danger mt-2">','</p></div>');?>
                                    <div class="card col-10 mx-auto mt-3 mb-5">
                                        <div class="container mt-3 mb-5">
                                            <div class="row justify-content-center">
                                                <div class="col-10 text-center">
                                                    <h1 class="text-uppercase">Update your post</h1>
                                                </div>
                                                <div class="col-10">
                                                    <div class="form-group">
                                                        <label>Your favorite track of the day</label>
                                                        <input name="link" type="text" class="form-control" placeholder="YouTube URL" value="<?php echo $post['link'];?>">
                                                        <small type="text" class="form-text text-muted">Video will be displayed on your post</small>
                                                        <label class="mt-2">Say something nice about it</label>
                                                        <textarea name="contenu" class="form-control" rows="3"><?php echo $post['contenu'];?></textarea>
                                                    </div>
                                                    <div class="mt-2 mb-5 text-center">
                                                        <button type="submit" class="btn btn-outline-primary ">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                    <!--End of edit post-->
                    <!--Delete post button-->
                    <?php if ($post['idUser'] == $loggedUser[0]['id'] || $loggedUser[0]['admin']) :?>
                        <button name="delete" value="delete" data-toggle="modal" data-target="#deletePost" class="btn btn-danger mt-1 mb-2">Delete</button>
                        <!-- Modal -->
                        <div class="modal fade" id="deletePost" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="logout-warning">Warning</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this post?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <?php echo form_open('posts/delete/'.$post['id']);?>
                                        <button type="submit" name="delete" value="delete" class="btn btn-danger">Delete</button>
                                        <?php echo form_close();?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                    <!--End of delete post-->
                </div>
            </div>
        </div>
    </div>
    <?php $iterate ++;?>
<?php endforeach;?>
<?php if(empty($posts)) : ?>
    <p class="text-center">No recent post to show.</p>
<?php endif;?>
