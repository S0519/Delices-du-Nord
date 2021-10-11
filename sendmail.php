<?php 
  if(isset($_POST['submit'])){ 
   $day=$_POST['day'];  
   $hour=$_POST['hour']; 
   $name=$_POST['name'];
   $phone=$_POST['phone']; 
   $person=$_POST['person']; 
    $to      =  'xyz@gmail.com';
    $subject =  'Contact us form filled by user on your restaurant website/';
    $message =  'Message from : '."\r\n".
                'Name :  '.$name."\r\n". 
                'Phone :  '.$phone."\r\n".
                'Person :  '.$person."\r\n".
                'Day :  '.$day."\r\n". 
                'Hour :  '.$hour."\r\n";
    $headers =  'From: webmaster@example.com'       . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

   if(mail($to, $subject, $message, $headers)){ 
         //Start the session if already not started.
    
    echo "<script>  
        alert('We’ve received your order, and one of our sales representatives will be in touch with you shortly');
        window.location.href='contact.html';
          </script>"; 
      }
   else{
       echo "SMTP error";
      }
   }
 
?>
