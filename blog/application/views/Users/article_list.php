<?php include('header.php') ?>

<div class="container" class="mt-2">
    <h1>Admin Form</h1>
    <?php echo form_open('admin/index') ?>

        <div class="form-group">
            <label for="">Email:</label>
            <?php echo form_input(['class'=>'form-control','name'=>'username','placeholder'=>'enter username','type'=>'email']) ?>
        </div>
        <div class="form-group">
            <label for="">Password</label>
                
                <?php echo form_input(['class'=>'form-control','name'=>'password','placeholder'=>'enter password','type'=>'password']) ?>
        </div>
        <div class="checkbox">
            <input type="checkbox" name="" id="">
        </div>
        
        <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'submit']) ?>
        <?php echo form_close() ?>
</div>
<?php include('footer.php') ?>