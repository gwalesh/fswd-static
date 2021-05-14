<?php 
        if(isset($_POST['submit'])){
            $to = "singhgwalesh88@gmail.com"; // this is your Email address
            $from = $_POST['FSWB']; // this is the sender's Email address
            $email = $_POST['email'];
            $name = $_POST['name'];
            $message = $_POST['message'];
            $subject = "Form submission from FSWD";
            
          

            mail($to,$subject,$message,$headers);
            echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
            // You can also use header('Location: thank_you.php'); to redirect to another page.
            }
    ?>