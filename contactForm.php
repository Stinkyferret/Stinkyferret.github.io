<?php

if (isset($_POST['submit'])) {

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$name = $_POST['name'];
$mailFrom = $_POST['mail'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailTo = "maaren.vandesijpe@student.hogent.be";
$headers = "Van: ".$mailFrom;
$txt = "U heeft een e-mail ontvangen van ".$name.".\n\n".$message;


mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");









}