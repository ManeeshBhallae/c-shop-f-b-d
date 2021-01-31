<?php 
session_start();
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "e_c_db");

$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);




if(isset($_POST['save'])){
    $filename="";
    $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "image/".$filename; 

    $name= $_POST['text'];
    if($filename!=null && $name!=null){

     
        
        if(str_contains($filename, '.jpg') || str_contains($filename, '.png') || str_contains($filename, '.jpeg')) {
    $connect->query("INSERT INTO product (name,image) VALUES('$name','$filename')");

    $_SESSION['message'] = "Record has be uploaded";
    $_SESSION['msg_type'] = "success";

    if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
    } 
    header('location: index.php');

 } else {
  $_SESSION['message'] =  "Upload failed, Please upload a valid image." ;
  $_SESSION['msg_type'] = "warning";
  header('location: index.php');
 }
    }else{
      $_SESSION['message'] = "Upload failed, please fill all the fields";
      $_SESSION['msg_type'] = "warning";
      header('location: index.php');
    }

    
}


if(isset($_GET['delete'])){

    $id=$_GET['delete'];
    $connect->query("DELETE FROM product WHERE id='$id'");

    $_SESSION['message'] = "Record has be deleted";
    $_SESSION['msg_type'] = "danger";

    header('location: index.php');

}


