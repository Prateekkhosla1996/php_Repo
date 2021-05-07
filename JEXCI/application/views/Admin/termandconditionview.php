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
                        <h5 class="box-title"><a class="btn btn-success" href="termandcondition">Add tnc</a> </h5>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="avatar">ID</th>
                                        
                                        <th>id</th>
                                        <th>content</th>
                                        <th>edit</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                        
                                            <tr>
                                                <td class="serial"><?= $tnc->id ?></td>
                                                

                                                <td><?= word_limiter( $tnc->content ,20)?></td>
                                                <td><?=  anchor("admin/edittnc/{$tnc->id}",'Edit',['class'=>'btn btn-warning']);  ?></td>
                                                <td>
                                                    <?=
                                                    form_open('Admin/deleteCat'),
                                                    form_hidden('id', $tnc->id),
                                                    form_submit(['name' => 'submit', 'value' => 'Delete', 'class' => 'btn btn-danger']),
                                                    form_close();
                                                    ?>
                                                </td>
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