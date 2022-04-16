<?php  
     
// $varOne = 10 ;
// $varTow = 40 ;
// $varThree = 30;

//   if($varOne >= $varTow ){
//       $massage = "HI";
//   }else{
//     $massage = "by";
//   }

//   echo ($massage);





// $name ="omar" ;
// $age = 25;
// $city ="quna" ;

// $massage ="";

if($_POST){
    // print_r($_POST);
    if($_POST ['national_id'] == 11111){
        $massage =
        "<div class='alert  alert-success'>
        
        <ul>
         <li> <strong>Name</strong> omar </li>
         <li> <strong>Age</strong> 25 </li>
         <li> <strong>City</strong> Quna </li>
         <li> <strong>phone</strong> 0101010 </li>


        </ul>
        
        
        </div>";
    }else if($_POST["national_id"]==22222){
        $massage =
        '<div class="alert  alert-success">
        
        <ul>
         <li> <strong>Name</strong> Ahmed </li>
         <li> <strong>Age</strong> 30 </li>
         <li> <strong>City</strong> Quna </li>
         <li> <strong>phone</strong> 01012011 </li>


        </ul>
        
        
        </div>';
    }elseif($_POST['national_id']==33333){
        $massage =
        '<div class="alert  alert-success">
        
        <ul>
         <li> <strong>Name</strong> Hesham </li>
         <li> <strong>Age</strong> 50 </li>
         <li> <strong>City</strong> Quna </li>
         <li> <strong>phone</strong> 00000 </li>


        </ul>
        
        
        </div>';
    }else{
        $massage =
        '<div class="alert  alert-danger">
        
      NOT FOUND DATA
        
        </div>';
    }
}

    // print_r($_POST);
   
?>


<!doctype html>
<html lang="en">
  <head>
    <title>cls</title>
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
                  <div class="col-12">
                      <h1 class="text-center text-primary mt-5"> GET MY DATA </h1>
                       <div class="col-4 offset-4" >    

                       <form class="col-12" method="POST">
                        <div class="form-group">
                         <label for="NATIONAL">NATIONAL ID</label>
                         <input type="number" name="national_id" id="national" class="form-control" placeholder="" aria-describedby="helpId">
                       
                       </div>
                         <button class="btn btn-outline-dark rounded btn-sm mb-5">MY DATA</button>
                      </form>
                         <?php echo $massage ?? ""; ?>
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