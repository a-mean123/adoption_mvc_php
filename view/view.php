<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>DogCat</title>
</head>



<body>
    
<?php
 
 $ROOT = __DIR__;
 $DS = DIRECTORY_SEPARATOR;
 
 
 require_once($ROOT.$DS."header.php");
 
 
 
 $filepath = $ROOT.$DS.$controller.$DS;
 
 $filename = "view".ucfirst($view).".php";
 
 
 require_once($filepath.$filename);
 
 
 
 
 
 
 
 require_once($ROOT.$DS."footer.php");
 
    ?>



</body>

</html>
