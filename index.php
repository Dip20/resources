<?php
//This will redirect to your landing page. Please Replace your landing page name with landingpage.html
redirect("landingpage.html");

//do not modify or remove this function.
function redirect($url)
{
echo "<script>window.location.href = '$url';</script>";
}
?>
