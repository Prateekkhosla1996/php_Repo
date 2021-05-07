<?php include('header.inc.php')  ?>
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">

                    <?php if ($suc = $this->session->flashdata('successful_del')) : ?>
                        <div class="alert alert-success ">
                            <?= $suc ?>
                        </div>
                    <?php endif ?>
                    <div class="card-body">

                        <h4 class="box-title">Contactus </h4>
                      
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="avatar">ID</th>
                                        <th>user_name</th>
                                        <th>user_number</th>
                                        <th>user_email</th>
                                        <th>user_comment</th>
                                        <th>added_on</th>
                                        <th>delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($contact)) { ?>
                                        <?php foreach ($contact as $cat) { ?>
                                            <tr>
                                                <td class="serial"><?= $cat->id ?></td>
                                                <td><?= $cat->user_name ?></td>
                                                <td><?= $cat->user_number ?></td>
                                                <td><?= $cat->user_email ?></td>
                                                <td><?= $cat->user_comment ?></td>
                                                <td><?= $cat->added_on ?></td>
                                                <td>
                                                    <?=
                                                    form_open('Admin/deleteContact'),
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