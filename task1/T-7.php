<?php 



  if($_POST){
      $unit = $_POST["Units"];
      $vat = "20%";

      $condition1= $unit * 0.50 ; 
      $condition2= $unit * 0.75 ; 
      $condition3=  $unit *1.20 ; 
      $condition4= $unit * 1.50 ; 

      
      $vatAfter = 0.2* $condition1; 

    if($unit <="50"){
        $massage =    '<div class="alert  alert-success">';
        $massage .= '<h6>Unit price 0.5</h6>';
        
        $massage .= '<h6>price after unit price </h6>'; 
        $massage .=  $condition1;
        $massage .= '<h6> Vat is </h6>'; 
        $massage .= $vat;
      
        $massage .= '<h6>total price after price </h6>'; 
        $massage .= $vatAfter ;
        $massage .=  '</div>';

    }elseif($unit <="100"){
        $massage =    '<div class="alert  alert-success">';
        $massage .= '<h6>Unit price 0.75</h6>';
        
        $massage .= '<h6>price after unit price </h6>'; 
        $massage .=  $condition2;
        $massage .= '<h6> Vat is </h6>'; 
        $massage .= $vat;
      
        $massage .= '<h6>total price after price </h6>'; 
        $massage .= $vatAfter ;
        $massage .=  '</div>';
    }elseif($unit >"100"){
        $massage =    '<div class="alert  alert-success">';
        $massage .= '<h6>Unit price 1.20</h6>';
        
        $massage .= '<h6>price after unit price </h6>'; 
        $massage .=  $condition3;
        $massage .= '<h6> Vat is </h6>'; 
        $massage .= $vat;
      
        $massage .= '<h6>total price after price </h6>'; 
        $massage .= $vatAfter ;
        $massage .=  '</div>';
    }elseif($unit >"200"){
        $massage =    '<div class="alert  alert-success">';
        $massage .= '<h6>Unit price 1.50</h6>';
        
        $massage .= '<h6>price after unit price </h6>'; 
        $massage .=  $condition2;
        $massage .= '<h6> Vat is </h6>'; 
        $massage .= $vat;
      
        $massage .= '<h6>total price after price </h6>'; 
        $massage .= $vatAfter ;
        $massage .=  '</div>';
    }
    


  }
   
  

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Electricity</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <section class="sec-1">
        <div class="container">
            <div class="row">
                <div class="col-12  ">
                    <h1 class="mt-5 text-center text-primary">Electricity </h1>
                    <div class="col-5 offset-4">
                        <form method="post">
                          <div class="form-group">
                            <label for="Units">Units</label>
                            <input type="number" name="Units" id="unit1" class="form-control" placeholder="Enter Your Units" aria-describedby="helpId">
                            
                          </div>

                    
                            <button class="btn btn-outline-dark rounded btn-sm mb-5 w-25">Cals</button>
                        </form>
                        <?PHP echo $massage ?? "" ;?>
                           
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>