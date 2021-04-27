<?php
require('top.inc.php');
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($con, $_GET['type']);
    if ($type == 'status') {
        $operation = get_safe_value($con, $_GET['operation']);
        $id = get_safe_value($con, $_GET['id']);
        if ($operation == 'active') {
            $status = '1';
        } else {
            $status = '0';
        }
        $update_status = "UPDATE categories set status ='$status' where id='$id'";
        mysqli_query($con, $update_status);
    }
    if ($type == 'delete') {
        $id = get_safe_value($con, $_GET['id']);
        $delete_sql = "DELETE from categories where id='$id'";
        mysqli_query($con, $delete_sql);
    }
}
$sql = "SELECT * FROM categories ORDER BY c_name asc";
$query = mysqli_query($con, $sql);
?>
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Categories </h4>
                        <h5 class="box-title"><a href="manage_categories.php">Add Categories</a> </h5>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th class="avatar">ID</th>
                                        <th>Categories</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                                        <tr>
                                            <td class="serial"></td>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['c_name'] ?></td>
                                            <td>
                                                <?php
                                                if ($row['status'] == 0) {
                                                    echo "<a class='btn btn-secondary' href='?type=status&operation=active&id=" . $row['id'] . "'>Dactive</a> &nbsp;";
                                                } else {
                                                    echo "<a class='btn btn-success' href='?type=status&operation=dactive&id=" . $row['id'] . "'>Active</a> &nbsp;";
                                                }
                                                echo "<a class='btn btn-info' href='manage_categories.php?id=" . $row['id'] . "'>UPDATE</a> &nbsp;";
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