<div class="container text-center">
    <div class="row">
        <div class="col-12">
            <section>
                <h1 class="title"><span>Join MANT !</span> </h1>
                <hr>
                <?php echo validation_errors('<p class="text-danger text-center font-weight-bold mt-2">','</p>');?>
                <form class="form-horizontal" method="post" name="signup" id="signup" action="<?php base_url();?>users/register" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label class="control-label col-sm-3">Email <span class="text-danger">*</span></label>
                        <div class="col-10 mx-auto">
                            <div class="input-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email address " value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Password <span class="text-danger">*</span></label>
                        <div class="col-10 mx-auto">
                            <div class="input-group">
                                <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Choose password (must be at least 7 characters)" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Confirm Password <span class="text-danger">*</span></label>
                        <div class="col-10 mx-auto">
                            <div class="input-group">
                                <input type="password" class="form-control" name="cmdp" id="cmdp" placeholder="Confirm your password" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Full Name <span class="text-danger">*</span></label>
                        <div class="row col-10 mx-auto">
                            <input type="text" class="form-control mr-auto col-5" name="prenom" id="prenom" placeholder="First Name" value="">
                            <input type="text" class="form-control ml-auto col-5" name="nom" id="nom" placeholder="Last Name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Profile Photo
                            <small>(optional)</small></label>
                        <div class="col-10 mx-auto">
                            <div class="input-group">
                                <input type="file" name="photo" id="photo" class="form-control upload" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <input class="btn btn-primary btn" name="submit" type="submit" value="Sign Up">
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>