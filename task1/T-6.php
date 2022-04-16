<?php  

 
// Percentage >= 90%: Grade A
// Percentage >= 80%: Grade B
// Percentage >= 70%: Grade C
// Percentage >= 60%: Grade D
// Percentage >= 40%: Grade E
// Percentage < 40%: Grade F
// o/p => 240/250 => percentage : 96% => A





 if($_POST){



      
    $matOne = $_POST["mat_1"];
    $matTwo = $_POST["mat_2"];
    $matThree = $_POST["mat_3"];
    $matFour = $_POST["mat_4"];
    $matFive = $_POST["mat_5"];
    
     $cals =  $matOne + $matTwo + $matThree + $matFour + $matFive;
     $totalP=  $cals /250 *100 ;
    
    
     
    if($cals >="225"){
        $massage =    '<div class="alert  alert-success">';
        $massage .= '<h6>Max Total Grade 250</h6>';
        $massage .= '<h6>Your Total Grade </h6>'; 
        $massage .= $cals ;
        $massage .= '<h6>Your Total Percentage </h6>';
        $massage .=  $totalP;
        $massage .= '<h6> Grade A</h6>';
        $massage .=  '</div>';
    }elseif($cals >="200"){
        $massage =    '<div class="alert  alert-success">';
        $massage .= '<h6>Max Total Grade 250</h6>';
        $massage .= '<h6>Your Total Grade </h6>'; 
        $massage .= $cals ;
        $massage .= '<h6>Your Total Percentage </h6>';
        $massage .=  $totalP;
        $massage .= '<h6> Grade B</h6>';
        $massage .=  '</div>';
    }elseif($cals >= "175"){
        $massage =    '<div class="alert  alert-success">';
        $massage .= '<h6>Max Total Grade 250</h6>';
        $massage .= '<h6>Your Total Grade </h6>'; 
        $massage .= $cals ;
        $massage .= '<h6>Your Total Percentage </h6>';
        $massage .=  $totalP;
        $massage .= '<h6> Grade C</h6>';
        $massage .=  '</div>';
    }elseif($cals >= "150"){
        $massage =    '<div class="alert  alert-success">';
        $massage .= '<h6>Max Total Grade 250</h6>';
        $massage .= '<h6>Your Total Grade </h6>'; 
        $massage .= $cals ;
        $massage .= '<h6>Your Total Percentage </h6>';
        $massage .=  $totalP;
        $massage .= '<h6> Grade D</h6>';
        $massage .=  '</div>';
    }elseif($cals >= "100"){
        $massage =    '<div class="alert  alert-success">';
        $massage .= '<h6>Max Total Grade 250</h6>';
        $massage .= '<h6>Your Total Grade </h6>'; 
        $massage .= $cals ;
        $massage .= '<h6>Your Total Percentage </h6>';
        $massage .=  $totalP;
        $massage .= '<h6> Grade E</h6>';
        $massage .=  '</div>';
    }elseif($cals < "100"){
        $massage =    '<div class="alert  alert-success">';
        $massage .= '<h6>Max Total Grade 250</h6>';
        $massage .= '<h6>Your Total Grade </h6>'; 
        $massage .= $cals ;
        $massage .= '<h6>Your Total Percentage </h6>';
        $massage .=  $totalP;
        $massage .= '<h6> Grade F</h6>';
        $massage .=  '</div>';
    }
 }




?>







<!doctype html>
<html lang="en">
  <head>
    <title>Grade</title>
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
                    <h1 class="mt-5 text-center text-primary">Grade </h1>
                    <div class="col-5 offset-4">
                        <form method="post">
                          <div class="form-group">
                            <label for="Phasic">Phasic</label>
                            <input type="number" name="mat_1" id="numb1" class="form-control" placeholder="" aria-describedby="helpId">
                            
                          </div>

                          <div class="form-group">
                          <label for="Pialogy">Pialogy</label>
                            <input type="number" name="mat_2" id="numb1" class="form-control" placeholder="" aria-describedby="helpId">
                            
                          </div>

                          <div class="form-group">
                            <label for="English">English</label>
                            <input type="number" name="mat_3" id="numb2" class="form-control" placeholder="" aria-describedby="helpId">
                            
                          </div>

                          <div class="form-group">
                            <label for="Franch">Franch</label>
                            <input type="number"name="mat_4" id="numb2" class="form-control" placeholder="" aria-describedby="helpId">
                            
                          </div>
                          <div class="form-group">
                            <label for="Arbic">Arbic</label>
                            <input type="number"name="mat_5" id="numb1" class="form-control" placeholder="" aria-describedby="helpId">
                            
                          </div>
                            <button class="btn btn-outline-dark rounded btn-sm mb-5 w-25">Result</button>
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