<?php 


$confidencial = "esto es una contraseña";
$language = "PHP";
$titulo = "programandoPHP";


//view("view", ["language" => $language]);
view("home", compact("language" ,"titulo"));

  





 ?>