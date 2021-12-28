<?php
include_once("classconn.php");
$fetchdata=new DB();
$qry="customer";
$Fsql=$fetchdata->fetchdata($qry);
$arr=$fetchdata->fetch_next($Fsql);
?>


<!DOCTYPE html>
<html>
<head>
	<title>curlfetch</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
</head>
<body>
select user id 


<select id="id">
  <?php
  foreach ($arr as $key => $value) {
    $num=$value['id'];
  ?>
<option value="<?php echo $num;?>" > <?php echo $num; ?> 
</option>
   <?php
   }
   ?>
</select>


<p>
details  
<select id="select">
     <option value="fetchname">name</option> 
     <option value="fetchaddress">address</option>
    <option value="fetchphone">phone</option>
</select>

</p>

<input type="button" onclick="june()" value="Fetch">


</br>
<h1 id="get"></h1> 
 
<script>

function june(){

  var id=$("#id").val();
  var select=$("#select").val();  

  if(id!='')

  $.ajax(
     {
     type:"POST",
     url: "curlpost.php",
     data:'user='+id+'&choose='+select,

     success: function(resp)
       {
        $('#get').text(resp);
       }
     });
}



</script>

</body>
</html>