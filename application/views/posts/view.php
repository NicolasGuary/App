<div class ="container col-lg-9 col-md-9 col-sm-9 mb-3 mt-2">
    <div class="card h-50">
        <!--Profil de la personne qui poste-->
        <div class="card-header">
            <div class="row">
                <div class="col-12">
                    <img alt="User Pic" src="<?php echo base_url();?>assets/img/uploads/<?php echo $post['photo'];?>" id="profile-image1" class="ml-auto mr-4 d-block img-circle img-responsive float-left" height="70" width="70">
                    <h3 class="text-uppercase font-weight-bold"><?php echo $post['prenom']." ".$post['nom'];?></h3>
                    <?php echo form_open('users/follow/'.$post['idUser']);?>
                    <button type="submit" name="follow" value="follow"  class="badge badge-secondary">Follow</button>
                    <span class="badge badge-pill badge-primary"><?php echo $followers['followers'];?> Followers</span>
                    <?php echo form_close();?>
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
                <div class="col-lg-2 col-sm-4">
                    <a href="#" class="btn btn-primary mt-1 mb-2"> Like <span class="ml-1 badge badge-light">471</span></a>
                </div>
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
                                    <img alt="User Pic" src="<?php echo base_url();?>assets/img/uploads/<?php echo $comment['photo'];?>" id="profile-image1" class=" ml-1 mt-1 mr-3 d-block img-responsive float-left" height="50" width="50">
                                    <h3 class="ml-3 mt-1"><?php echo $comment['prenom']." ".$comment['nom'];?> </h3>
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