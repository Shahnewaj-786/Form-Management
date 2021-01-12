<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    


<?php

if (isset ($_POST['Submit'])){

    echo $Name = $_POST['Name'];
    echo $Email = $_POST['Email'];
    echo $Phone = $_POST['Phone'];


    

    if(empty($Name) || empty($Email) || empty($Phone)){

        
        $txt= "<p style='color:red;'>Please Fill up every information</p>";
    }elseif(!filter_var($Email, FILTER_VALIDATE_EMAIL)){

//we can use !filter_var as above or -> elseif(filter_var($Email, FILTER_VALIDATE_EMAIL)==false)

        $txt = "<p style='color:red;'>Invalid Email Address</p>";

    }else{
        $txt= "<p style='color:green;'>You are all done, THANK YOU!</p>";
    }


}else{
    echo ("No Data Found");
}


?>



        <div class="user-form">
            <h1>Add Your Info!</h1>
            <?php
            
            if(isset($txt)){
                echo $txt;
            }
            
            ?>
            <form action="" method= "POST">
                <input name= "Name" type="text" placeholder = "Name">    
                <input name= "Email" type="text" placeholder = "Email"> 
                <input name= "Phone" value= "+8801" type="text" placeholder = "Phone">  
                <input name= "Submit" type="submit" value = "Log In">        
            </form>
        </div>



</body>
</html>