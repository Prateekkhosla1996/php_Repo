<?php 
    include('db.inc.php');
    if(isset($_POST['submit'])){
        $extension = array('jpg','jpeg','png');
        foreach($_FILES['image']['tmp_name'] as $key => $value){
            $filename = $_FILES['image']['name'][$key];
            $filename_temp = $_FILES['image']['tmp_name'][$key];
            echo '<br>';
            $ext = pathinfo($filename,PATHINFO_EXTENSION);
            $finalimg = '';
            if(in_array($ext,$extension)){
                if(!file_exists('upload/'.$filename)){
                    move_uploaded_file($filename_temp,'upload/'.$filename);
                    $finalimg = $filename;
                }else{
                    $filename =str_replace('.','-', basename($filename,$ext)); 
                    $newfilename= $filename.time().".".$ext;
                    move_uploaded_file($filename_temp,'upload/'.$newfilename);
                    $finalimg = $newfilename;
                }
                $inserQuery = "INSERT INTO images(image_name) VALUES ('$finalimg')";
                mysqli_query($con,$inserQuery);
                header('Location:index.php');
            }else{
                echo"error";
            }
        }
    }