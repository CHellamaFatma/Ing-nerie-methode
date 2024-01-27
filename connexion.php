<?php
try{
$db = new PDO('mysql:host=localhost;dbname=assurance' , 'root' , '');

}catch(PDOException $e){
    die('erreur :'.$e->getMessage());

}
// connexion a la base de donnees 
$servername ="localhost";
$username ="root";
$password = "";
$dbname = "assurance";


 $conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
echo " DATEBASE  NOT Connected ";
} else{
echo "";
}  
?>