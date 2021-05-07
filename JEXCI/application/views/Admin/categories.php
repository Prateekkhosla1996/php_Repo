<?php include('header.inc.php')  ?>
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

                        <h4 class="box-title">Categories </h4>
                        <h5 class="box-title"><a class="btn btn-success" href="manage_category">Add Categories</a> </h5>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="avatar">ID</th>
                                        <th>Categories</th>
                                        <th>edit</th>
                                        <th>delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($categories)) { ?>
                                        <?php foreach ($categories as $cat) { ?>
                                            <tr>
                                                <td class="serial"><?= $cat->id ?></td>
                                                <td><?= $cat->cname ?></td>
                                                <td><?=  anchor("admin/editCategory/{$cat->id}",'Edit',['class'=>'btn btn-warning']);  ?></td>
                                                <td>
                                                    <?=
                                                    form_open('Admin/deleteCat'),
                                                    form_hidden('id', $cat->id),
                                                    form_submit(['name' => 'submit', 'value' => 'Delete', 'class' => 'btn btn-danger']),
                                                    form_close();
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <td colspan="3"> no data available</td>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.inc.php') ?>