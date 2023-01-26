<?php
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\Exception;
       
     require 'vendor/autoload.php';
     
     if (isset($_POST['email'])) {
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
          
            $mail->setFrom($_POST['email'], $_POST['name']);          
            $mail->addAddress('tridibsarma.08@gmail.com', 'EuroKids-Sorbhog');
               
            $mail->isHTML(true);                                  
            $mail->Subject = 'Received an admission enquiry from '.$_POST['name'].' for the program '.$_POST['programs_select'];
            $mail->Body    = 'Dear Sir/Madam,<br/><br/>I, <b>'.$_POST['name'].'</b> bearing email id <b>'.$_POST['email'].'</b> have the following enquiry for the programm <b>'.$_POST['programs_select'].'</b> <br/><br/>'.$_POST['message'].' <br/><br/> With Regards,<br/><b>'.$_POST['name'].'</b> ';

            if($mail->send()){
                echo "success";
            }else{
                echo "error";
            }
            
        } catch (Exception $e) {
            echo "error";
        }
     }
   
  ?>