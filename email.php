<?php
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\Exception;
       
     require 'vendor/autoload.php';
     
  
        $mail = new PHPMailer(true);
       
        try {
            $mail->SMTPDebug = 0;                                       
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                    
            $mail->SMTPAuth   = true;                             
            $mail->Username   = 'tridibsarma.08@gmail.com';                 
            $mail->Password   = 'bghxhwxxbnbwajro';                        
            $mail->SMTPSecure = 'tls';                              
            $mail->Port       = 587;  
          
            $mail->setFrom("tridibsarma.08@gmail.com", "tridib");          
            $mail->addAddress('tridibsarma.08@gmail.com', 'EuroKids-Sorbhog');
               
            $mail->isHTML(true);                                  
            $mail->Subject = 'Received an admission enquiry from  for the program ';
            $mail->Body    = 'Dear Sir/Madam,<br/><br/>I, <b></b> bearing email id <b></b> have the following enquiry for the programm <b></b> <br/><br/><br/><br/> With Regards,<br/><b></b> ';

            if($mail->send()){
                echo "success";
            }else{
                echo "error";
            }
            
        } catch (Exception $e) {
            echo "error";
        }
 
   
  ?>