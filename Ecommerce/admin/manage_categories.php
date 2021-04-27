<?php
require('top.inc.php');
$category = '';
$msg = '';
if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = get_safe_value($con, $_GET['id']);
    $sql = mysqli_query($con, "SELECT * FROM categories where id = '$id'");
    $chec = mysqli_num_rows($sql);
    if ($chec > 0) {
        $row = mysqli_fetch_assoc($sql);
        $category = $row['c_name'];
    } else {
        header('location:categories.php');
        die();
    }
}
if (isset($_POST['submit'])) {
    $category = get_safe_value($con, $_POST['categories']);
    $sql = mysqli_query($con, "SELECT * FROM categories where c_name = '$category'");
    $chec = mysqli_num_rows($sql);
    if ($chec > 0) {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $getData = mysqli_fetch_assoc($sql);
            if ($id == $getData['id']) {
            } else $msg = "category alread exists";
        } else $msg = "category alread exists";
    } 
    if($msg=='') {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            mysqli_query($con, "UPDATE  categories set c_name='$category' WHERE id = '$id'");
        } else {
            mysqli_query($con, "INSERT INTO categories(c_name,status)VALUES('$category','1')");
        }

        header('location:categories.php');
        die();
    }
}


?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Categories</strong><small> Form</small></div>
                    <form method="post">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="category" class=" form-control-label">categories</label>
                                <input type="text" id="category" name="categories" required placeholder="Enter category" value="<?php echo $category ?>" class="form-control">
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