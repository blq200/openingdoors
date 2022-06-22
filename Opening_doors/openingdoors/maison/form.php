<?php

@include '../inscription/config.php';

if(isset($_POST['add_maison'])){
  $maison_nom = $_POST['maison_nom'];
  $Adress = $_POST['maison_adress'];
  $Description = $_POST['maison_desc'];
  $Prix = $_POST['prix'];
  $Superficie = $_POST['superficie'];
  $image_01 = $_FILES['maison_img']['name'];
   $image_01_tmp_name = $_FILES['maison_img']['tmp_name'];
   $image_01_folder = 'uploaded_img/'.$image_01;

   if(empty($maison_nom) || empty($Adress) || empty($Description) || empty($Prix) || empty($Superficie) || empty($image_01)){
    $message[] = 'please fill out all';
  }else{
    $insert = "INSERT INTO maison (maison_nom, Adress, Description, Prix, Superficie, image_01) VALUES('$maison_nom', '$Adress', '$Description', '$Prix', '$Superficie', '$image_01')";
    $upload = mysqli_query($conn,$insert);
    if($upload){
      move_uploaded_file($image_01_tmp_name, $image_01_folder);
      $message[] = 'new product added successfully';
   }else{
      $message[] = 'could not add the product';
   }
}
};
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  mysqli_query($conn, "DELETE FROM maison WHERE id_maison = $id");
  header('location:form.php');
};


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
  <link rel="stylesheet" href="form.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!---------------Font-Family----------->
    <link href="https://fonts.googleapis.com/css2?family=Single+Day&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"></head>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
   
    <link href="https://fonts.googleapis.com/css2?family=Simonetta&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Staatliches' rel='stylesheet'>
    <title>form_maison</title>
</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>




  <br><br>
    <h1 ><center>Opening Doors<center></h1>
    <h6><center>Post Your Own Home<center></h6>
    <br><br>
    <section class="form">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

    
<div class="input-group mb-3 ">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" class=" form-control" placeholder="House Name" name="maison_nom" aria-label="housename" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Adress Home" name="maison_adress" aria-label="adresshome" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2">@example.com</span>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
  <input type="text" placeholder="Description" name="maison_desc" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <span class="input-group-text">$</span>
  <input type="tel" placeholder="Price" name="prix" class="form-control" aria-label="Amount (to the nearest dollar)">

</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" name="superficie" placeholder="Superficie" aria-label="Superficie">
</div>

<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupFile01">Upload</label>
  <input type="file" name="maison_img" class="form-control" id="inputGroupFile01">
</div>
<button type="submit" name="add_maison" class='btn btn-primary'>enter</button>
</form>
</section>




</body>




</html>