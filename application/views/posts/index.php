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
                    <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="ml-auto mr-4 d-block img-circle img-responsive float-left" height="70" width="70">
                    <h3 class="text-uppercase font-weight-bold"><?php echo $post['idUser']; ?></h3>
                    <h6 class="font-weight-light"><a href="<?php echo site_url('/posts/'.$post['id']);?>"><?php echo $post['date'];?> at <?php echo $post['time'];?></h6></a>
                </div>
            </div>
        </div>
        <!--Corps du post-->
        <div class="card-body">
            <h5 class="card-title"><?php echo $post['titre'];?></h5>
            <div class="text-center"> <iframe width="600" height="330" src="<?php echo "https://www.youtube.com/embed/".$post['link'];?>" frameborder="0" allow="autoplay;" allowfullscreen></iframe></div>
            <p class="card-text mt-2"><?php echo $post['contenu'];?></p>
            <div class="row">
                <div class="col-lg-2 col-sm-3">
                    <a href="#" class="btn btn-primary mt-1 mb-2"> Like <span class="ml-1 badge badge-light">471</span></a>
                </div>
                <div class="col-lg-10 col-sm-9">
                    <div class="input-group">
                        <input class="form-control mt-1" type="text" placeholder="Comment...">
                        <a href="#">
                            <img class="ml-2 text-center img-responsive send input-group-btn" src="<?php echo base_url();?>assets/img/send.svg" width="30" height="40">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--Section commentaires-->
        <div class="card-footer">
            <div class="card mb-2">
                <div class="row">
                    <div class="col-10">
                        <h3 class="ml-3 mt-1">A friend
                        </h3>
                        <p class="ml-3">Excellent song! Thank you for sharing it.</p>
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="row">
                    <div class="col-10">
                        <h3 class="ml-3 mt-1">Another friend
                        </h3>
                        <p class="ml-3">Waaaaaaouh!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>
