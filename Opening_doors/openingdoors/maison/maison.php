<?php
include "../inscription/nav_user.php";
// session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!------------mdb--------------->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
  <!------------Bootstrap-css--------------->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!---------------Font-Family----------->
    <link href="https://fonts.googleapis.com/css2?family=Single+Day&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"></head>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Simonetta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Semi+Condensed:wght@100&display=swap" rel="stylesheet">
    <title>Maison</title>
</head>
<body>
<style><?php include 'maison.css' ?></style>
    <img id="header" src="../src/canada.png" class="img-fluid" alt="..">
    <h1>OPENING DOORS</h1>
    <h5>book your home everywhere</h5>
    <br><br><br>
    <h6>Hello Rania, what's your home like?</h6>
    <p>Let potential exchange partners learn more about you, motivating them to <br>
     swap homes with you! <br>
    It takes two minutes, and you'll be able to decide to welcome other <br>
    members to your home.
    </p>

    <h7>Home Type:</h7>
    <br>
    <br>
<section class="container d-flex gap-4">
   <br> <div id="div1"><br>
       <img id="maison" src="../src/maison.png" class="img-fluid" alt="..">
       <p class="text-center" id="home">Home</p>
    </div>
    <br><br>
    <div id="div2"><br>
    <img id="apartment" src="../src/apartment.png" class="img-fluid" alt="..">
    <p id="apar" class="text-center">Apartment</p>
    </div>
</section>

<br>
<br>
<br>
<br>
<br><br>

<?php
include "../inscription/footer.php";


?>
</body>
</html>