<?php include('header.php') ?>

<div class="container" class="mt-2">
    <h1>Add article Form</h1>
    <?php if ($err = $this->session->flashdata('uploading_failed')) : ?>
        <div class="alert alert-danger">
            <?= $err ?>
        </div>
    <?php endif ?>
    <?php if ($suc = $this->session->flashdata('successful')) : ?>
        <div class="alert alert-success">
            <?= $suc ?>
        </div>
    <?php endif ?>
    <?php echo form_open('admin/userValidation') ?>
    <?php echo form_hidden('user_id', $this->session->userdata('id')); ?>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">title:</label>
                <?php echo form_input(['class' => 'form-control', 'name' => 'title', 'placeholder' => 'enter title', 'type' => 'text', 'value' => set_value("title")]) ?>
                <?php echo form_error('title', '<div class="text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label for="">article body</label>

                <?php echo form_textarea(['class' => 'form-control', 'name' => 'body', 'placeholder' => 'enter article body', 'type' => '', 'value' => set_value("body")]) ?>

                <?php echo form_error('body', '<div class="text-danger">', '</div>'); ?>
            </div>

            <?php echo form_submit(['type' => 'submit', 'class' => 'btn btn-primary', 'value' => 'submit']) ?>
        </div>

    </div>
    <?php echo form_close() ?>

</div>

<?php include('footer.php') ?>