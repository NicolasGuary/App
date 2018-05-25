<div class="text-center mt-3 mb-3">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#postTrack">
        Create a new post !
    </button>
</div>

<div class="modal fade" id="postTrack" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <?php echo form_open('posts/create');?>
            <?php echo validation_errors();?>

            <div class="col-10 mx-auto mt-3">
                <div class="container mt-3">
                    <div class="row justify-content-center">
                        <div class="col-10 text-center">
                            <h1 class="text-uppercase">Post a new track to MANT</h1>
                        </div>
                        <div class="col-10">
                            <div class="form-group">
                                <label>Your favorite track of the day</label>
                                <input name="link" type="text" class="form-control" placeholder="YouTube URL">
                                <small type="text" class="form-text text-muted">Video will be displayed on your post</small>
                                <label class="mt-2">Say something nice about it</label>
                                <textarea name="contenu" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="mt-2 mb-2 text-center">
                                <button type="submit" class="btn btn-outline-primary ">Share it !</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<?php foreach ($posts as $post) : ?>
<div class ="container col-lg-9 col-md-9 col-sm-9 mb-3 mt-2">
    <div class="card h-50">
        <!--Profil de la personne qui poste-->
        <div class="card-header">
            <div class="row">
                <div class="col-12">
                    <img alt="User Pic" src="<?php echo base_url();?>assets/uploads/<?php echo $post['photo'];?>" id="profile-image1" class="ml-auto mr-4 d-block img-circle img-responsive float-left" height="70" width="70">
                    <h3 class="text-uppercase font-weight-bold"><?php echo $post['prenom']." ".$post['nom'];?></h3>
                    <h6 class="font-weight-light"><a href="<?php echo base_url().'posts/'.$post['id'];?>"><?php echo $post['date'];?> at <?php echo $post['time'];?></h6></a>
                </div>
            </div>
        </div>
        <!--Corps du post-->
        <div class="card-body">
            <h5 class="card-title text-center"><?php echo $post['titre'];?></h5>
            <div class="mb-3 text-center embed-responsive embed-responsive-16by9 col-8 mx-auto"> <iframe class="embed-responsive-item" width="600" height="330" src="<?php echo "https://www.youtube.com/embed/".$post['link'];?>" frameborder="0" allow="autoplay;" allowfullscreen></iframe></div>
            <hr>
            <p class="bg-light mt-2 text-center"><?php echo $post['contenu'];?></p>
            <div class="row">
                <div class="col-lg-2 col-sm-3">
                    <a href="#" class="btn btn-primary mt-1 mb-2"> Like <span class="ml-1 badge badge-light">471</span></a>
                </div>
                <div class="col-lg-10 col-sm-12">
                    <div class="form-group">
                        <?php echo validation_errors('<p class="text-danger text-center font-weight-bold mt-2">','</p>');?>
                        <?php echo form_open('comments/create/'.$post['id']); ?>
                        <div class="row">
                            <textarea class=" ml-3 form-control mt-1 col-10" type="text" name="body" rows="1" placeholder="Comment..."></textarea>
                            <input type="hidden" name="id" value="<?php echo $post['id'];?>">
                            <input type="hidden" name="idUser" value="<?php echo $post['idUser'];?>">
                            <button type="submit" class="btn col-1 mr-2">
                                <img class="text-center img-responsive input-group-btn" src="<?php echo base_url();?>assets/img/send.svg" width="30" height="40">
                            </button>
                        </div>
                    </div>
                        </form>
                </div>
            </div>
        </div>
        <!--Section commentaires-->
        <div class="card-footer">
                <?php $com = false;?>
                <?php foreach ($comments as $comment ) : ?>
                    <?php if($comment['idPost'] === $post['id']) : ?>
                    <?php $com= true;?>
                    <div class="card mb-2">
                        <div class="row">
                            <div class="col-10">
                                    <h3 class="ml-3 mt-1"><?php echo $comment['prenom']." ".$comment['nom'];?></h3>
                                <p class="text-secondary bg-light col-lg-6 col-sm-12"> published: <?php echo $comment['commented_at']?></p>
                                <p class="ml-3"><?php echo $comment['body'];?></p>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                <?php endforeach;?>
                    <?php if(!($com)) : ?>
                        <p class="ml-3 mt-2">No comments yet.</p>
                    <?php endif;?>
        </div>
    </div>
</div>
<?php endforeach;?>
