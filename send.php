<?php
         // connexion a la base de donnees 
             $servername ="localhost";
             $username ="root";
             $password = "";
             $dbname = "assurance";

            
              $conn = mysqli_connect($servername,$username,$password,$dbname);
           if(!$conn){
             echo " DATEBASE  NOT Connected ";
           } else{
            echo " DATEBASE  Connected ";
           }                   
                $id = $_POST['id'];
                $fullname = $_POST['fullname'];
                $passw = $_POST['passw'];
                $firstname = $_POST['firstname'];
                $familyname = $_POST['familyname'];
                $birth = $_POST['birth'];
                $eemail = $_POST['eemail'];
                $ephone = $_POST['ephone'];
                $ecity = $_POST['ecity'];
                $ereg = $_POST['ereg'];
                $estr= $_POST['estr'];
                $codep = $_POST['codep'];
                $ssn = $_POST['ssn'];
                $icn = $_POST['icn'];
                $license = $_POST['license'];
                $ccp = $_POST['ccp'];
                         
                
            $sql = " INSERT INTO  `addexprt` ('id' , `fullname`,  `passw`,'firstname','familyname',`birth`, `eemail`, `ephone`, `ecity`, `ereg`, `estr`, `codep`, `ssn`, `icn`, `license`, `ccp`) VALUES ('$id','$fullname','$passw','$firstname','$familyname','$birth','$eemail','$ephone','$ecity','$ereg','$estr','$codep','$ssn','$icn','$license' ,'$ccp')";
           
               $data = mysqli_query($conn,$sql);
               if($data){
                echo "Saved ";
               }else{
                echo "ERROR ";
               }
               $conn->close();
 
?>
