<?php echo form_open_multipart('product/post'); ?>
<table class="table table-stripped">
    <tbody>
        <tr>
            <td>Code</td>
            <td>
                <?php echo form_input(array('class' => 'form-control', 'name' => 'kodeproduk')); ?>
            </td>
        </tr>
        <tr>
            <td>Display</td>
            <td>
                <input class="form-control" type="file" name="userfile[]" id="multiple" multiple="" />
            </td>
        </tr>
        <tr>
            <td>Description</td>
            <td>
                <div class="textarea textarea-editor">
                    <textarea name="ket" cols="50" rows="5" class="form-control"></textarea>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary btn-outline btn-block pull-right"><span>Save</span></button>
            </td>
        </tr>
    </tbody>
</table>
<?php echo form_close(); ?>