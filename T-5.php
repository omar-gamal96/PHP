<?php  



 if($_POST){
     $num_one = $_POST["Numb_one"];
     $num_two = $_POST["Numb_two"];
     $operator = $_POST["operat"];
     $add_num =   $num_one +   $num_two ;
     $mins_num = $num_one -   $num_two ;
     $sub_num = $num_one *   $num_two ;
     $div_num = $num_one /   $num_two ;
     $mal_num =$num_one %   $num_two ;
     
     if($operator == "+"){
        $result = "<div class='alert alert-success'>
        the result EQual $add_num
    </div>";
     }elseif($operator == "-"){
        $result = "<div class='alert alert-success'>
        the result EQual $mins_num
    </div>";
     }elseif($operator == "*"){
        $result = "<div class='alert alert-success'>
        the result EQual $sub_num 
    </div>";
     }elseif($operator == "/"){
        $result = "<div class='alert alert-success'>
        the result EQual  $div_num
    </div>";
    }elseif($operator == "%"){
        $result = "<div class='alert alert-success'>
        the result EQual $mal_num
    </div>";
    }

 }



?>



<!doctype html>
<html lang="en">
  <head>
    <title>Calculator</title>
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
                    <h1 class="mt-5 text-center text-primary">Calculator </h1>
                    <div class="col-5 offset-4">
                        <form method="post">
                          <div class="form-group">
                            <label for="FristNumber">FristNumber</label>
                            <input type="number" name="Numb_one" id="numb1" class="form-control" placeholder="" aria-describedby="helpId">
                            
                          </div>

                          <div class="form-group">
                           
                           <select name="operat" class="w-50 text-center">
                           <option >Chosse Opreator</option>
                               <option value="+">+</option>
                               <option value="-">-</option>
                               <option value="*">*</option>
                               <option value="/">/</option>
                               <option value="%">%</option>
                           </select>
                            
                          </div>

                          <div class="form-group">
                            <label for="ScondNumber">ScondNumber</label>
                            <input type="number" name="Numb_two" id="numb2" class="form-control" placeholder="" aria-describedby="helpId">
                            
                          </div>
                            <button class="btn btn-outline-dark rounded btn-sm mb-5 w-25">=</button>
                        </form>
                        <?PHP echo $result ?? "" ;?>
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