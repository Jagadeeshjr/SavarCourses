<?php 

    $min  = 1;
    $max  = 300;
    $num1 = rand( $min, $max );
    $num2 = rand( $min, $max );
    $sum  = $num1 + $num2;

    $to = "info@savartechnologies.com"; // this is your Email address
    $from = "hr@savartechnologies.com"; // this is the sender's Email address
    $first_name = $_GET['yourname'];
    $Emailsubj = $_GET['youremail'];
    $phone = $_GET['phone'];
    // $yoursubject = $_GET['yoursubject'];
    $yoursubject = "Website Form Submission";
    $message = $_GET['textarea-359'];
    $subject = "Website Form Submission";
    
    $message = "Name:". $first_name . "\n Email:" . $Emailsubj .   "\n Phone:" . $phone . "\n Subject:" . $yoursubject . "\n Message:".$message;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);

    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header('Location: thankyou.html');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
 
?>