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
            <h5 class="card-title">GET TITLE YOUTUBE?</h5>
            <div class="text-center"> <iframe width="560" height="315" src="<?php echo $post['link']; ?>" frameborder="0" allow="autoplay;" allowfullscreen></iframe></div>
            <p class="card-text mt-2"><?php echo $post['contenu']; ?></p>
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