<?php include('header.inc.php'); ?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Products</strong><small> Form</small></div>
                    <form method="post" action="addproduct" enctype="multipart/form-data">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="category" class=" form-control-label">categories</label>
                                <select name="categories_id" id="" class="form-control">
                                    <option value="">Select categories</option>
                                    <?php

                                    foreach ($category as $cat) {

                                        echo "<option value=" . $cat->id . ">" . $cat->cname . "</option>";
                                    }

                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product_name" class=" form-control-label">Product_name</label>
                                <input type="text" name="product_name" required placeholder="Enter product name" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="product_mrp" class=" form-control-label">Product mrp</label>
                                    <input type="text" name="product_mrp" required placeholder="Enter product mrp" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="product_sp" class=" form-control-label">Product sp</label>
                                <input type="text" name="product_sp" required placeholder="Enter product sp" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="product_qty" class=" form-control-label">product_qty</label>
                                <input type="text" name="product_qty" required placeholder="Enter product Qty" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="product_img" class=" form-control-label">product image</label>
                                <input type="file" name="product_img" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="product_desc" class=" form-control-label">product description</label>
                                <textarea class="form-control" name="product_desc" placeholder="enter product description"> </textarea>
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