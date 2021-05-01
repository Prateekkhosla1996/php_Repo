<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('header.php') ?>
<div class="container" class="mt-2">
    <h1>Admin Form</h1>
    <?php echo form_open('admin/sendmail') ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">Email:</label>
                <?php echo form_input(['class' => 'form-control', 'name' => 'username', 'placeholder' => 'enter username', 'type' => 'email','value'=>set_value("username")]) ?>
                <?php echo form_error('username','<div class="text-danger">','</div>'); ?>
            </div>
            <div class="form-group">
                <label for="">Password</label>

                <?php echo form_input(['class' => 'form-control', 'name' => 'password', 'placeholder' => 'enter password', 'type' => 'password','value'=>set_value("password")]) ?>
                
                <?php echo form_error('password','<div class="text-danger">','</div>'); ?>
            </div>
            <div class="form-group">
                <label for="">first name</label>

                <?php echo form_input(['class' => 'form-control', 'name' => 'fname', 'placeholder' => 'enter f name', 'type' => 'text','value'=>set_value("fname")]) ?>
                
                <?php echo form_error('fname','<div class="text-danger">','</div>'); ?>
            </div>
            <div class="form-group">
                <label for="">last name</label>

                <?php echo form_input(['class' => 'form-control', 'name' => 'lname', 'placeholder' => 'enter l name', 'type' => 'text','value'=>set_value("lname")]) ?>
                
                <?php echo form_error('lname','<div class="text-danger">','</div>'); ?>
            </div>
            <?php echo form_submit(['type' => 'submit', 'class' => 'btn btn-primary', 'value' => 'submit']) ?>
            <?php echo anchor('admin/register','Sign up?','class="link-class"'); ?>
        </div>
        
    </div>
    <?php echo form_close() ?>
    
</div>
<?php include('footer.php') ?>
</body>
</html>