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

                        <h4 class="box-title">Return policy </h4>
                        <h5 class="box-title"><a class="btn btn-success" href="privacy">Add Privacy</a> </h5>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="avatar">ID</th>
                                        <th>content</th>
                                        <th>edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                            <tr>
                                            <td><?= $rp->id ?></td>
                                            <td><?= word_limiter( $rp->content, 100) ?></td>
                                            <td><?=  anchor("admin/editprivacy/{$rp->id}",'Edit',['class'=>'btn btn-warning']);  ?></td>
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
<?php include('footer.inc.php') ?>