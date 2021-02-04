<?php      
$con = mysqli_connect("localhost","root","","final");
if(isset($_POST['upload'])){
    $file=$_FILES['image']['name'];

    $query = "INSERT INTO upload(image) VALUES('$file')";

    $res = mysqli_query($con,$query);
    
    if($res)
    {
        move_uploaded_file($_FILES['image']['tmp_name'],"$file");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Assignment</title>

</head>
<body>
  
<div  class = "container">
    
    <div  class="col-md-12">

        <div class="column">
            <div class="col-md-6">
    
            <h3 class="text-center">UPLOAD IMAGE</h3>
                <form  class="my-5" method="post" enctype="multipart/form-data">
                    <input  type="file" name="image" class="form-control">
                    
                    <input type="submit" name="upload" value="UPLOAD" class="btn btn-success" >
       
                    <?php include 'test.php';?>
                    
                    
                </form>
            </div>
      
            <div class="column-md-6">
           
                <h3 class="text-center">DISPLAY IMAGE</h3>
                <div class="column">
                    
                    <?php include 'new.php';?>
      
                </div>
        
            </div>
        </div>

    </div>

</div>
</body>
</html>