<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];
if (empty($name) || empty($email) || empty($message))
{
    echo "please fill"
}
 else
{
    mail("ashihacku@gmail.com", "AN site message", $message , "Form: $name <$email>");
    echo "<script type='text/javascript'>alert('msg send success');
    window.history.log(-1);
    </script>";
}
?>