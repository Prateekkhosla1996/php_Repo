<?php include('header.inc.php'); ?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Edit Categories</strong><small> Form</small></div>
                    <?php echo form_open("admin/updatedcategory/{$cat->id}") ?>
                          
                       <!--   <?php echo form_hidden('cat_id',$cat->id) ;?> --> 
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="category" class=" form-control-label">categories</label>
                            <?php echo form_input(['class' => 'form-control', 'name' => 'cname', 'placeholder' => 'enter category', 'type' => 'text', 'value' => set_value("cname", $cat->cname)]) ?>
                        </div>
                        
                        <?php echo form_submit(['type' => 'submit', 'class' => 'btn btn-primary btn btn-lg btn-info btn-block', 'value' => 'submit']) ?>

                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.inc.php'); ?>