<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';
if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $amount = $_POST['amount'];
   $aadhar = $_POST['aadhar'];
   $address = $_POST['address'];
   
  
   try{
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'kishwarijit@gmail.com';
      $mail->Password = 'pjmczqmkxowwzdfo';
      $mail->SMTPSecure = "tls";
      $mail->Port = '587';

      $mail->setFrom('kishwarijit@gmail.com');
      $mail->addAddress('kishwarijit@gmail.com');
     
      // $mail->addAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']);  //Optional name

      // $file = $_FILES["file"]["name"];
      //  $tempname = $_FILES["file"]["tmp_name"];
      //  $folder ="uploads/".$file;
      //  echo $folder;
      //  move_uploaded_file($tempname, $folder);


      $mail->isHTML(true);
      $mail->Subject = 'Message Received'.$name;
      $mail->Body = "Name: $name <br>Phone: $number<br>Email: $email<br>Aadhar: $aadhar<br>Amount: $amount<br>Address: $address";

      $mail->send();
     
      $alert= "<div class='alert-success' style='background-color: #fff;font-weight: bold;'><center><span>Thank you <strong>$name</strong> for getting in touch.</span><center></div>";
   } catch (Exception $e){
     $alert = "<div class='alert-error'><span>'.$e->getMessage().'</span></div>";
   }
}
?>