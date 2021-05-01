<?php include('header.php') ?>

<div class="container" class="mt-2">
    <h1>Admin Form</h1>
    <?php if($err = $this->session->flashdata('Login_failed')): ?>
        <div class="alert alert-danger">
        <?= $err ?>
        </div>
        <?php endif ?>
    <?php echo form_open('admin/index') ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">Email:</label>
                <?php echo form_input(['class' => 'form-control', 'name' => 'username', 'placeholder' => 'enter username', 'type' => 'email', 'value' => set_value("username")]) ?>
                <?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label for="">Password</label>

                <?php echo form_input(['class' => 'form-control', 'name' => 'password', 'placeholder' => 'enter password', 'type' => 'password', 'value' => set_value("password")]) ?>

                <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
            </div>

            <?php echo form_submit(['type' => 'submit', 'class' => 'btn btn-primary', 'value' => 'submit']) ?>
            <?php echo anchor('admin/register', 'Sign up?', 'class="link-class"'); ?>
        </div>

    </div>
    <?php echo form_close() ?>

</div>

<?php include('footer.php') ?>