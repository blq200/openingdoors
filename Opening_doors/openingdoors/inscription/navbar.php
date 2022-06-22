
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!------------Bootstrap-css--------------->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!------------Font-awsome--------------->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
     <!------------StyleSheet--------------->
     <!-- <link rel="stylesheet" href="style.css"> -->
    <!---------------Font-Family----------->
    <link href="https://fonts.googleapis.com/css2?family=Single+Day&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"></head>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Simonetta&display=swap" rel="stylesheet">
    <!----------------------Link-MDB-BOOTSTRAP------------------------------>
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon"/>
    <title>navbar</title>
</head>
<body>
<style><?php include 'nav.css' ?></style>
   
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-globe"> English</i></a>
        </li> 

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Help
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">How it works</a></li>
            <li><a class="dropdown-item" href="#">Contact Us</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="home.php">Home page</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Message</a>
        </li>
        
        <li class="nav-item">
        <a href="#"><i class="fa-solid fa-user"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
</body>
</html>
