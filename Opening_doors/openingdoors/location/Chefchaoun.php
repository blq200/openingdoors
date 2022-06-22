<?php

include '../inscription/config.php';

include "../inscription/nav_user.php";

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
    <title>Chefchaouen</title>
</head>
<body>
<style><?php include 'location.css' ?></style>
    <img src="../src/chef.png" class="img-fluid" alt="..">
    <h1>OPENING DOORS</h1>
    <h5>Create Your Own Home</h5>
    <h2>CHEFCHAOUEN, The Blue Diamand</h2>
   
    <div id="all" class="d-flex">
            <div class=" p-5 flex-fill">
            <p id="desc">Built on a mountainside, Chefchaouen is a city with a special vibes. It unique <br>
            charm gives an impression of unreality. With its blue-rinsed houses,<br>
            the whole city seems to be bathed in azure. <br>
            You walk around as if you were in a dream. <br>
            More than just an ornament,<br> the beautiful Chefchaouen brims with attractions. <br>
             Its heritage is rich. <br>
                </p>
               <img id="akchour" src="../src/akchour.png" alt="" class="img-fluid" >
            </div>
           </div>

    <h2 id="h2">Welcome To The Blue House</h2>

    <!-- <div id="photo1" class="d-flex">
        <img id="home1" src="../src/homechef1.png" class="img-fluid" alt="..">
        <h3>Rania’s home</h3>

    </div> -->

    <?php

$select = mysqli_query($conn, "SELECT * FROM maison");

?>

<?php while($row = mysqli_fetch_assoc($select)){ ?>

    <div class="container">
    <div class="card" style="width: 18rem;">
    <img src="uploaded_img/<?php echo $row['image_01']; ?>">
    <div class="card-body">
    <h4><?php  echo $row['maison_nom']; ?></h4>
    <i class="fa-solid fa-location-dot"></i><p class="card-text "><?php echo $row['Adress']; ?></p>
    <a href="#" class="btn ">More Details...</a>
  </div>
</div>
</div>


    <?php
// include "../inscription/footer.php";

}
?>
 

</body>

</html>