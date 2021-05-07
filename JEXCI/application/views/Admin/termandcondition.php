<?php include('header.inc.php'); ?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-header"><strong>terms and condition page</strong><small> Form</small></div>
                    <form method="post" action="addtnc">
                        <div class="card-body card-block">
                            <div class="form-group">

                                <div class="form-group">
                                    <label for="content" class=" form-control-label">content</label>
                                    <textarea name="content" id="para4" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" value="submit">
                                    <span id="payment-button-amount">Submit</span>
                                </button>

                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
<?php include('footer.inc.php'); ?>