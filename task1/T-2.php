<?php


$massage ='';
// $numbers = $_POST['Num'];

if($_POST){
    if( $_POST['Num'] %2 == 0){
   
        
        $massage =    '<div class="alert  alert-success">';
         
        $massage .= $_POST['Num'];
        $massage .= '<h6>Is Even numbers</h6>';
       
        
        

        $massage .=              '</div>';
        
    }elseif($_POST['Num'] %2 == 1){
        $massage =    '<div class="alert  alert-success">';
         
        $massage .= $_POST['Num'];
        $massage .= '<h6>Is odd numbers</h6>';
       
        
        

        $massage .=              '</div>';
      
      
    }
    
    elseif($_POST['Num'] %2 <=0   ){
      $massage =    '<div class="alert  alert-success">';
         
      $massage .= $_POST['Num'];
      $massage .= '<h6>Not Support</h6>';
     
      
      

      $massage .=              '</div>';
    }else{
        $massage =   "<div class= 'alert alert-success'>
        <h1>Not found</h1>
      
      </div>";
    }
        
    
}


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Even & Odd</title>
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
                   <div class="col-12  mt-5">
                       <h1 class="text-center text-center text-primary">Even & Odd</h1>
                       <div class="col-4 offset-4">
                           <form method="post">

                           <div class="form-group">
                             <label for="Numbers">Numbers</label>
                             <input type="number" name="Num" id="Numbers" class="form-control mb-2" placeholder="" aria-describedby="helpId">
                             <button class="btn btn-outline-dark rounded btn-sm mb-5">Search</button>
                           </div>

                           </form>
                           <?php echo $massage;  
                                 
                           ?>
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