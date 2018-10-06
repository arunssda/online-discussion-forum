<doctype html>
<html>
<head>
    <title>
    Discussion Forum
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
<style>
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .loginbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .loginbtn {
 width: 100%;
  }
}
</style>




    <body>
       

<form action="maindup2.php" method="post" style="border:1px solid #ccc">

<div class="container">
<h1>LOGIN></h1>

<hr>

<label for="username"><b>User Name</b></label>
<input type="text" placeholder="Enter User name" name="uname" required>



<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="psw" required>


<label>
<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
</label>
<div class="clearfix">

<button type="submit" class="login" >Log In</button>
</div>
</div>

<?php
SESSION_START();
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "discussionpage";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
        echo "connection failed";
    die("Connection failed: " . $conn->connect_error);
}

//echo "$_POST[uname]";
$un=$_POST['uname'];
$pw=$_POST['psw'];
$_SESSION['uname']=$un;
//echo $un;
//echo $pw;
$sql="select NAME from USERS where NAME='$un' and PASSWORD='$pw'";
$result=$conn->query($sql);
/*if($result=$conn->query($sql))
{
echo "query";
}
else {
echo "Error: " . $sql . "<br>" . $conn->error;
}*/



    // output data of each row
/*    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["NAME"].  "<br>";
    }
$result=$conn->query($sql);
*/


if ($row = mysqli_fetch_assoc($result))
{
?>
</form>
<?php
echo "login Successful";
}
else
{
?>
<form action="login.php">
Invalid Credentials</form>
<?php


}
$conn->close();
?>

   </body>
    </head>
</html>
