<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php if ($this->session->flashdata('status')) : ?>
                    <div class="alert alerrt-success">
                        <?= $this->session->flashdata('status'); ?>
                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header">
                        <h4>edit product</h4>
                        <a href="<?= base_url('products') ?>"></a>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('product/update/' . $product->id) ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group"><input type="text" name="pname" placeholder="pname" value="<?= $product->pname; ?>" class="form-control"></div>
                            <div class="form-group"><input type="text" name="pdesc" placeholder="pdesc" value="<?= $product->pdesc; ?>" class="form-control"></div>
                            <div class="form-group"><input type="text" name="price" placeholder="price" value="<?= $product->price; ?>" class="form-control"></div>
                            <div class="form-group">
                                <input type="hidden" name="old_prod_img" value="<?= $product->pimg ?>">
                                <input type="file" name="pimg" class="form-control">
                                <small><?php if (isset($imgError)) {
                                            echo $imgError;
                                        } ?></small>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" value="submit" />
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url('upload/' . $product->pimg) ?>" width="200px" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>