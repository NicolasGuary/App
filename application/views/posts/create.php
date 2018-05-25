<?php echo form_open('posts/create');?>
 <?php echo validation_errors('<p class="text-danger text-center font-weight-bold mt-2">','</p>');?>

<div class="card col-10 mx-auto mt-3 mb-5">
        <div class="container mt-3 mb-5">
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
                    <div class="mt-2 mb-5 text-center">
                        <button type="submit" class="btn btn-outline-primary ">Share it !</button>
                    </div>
                </div>
            </div>
        </div>
</div>
</form>