<?php echo form_open('users/login'); ?>
<?php echo validation_errors('<p class="text-danger text-center font-weight-bold mt-2">','</p>');?>
<div class="container text-center">
    <div class="row">
        <div class="col-12">
            <section>
                <h1 class="title mt-2"><span>Welcome back !</span> </h1>
                <hr>
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
                                <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Enter your password" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <input name="submit" type="submit" value="Sign In" class="btn btn-success btn">
                        </div>
                    </div>
            </section>
        </div>
    </div>
</div>
<?php echo form_close();?>