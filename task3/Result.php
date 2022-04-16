<?php
session_start();

$cleanLiness = $_SESSION["cleanLiness"];
$prices =$_SESSION["prices"]; 
$nursing=$_SESSION["nursing"];  
$level=$_SESSION["level"];
$answers = [$cleanLiness,$prices,$nursing,$level];

 

 $phone = $_SESSION ["phone"];


 $result =0;

 

 foreach($answers as $key => $v){
   if($v == 'bad'){
     $result+=0;
   }elseif($v =='good'){
     $result +=3;
   }elseif($v == 'verygood'){
     $result += 5;
   }elseif($v =='excllent'){
     $result+=10;
   }
   if($result >=25){
    $massage =   '<div class="alert  alert-success">';
    $massage= "Thank You" ;
    $massage.= '</div>';
  }elseif($result< 25){
   
   $massage = '<div class="alert  alert-danger">';
   $massage= $phone;  
   $massage.= '</div>';
  }
 }

   


 


      
     

    
 
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Result</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div> 
       
        <form method="post">
        <table class="table bg-primary">
          <thead>
            <tr>
              <th >Question</th>
            
              <th>Result</th>
            </tr>
          </thead>
             <tbody>
          <tr>
            <th scope="row">Are you satisfied with the level of cleanliness?</th>
            <td>
            <div class="form-check">
             
            <?= $cleanLiness ?? ""; ?>
            
          </div>
            </td>
            <td>
            </tr>
            <tr>
            <th scope="row">Are you satisfied with the prices of services?</th>
            <td>
            <div class="form-check">
            <?= $prices ?? ""; ?>
          </div>
            </td>
            </tr>
            <tr>
            <th scope="row">Are you satisfied with the nursing service?</th>
            <td>
            <div class="form-check">
            <?= $nursing ?? ""; ?>
          </div>
            </td>
            </tr>
            <tr>
            <th scope="row">Are you satisfied with the level of doctors?</th>
            <td>
            <div class="form-check">
            <?= $level ?? ""; ?>
          </div>
            </td>
            </tr>
            
            </tbody>
        </table>
</form>
<?Php echo $massage ?? "" ;?>

       
  
  
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>