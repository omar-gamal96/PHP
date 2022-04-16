<?php session_start(); ?>
<?php 
     
     if($_POST){
      header("location:Resultc.php");
     }
     
     ?>








<!doctype html>
<html lang="en">
  <head>
    <title>Games</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <section class="sec-1">
  <h1 class="mt-5 text-center text-primary">  CLUB </h1>
  <form action="" method="post">
  <?php  



print_r($_POST);


$numF = $_SESSION['numF'];
$arr = 0;
for($i = 0 ; $i < $numF ; $i++){
    if($numF > 0){
        echo  ' <div class="container">
        <div class="row">
            <div class="col-12  ">
               
                <div class="col-5 offset-4">
                  
                      <div class="form-group">
                        <label for="SUBSCRIPT">SUBSCRIPT</label>
                        <input type="text" name="nameS" id="" class="form-control" placeholder="NAME" aria-describedby="helpId">
                                        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="football[]" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            Football (300 LE)
            </label><br>
            <input class="form-check-input" name="Swimming[]" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            Swimming (250 LE ) 
            </label><br>
            <input class="form-check-input" name="Volly ball[]" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            Volley ball (150 LE) 
            </label><br>
            <input class="form-check-input" name="Other[]" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            Others 100 LE 
            </label>
            </div>
           
          
                      </div>
                              
                    </div>';
                  

                    

                      

         
                    
                       
                   
              
}


    }
   




?>

   <button class="btn btn-outline-dark rounded btn-sm mb-5 me-5 w-25">Check Price</button>
   
   </form>

   </div>
                </div>
            </div>
              
    </section>

     <?php 
     
     if($_POST){
      header("location:Result.php");
     }
     
     ?>



  