<!DOCTYPE html>

<html>

<head>

    <title>Registration Form</title>

    <style>

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

            background-color: orangered;

            color: white;

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

        {background-color: coral;

            width:90%;

            color: black;

        }

        input[type=submit]

        {

            width: 95%;

            background-color: orangered;

            cursor: pointer;

            font-size: 18px;

            font-weight: bold;

            color:white;

        }

        input[type=submit]:hover

        {

            background-color: orangered;

        }

        

    </style>

</head>

<body>

    <div class="wrap">

    <form action="" method="POST">

        <h2>Sign up form</h2>

        <input type="text" name="cname" placeholder="Company ID">

        <br>        <input type="text" name="uname" placeholder="User name">

<br>

                <input type="password" name="psw" placeholder="password">

<br>

                <input type="password" name="confirmpass" placeholder="Confirm password">

<br>

                <input type="email" name="email" placeholder="Email id">

    <br>    <input type="checkbox">Agree to the terms of use?

        <input type="submit" value="Submit now">
</form>
<a href="dashboard1.php">To Dashboard</a>
</div>
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
echo "connection Successful";
}

$comp_id=$_POST['cname'];
$u_name=$_POST['uname'];
$email_id=$_POST['email'];
$pass=$_POST['psw'];

echo $comp_id;
echo $u_name;
echo $email_id;
echo $pass;
$sql = "INSERT INTO USERS (TENANT_ID,EMAIL_ID,PASSWORD,NAME) VALUES ($comp_id,'$email_id' ,'$pass' ,'$u_name')";

if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


        

               

         </body></html>
