<?php
require('top.inc.php');

$categories_id = '';
$product_name = '';
$product_mrp = '';
$product_sp = '';
$product_qty = '';
$product_img = '';
$short_desc = '';
$product_desc = '';
$meta_title = '';
$meta_desc = '';
$status = '';
$meta_keyword = '';
$msg = '';
if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = get_safe_value($con, $_GET['id']);
    $sql = mysqli_query($con, "SELECT * FROM product where id = '$id'");
    $chec = mysqli_num_rows($sql);
    if ($chec > 0) {
        $row = mysqli_fetch_assoc($sql);
        $categories_id = $row['categories_id'];
        $product_name = $row['product_name'];
        $product_mrp = $row['product_mrp'];
        $product_sp = $row['product_sp'];
        $product_qty = $row['product_qty'];
        $short_desc = $row['short_desc'];
        $product_desc = $row['product_desc'];
        $meta_title = $row['meta_title'];
        $meta_desc = $row['meta_desc'];
        $meta_keyword = $row['meta_keyword'];
    } else {
        header('location:product.php');
        die();
    }
}
if (isset($_POST['submit'])) {

    $categories_id  = get_safe_value($con, $_POST['categories_id']);
    $product_name = get_safe_value($con, $_POST['product_name']);
    $product_mrp = get_safe_value($con, $_POST['product_mrp']);
    $product_sp = get_safe_value($con, $_POST['product_sp']);
    $product_qty = get_safe_value($con, $_POST['product_qty']);
    $short_desc = get_safe_value($con, $_POST['short_desc']);
    $product_desc = get_safe_value($con, $_POST['product_desc']);
    $meta_title = get_safe_value($con, $_POST['meta_title']);
    $meta_desc = get_safe_value($con, $_POST['meta_desc']);
    $meta_keyword  = get_safe_value($con, $_POST['meta_keyword']);
    $sql = mysqli_query($con, "SELECT * FROM product where product_name = '$product_name'");
    $chec = mysqli_num_rows($sql);
    if ($chec > 0) {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $getData = mysqli_fetch_assoc($sql);
            if ($id == $getData['id']) {
            } else $msg = "product already exists";
        } else $msg = "product already exists";
    }

    if ($msg == '') {

        if (isset($_GET['id']) && $_GET['id'] != '') {
            if ($_FILES['product_img']['name'] != '') {
                $img = $_FILES['product_img']['name'];
                move_uploaded_file($_FILES['product_img']['tmp_name'], '../media/product/' . $img);
                $update_sql = "UPDATE product SET categories_id='$categories_id',product_name='$product_name',product_mrp='$product_mrp',
                product_sp='$product_sp',product_qty='$product_qty',short_desc='$short_desc',product_desc='$product_desc',meta_title='$meta_title'
                ,meta_desc='$meta_desc',meta_keyword='$meta_keyword',product_img= '$img' WHERE id='$id' ";
            } else {
                $update_sql = "UPDATE product SET categories_id='$categories_id',product_name='$product_name',product_mrp='$product_mrp',
                product_sp='$product_sp',product_qty='$product_qty',short_desc='$short_desc',product_desc='$product_desc',meta_title='$meta_title'
                ,meta_desc='$meta_desc',meta_keyword='$meta_keyword' WHERE id='$id' ";
            }

            mysqli_query($con, $update_sql);
        } else {
            $img = $_FILES['product_img']['name'];
            move_uploaded_file($_FILES['product_img']['tmp_name'], '../media/product/' . $_FILES['product_img']['name']);
            mysqli_query($con, "INSERT INTO product
            (categories_id,product_name,product_mrp,product_sp,product_qty,product_img,short_desc,product_desc,meta_title,meta_desc,meta_keyword,status)
            VALUES('$categories_id','$product_name','$product_mrp','$product_sp','$product_qty','$img','$short_desc','$product_desc','$meta_title','$meta_desc','$meta_keyword','1')");
        }

        header('location:product.php');
        die();
    }
}


?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Product</strong><small> Form</small></div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body card-block">


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="category" class=" form-control-label">categories</label>
                                        <select name="categories_id" id="" class="form-control">

                                            <option value="">Select categories</option>
                                            <?php
                                            $res = mysqli_query($con, "SELECT id,c_name FROM categories order by c_name asc");
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                if ($row['id'] == $categories_id) {
                                                    echo "<option selected value=" . $row['id'] . ">" . $row['c_name'] . "</option>";
                                                } else {
                                                    echo "<option value=" . $row['id'] . ">" . $row['c_name'] . "</option>";
                                                }
                                            }

                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="product" class=" form-control-label">Product name</label>
                                        <input type="text" id="product" name="product_name" required placeholder="Enter Product name" value="<?php echo $product_name ?>  " required class="form-control">
                                    </div>



                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="product_mrp" class=" form-control-label">Product mrp</label>
                                            <input type="text" id="product_mrp" name="product_mrp" required placeholder="Enter Product mrp" value="<?php echo $product_mrp ?> " required class="form-control">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="product_mrp" class=" form-control-label">Product sp</label>
                                            <input type="text" id="product_sp" name="product_sp" required placeholder="Enter Product sp" value="<?php echo $product_sp ?> " required class="form-control">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="product_qty" class=" form-control-label">Product qty</label>
                                            <input type="text" id="product_qty" name="product_qty" required placeholder="Enter Product qty" value="<?php echo $product_qty ?> " required class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="row" id="image_box">
                                        <div class="col-lg-10">
                                            <label for="product_img" class=" form-control-label">Product img</label>
                                            <input type="file" id="	product_img" name="product_img" class="form-control">

                                        </div>
                                        <div class="col-lg-2">
                                            <button id="payment-button" name="addimg" class=" mt-4 btn btn-lg btn-info btn-block" value="submit" onclick="add_more_images()">
                                                <span id="payment-button-amount">Add</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="short_desc	" class=" form-control-label">Product short desc</label>
                                            <textarea id="short_desc" name="short_desc" required value="" class="form-control" required>
                                <?php echo $short_desc ?>
                                </textarea>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="product_desc" class=" form-control-label">Product long desc</label>
                                            <textarea name="product_desc" placeholder="Enter Product desc" value="" class="form-control" required><?php echo $product_desc ?></textarea>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="meta_title	" class=" form-control-label">Product meta_title</label>
                                            <textarea id="meta_title" name="meta_title" placeholder="Enter Product meta title" value="" class="form-control">
                                <?php echo $meta_title ?>
                                </textarea>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="meta_desc" class=" form-control-label">Product meta_desc</label>
                                            <textarea id="meta_desc" name="meta_desc" placeholder="Enter Product meta desc" value="" class="form-control"><?php echo $meta_desc ?></textarea>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="meta_desc" class=" form-control-label">Product meta_desc</label>
                                    <textarea id="meta_desc" name="meta_desc" placeholder="Enter Product meta desc" value="" class="form-control"><?php echo $meta_desc ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="meta_keyword" class=" form-control-label">Product meta_keyword</label>
                                    <textarea name="meta_keyword" placeholder="Enter Product meta keyword" value="" class="form-control">
                                    <?php echo $meta_keyword ?>
                                    </textarea>
                                </div>
                                <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block" value="submit">
                                    <span id="payment-button-amount">Submit</span>
                                </button>

                            </div>
                            <div class="field-error">
                                <?php echo $msg ?>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require('footer.inc.php')
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./html/assets/js/vendor/custom.js"></script>