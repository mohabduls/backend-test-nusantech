<?php
require("replacer.class.php");
//class
$c = new replacer();
echo "<pre>";
echo $c->r("@","&nbsp;",15);
echo "</pre>";
?>