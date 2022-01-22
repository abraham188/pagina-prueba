<?php 

print($_GET["asunto"]);
print("<br/>");
print($_GET["destinatario"]);
print("<br/>");
print($_GET["cuerpo"]);

$headers="From: abrahamlizardo2003@gmail.com\r\n"
. "Reply-To: abrahamlizardo2003@gmail.com\r\n"
. "X-Mailer:". phpversion();
mail($_GET["destinatario"], $_GET["asunto"], $_GET["cuerpo"],$headers);

















 ?>