<?php

require_once __DIR__ ."/vendor/autoload.php";


use Brandon\ResponseClass\JsonResponse;

$student= array(


  "name" => "John Doe",
  "course" => "Software Development",
  "level" => "200"
);

new JsonResponse('ok', '', $student);




 ?>
