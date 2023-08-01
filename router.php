<?php


$request = $_SERVER["REQUEST_URI"] ;



switch ($request) {

    case "/";
    case "";
    require __DIR__ . "/views/home.php";
    break;

    case "/about";
   require  __DIR__ . "/views/about.php";
    break;

    case "/contact";
   require __DIR__ . "/views/contact.php";
   break;

       case "/thank_you";
   require __DIR__ . "/views/thank_you.php";
   break;

   case "/login";
   require __DIR__ . "/login.php";
   break;


default:

$filename= __DIR__ . "/views" . $request . ".php";
if(file_exists($filename)){
    require $filename;
    break;
}

//http_response_code (404);
//require __DIR__ . "/views/404.php";
//break;
}
