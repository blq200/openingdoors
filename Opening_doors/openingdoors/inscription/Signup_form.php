<?php

@include 'config.php';

if(isset($_POST['submit'])){


    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $prénom = mysqli_real_escape_string($conn, $_POST['prénom']);
    $adress = mysqli_real_escape_string($conn, $_POST['adress']);
    $numéro = mysqli_real_escape_string($conn, $_POST['numéro']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $motpass = md5($_POST['motpass']);
    $confirmer = md5($_POST['confirmer']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM  customer WHERE mail = '$email' && motpass = '$motpass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'user already exist!';

    }else{

        if($motpass != $confirmer){
            
            $error[] = 'password not matched!';
        }else{
            $insert = "INSERT INTO customer (nom, prénom, adress, numéro, mail, motpass, confirmer, user_type) 
            VALUES('$nom','$prénom','$adress','$numéro','$email','$motpass','$confirmer','$user_type')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        }
    }



};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <!-- <link rel="stylesheet" href="form.css"> -->
    <!------------------------------Font_family------------------->
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap" rel="stylesheet">
</head>
<body style="background-image: url(../src/form2.png); background-size:cover; background-repeat: no-repeat;">
<style><?php include 'style.css' ?></style>
    
    <div class="input-group">
        <form action="" method="POST" >
            <h1 class="title">OPENING DOORS</h1>
            <h3 class="sign">Sign Up Now</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input id="input" type="text" name="nom" placeholder="Enter Your Last Name" ><br>
            <input id="input"  type="text" name="prénom" placeholder="Enter Your First Name" ><br>
            <input id="input"  type="text" name="adress" placeholder="Enter Your Adress" ><br>
            <input id="input"  type="tél" name="numéro" placeholder="Enter Your Phone Number" ><br>
            <input id="input"  type="email" name="email" placeholder="Enter Your E-mail" ><br>
            <input id="input"  type="password" name="motpass" placeholder="Enter Your Pass Word" ><br>
            <input id="input"  type="password" name="confirmer" placeholder="Confirm Your Pass Word" ><br>
            <select id="select" name="user_type"> 
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select><br><br>
            <input id="subm" type="submit" name="submit" value="Sign Up Now" class="form_btn">
            <p id="p">Already have an account? <a id="a" href="login_form.php">Log In Now</a></p>
        </form>
    </div>
</body>
</html>