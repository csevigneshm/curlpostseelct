<?php

define('HOST','localhost');
define('USER','root');
define('PASS' ,'');
define('DBNAME', 'Office');
class DB
{
 function __construct()
{
$con  = mysqli_connect(HOST,USER,PASS,DBNAME);
$this->connection=$con;
 }
 public function fetchdata($qry)
 {
     $query="select * from $qry";
     $result=mysqli_query($this->connection,$query);
     return $result;
     
 }
  public function fetch($fetch)
 {
     $Fsql=mysqli_fetch_array($fetch);
     return $Fsql;
    
 }
 public function fetch_next($fetch)
 {
 	$i=0;
    while($rows = $this->fetch($fetch)){
    $cont[$i]['id']=$rows['id'];
    $i++;
  }
  return $cont;
 }


public function fetchname($id){
    $sqlname="SELECT name FROM customer where id=$id";
        $res=mysqli_query($this->connection,$sqlname);
        $row = mysqli_fetch_assoc($res); 
        $resultofname= $row["name"];
        return $resultofname;
}
public function fetchaddress($id){
    $sqlname="SELECT address FROM customer where id=$id";
        $res=mysqli_query($this->connection,$sqlname);
        $row = mysqli_fetch_assoc($res); 
        $resultofaddress= $row["address"];
        return $resultofaddress;
}
public function fetchphone($id){
    $sqlname="SELECT phone FROM customer where id=$id";
        $res=mysqli_query($this->connection,$sqlname);
        $row = mysqli_fetch_assoc($res); 
        $resultofphone= $row["phone"];
        return $resultofphone;
}




}