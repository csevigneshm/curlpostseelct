<?php
//-------------without class and obj---------------------------
// $id=$_POST['id'];
// $select=$_POST['action'];
// $conn = mysqli_connect("localhost", "root","", "Office");





// if ($select=="fetchname") {

//     $sqlname="SELECT name FROM customer where id=$id";
//     $resultname = mysqli_query($conn,$sqlname);
//     $row = mysqli_fetch_assoc($resultname);
//     $resultofname= $row["name"];
//     echo $resultofname;
  
// }

// elseif($select=="fetchaddress") {

//     $sqlname="SELECT address FROM customer where id=$id";
//     $resultname = mysqli_query($conn,$sqlname);
//     $row = mysqli_fetch_assoc($resultname); 
//     $resultofaddress= $row["address"];
//     echo $resultofaddress;

	
// }
// elseif($select=="fetchphone") {
 
//     $sqlname="SELECT phone FROM customer where id=$id";
//     $resultname = mysqli_query($conn,$sqlname);
//     $row = mysqli_fetch_assoc($resultname);
//     $resultofphone= $row["phone"];
//     echo $resultofphone;
// }
// else
// {
// 	echo "SELECT ANY OF THE DETAILS";
// }

//--------------by select---------------------------------

// $conn = mysqli_connect("localhost", "root","", "Office");
// $sqlname="SELECT $select FROM customer where id=$id";
// $resultname = mysqli_query($conn,$sqlname);
// while($row = mysqli_fetch_assoc($resultname)) {
//     $result= $row["$select"];
//   }
// echo $result;


//------------------with class and obj------------------





include_once("classconn.php");

$id=$_POST['id'];
$select=$_POST['action'];

$echodata=new DB();


if($select=="fetchname"){
$echoname=$echodata->fetchname($id);
echo $echoname;
}
elseif ($select=="fetchaddress") {
	$echoaddress=$echodata->fetchaddress($id);
    echo $echoaddress;
}
elseif ($select=="fetchphone") {
	$echophone=$echodata->fetchphone($id);
    echo $echophone;
}








?>