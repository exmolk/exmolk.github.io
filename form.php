<?php 
if(isset($_POST['submit'])){
    $to = "exmo@mrt.ac.lk"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "From_website-". $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Your response was sent successfully. Thank you " . $first_name . "."; //.$subject."-".$message;
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }


    // header("Location: http://exmo.mrt.ac.lk");
    // die();
?>

<script>
setTimeout(function(){window.location.replace(" http://exmo.mrt.ac.lk");}, 2000);
</script>