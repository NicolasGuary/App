<div class ="container col-lg-9 col-md-9 col-sm-9 mb-3 mt-2">
    <div class="card h-50">
        <!--Profil de la personne qui poste-->
        <div class="card-header">
            <div class="row">
                <div class="col-12">
                    <img alt="User Pic" src="<?php echo base_url();?>assets/img/uploads/<?php echo $post['photo'];?>" id="profile-image1" class="ml-auto mr-4 d-block img-thumbnail img-responsive float-left" height="70" width="70">
                    <h1><span class="text-uppercase font-weight-bold"><a class="text-dark bio" href="<?php echo site_url('/users/'.$post['idUser']);?>"><?php echo $post['prenom']." ".$post['nom'];?></span></h1></a>
                    <!-- Follow/Unfollow button according to the state in database for current user -->
                    <?php if (!isset($state['state'])) : ;?>
                        <?php echo form_open('users/follow/'.$post['idUser']);?>
                        <button type="submit" name="follow" value="follow"  class="badge badge-secondary">Follow</button>
                        <span class="badge badge-pill badge-primary"><?php echo $followers['followers'];?> Followers</span>
                        <?php echo form_close();?>
                    <?php elseif (intval($state['state']) == 0) :;?>
                        <?php echo form_open('users/follow/'.$post['idUser']);?>
                        <button type="submit" name="follow" value="follow"  class="badge badge-secondary">Follow</button>
                        <span class="badge badge-pill badge-primary"><?php echo $followers['followers'];?> Followers</span>
                        <?php echo form_close();?>
                    <?php else : ;?>
                        <?php echo form_open('users/unfollow/'.$post['idUser']);?>
                        <button type="submit" name="follow" value="follow"  class="badge badge-light">Unfollow</button>
                        <span class="badge badge-pill badge-primary"><?php echo $followers['followers'];?> Followers</span>
                        <?php echo form_close();?>
                    <?php endif;?>
                    <!--END FOLLOW-->
                </div>
            </div>
            <small class="font-weight-light mt-2"><a href="<?php echo site_url('/posts/'.$post['id']);?>">Posted: <?php echo $post['date'];?></small></a>
        </div>
        <!--Corps du post-->
        <div class="card-body">
            <h5 class="card-title"><?php echo $post['titre'];?></h5>
            <div class="text-center embed-responsive embed-responsive-16by9"> <iframe class="embed-responsive-item" width="600" height="330" src="<?php echo "https://www.youtube.com/embed/".$post['link'];?>" frameborder="0" allow="autoplay;" allowfullscreen></iframe></div>
            <hr>
            <p class="bg-light mt-2 text-center"><?php echo $post['contenu']; ?></p>
            <div class="row">
                <!-- Like/Unlike button according to the state in database for current post -->
                <?php if (!isset($stateLike['state'])) : ;?>
                    <?php echo form_open('posts/like/'.$post['id']);?>
                    <div class="col-lg-2 col-sm-4">
                        <button type="submit" class="btn btn-primary mt-1 mb-2"> Like <span class="ml-1 badge badge-light"><?php echo $likes['likes'];?></span></button>
                    </div>
                    <?php echo form_close();?>
                <?php elseif (intval($stateLike['state']) == 0) :;?>
                    <?php echo form_open('posts/like/'.$post['id']);?>
                    <div class="col-lg-2 col-sm-4">
                        <button type="submit" class="btn btn-primary mt-1 mb-2"> Like <span class="ml-1 badge badge-light"><?php echo $likes['likes'];?></span></button>
                    </div>
                    <?php echo form_close();?>
                <?php else : ;?>
                    <?php echo form_open('posts/unlike/'.$post['id']);?>
                    <div class="col-lg-2 col-sm-4">
                        <button type="submit" class="btn btn-outline-primary mt-1 mb-2"> Liked <span class="ml-1 badge badge-light"><?php echo $likes['likes'];?></span></button>
                    </div>
                    <?php echo form_close();?>
                <?php endif;?>
                <!--END LIKE-->
                <div class="col-lg-10 col-sm-12">
                    <div class="form-group">
                        <?php echo validation_errors('<div class="text-center mx-auto"><p class="badge badge-danger mt-2">','</p></div>');?>
                        <?php echo form_open('comments/create/'.$post['id']); ?>
                        <div class="row">
                            <textarea class=" ml-3 form-control mt-1 col-10" type="text" name="body" rows="1" placeholder="Comment..."></textarea>
                            <input type="hidden" name="id" value="<?php echo $post['id'];?>">
                            <input type="hidden" name="idUser" value="<?php echo $post['idUser'];?>">
                            <button type="submit" class="btn col-1 mr-2">
                                <img class="text-center img-responsive input-group-btn" src="<?php echo base_url();?>assets/img/send.svg" width="30" height="40">
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Section commentaires-->
        <div class="card-footer">
            <?php if($comments) : ?>
                <?php foreach ($comments as $comment ) : ?>
                    <div class="card mb-2">
                        <div class="row">
                            <div class="col-10">
                                <div>
                                    <img alt="User Pic" src="<?php echo base_url();?>assets/img/uploads/<?php echo $comment['photo'];?>" id="profile-image1" class="img-thumbnail ml-1 mt-1 mr-3 d-block img-responsive float-left" height="50" width="50">
                                    <h3><span class="mt2 mb-2 badge badge-light"><a href="<?php echo site_url('/users/'.$comment['idUser']);?>"><?php echo $comment['prenom']." ".$comment['nom'];?></span></h3></a>
                                    <p class="text-secondary bg-light col-lg-6 col-sm-12 mt-3"> published: <?php echo $comment['commented_at']?></p>
                                </div>
                                <p class="ml-3"><?php echo $comment['body'];?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php else : ?>
                <p class="ml-3 mt-2">No comments yet.</p>
            <?php endif;?>
        </div>
    </div>
</div>