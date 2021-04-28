<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>User Account Details</h1>
    <table>
        <tr>
            <td>f name</td>
            <td>accNO</td>
        </tr>
       
            <?php foreach ($users as $key => $value) { ?>
                <tr>
                <td><?php echo $value->name ?></td>
                <td><?php echo $value->acc ?></td>
                </tr>
            <?php } ?>
        
    </table>
</body>

</html>