<?php
//contact form submission
if(isset($_POST['submit'])){
    $name = $_POST['fname'+'lname'];
    $email = 'dov@sloman.me';
    $message = $_POST['subject'];
    $to = '
        <?php echo $email; ?>
    ';
    $subject = '
        <?php echo $name; ?>
    ';
    $body = '
        <?php echo $message; ?>
    ';
    $headers = 'From:
        <?php echo $name; ?>
    ';
    if(mail($to, $subject, $body, $headers)){
        echo '
            <p>Your message has been sent!</p>
        ';
    } else {
        echo '
            <p>Something went wrong, please try again.</p>
        ';
    }
}
?>