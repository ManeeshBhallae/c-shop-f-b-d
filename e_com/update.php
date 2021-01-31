<?php 

session_start();

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "e_c_db");

$image="";
$name="";
$dis="";
$id2=0;


$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $result =$connect->query("SELECT * FROM bottompro WHERE id=$id");
    if($result!=null){

      $row=$result->fetch_array();
        $image=$row['image'];
        $name=$row['name'];
        $dis=$row['dis'];
        $id2=$row['id'];

    }
}


if(isset($_POST['update'])){
    $filename="";
    $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "image/".$filename; 

    $name= $_POST['name'];
    $dis=$_POST['taname'];
    $finalId=$_POST['id'];

    if($filename!=null && $name!=null && $dis!=null){

       if(str_contains($filename, '.jpg') || str_contains($filename, '.png') || str_contains($filename, '.jpeg')) {
        $connect->query("UPDATE bottompro SET image='$filename', name='$name', dis='$dis' WHERE id=$finalId");

    $_SESSION['message'] = "Record has been updated";
    $_SESSION['msg_type'] = "warning";

    if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
    } 
    
    header('location: index.php');
      
      
      }else{

         echo '<script>alert("Please upload a valid image.")</script>'; 

       }

     

    }else{
      echo '<script>alert("Can not leave any field empty.")</script>'; 
    }

    

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
    crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/7bda62ca51.js"
    crossorigin="anonymous"></script>

    <link rel="stylesheet"href="./css/style.css">  

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>
    <div id="myModal2" class="modal2">
            <br>
            <br>
            <br>
            
              <!-- Modal content -->
              <div class="modal-content">
                <h3 class="my-md-3 site-title tableHead">Update data to MySql</h3>
                <form action="update.php" id="testformid" method="POST" enctype="multipart/form-data">
                <input type="hidden" name='id' value=<?php echo $id2?>>  
                <div class="form-outline mb-4">
                    <label for="formFileLg" class="form-label tableHead_2">Select image.</label>
                    <input style="padding-bottom: 100px;" name="uploadfile" type="file" class="form-control" id="customFile"/>
                    <br>
                    <label class="form-label tableHead_2" for="form3Example3">Name of picture</label>
                    <input type="text" id="form3Example3" name="name" class="form-control" value=<?php echo $name?>/>
                    <br>
                    <label class="form-label tableHead_2" for="form3Example3">Discription of picture</label>
                  
                    <textarea form ="testformid" name="taname" id="form3Example3" class="form-control" cols="35" wrap="soft"><?php echo $dis?></textarea>
                    <br>
                    <button  type="submit" class="btn btn-primary" name="update" >Update</button>
                  </div>
                </form>
            
            
              </div>
            
            </div>
</body>
</html>