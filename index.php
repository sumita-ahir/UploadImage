<?php
        session_start();
     if(isset($_POST['upload'])){
        $size=$_FILES['file']['size'];
        if($size<=100000){
            $name="image/".$_FILES['file']['name'];
            $r=move_uploaded_file($_FILES['file']['tmp_name'],$name);
            $_SESSION['name']=$name;
        }
       if($r){
            echo"<h5 class='text-center pt-5'><b>file uploaded successfuly..!</b></h5>";
        }else{
            echo"<h5 class='text-center p-5'><b>file ! uploaded..!</b></h5>";
           
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        .main{
            font-family:serif;
            margin-top:100px;
            background:rgba(0,0,0,0.2);
            box-shadow:10px 10px 10px black;
            width:500px;
            height:330px;
            border-radius:20px;
            border:1px solid black;
        }
        body{
            background-image:linear-gradient(to left,skyblue,pink);
            background-repeat:no-repeat;
            height:900px;
           
        }
        .bt{
            background:transparent;
            border:2px solid black;
        }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="container main">
        <div class="row p-3">
            <div class="col-12">
                <h2><b>File Upload</b></h2>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-3"><h5>Select File :</h5></div>
            <div class="col-6"><input type="file" name="file" ></div>
            <div class="col-3"><input type="submit" name="upload" value="Upload" class="btn bt"></div>
        </div>
        <div class="row text-center p-2">
            <div class="col">
                <img  alt="" height="150px" width="200px" src="<?php echo @$_SESSION['name'];?>">
            </div>
        </div>
    </div>
    </form>
</body>
</html>
