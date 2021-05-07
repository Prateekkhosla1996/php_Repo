<?php include('header.inc.php'); ?>
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
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
                    <?php if ($suc = $this->session->flashdata('successful_del')) : ?>
                        <div class="alert alert-success ">
                            <?= $suc ?>
                        </div>
                    <?php endif ?>
                    <div class="card-body">
                        <h4 class="box-title">Products </h4>
                        <h5 class="box-title"><a href="manage_products" class="btn btn-success">Add Products</a> </h5>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th class="avatar">ID</th>
                                        <th>Categories_name</th>
                                        <th>product_name</th>
                                        <th>product_mrp</th>
                                        <th>product_sp</th>
                                        <th>product_qty</th>
                                        <th>product_img</th>
                                        <th>product_desc</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($products as $pdt) { ?>

                                        <tr>

                                            <td class="serial"></td>
                                            <td><?= $pdt->id; ?></td>
                                            <td><?= $pdt->cname ?></td>
                                            <td><?= $pdt->product_name ?></td>
                                            <td><?= $pdt->product_mrp  ?></td>
                                            <td><?= $pdt->product_sp  ?></td>
                                            <td><?= $pdt->product_qty  ?></td>
                                            <td><img src="<?php echo $pdt->product_img ?>" alt=""></td>
                                            <td><?= $pdt->product_desc  ?></td>
                                            <td><?= anchor("admin/editProduct/{$pdt->id}", 'Edit', ['class' => 'btn btn-warning']);  ?></td>
                                            <td>
                                                <?=
                                                form_open('Admin/deleteproduct'),
                                                form_hidden('id', $pdt->id),
                                                form_submit(['name' => 'submit', 'value' => 'Delete', 'class' => 'btn btn-danger']),
                                                form_close();
                                                ?>
                                            </td>
                                        <?php } ?>


                                        </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('footer.inc.php')
?>