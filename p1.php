<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="html";


$nam=$_POST['nam'];
$fn=$_POST['fn'];
$pn=$_POST['pn'];
$addr=$_POST['addr'];


$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("connection failed".$conn->connect_error);
}else{
	$stmt = $conn->prepare("INSERT INTO p1(nam,fn,pn,addr)VALUES(?,?,?,?)");
	$stmt-> bind_param("ssis", $nam, $fn, $pn, $addr);
    $stmt->execute();
    echo " include 'page2.html';";
	$stmt->close();
	$conn->close();
}
?>