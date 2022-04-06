<?php 
$maxNumber ="";
$minNumber ="";





if($_POST){
    $putOne= $_POST["max_min1"];
    $putTwo= $_POST["max_min2"];
    $putThree= $_POST["max_min3"];

    if($putOne>$putTwo && $putOne > $putThree){
        $maxNumber =    '<div class="alert  alert-success">';
        $maxNumber .= $putOne;
        $maxNumber .= '<h6>Is Max numbers</h6>';
        $maxNumber .=  '</div>';
    }elseif($putTwo > $putOne && $putTwo > $putThree){
        $maxNumber .=  '<div class="alert  alert-success">';
        $maxNumber .= $putTwo;
        $maxNumber .='<h6>Is Max numbers</h6>';
        $maxNumber .=  '</div>';
    }elseif($putThree > $putOne && $putThree > $putTwo){
        $maxNumber .=   '<div class="alert  alert-success">';
        $maxNumber .= $putThree;
        $maxNumber .='<h6>Is Max numbers</h6>';
        $maxNumber .=  '</div>';
    }
     if($putOne<$putTwo && $putOne < $putThree){
        $minNumber =    '<div class="alert  alert-success">';
        $minNumber.= $putOne;
        $minNumber.= '<h6>Is Min numbers</h6>';
        $minNumber.= '</div>';
    }elseif($putTwo < $putOne && $putTwo < $putThree){
        $minNumber.=   '<div class="alert  alert-success">';
        $minNumber.= $putTwo;
        $minNumber.= '<h6>Is Min numbers</h6>';
        $minNumber.= '</div>';
    }elseif($putThree < $putOne && $putThree < $putTwo){
        $minNumber.=    '<div class="alert  alert-success">';
        $minNumber.= $putThree;
        $minNumber.= '<h6>Is Min numbers</h6>';
        $minNumber.=  '</div>';
    }
}

       



?>



<!doctype html>
<html lang="en">
  <head>
    <title>Max & Min</title>
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
                    <h1 class="mt-5 text-center text-primary">Max And Min </h1>
                    <div class="col-4 offset-4">
                        <form method="post">
                            <div class="form-group">
                                <label for="Max And Min">frist number</label>
                               
                                <input type="number" name="max_min1" id="max_min" class="form-control mb-2" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                <label for="Max And Min">Sconde number</label>
                               
                               <input type="number" name="max_min2" id="max_min" class="form-control mb-2" placeholder="" aria-describedby="helpId">
                               </div>
                               <div class="form-group">
                               <label for="Max And Min">Thired number</label>
                               
                               <input type="number" name="max_min3" id="max_min" class="form-control mb-2" placeholder="" aria-describedby="helpId">
                               </div>
                                <button class="btn btn-outline-dark rounded btn-sm mb-5">Search</button>
                            
                        </form>
                        <?php echo $maxNumber; ?>
                        <?php echo $minNumber ; ?>
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