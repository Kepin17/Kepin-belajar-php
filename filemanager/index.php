<?php

// $msg = "Welcome leee\n";
// file_put_contents("content.txt" , $msg, FILE_APPEND);

// $isifile = file_get_contents("content.txt");
// echo $isifile;

$member = [
  [
    "id" => 1,
    "name" => "Andre",
    "role" => "Manager"
  ],
  [
    "id" => 2,
    "name" => "Kepin",
    "role" => "Developer"
  ],
  [
    "id" => 3,
    "name" => "Joko",
    "role" => "Designer"
  ]
  ];

// $data = serialize($member);
// file_put_contents("member.txt", $data);

// $muncul = file_get_contents("member.txt");
// $member = unserialize($muncul);
// echo "<pre>";
// print_r($member);


// json

$data = json_encode($member);
file_put_contents("member.json", $data);
$output = file_get_contents("member.json");
$member = json_decode($output);
echo "<pre>";
print_r($member);
?>