<!-- // modo per aggiungere una condizione -->

<?php
 $paragraph = $_GET ["paragraph"];
 $badword = $_GET ["badword"];

// if(isset($paragraph)){
//   $paragraph = $_GET ["paragraph"];
// }else{
//   $paragraph = "";
// }
  // calcolo lunghezza paragrafo
  $paragraph_length = strlen($paragraph);
  
  // censuro il paragrafo

  $censored_paragraph = str_replace($badword, "***",$paragraph);

  $censored_paragraph_length = strlen($censored_paragraph);
  // echo $paragraph_length;
  // echo $censored_paragraph;
  // echo $censored_paragraph_length;
  // var_dump($censored_paragraph);
  // var_dump($paragraph_length);
  // var_dump($censored_paragraph_length);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3><?= $paragraph ?></h3>
  <h3><?= $censored_paragraph ?></h3>
  <h3><?= $paragraph_length ?></h3>
  <h3><?= $censored_paragraph_length ?></h3>
  
</body>
</html>