<?
$servername="localhost";
$username="root";
$password="";
$databasename="CalculatorTable";
$conn=mysqli_connect($servername,$username,$password,$databasename);
if(!$conn){
  die("connection error:".mysqli_connect_error())};
  else{
  echo"connected successfully";}
}
$sql="INSERT INTO calculatingtable(f_NAME,L_NAME,Account_No,number_Amount,Number_rate,Number_time_save,) VALUES ('','','','','','')";

if(mysqil_query($conn,$sql)){
  echo"new record created"};
}else{
  echo "Error".$sql: '<br>'.mysqli_error(!$conn);
}
$mqli_close($conn) ;
}



?>
