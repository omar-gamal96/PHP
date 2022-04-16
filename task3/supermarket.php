<?php  

print_r($_POST);



    if($_POST){
        print_r($_POST["btn"]);

        $name = $_POST["name"];
        $city = $_POST['city'];
        $produc = $_POST['produ'];
      
    

            
        if(!empty( $produc)&&!empty($city)&&!empty($produc)){


      
            $massage=  '<div class="alert  alert-success">';

            $massage.='<div class="container-fluid">
            <div class="row ">
              <div class="col-3">
              <form class="text-center" method="post">
                <div class="form-group "text-center">
                <label for="Product Name">Product Name</label>
                <input type="text" name="proName" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
                <input type="text" name="proName" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
                <input type="text" name="proName" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
                
            </div>
              </div>
              <div class="col-3">
              <div class="form-group ">
              <label for="Price">Price</label>
              <input type="number" name="priceO" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
              <input type="number" name="priceO" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
              <input type="number"" name="priceO" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
              
            </div>
              </div>
              <div class="col-3">
               
                <div class="form-group">
                <label for=" Quantities"> Quantities</label>
                <input type="number" name="quanO" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
                <input type="number" name="quanO" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
                <input type="number" name="quanO" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
                
            </div>
              </div>
             
              
              <input type="submit" name="btnn">
            </form>
         
          
            </div>';

            $massage.="</div>";

        
              
                }else{
                    $massage = "<div >not found</div>";
                }
               
                  if($_POST['btnn'])
                  print_r($_POST);

                // $nameP = $_POST['proName'];
                // $priceE = $_POST['priceO'];
                // $quanA = $_POST['quanO'];

                // print_r($nameP);

                 if(!empty($_POST['proName'])&& !empty($priceE= $_POST['priceO'])&& !empty( $quanA= $_POST['quanO'])){
                    $massage = "<div class='alert  alert-primary'>";

                    $massage.= $priceE * $quanA ;
    
                    $massage.="</div>";
                }

           
        
                  }
               
            
        

    

?>


<!doctype html>
<html lang="en">
  <head>
    <title>supermarket</title>
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
                    <h1 class="mt-5 text-center text-primary">super market </h1>
                    <div class="col-8 offset-1">
                        <form method="post">
                        <div class="form-group">
                                <label for="user name">User name</label>
                                <input type="text" name="name" value="<?= $_POST['name'] ?? ""; ?>" id="name_gust" class="form-control mb-2" placeholder="" aria-describedby="helpId">
                           

                               
                            </div>
                            <div class="form-group">
                                <label for="City">City</label> 
                                <input type="text" name="city" value="<?=   $city?? "" ;?>" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
                                
                            </div>
                            <div class="form-group">
                                <label for="number of products"> number of products</label>
                                <input type="number" name=" produ" value="<?=   $produc ?? ""; ?>" id=" produ" class="form-control mb-2" placeholder="" aria-describedby="helpId">
                                <button class="btn btn-outline-dark rounded btn-sm mb-5 col-8" name="btn">Search</button>
                            </div>
                           
                        </form>
                        <?php echo $massage ?? ""; ?>
                         <?php echo    $name ?? ""; ?>
                         <?php   echo  $quanA ?? "" ?>
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




<!-- 
<div class="container-fluid">
<div class="row ">
  <div class="col-3">
  <form class="text-center" method="post">
    <div class="form-group "text-center">
    <label for="Product Name">Product Name</label>
    <input type="text" name="proName" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
    <input type="text" name="proName" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
    <input type="text" name="proName" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
    
</div>
  </div>
  <div class="col-3">
  <div class="form-group ">
  <label for="Price">Price</label>
  <input type="text" name="priceO" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
  <input type="text" name="priceT" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
  <input type="text" name="priceR" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
  
</div>
  </div>
  <div class="col-3">
   
    <div class="form-group">
    <label for=" Quantities"> Quantities</label>
    <input type="text" name="quanO" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
    <input type="text" name="quanO" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
    <input type="text" name="quanO" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
    
</div>
  </div>
  <div class="col-3">
  

</form>
<button class="btn btn-outline-dark rounded btn-sm mb-5 col-8">Search</button>
</div>
</div>


</div>'; -->