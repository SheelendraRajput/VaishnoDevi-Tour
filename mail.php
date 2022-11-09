
<?php 
extract($_POST);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';




//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       ='smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   ='s.shivhare985@gmail.com';                     //SMTP username
    $mail->Password   ='fqzlminpfdhcdrit';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('s.shivhare985@gmail.com', 'Enquiry');
    $mail->addAddress('s.shivhare985@gmail.com');     //Add a recipient
       
   

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');  //Add attachments
     //$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Vaishno Devi Tour';
    $mail->Body    = "<html>
    <head>
    <title>Vaishno Devi Tour</title>
    </head>
    <body>
     
    <table border='1'>
    <tr>
    <th>Date:</th><td>$Date_travel</td>
    </tr>
    <tr>
    <th>No of Person:</th><td>$adults</td>
    </tr>
    <tr>
    <th>No of Child:</th><td>$child</td>
    </tr>
    <tr>
    <th>city:</th><td>$departure</td>
    </tr>
    <tr>
    <th>Message:</th><td>$message</td>
    </tr>
    <tr>
    <th>Name:</th><td>$person_name</td>
    </tr>
    <tr>
    <th>Email:</th><td>$email</td>
    </tr>
     
    <tr>
    <th>Mobile:</th><td>$phone</td>
    </tr>
     
    <tr>
    <th>Country:</th><td>$country</td>
    </tr>
     
     </table>
    </body>
    </html>
    ";
    
   

    $mail->send();
   //echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


//Create an instance; passing `true` enables exceptions
$mailto = new PHPMailer(true);

try {
    //Server settings
    // $mailto->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mailto->isSMTP();                                            //Send using SMTP
    $mailto->Host       ='smtp.gmail.com';                     //Set the SMTP server to send through
    $mailto->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mailto->Username   ='s.shivhare985@gmail.com';                     //SMTP username
    $mailto->Password   ='fqzlminpfdhcdrit';                               //SMTP password
    $mailto->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mailto->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
     $mailto->setFrom('s.shivhare985@gmail.com', 'Enquiry');
     $mailto->addAddress($email,$person_name);     //Add a recipient
    // $mailto->addcc('sheelendrakumar1282001@gmail.com');

    //Attachments
   //$mailto->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   //$mailto->addAttachment('images/thank.png', 'new.jpg');    //Optional name

    //Content
    $mailto->isHTML(true);                                  //Set email format to HTML
    $mailto->Subject = 'Veshno Devi Tour';
    $mailto->Body    =  "<br><p>Hello  <b> $person_name</b>,</p>  
                          <p>Thanks for enquiry with us jammupackages.online</p>     
                          <p>We well contact you as soon as possible.</p>   
                          <p>  <b>For more detail : </b></p>           
                          <p>Email:<a href='mailto:sales@tripboxe.com'>sales@tripboxe.com</a></p>           
                          <p>Phone:+91 6265369978</p><br><br> 
                          <hr> 
                          <p>Thanks & Regards</p>
                          <img src='https://jammupackages.online/images/logo.png' title='Vaishno Devi Tour logo' width='150'>
                          <p>Email:<a href='mailto:sales@tripboxe.com'>sales@tripboxe.com</a></p>           
                          <p>Phone:+91 96265369978</p><br><br>        
                                  
    ";
   

    $mailto->send();
   //echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mailto->ErrorInfo}";
}
 
?>
<?php include 'header.php'?>

<br><br><br>
<div class="pic"> 


    <img src="images/thank.png" alt="thank u" class="thank" style="margin-top: 50px; width:70%;"><br>
    <h2><?php echo $_POST['person_name']; ?>, we will connect you soon.</h2><br> 
    <a href="index.php" class="btn">Back to Home</a> <br><br> 
</div>


<style>
.logo1 {
    width: 80%;

    margin: 5px auto;
    text-align: center;
}

.pic {
    width: 80%;

    margin: 0 auto;
    text-align: center;
}

.btn {
    margin-top: 5px;
    background: #f79000;
    color:#fff;
    border: #f79000 solid 1px;
    font-size: 14px;
    padding: 4px 10px;
}

.btn:hover {
    color: white;
}
</style>



        <?php
// // the message
// $msg = "First line of text\nSecond line of text";

// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// // send email
// mail("recallinfotech@gmail.com","My subject",$msg);
// ?>
<?php include 'footer.php'?>