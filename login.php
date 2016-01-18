<!DOCTYPE html>
<html>
   <head>
      <title>Picture-Me | App</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/home.css" type="text/css">
      <link rel="stylesheet" href="css/nav.css" type="text/css">
      <link rel="stylesheet" href="css/about.css" type="text/css">
      <link rel="stylesheet" href="css/animate.css" type="text/css">
      <link rel="stylesheet" href="css/app.css" type="text/css">
       <link rel="stylesheet" href="css/register.css" type="text/css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
      <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script> 
      <script type="text/jscript">
         <!--HIDES ABOUT PARAGRAPH-->
         $(document).ready(function(){
         
         <!--IMAGES SWING FUNCTION, ADD THIS UPON CLICK-->
         $(".app-image").click(function() {
            $(this).addClass("animated swing");
         });
         
         <!--REMOVE THE EFFECT WHEN MOUSE LEAVES THE PICTURE-->
         $(".app-image").mouseleave(function(){
         $(this).removeClass("animated swing");
         
         });
         });
         
         
      </script>
   </head>
   <body>
      <div class="container-block">
         <div class="head app-head">
            <header>
               <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
                <a href="home.html"><h2 class="heading">PICTURE-ME</h2></a>
               <div class="container">
                   
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                  </div>
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav nav-pills pull-right">
                     <li><a href="home.html">HOME</a></li>
                     <li class="active"><a href="app.html">APP</a></li>
                      <li><a href="#">LOG IN</a></li>
                  </ul>
                 </div>
               </div>
            </header>
         </div>
             
             <?php
ob_start();

include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password send form 

$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['password']); 


$sql="SELECT USERID FROM Users WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];

$count=mysql_num_rows($result);



{
$_SESSION['login_user']=$myusername;
header("location: welcome.php");
}
//else 
//{
//$error="Your Login Name or Password is invalid";
//}
}
?>

<div id="login">
<form action="" method="post">
<label>UserName  :</label><input type="text" name="username" class="box" required/><br /><br />
<label>Password  :</label><input type="password" name="password" class="box" required/><br/><br />
<p><input type="submit" value=" Submit "/><br /></input>
<a href="Register.php"><p>Want to Register?</p></a>
</form>
</div>
             






          <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
       </body>
    </html>
             