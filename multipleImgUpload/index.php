<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiple img upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="fileupload.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">upload images</label>
                        <input type="file" name="image[]" id="" class="form-control" onchange="getImgPreview(event)" id="upload_file" multiple />
                    </div>
                    <br>
                    <input type="submit" value="submit" name="submit" class="btn btn-success">
                </form>
            </div>
            <div id="imgpreview">

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script>
        function getImgPreview(e) {
            var imgURL = URL.createObjectURL(e.target.files[0]);
            var imgdiv = document.getElementById('imgpreview');
            var new_img = document.createElement('img');
            //    to display one img at a time
            imgdiv.innerHTML = '';
            new_img.src = imgURL;
            imgdiv.appendChild(new_img);
        }
    </script>
</body>

</html>