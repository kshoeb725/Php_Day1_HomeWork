<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        FullName : <input type="text" name="name" id="">
        Phone Number : <input type="number" name="phone" id="">
        Car Brand <select name="Car">
            <option value="Toyota">Toyota</option>
            <option value="Ford">Ford</option>
            <option value="Tesla">Tesla</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</body>
</html>



<?php
    

    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $name = $_POST['name'];
    $phone = $_POST["phone"];
    $Car = $_POST["Car"];
        echo " Welcome , $name . You Phone Number is $phone and your Perferred Car Brand is $Car";
    }

?>