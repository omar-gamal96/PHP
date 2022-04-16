<?php 

//    if($_SERVER['REQUEST_METHOD'] === 'POST')
if($_SERVER['REQUEST_METHOD'] === 'POST'){
         $name = $_POST['name_user'];
         $mont = $_POST['loan_amount'];
         $year= $_POST['loan_years'];
         $small_year=   0.1 *  $mont;
         $larg_year=   0.15 *  $mont;
         $all_amount= $small_year * $year;
         $all_Two= $larg_year * $year;
         $loanAfterInterest= $mont + $all_amount;
         $loanAfterInterestTwo= $mont + $all_Two;
         $Monthly =$year * 12;
         $month = $loanAfterInterest / $Monthly;
         $montT = $loanAfterInterestTwo / $Monthly;

         if($year<="3"){
        $massage =
            "<table class='table col-4 w-50 bg-primary'>
              <thead>
                <tr>
                  <th >User name</th>
                  <th >Interest rate</th>
                  <th >loan after interest</th>
                  <th >Monthly</th>
                </tr>
              </thead>
              <tbody>
                <tr>";
        $massage .= "<th>";

        $massage .=   $name;

        $massage .=   "</th>";
        $massage .=  "<td>";
        $massage .=  $all_amount;
        $massage .= "</td>";
        $massage .=   "<td>";
        $massage .=  $loanAfterInterest;
        $massage .= "</td>";
        $massage .= "<td>";
        $massage .=   $month;
        $massage .= "</td>";
        $massage .= "</tr>
              
              </tbody>
            </table>";
         
           
         }elseif($year>"3"){

            $massage =
            "<table class='table col-4 w-50 bg-success'>
              <thead>
                <tr>
                  <th >User name</th>
                  <th >Interest rate</th>
                  <th >loan after interest</th>
                  <th >Monthly</th>
                </tr>
              </thead>
              <tbody>
                <tr>";
        $massage .= "<th>";

        $massage .=   $name;

        $massage .=   "</th>";
        $massage .=  "<td>";
        $massage .=   $all_Two;
        $massage .= "</td>";
        $massage .=   "<td>";
        $massage .=  $loanAfterInterestTwo;
        $massage .= "</td>";
        $massage .= "<td>";
        $massage .= $montT;
        $massage .= "</td>";
        $massage .= "</tr>
              
              </tbody>
            </table>";
         

         }
     }



        ?>



    <!doctype html>
    <html lang="en">
    <head>
        <title>Bank</title>
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
                        <h1 class="mt-5 text-center text-primary">Bank </h1>
                        <div class="col-4 offset-4">
                            <form method="post">
                            <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text" name="name_user" value="<?= $_POST['name_user'] ?? ""; ?>" id="nameC" class="form-control mb-2" placeholder="USER NAME" aria-describedby="helpId">
                                
                                </div>
                                <div class="form-group">
                                    <label for="loan amount">LOAN AMOUNT</label>
                                    <input type="number" name="loan_amount"  value="<?= $_POST['loan_amount'] ?? ""; ?>" id="loan amount" class="form-control mb-2" placeholder=" LOAN ANOUNT" aria-describedby="helpId">
                            
                                </div>
                                <div class="form-group">
                                    <label for="loan_years">loan years</label> 
                                    <input type="number" name="loan_years" value="<?= $_POST['loan_years'] ?? ""; ?>" id="loan_years" class="form-control mb-2" placeholder=" LOAN YEARS" aria-describedby="helpId">
                                    <button class="btn btn-outline-dark rounded btn-sm mb-5">calculate</button>
                                </div>
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




    