
<?php
$con = mysqli_connect("localhost","root","","final");
         $sel = "SELECT * FROM upload ORDER BY id DESC";
                    $que = mysqli_query($con,$sel);
                    $output = '';
                    
                    if(mysqli_num_rows($que) < 1){
                        $output .= "<h3 class='text-center'>No Image uploaded</h3>";
                        echo $output;
                    }
                    while($row = mysqli_fetch_array($que)){
                        $output .= "<img src='".$row['image']."' class='my-3' style='width:200px;height:200px;padding :10px'>";
                        
                        
                        echo $output;
                        
                        
                        
                        $output = "";
                    }

?>
