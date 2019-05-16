<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
  <meta name = google-signin-client_id" content="645698245666-kvstpa97caglv38lrrfkbbd578ub77qo.apps.googleusercontent.com">
	<title> Login/SignUp</title>
	<link href="stylesheet.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <
</head>

<body>
      <div class="topnav">
        <ul class="nav navbar-nav navbar-inner navbar-center">
          <li> <a  href="Home.php">Home</a> </li>
          <li>  <a href="whatWeCanDoForYou.php">What we can do for you</a> </li>
          <li>  <a href="properties.php">Properties for sale/let</a> </li>
      

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>  <a class="active" href="Login.php">Login/SignUp</a> </li>
           <li> <a href="contactUs.php">Contact Us</a> </li>
        </ul> 
      </div>
		</div>

<div class = "Banner">

       <div class = "BannerIncText">

        <h1>Welcome to our proficiency</h1>
        <p1 style ="font-size: 25px"> we're here to help! </p1>

      </div>

<div class="g-signin2" data-onsuccess="onSignIn"></div>

<script > function gapi.load ('auth2', function () {gapi,auth2.init() {});

</script>

    
    </div>

yg


	</body>
	</html>






  <!-- <option value="volvo">Semi detached 2</option>


<option value="semi detach"> semi detach </option> -->


<?php
/*

$dbconn = mysqli_connect('localhost', 'root', '');

mysql_select_db('homesfirst');

$sql = mysqli_query($dbconn, "SELECT Property_Type FROM Propertys_To_let;");
while ($row = mysqli_fetch_assoc()){ 

echo "Row: ".$row;
  ?>
<option value=<?php"\"". $row['Property_type'] . "\""?> >  <?php $row['Property_type'] ?> </option>
<?php

}
*/
?>





