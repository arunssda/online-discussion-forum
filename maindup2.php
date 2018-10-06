<html>
<head>
   </head>
    <style>
a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 20;
    
    display: inline-block;
    width:20%;
}


a:hover, a:active {
    background-color: red;
}
   
button:link, button:visited {
    background-color: orange;
    color: black;
    padding: 14px 20px;
    text-align: center;
    text-decoration: none;
    font-size: 20;

    display: inline-block;
    width:20%;
}


button:hover, button:active {
    background-color:;
}
       
    </style>
<link rel="stylesheet" type="text/css" href="s1.css">

   <p>LOGIN SUCCESSFUL</p>
    <body>
        <div class="container">
  <img src="me.png" alt="Snow">

</div>
    <div class="topnav">
 <button class="button">ABOUT US   </button>
        <button class="button">ACCOMPLISHMENTS   </button>
        <button class="button">CONTACT US   </button>
</div>
        <br>
        <br>
        <br><br>
        <br>
        <br><br>
        <br>
        <br>
        <br>
            
  

  
    <br>
    <a href="host1.php" class="pp1">HOST MEETING</a>
  <br>
        <br>
   
        
        <div class="dropdown">
  <button class="dropbtn">JOIN A MEETING</button>
  <div class="dropdown-content">
<div class="but">


<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "discussionpage";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
        echo "connection failed";
        die("Connection failed: " . $conn->connect_error);
}
else
{
//        echo "connection Successful";
}

$broom=array();

$sql="select ID from BOARDROOM";
if($res=$conn->query($sql))
{
        if ($res = $conn->query($sql)) {
                if ($res->num_rows > 0) {

                        while ($row = $res->fetch_array()  )
                       {
//echo $row['ID'];
			  array_push($broom,$row['ID']);
//			       echo "                                                         ";                          
			 $un= $_POST['uname']; 
//echo $un;
                        }

                }
                else
		 {
                        echo "no records found";
                }
        }
        else {
                echo "ERROR: Could not able to execute $sql. ".$mysqli->error;
        }
}
else
{
        echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
SESSION_START();
?>
<a href="meeting0.php"   onclick="<?php $_SESSION['broom0']=$broom[0];?>" >Meeting ID :<?php

echo $broom[0];

?></a>
<a href="meeting1.php" onclick="<?php $_SESSION['broom1']=$broom[1]; ?>" >Meeting ID :<?php

echo $broom[1];
?></a>
<a href="meeting2.php" onclick="<?php $_SESSION['broom2']=$broom[2]; ?>" >Meeting ID :<?php

echo $broom[2];
?></a>
<a href="meeting3.php" onclick="<?php $_SESSION['broom3']=$broom[3]; ?>" >Meeting ID :<?php
echo $broom[3];
?></a>
<a href="meeting4.php" onclick="<?php $_SESSION['broom4']=$broom[4]; ?>" >Meeting ID :<?php

echo $broom[4];
?></a>




      </div>

   </div>
</div>

<br><br>
         <a href="dashboard1.php" class="pp1">Log Out</a>
  <br>
   <?php

?>
       
    </body>  
</html>
