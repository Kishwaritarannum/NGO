<?php
include("connect.php");
include("mail.php");

//email address to send email..

$to = "kishwarijit@gmail.com";
$subject = "contact form";

//getting all value on submit

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];



//putting email body

$message = "
<html>
<head>
<title> Request Details: </title>
</head>
<body>
<table border = '1' cellpadding = '10' cellspacing = '10'>
<tr>
<td>Name: $name</td>
<td>Email: $email</td>
<td>Mobile Number: $number</td>
<td>Message: $message</td>
</tr>
</table>
</body>
</html>
";


//Always set Content-type when sending HTML email

$headers = "MIME-Version:1.0" . "\r\n";
$headers .="Content-type:text/html;
           charset = UTF-8". "\r\n";

// more headers
$headers .= 'From:<sahyogfoundation25@gmail.com>'."\r\n";
mail($to, $subject, $message, $headers);
header("Location: contact.php?flag=sent");

echo '<div class="success">Thank you <strong> '.$name.',</strong> you have registered successfully...';

$query="INSERT INTO test1 (name,email,number, message) VALUES('$name' ,'$email','$number','$message')";
$data = mysqli_query($conn, $query);
if($data)
{
echo "Data inserted into database";
}
else{
echo "failed to insert data";
}
?>
