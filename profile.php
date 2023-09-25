<?php 

include "config.php";

session_start();

?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Profile</title>
</head>
<body>



<form method="post" >
  

<section class="vh-100" style="background-color: #c5e1a5;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4  text-center text-white"
              style="border-top-left-radius: .5rem;background-color: lightgreen; border-bottom-left-radius: .5rem;">
              <img src="<?php echo "images/".$_SESSION['i'] ?>"
                alt="Avatar" class="img-fluid my-2" style="width: 100px; height:100px; border-radius:50px; "/>
              <h6 class="text-dark fw-bold" style="font-family: monospace;"><?php echo $_SESSION['n']; ?></h6>
             
              
              
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row">
                  <div class="col-6 ">
                    <h6 >Email</h6>
                    <sup class="text-muted"><?php echo $_SESSION['e']; ?></sup>
                  </div>
                  
                </div>
            
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 
</form>






<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>