<html>
<body>
    <link rel="stylesheet" type="text/css" href="s2.css">
<form action="" method="POST">

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
else
{

//	$bi= $_SESSION['broom0'];
//echo $bi;	
//echo "connection Successful";
}

$bid=$_SESSION['broom3'];
//echo "$bid";
$sql="SELECT NAME,CONTENT FROM USERS U JOIN MESSAGES M ON U.ID=M.USER_ID AND BOARDROOM_ID=11";

//$sql="select NAME, CONTENT from USERS u,MESSAGES m where BOARDROOM_ID='$bid' AND u.ID=m.USER_ID";
if($res=$conn->query($sql))
{
	if ($res = $conn->query($sql)) {
		if ($res->num_rows > 0) {
?>
<div class="chatbox">
                <div class="chatlogs">
                        <div class="chat other">
<?php
			while ($row = $res->fetch_array()) 
			{
				?><div class="user-photo"></div>

	                           <p class="chat-message"><?php echo "$row[NAME]<tr>: $row[CONTENT]<br>";?></p><?php
			}

		}
		else 
		{
			echo "Let you start the Meet";
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
?>
</div>
<div class="chat-form">
<form action="" method="POST">
<textarea input type="text" placeholder="User name" name="uname" size="25" >
        </textarea>

    <textarea input type="text" placeholder="Message" name="msg" size="25" >
        </textarea>

<button type="submit" name="send">Send Message</button>
</form>
</form>
        </div>
        
<?php
//SESSION_START();
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

$bid=$_SESSION['broom3'];
$un=$_POST['uname'];
//echo $un;
$sss="select ID from USERS where NAME='" .$un. "'";

if($result = $conn->query($sss))
{

if($result->num_rows > 0)
{
    $row = $result->fetch_array();
     $uid=$row['ID']; 
}else
{
//echo "Be the first to start the message";
}
}
else
{
//echo "Error: " . $sql . "<br>" . $mysqli->error;

}
$con=$_POST['msg'];
//$uid = $row['ID'];
//echo $uid;
$sql="insert into MESSAGES(USER_ID,BOARDROOM_ID,CONTENT) values('$uid','$bid','$con')";
if($res=$conn->query($sql))
{

//       echo "message sent";
}
else
{
  //      echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<a href="maindup2.php">To Main Page</a>

</body>
</html>
