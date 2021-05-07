<?php include('header.inc.php'); ?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-header"><strong>add privacy</strong><small> Form</small></div>
                    <form method="post" action="addprivacy">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="content" class=" form-control-label">add privacy content</label>

                                <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
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
<?php include('footer.inc.php'); ?>