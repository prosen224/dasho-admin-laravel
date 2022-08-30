<?php
if(isset($_POST['msg']))
{
    require_once 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = '';
    $mail->Port = 25;
  //  $mail->SMTPSecure = "tls"; 
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = '';
    $mail->setFrom('', 'Alpha Net Contact Form Example');
    $mail->addAddress('');
    $mail->Subject  = $_POST['subject'];
    $mail->Body = $_POST['msg'];
    if(!$mail->send()) {
      echo 'Message was not sent.';
      echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
      echo 'Message has been sent.';
    }
}
?>
<html>
<head>
    <title>Contact Form Example</title> 
    <style>
    .contact_form{ width:100%;max-width:800px;border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;margin:20 auto;}
    
    input[type=text],textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
 input[type=email] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #006FC4;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    
}
    </style>
</head>  
<body>
    <div class="contact_form">
        <h2 style="text-align:center;color:#05A9E5;font-size:30px;">Contact Form</h2>
    <form action="" method="post">
        
        <label>Name</label>
        
        <input type="text" name="from_name" placeholder="Name">
            
        <label>Email</label>
        
        <input type="email" name="email">
         
        <label>Subject</label>
        
        <input type="text" name="subject">
         
        <label>Message</label>
        
        <textarea name="msg">Type your Message</textarea>
        
        <input type="submit" value="Send Message">
        
    </form>
    </table>
    </div>
</body>
</html>