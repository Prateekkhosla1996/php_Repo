<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('header.php') ?>
    <div class="container mt-4">
        <div class="row">
            <a href="addTitle" class="btn btn-primary btn-lg">add articles</a>
        </div>
    </div>


    <div class="container">
        <?php if ($suc = $this->session->flashdata('successful')) : ?>
            <div class="alert alert-success ">
                <?= $suc ?>
            </div>
        <?php endif ?>
        <h1>welcome to admin dashboard</h1>
        <div class="table">
            <table>
                <thead>

                    <th>Article Title</th>
                    <th>edit</th>
                    <th>Delete</th>
                </thead>
                <?php if (count($articles)) { ?>
                    <?php foreach ($articles as $art) { ?>

                        <tr>

                            <td><?php echo $art->title; ?></td>
                            <td><a href="" class="btn btn-warning">edit</a></td>
                            <td>

                                <?=
                                form_open('Admin/deleteArticle'),
                                form_hidden('id', $art->id),
                                form_submit(['name' => 'submit', 'value' => 'Delete', 'class' => 'btn btn-danger']),
                                form_close();
                                ?>
                            </td>
                        </tr>

                    <?php } ?>
                <?php } else { ?>
                    <td colspan="3"> no data available</td>
                <?php  } ?>


            </table>
        </div>
    </div>
    <?php include('footer.php') ?>
</body>

</html>