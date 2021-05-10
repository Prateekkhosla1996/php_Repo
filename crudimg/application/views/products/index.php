<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>all products</h4>
                        <a href="<?= base_url('product/add'); ?>" class="btn btn-primary">Add product</a>
                    </div>
                    <div class="card-body">
                        <div class="table table-bordered" >
                            <table>
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>pname</th>
                                        <th>pdesc</th>
                                        <th>price</th>
                                        <th>pimg</th>
                                        <th>edit</th>
                                        <th>delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($products as $item) : ?>
                                        <tr>
                                            <td><?= $item->id ?></td>
                                            <td><?= $item->pname ?></td>
                                            <td><?= $item->pdesc ?></td>
                                            <td><?= $item->price ?></td>
                                            <td><img src="<?= base_url('upload/' . $item->pimg) ?>" alt="product image" height="50px" width="50px"></td>
                                            <td><a href="<?= base_url('product/edit/' . $item->id); ?>" class="btn btn-warning"> edit</a></td>
                                            <td><a href="<?= base_url('product/delete/' . $item->id); ?>" class="btn btn-danger">delete</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>