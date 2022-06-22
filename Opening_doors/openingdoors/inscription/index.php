
<?php
include "nav_user.php";

// session_start();

?>

<?php 

$host="localhost";
$user="root";
$password="";
$db="opening_doors";


$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $Place=$_POST["Place"];

  $sql="select * from location where Place='".$Place."'";

  $result=mysqli_query($data,$sql);


  $row=mysqli_fetch_array($result);

      if($row["location_type"]=="chefchaoun")
        {
          $_SESSION['Place'] = $Place;
           header("location:../location/Chefchaoun.php");
        }
      elseif($row["location_type"]=="toronto")
        {
          $_SESSION['Place'] = $Place;
          header("location:../location/Toronto.php");
        }
  else
  {
    echo "This City It Doesn't Exist";
  }


}

?>


<!-- Logged in as: <?php echo $nom ?>  -->
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
  <title>home page</title>
</head>
<body style="background-color:#ece9e9;">
<style><?php include 'afterlog.css' ?></style>
  <header>
    <img src="../src/header1.png" class="img-fluid" alt="..">
    <h1>OPENING DOORS</h1>
    <h5>book your home everywhere</h5>
    <form action="#" method="POST" class="d-flex" >
  <div class="mb-3 d-flex">
  <select name="Place" class="form-control" id="exact" aria-describedby="exactplace">
    <option id="op1">Where are you going?</option>
    <option value="Chefchaoun">Chefchaoun</option>
    <option value="Toronto">Toronto</option>
  </select>
    <!-- <input type="text" name="Place" placeholder="Where are you going?" class="form-control" id="exact" aria-describedby="exactplace"> -->
    <label for="Arrival" class="form-label">Arrival</label>
    <input type="date" name="debut"  class="form-control" id="date">
  </div>
  
  <div class="mb-3 d-flex">
    <label for="Departure" class="form-label">Departure</label>
    <input type="date" name="fin"  class="form-control" id="date2">
  </div>
  <div class="mb-3 d-flex">
  <input type="submit" name="save_date" value="Search" class="form_btn">
  </div>
</form>
  </header>
  <main>
  <h2>THE KEY TO TRAVEL AROUND THE WORLD IS IN YOUR POCKET</h2>
      <h3>Join our community and know better our staff and creator </h3>
  </main>

  <!----------- Informations----------->
  <div id="rectangle">
        <div class="rectangle"><br>
        

        </div>
    </div>
      <div id="all" class="d-flex">
            <div class="p-5 flex-fill">
                <img id="home2" src="../src/home1.jpg" alt="" class="img-fluid">
            </div>
            <div class=" p-5 flex-fill">
               <img id="rania" src="../src/rania.png" alt="" class="img-fluid" >
               <h3 id="name">RANIA ELBALQ</h3>
               <h6 id="creator">CREATOR</h6>
               <p id="desc">I had an idea on how to get your home <br>
                all around the world and i thought its a <br>
                good idea to open doors, so opening <br>
                doors is a perfect way to show hospitality <br>
                and acceptance <br>
                </p>
                <p id="join">join us </p>
            </div>

           </div>

            <!-----------Existing-places----------->
           
         <!-- <div id="morocco" class="d-flex">
            <h5 id="place">Existing places</h5>
          </div>  -->
          <h5 id="place">Existing places</h5>
       <div id="rectangle">
                <div class="rectangle"><br>
                    <div id="morocco" class = 'row align-items-center '>
                        <div  class="col-sm-7">
                            <img id="home" src="../src/place.png" alt="" class="img-fluid ms-2  ">
                        </div>
                        <div id="second" class="col-sm">
                           <p>We give you the opportunity to learn about the <br>
                            culture of Morocco and Canada, By exchanging
                            homes  with strangers from other cultures. <br>
                            If you love to travel you can Join now. <br>
                            </p>
                            <p id="log"><a id="alog" href="login_form.php"> LOG IN </a> </p>
                        </div>
                    </div>
                </div>
            </div>     

         <!--------------------verification------------------->
            <h5 id="veri">Verification Benefits</h5>

            <div id="Benefits" class="d-flex">
                <div class="p-5 flex-fill">
                    <img id="chef" src="../src/chefchaoun.png" alt="" class="img-fluid">
                </div>
              <div class=" p-5 flex-fill">
                <div id="first">
                   <img id="more" src="../src/more.png" alt="" class="img-fluid" >
                   <h4>More Trusted</h4>
                   <p>Opening Doors works because of real <br>
                    connections batween real people. <br>
                    Verification helps to confirm your <br>
                    identity.
                    </p>
                </div>
                       <div id="final">
                   <img id="hours" src="../src/24.png" alt="" class="img-fluid" >
                   <h4>24/7 Support</h4>
                   <p>
                    Our trust and safety team is available <br>
                    to you around the clock.
                       </div>
              </div>
    
            </div>
            <?php
include "footer.php";
?>
</body>
</html>

