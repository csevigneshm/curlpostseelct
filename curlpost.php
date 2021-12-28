<?php

$id=$_POST['user'];
$select=$_POST['choose'];
// echo $id;
// echo $select;

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://192.168.0.52/mvignesh/20-12-2021/postid.php");
curl_setopt($ch,CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,array(
            'id' =>"$id",
            'action'=>"$select"
            
              ));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
$output=curl_exec($ch);
curl_close($ch);
echo $output;


?>