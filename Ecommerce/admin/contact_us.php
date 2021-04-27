<?php
require('top.inc.php');
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($con, $_GET['type']);


    if ($type == 'delete') {
        $id = get_safe_value($con, $_GET['id']);
        $delete_sql = "DELETE from contact_us where id='$id'";
        mysqli_query($con, $delete_sql);
    }
}
$sql = "SELECT * FROM contact_us ORDER BY id desc";
$query = mysqli_query($con, $sql);
?>
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">ContactUs </h4>
                        <h5 class="box-title"><a href="manage_categories.php">Add Categories</a> </h5>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th class="avatar">ID</th>

                                        <th>Name</th>
                                        <th>email</th>
                                        <th>mobile</th>
                                        <th>query</th>
                                        <th>date</th>
                                        <th>delete</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                                        <tr>
                                            <td class="serial"></td>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['mobile'] ?></td>
                                            <td><?php echo $row['comment'] ?></td>
                                            <td><?php echo $row['added_on'] ?></td>
                                            <td>
                                                <?php
                                                echo "<a class='btn btn-danger' href='?type=delete&id=" . $row['id'] . "'>DELETE</a> &nbsp;";

                                                ?>
                                            </td>
                                        </tr>
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
<?php
require('footer.inc.php')
?>