<?php
require ('phpmailer/PHPMailerAutoload.php');	

$mail = new PHPMailer();
 if(isset($_POST['submit']))
    {
		$name = $_POST['name']; // Get Name value from HTML Form
        $email_id = $_POST['email']; // Get Email Value
        $mobile_no = $_POST['mobile']; // Get Mobile No
        $msg = $_POST['message']; // Get Message Value
		
	   $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email_id</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Contact No: </strong></td>
                            <td style='width:400px'>$mobile_no</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$msg</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
		
//$mail->isSMTP(); 
// $mail->SMTPAuth = true;   
// $mail->SMTPSecure = 'ssl';                 
// $mail->Host = 'mail.inceptiosystems.com';                         
// $mail->Port = 25;         
// $mail->Username = 'support@inceptiosystems.com';
// $mail->Password = 'is@123*999';                             

// $mail->setFrom('support@inceptiosystems.com');

// $mail->AddAddress('Asif.shaikh@inceptiosystems.com');

// $mail->isHTML(true);
// if($mail->IsError()) die($mail->ErrorInfo);
// $mail->Subject = $name;
// $mail->Body    = $message;


$mail->From = 'support@inceptiosystems.com';
$mail->FromName = 'Inceptio Systems';
$mail->AddAddress('udayan.gaidhani@inceptiosystems.com');    // Add a recipient
$mail->AddAddress('sibi.joseph@inceptiosystems.com');  
$mail->addCC('shijith.kunimmal@inceptiosystems.com');

//$mail->AddAddress('asif.shaikh@inceptiosystems.com');

//$mail->addBCC('shaikh_asif789@rediffmail.com');
//$mail->addReplyTo('jomonathimoottil@gmail.com');

//$mail->addAttachment('');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $name;
$mail->Body    = $message;


if(!$mail->send()) {
		
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
else {
	
	echo '<script type="text/javascript">'; 
	echo 'alert("Thank you for getting in touch! We have received your message and would like to thank you for writing to us. If your inquiry is urgent, please use the telephone number listed below to talk to one of our staff members.");'; 
	echo 'window.location = "contactus.html";';
	echo '</script>';
	
}

}
//Start Rewart Email 

///////////////////

$mail = new PHPMailer;
   
    if(isset($_POST['submit'])) {
   
    // $mail->isSMTP();                                      // Set mailer to use SMTP
    // $mail->Host = 'support@inceptiosystems.com';  // Specify main and backup SMTP servers
    // $mail->SMTPAuth = true;                               // Enable SMTP authentication
    // $mail->Username = 'support@inceptiosystems.com';                 // SMTP username
    // $mail->Password = 'Shaikh@#969920';                           // SMTP password
    // $mail->From = 'support@inceptiosystems.com';
    // $mail->FromName = 'support@inceptiosystems.com';
    // //$mail->addAddress(''.$_POST['shaikh_asif789@rediffmail.com'].'');     // Add a recipient
	// $mail->AddAddress('shaikh_asif789@rediffmail.com');
	
	$mail->From = 'support@inceptiosystems.com';
	$mail->FromName = 'Inceptio Systems';
	//$mail->AddAddress = 'shaikhasif555@gmail.com';    // Add a recipient
	//$mail->AddAddress('shaikhasif555@gmail.com');
	
	$mail->AddAddress(''.$_POST['email'].'');	

    $mail->isHTML(true);                                 
    $mail->Subject = 'Inceptio Systems';
	//
	$mail->AddEmbeddedImage('images/IS-logo.png', 'logoimg', 'images/IS-logo.png'); // attach file logo.jpg, and later link to it using identfier logoimg
$mail->Body = "<h3>Thank you for your message,</h3>
   <h3>Your message will be passed to one of our expert advisors who will be in contact as soon as possible.</h3>
   <img src=\"cid:logoimg\" />
   <h5>Tel :  +971 4 453 4976</h5>
   <h5>Fax : +971 4 453 9963</h5>
   <h5>e-mail: sales@inceptiosystems.com</h5>
   <h5>URL: www.inceptiosystems.com</h5>";
//$mail->AltBody="This is text only alternative body.";
	
    if(!$mail->send()) {
       //Finally redirect
            echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      //Finally redirect
    echo '<script type="text/javascript">'; 
	echo 'alert("Thank you for getting in touch! We have received your message and would like to thank you for writing to us. If your inquiry is urgent, please use the telephone number listed on the website to talk to one of our team members.");'; 
	echo 'window.location = "contactus.html";';
	echo '</script>';
    }
    }

//End Rewart Email

?>