<?php include('header.inc.php'); ?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                   
                    <div class="card-header"><strong>Categories</strong><small> Form</small></div>
                    <form method="post" action="addcategory">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="category" class=" form-control-label">categories</label>
                                <input type="text" id="category" name="cname" required placeholder="Enter category" value="" class="form-control">
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