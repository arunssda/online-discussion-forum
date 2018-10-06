<html>
<style>


/* Full-width input fields */
  input[type=text], input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
    
     body
        {
            background-color: black;
            
        }
        
        .wrap
        {
            width:350px;
            margin:auto;
            background-color: white;
            margin-top: 50px;
            padding: 5px;
        }
        form
        {
            padding: 10px;
            font-family: arial;
            border: 1px dotted red;
            margin: 10px;
            
        }
        h2
        {
            text-align: center;
            background-color: aqua;
            color: black;
            padding: 10px;
            border-radius: 10px;
        }
        
        input{
            padding:10px;
            margin: 5px;
border-radius: 5px;
            border: none;
            
        }
        input[type=text],input[type=email],input[type=password]
        {background-color: gainsboro;
            width:90%;
            color: black;
        }
       .signupbtn
        {
            width: 95%;
            background-color: aqua;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            color:white;
            color: black;
        }
        .signupbtn:hover
        {
            background-color: lightcoral;
        }
        
    </style>


<body>
<div class="wrap">

<form action="" method="post" >

<h2>HOST A MEET</h2>
<p>Please fill in this form to create an account.</p>
<hr>

<label for="company id"><b>Company id</b></label>
<input type="number" placeholder="Enter company ID" name="cname" required>
<label for="User Name"><b>User Name</b></label>
<input type="text" placeholder="Enter User Name" name="uname" required>
<div class="clearfix">
<button type="host" class="signupbtn" >HOST</button>
</div>
    
</div>
</form>

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
$un=$_POST['uname'];
$sql1="insert into BOARDROOM(BOARDROOM_HOST)  select ID from USERS where NAME='$un'";   
if($conn->query($sql1) === TRUE)
{
?>
<a href="maindup2.php">Return to main page</a>
<?php
echo "MEETING HOSTED";
}
else
{
echo "MEETING CANNOT BE HOSTED";
}
?>

</body>
</html>                           
