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
    <div class="container">
        <h1>welcome to admin dashboard</h1>
        <div class="table">
            <table>
                <thead>
                    <th>ID</th>
                    <th>Article Title</th>
                    <th>edit</th>
                    <th>Delete</th>
                </thead>
                <?php if (count($articles)) { ?>
                    <?php foreach ($articles as $art) { ?>
                       
                        <tr>
                            <td>1</td>
                            <td><?php echo $art->title; ?></td>
                            <td><a href="" class="btn btn-warning">edit</a></td>
                            <td><a href="" class="btn btn-danger">delete</a></td>
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