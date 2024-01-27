<?php
include("connexion.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $usernamme = $_POST["user"];
    $passsword = $_POST["pass"];
  

    $sql= "SELECT  * FROM userlogin WHERE  username='$usernamme' and password = '$passsword' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
   
    if($row["option"]=="agent"){
            header("Location:homeagent.php");
    }
    elseif($row["option"]=="customer"){
        header("Location:homeclient.php");
    }elseif($row["option"]=="expert"){
        header("Location:homeexpert.php");
    }elseif($row["option"]=="mecanicien"){
        header("Location:homemecanic.php");
    }else{
        echo'<script>
        window.location.href = "profil.php";
        alert("Login failed , Invalid username or password !!!")
        </script> ';
    }
    
}
?>