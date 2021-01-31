<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online store</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
    crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/7bda62ca51.js"
    crossorigin="anonymous"></script>

    <link rel="stylesheet"href="./css/style.css">  

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>

<body>
    <?php require_once 'process.php'; ?>





<?php 
if(isset($_SESSION['message'])): ?>
<div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);

    ?>
</div>
<?php endif ?>



<header>
    <div class="container scrollspy" id="HOME">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-12">
                
            </div>
            <div class="col-md-4 col-12 text-center ">
                <h2 class="my-md-3 site-title text-white">C-Store</h2>
            </div>
            
        </div>
    </div>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white sticky">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="true" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active lll" href="#HOME">HOME <span class="sr-only">(current)</span></a>
                <a class="nav-link lll " href="#ACCESSORIES">ACCESSORIES</a>
                <a class="nav-link lll" href="#FEATURES">FEATURES</a>
                <a class="nav-link lll" href="#SHOP">SHOP</a>
                <a class="nav-link lll" href="#ABOUT">ABOUT</a>
              </div>
            </div>

          </nav>
    </div>
</header>



<main>
        
    </div>
    <div class="container-fluid p-0">
        <div class="site-slider">
            <div class="slider-one" >
                <div><img src="./assets/computer.jpg" class="img-fluid" alt="Banner 1"></div>
                <div><img src="./assets/laptops.jpg" class="img-fluid" alt="Banner 2"></div>
                <div><img src="./assets/mobile.jpg" class="img-fluid" alt="Banner 1"></div>
                <div><img src="./assets/phone.jpg" class="img-fluid" alt="Banner 1"></div>
                <div><img src="./assets/watch.jpg" class="img-fluid" alt="Banner 1"></div>
            </div>
            <div class="slider-btn ">
                <span class="prev position-top"><i class="fas fa-chevron-left"></i></span>
                <span class="next position-top right-0"><i class="fas fa-chevron-right"></i></span>
            </div>
        </div>
        
    </div> 
    <div id="ACCESSORIES"class="container-fluid scrollspy">

    <?php
define("DB_SERVER2", "localhost");
define("DB_USER2", "root");
define("DB_PASSWORD2", "");
define("DB_DATABASE2", "e_c_db");

$connect = mysqli_connect(DB_SERVER2 , DB_USER2, DB_PASSWORD2, DB_DATABASE2);
$result= $connect->query("SELECT * FROM product");
$tempId = null;
?>
        <br>
        <h1 id="ch1">ACCESSORIES</h1>
        <p id=pg>Press + to add or click the item to delete them </p>
        <div class="site-slider-two px-md-3">
            <div class="row slider-two text-center">
                

            <?php
                 while($row = $result->fetch_assoc()):?>
                    <a class="col-md-2 product pt-md-4 pt-4" href="process.php?delete=<?php echo $row['id'];?>">
                        <div>
                            <input type="hidden" name='id' value=<?php echo $row['id']?>>
                            <img class="imag-size-adg" src="image/<?php echo $row['image']; ?>" width="100" height="100" alt="Banner 28">
                            <span class="border site-btn btn-span" style="border=none;"><?php echo $row['name'];?></span>  
                        </div>
                    </a>
    <?php endwhile; ?>
            </div>
            <!-- Trigger/Open The Modal -->
            <div class="center">
              <button id="myBtn"> + </button>
            </div>

            
            <!-- The Modal -->
            <div id="myModal" class="modal">
            
              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="my-md-3 site-title tableHead">Add data to MySql</h3>
                <form action="process.php" method="POST" enctype="multipart/form-data">
                    <div class="form-outline mb-4">
                      <label for="formFileLg" class="form-label tableHead_2">Select image.</label>
                      <input style="padding-bottom: 100px;" name="uploadfile" type="file" class="form-control" id="customFile" />   
                      <br>
                      <label class="form-label tableHead_2" for="form3Example3">Name of picture</label>
                      <input type="text" id="form3Example3" name="text" class="form-control" />
                      
                      <br>
                      <button  type="submit" class="btn btn-primary" name="save"   >Submit</button>
                    </div>
                </form>

                
              </div>
            
            </div>

            




        </div>
    </div>



    <div id="FEATURES"class="container-fluid p-2 scrollspy">
        <br>
        <h1 id="ch1">FEATURES</h1>
        <p id=pg>Unique is style,important and makes us spcial from others.</p>
        <div class="row roww">
            <div class="column ">
                <img src="./assets/wal4.jpg" alt="Banner 28" >
              
                
            </div>
            <div class="column">
                <img src="./assets/wal5.jpg" alt="Banner 28" >
                <img src="./assets/wal6.jpg" alt="Banner 28" >
                
            </div>
            <div class="column">
                <img src="./assets/wal3.jpg" alt="Banner 28" >
                <img src="./assets/wal1.jpg" alt="Banner 28" >
                
            </div>
        </div>
    </div>





    <div id="SHOP" class="container-fluid p-2 scrollspy">
        <h1 id="ch1">SHOP</h1>
        <p id=pg>Everything you need is right here. </p>


        

        


              <div class="row rowww">
                <h2 id="ccc">MacBook Pro-16</h2><br>                
              </div>

              <div class="classFlexHeader">
                <div class="colorDiv"></div>
              </div>
              
              
            
            
        
              <div class="row rowww">
                <div class="column">

                  <div class="row">
                    <img class="HomeImage" src="./assets/LAP1.jpg" alt="Banner 28">

                    <div class="row">
                      <div class="container-fluid ">
                        <ul id="ccc">
                          <li>Ninth-gen i7 processor with 6 core in it</li>
                          <li>Stunning 16 inch Retina display</li>
                          <li>AMD Radeon Pro 5300M with DDR5 4GB</li>
                          <li>Ultrafast SSD GEN-2</li>
                          <li>Intel UHD Graphics 630 </li>
                          <li>Force-cancelling woofers with 6 speakers</li>
                        </ul>
                      </div>
                      <div class="row">
                        <a class="btn btn-lg">BUY</a>
                        <a class="btn btn-lg">ADD TO CART</a>
                      </div>
                    </div>
                    
                  </div>

                  
                  <div class="row">
                    <div id="c1">
                      <img class="justSize" src="./assets/LAP2.jpg" alt="Banner 28">
                      <img class="justSize" src="./assets/LAP3.jpg" alt="Banner 28">
                      <img class="justSize" src="./assets/LAP4.jpg" alt="Banner 28">
                      <img class="justSize" src="./assets/LAP5.jpeg" alt="Banner 28">
                    </div>
                  </div>
                </div>
              </div>
    </div>



    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">


    <?php 
    $connect = mysqli_connect("localhost" , "root", "", "e_c_db");
    ?>
    

      <!--/.Indicators-->
    
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
    
        <!--First slide-->
        <div class="carousel-item active">
    
          <div class="col-md-3" style="float:left">
          <?php
          $result =$connect->query("SELECT * FROM bottompro WHERE id=1");
          if($result!=null){
          $row=$result->fetch_array();

          $image=$row['image'];
          $name=$row['name'];
          $dis=$row['dis'];
          $id2=$row['id'];
          }
          ?>
            <div class="card mb-2">
              <img class="card-img-top" src="image/<?php echo $image; ?>"
                alt="Card image cap" >
              <div class="card-body">
                <h4 class="card-title"><?php echo $name;?></h4>
                <p class="card-text"><?php echo $dis;?></p>
                <a class="btn btn-primary "  href="update.php?edit=1" >Update</a>
              </div>
            </div>
          </div>
    
          <div class="col-md-3" style="float:left">
          <?php
          $result =$connect->query("SELECT * FROM bottompro WHERE id=2");
          if($result!=null){
          $row=$result->fetch_array();

          $image=$row['image'];
          $name=$row['name'];
          $dis=$row['dis'];
          $id2=$row['id'];
          }
          ?>
            <div class="card mb-2">
              <img class="card-img-top" src="image/<?php echo $image; ?>"
                alt="Card image cap" >
              <div class="card-body">
                <h4 class="card-title"><?php echo $name;?></h4>
                <p class="card-text"><?php echo $dis;?></p>
                <a class="btn btn-primary "  href="update.php?edit=2" >Update</a>
              </div>
            </div>
          </div>
    
          <div class="col-md-3" style="float:left">
          <?php
          $result =$connect->query("SELECT * FROM bottompro WHERE id=3");
          if($result!=null){
          $row=$result->fetch_array();

          $image=$row['image'];
          $name=$row['name'];
          $dis=$row['dis'];
          $id2=$row['id'];
          }
          ?>
            <div class="card mb-2">
              <img class="card-img-top" src="image/<?php echo $image; ?>"
                alt="Card image cap" >
              <div class="card-body">
                <h4 class="card-title"><?php echo $name;?></h4>
                <p class="card-text"><?php echo $dis;?></p>
                <a class="btn btn-primary "  href="update.php?edit=3" >Update</a>
              </div>
            </div>
          </div>
    
          <div class="col-md-3" style="float:left">
          <?php
          $result =$connect->query("SELECT * FROM bottompro WHERE id=4");
          if($result!=null){
          $row=$result->fetch_array();

          $image=$row['image'];
          $name=$row['name'];
          $dis=$row['dis'];
          $id2=$row['id'];
          }
          ?>
            <div class="card mb-2">
              <img class="card-img-top" src="image/<?php echo $image; ?>"
                alt="Card image cap" >
              <div class="card-body">
                <h4 class="card-title"><?php echo $name;?></h4>
                <p class="card-text"><?php echo $dis;?></p>
                <a class="btn btn-primary "  href="update.php?edit=4" >Update</a>
              </div>
            </div>
          </div>
    
        </div>
        <!--/.First slide-->
    
        <!--Second slide-->
        <div class="carousel-item">
    
          <div class="col-md-3" style="float:left">
          <?php
          $result =$connect->query("SELECT * FROM bottompro WHERE id=5");
          if($result!=null){
          $row=$result->fetch_array();

          $image=$row['image'];
          $name=$row['name'];
          $dis=$row['dis'];
          $id2=$row['id'];
          }
          ?>
            <div class="card mb-2">
              <img class="card-img-top" src="image/<?php echo $image; ?>"
                alt="Card image cap" >
              <div class="card-body">
                <h4 class="card-title"><?php echo $name;?></h4>
                <p class="card-text"><?php echo $dis;?></p>
                <a class="btn btn-primary "  href="update.php?edit=5" >Update</a>
              </div>
            </div>
          </div>
    
          <div class="col-md-3" style="float:left">
          <?php
          $result =$connect->query("SELECT * FROM bottompro WHERE id=6");
          if($result!=null){
          $row=$result->fetch_array();

          $image=$row['image'];
          $name=$row['name'];
          $dis=$row['dis'];
          $id2=$row['id'];
          }
          ?>
            <div class="card mb-2">
              <img class="card-img-top" src="image/<?php echo $image; ?>"
                alt="Card image cap" >
              <div class="card-body">
                <h4 class="card-title"><?php echo $name;?></h4>
                <p class="card-text"><?php echo $dis;?></p>
                <a class="btn btn-primary "  href="update.php?edit=6" >Update</a>
              </div>
            </div>
          </div>
    
          <div class="col-md-3" style="float:left">
          <?php
          $result =$connect->query("SELECT * FROM bottompro WHERE id=7");
          if($result!=null){
          $row=$result->fetch_array();

          $image=$row['image'];
          $name=$row['name'];
          $dis=$row['dis'];
          $id2=$row['id'];
          }
          ?>
            <div class="card mb-2">
              <img class="card-img-top" src="image/<?php echo $image; ?>"
                alt="Card image cap" >
              <div class="card-body">
                <h4 class="card-title"><?php echo $name;?></h4>
                <p class="card-text"><?php echo $dis;?></p>
                <a class="btn btn-primary "  href="update.php?edit=7" >Update</a>
              </div>
            </div>
          </div>
    
          <div class="col-md-3" style="float:left">
          <?php
          $result =$connect->query("SELECT * FROM bottompro WHERE id=8");
          if($result!=null){
          $row=$result->fetch_array();

          $image=$row['image'];
          $name=$row['name'];
          $dis=$row['dis'];
          $id2=$row['id'];
          }
          ?>
            <div class="card mb-2">
              <img class="card-img-top" src="image/<?php echo $image; ?>"
                alt="Card image cap" >
              <div class="card-body">
                <h4 class="card-title"><?php echo $name;?></h4>
                <p class="card-text"><?php echo $dis;?></p>
                <a class="btn btn-primary "  href="update.php?edit=8" >Update</a>
              </div>
            </div>
          </div>
    
        </div>
        <!--/.Second slide-->
    
    
    
      </div>
      <!--/.Slides-->
    
    </div>
    <!--/.Carousel Wrapper-->


        

    <div id="ABOUT"class="container-fluid scrollspy">
        <h1 id="ch1">ABOUT</h1>
        <br>
        <p id=pg>Who are we? Hear is the answer:)</p>
        <div class="outerDiv">
            <div class="text-area">
                
                <p>As designers, we are frequently and incorrectly 
                    reminded that our job is to “make things pretty.” 
                    We are indeed designers — not artists — and there 
                    is no place for formalism in good design. Web design has a 
                    function, and that function is to communicate the message 
                    for which the Web page was conceived. </p>
            </div>
        </div>
        
    </div>


    






</main>




<footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
  
          <!-- Content -->
          <h5 id="ttt" class="  text-uppercase">C-Store</h5>
          <p>Here you can use rows and columns to organize your footer content.
            Use data attributes to easily control the position of the carousel. 
            data-slide accepts the keywords prev or next,
             which alters the slide position relative to its current position.
          </p>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <style>
                a { color: #45ccb8; } /* CSS link color */
            </style>
  
          <!-- Links -->
          <h5 class="text-uppercase">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#HOME">HOME</a>
            </li>
            <li>
              <a href="#ACCESSORIES">ACCESSORIES</a>
            </li>
            <li>
              <a href="#FEATURES">FEATURES</a>
            </li>
            <li>
              <a href="#SHOP">SHOP</a>
            </li>
            <li>
                <a href="#ABOUT">ABOUT</a>
              </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://C-store.com/"> C-store.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" 
crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="./js/main.js"></script>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>

</body>
</html>