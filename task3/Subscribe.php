        <?php

        session_start();



        print_r($_POST);
        
        if($_POST){
           
            header("location:games.php");
            $_SESSION["nameS"]=$_POST["nameS"];
            $_SESSION["numF"]=$_POST["numF"];
          
       
        
      
          
        }

        ?>





<!doctype html>
<html lang="en">
  <head>
    <title>Subscribe</title>
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
                    <h1 class="mt-5 text-center text-primary">  CLUB </h1>
                    <div class="col-5 offset-4">
                        <form action="" method="post">
                          <div class="form-group">
                            <label for="SUBSCRIPT">SUBSCRIPT</label>
                            <input type="text" name="nameS" id="" value="<?= $_POST["nameS"]??"" ;?>" class="form-control" placeholder="NAME" aria-describedby="helpId">
                            <p>min-10000</p>
                            
                          </div>

                          <div class="form-group">
                          <label for="Pialogy">Count of family</label>
                            <input type="number" name="numF" id="numb1" value="<?= $_POST["numF"]??"" ;?>" class="form-control" placeholder="COUNT" aria-describedby="helpId">
                            <p>2500 for once</p>
                          </div>

                          

                        
                        
                            <button class="btn btn-outline-dark rounded btn-sm mb-5 w-25">Subscribt</button>
                        </form>
                      
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