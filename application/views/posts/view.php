<div class ="container col-lg-9 col-md-9 col-sm-9 mb-3 mt-2">
    <div class="card h-50">
        <!--Profil de la personne qui poste-->
        <div class="card-header">
            <div class="row">
                <div class="col-12">
                    <?php if ($post['idUser'] == $loggedUser[0]['id'] || $loggedUser[0]['admin']) :?>
                        <!--Edit button-->
                        <button type="button" class="btn btn-sm btn-secondary float-right ml-2" data-toggle="modal" data-target="#editTrack">
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
                        <button data-toggle="modal" data-target="#deletePost" type="submit" name="delete" value="delete"  class="btn btn-danger btn-sm float-right">Delete</button>
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
                    <img alt="User Pic" src="<?php echo $post['photo'];?>" id="profile-image1" class="ml-auto mr-4 d-block img-thumbnail img-responsive float-left" height="70" width="70">
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
            <?php $i=0;?>
            <?php if($comments) : ?>
                <?php foreach ($comments as $comment ) : ?>
                    <div class="card mb-2">
                        <div class="row">
                            <div class="col-10">
                                <div>
                                    <img alt="User Pic" src="<?php echo $comment['photo'];?>" id="profile-image1" class="img-thumbnail ml-1 mt-1 mr-3 d-block img-responsive float-left" height="50" width="50">
                                    <h3><span class="mt2 mb-2 badge badge-light"><a href="<?php echo site_url('/users/'.$comment['idUser']);?>"><?php echo $comment['prenom']." ".$comment['nom'];?></span></h3></a>
                                    <p class="text-secondary bg-light col-lg-6 col-sm-12 mt-3"> published: <?php echo $comment['commented_at']?></p>
                                </div>
                                <p class="ml-3"><?php echo $comment['body'];?></p>
                            </div>
                        </div>
                        <div class="container float-right">
                            <!--Edit comment-->
                            <?php if ($comment['idUser'] == $loggedUser[0]['id'] || $loggedUser[0]['admin']) :?>
                                <button type="submit" name="edit" value="edit" class="float-right mb-1 btn btn-outline-secondary" data-toggle="modal" data-target="#editComment<?php echo $i;?>">Edit</button>
                                <!--Modal-->
                                <div class="modal fade" id="editComment<?php echo $i;?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <?php echo form_open('comments/update/'.$comment['idComment']); ?>
                                            <div class="row">
                                                <h2 class="mx-auto text-center">Edit your comment</h2>
                                                <textarea class="mb-5 ml-5 form-control mt-1 col-10" type="text" name="body" rows="3" placeholder="Comment..."><?php echo $comment['body'];?></textarea>
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
                                <!--End Modal-->
                            <?php endif;?>
                            <!--End of edit comment-->
                            <!--Delete comment button-->
                            <?php if ($comment['idUser'] == $loggedUser[0]['id'] || $loggedUser[0]['admin']) :?>
                                <button type="submit" name="delete" value="delete" data-toggle="modal" data-target="#deleteComment<?php echo $i;?>" class="float-right mb-1 mr-1 btn btn-outline-danger">Delete</button>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteComment<?php echo $i;?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="logout-warning">Warning</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this comment?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <?php echo form_open('comments/delete/'.$comment['idComment']);?>
                                                <button type="submit" name="delete" value="delete" class="btn btn-danger">Delete</button>
                                                <?php echo form_close();?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif;?>
                            <!--End of delete comment-->
                        </div>
                    </div>
                <?php $i++;?>
                <?php endforeach;?>
            <?php else : ?>
                <p class="ml-3 mt-2">No comments yet.</p>
            <?php endif;?>
        </div>
    </div>
</div>