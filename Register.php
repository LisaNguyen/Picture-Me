<html>
<?php
			$username = "picture1_admin";
			$password = "team1pass";
			$hostname = "localhost"; 
			$dbname = "picture1_Users";
			
			//dbhandleection to the database
			$link = mysqli_connect($hostname, $username, $password, $dbname); 
    			if (!$link) { 
    			die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error()); 
   			 } 
   			 
   			$myusername1=addslashes($_POST['username1']); 
			$mypassword1=addslashes($_POST['password1']);
			$myFname=addslashes($_POST['FirstName']); 
			$myLname=addslashes($_POST['LastName']); 
			$myAge=addslashes($_POST['Age']); 
			$myEmail=addslashes($_POST['Email']); 
			
   			 $sql = "INSERT INTO `picture1_Users`.`Users`(`USERID`,`fName`, `lName`, `age`, `email`, `password`, `username`) VALUES ('".NULL."','".$myFname."','".$myLname."','".$myAge."','".$myEmail."','".$mypassword1."','".$myusername1."')";
			//INSERT INTO `picture1_Users`.`Users` (`USERID`, `fName`, `lName`, `age`, `email`, `password`, `username`) VALUES (NULL, 'TestFname', 'TestLname', '19', 'example@gmail.com', 'qwerty123', 'ExampleName'); This one works to insert into the data base but it isnt adapted to php
			$result = mysqli_query($link, $sql, MYSQLI_USE_RESULT);
   			if (!result) 
			    { 
			    echo 'Error: ', $mysqli->error;
				}

			//mysql_close($dbhandle);


?>
    <head>
        <title>Picture-Me | Register</title>
        <link rel="stylesheet" href="css/register.css" type="text/css">
    </head>

<form action="" method="post">
<label>First Name :</label><input type="text" name="FirstName" class="box"/><br /><br />
<label>last Name  :</label><input type="text" name="LastName" class="box"/><br /><br />
<label>Age  :</label><input type="text" name="Age" class="box"/><br /><br />
<label>Email :</label><input type="text" name="Email" class="box"/><br /><br />
<label>UserName  :</label><input type="text" name="username1" class="box"/><br /><br />
<label>Password  :</label><input type="password" name="password1" class="box" /><br/><br />
<input type="submit" value=" Submit "/><br />

</form>
</html>