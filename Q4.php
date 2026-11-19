<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Username : <input type="text" name="name" id="">
        Password : <input type="text" name="phone" id="">
        
        Are you Agree with the terms and Condition <input type="checkbox" name="term" id="">
        <button type="submit">Submit</button>
    </form>
</body>
</html>



<?php
    

    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $name = $_POST["name"];
        $term = isset($_POST["term"]) ? "Agree":"Not Agree";
   
        echo "Welcome , $name . You Have $term to the terms and condition";
    }

?>