<?php

// $lang = array("a","c","d","f","g");
// $langs = array(
//     "A"=>"a",
//     "C"=>"c",
//     "D"=>"d",
//     "F"=>"f",
//     "G"=>"g");
// echo $lang[1];
//  echo count($lang);
//  // for ($i =0 ; $i<count($lang) ; $i++){
//       echo "<li>".$lang[$i][0] . "</li>" ;
//   }

//   foreach($lang as $value){
//       echo $value. "<br>" ;
//   }

// foreach($langs as $column=>$value){
//     echo  $column    ."<br>";
// }



// dynamic table
// dynamic rows
// dynamic columns
// check if gender of user == m ==> male
// check if gender of user == f ==> female

$users = [
    (object)[
        'id' => 1,
        
        'name' => 'ahmed', 
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],
        "gmail"=> "sad@asd"




    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        "gmail"=> "sad@asd"
    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        "gmail"=> "sad@asd"
    ],
];
//
function func($users)
{
    if (!empty($users)) {
        $secag = " <table class='table'>
            <thead>
            <tr>";

        foreach ($users[0] as $column => $value) {
            $secag .= " <th >$column</th>";
        }
        $secag .= " </tr>
            </thead>
            <tbody>";
        foreach ($users as $user) {
            $secag .= "<tr>";

            foreach ($user as $proprety => $value) {
                $secag .=  "<td>";

                if (gettype($value) == "array" || gettype($value) == "object") {
                    foreach ($value as $k => $value) {
                        if($k=='gender'&& $proprety=="gender"){
                            if($value =='m')
                            $value ='male';
                            else
                            $value ='fmale';
                        }

                        $secag .= $value . ' ';
                    }
                } else {
                    $secag .= $value;
                }
                $secag .= "</td>";
            }
            $secag .= " </tr>";
        }



        $secag .=  "</tbody>
            </table>";

        return $secag;
    }
}



// }





?>



<!doctype html>
<html lang="en">

<head>
    <title>Loop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<?php echo func($users); ?>
<!-- <body>
    <table class="table" >
  <thead>
    <tr>
      <th >id</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td>@mdo</td>
     
    </tr>
  
  </tbody>
</table> -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>




