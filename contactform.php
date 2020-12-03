<?php
  if($_POST["message"]) {
    mail("lisa.m.childress@gmail.com", "Message from your portfolio",
    $_POST["insert your message here"]. "From: an@email.address");

}
?>
