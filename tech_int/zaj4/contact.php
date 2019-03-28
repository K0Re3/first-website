<?php
header('Content-type: text/html; charset=UTF-8');
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "dawkor4@st.amu.edu.pl";
  $headers = "From: $email";
  $txt = "Otrzymałeś maila od $name. \n $message";

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}
?>
