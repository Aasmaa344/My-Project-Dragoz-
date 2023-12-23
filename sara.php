 <?php

$FirstName=$_REQUEST['FirstName'];
$LastName=$_REQUEST['LastName'];
$email= $_REQUEST['email'];
$psw=$_REQUEST['psw'];
if ( isset($_POST['btnset']))
{

$host = "localhost";
$User = "root";
$password="";
$db="dragoz";

$conn= mysqli_connect($host ,$user , $password , $dragoz  );
$insert= "insert into regess values( '$FirstName' , '$LastName' ,'$email' , '$psw' )";
$myspli_query( $conn , $insert);
if($conn){

echo (" h1  style ='color: green';> Your Regestration is Done ! </h1>");
else(" h1 style = 'color: Red';> Your Regestration is Failed ! </h1>");

}



}






?>