<?php 
if(isset($_POST['genetare_button'])){
    $name = $_POST['std_name'];
    $phone = $_POST['std_phone'];
    $course = $_POST['std_course'];
    $batchno = $_POST['std_batchno'];
    $email = $_POST['std_email'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual ID Card</title>
    
</head>
<body>



    <h2>Name- <?php if(isset($name)){ echo $name; } ?></h2>
    <h3>Course- <?php if(isset($course)){ echo $course; } ?></h3>
<ul>
    <li>Phone - <?php if(isset($phone)){ echo $phone; } ?></li>
    <li>Batch No - <?php if(isset($batchno)){ echo $batchno; } ?></li>
    <li>Email - <?php if(isset($email)){ echo $email; } ?></li>
</ul>




    
</body>
</html>