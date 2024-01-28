
<?php
include("connexion.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>SEARCH expert</title>
    <meta name="viewport" content="width=dvice-width, intial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
    
    input {
            padding: 4px;
            margin: 4px;
            font-size: 16px;
            border-radius: 10px;
            border: 1px solid #100e0e;
            width: 4cm;
        }
        
        input#submit {
            margin-top: 7px;
            color: white;
            font-weight: bold;
            padding: 4px;
            background-color: rgb(64, 64, 240);
        }
        .input_text {
            width: 95%;
            height: 30px;
            background: transparent;
            border: none;
            outline: none;
            border-bottom: 1px solid #00ccff;
            font-size: 20px;
            padding-left: 10px;
            color: #00ccff;
        }
    </style>
</head>

<body style="margin:70px;">
    <header class="header">
        <a  class="logo">FANC</a>
        <nav class="navbar">
            <a href="homeagent.php" class="ri-home-line" >Home</a>    
        </nav>
        </header>

          
<div  align="center">
            <button   class="ri-user-star-line" class="active ">
                <a href="searchexpert.php" > List of Expert </a>
            </button>
            <button   class="ri-football-fill">
                 <a href="searchmecanic.php " >List of Mecanicien  </a>
                </button>
            <button   class="ri-user-fill" >
                <a href="searchcustomer.php"> List of Customer </a>
            </button>
</div> 
 <!-- home section design -->
<section class="home " id="home ">
    <div align="center" >
            <h2> Search </h2>
            <input type="text" id="idsearch" onkeyup="myFunction()" placeholder="Search..." name="search" style="width:300px;">
        </div>
        <br>
</section>

  
    
    
<!--//////////////////////////////////////////////////////Expert///////////////////////////////////////////////-->
<div class="container my-5">
<h3 style="color:red;">List of Expert </h3>
        <table class="table" id="table">
        <thead>
            <tr>

                        <th > ID Expert </th>
                        <th> User name </th>
                        <th> Password </th>
                        <th> FisrtName </th>
                        <th> FamilyName </th>
                        <th> Birthday </th>
                        <th> Email </th>
                        <th> Phone</th>
                        <th> City </th>
                        <th > Region </th>
                        <th> Street </th>
                        <th> Code postal </th>
                        <th> ssn </th>
                        <th> icn </th>
                        <th> Num License </th>
                        <th> ccp </th>
                        <th> Holiday </th>
                        <th> action </th>
                        <th> SEND </th>

            </tr>
        </thead>

        <tbody>

        <?php
        $servername ="localhost";
        $username ="root";
        $password = "";
        $dbname = "assurance";
        $conn = mysqli_connect($servername,$username,$password,$dbname);
       
        
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }

        $sql="SELECT * FROM addexprt";
        $result=$conn->query($sql);

        if(!$result){
            die("Innvalide query: " . $conn->error);
        }
        
        //read data of each row
        while($row=$result->fetch_assoc()){
            echo" <tr>

            <td > ".$row["id"]." </td>
            <td> ".$row["fullname"]." </td>
            <td> ".$row["passw"]." </td>
            <td> ".$row["firstname"]." </td>
            <td> ".$row["familyname"]." </td>
            <td> ".$row["birth"]." </td>
            <td> ".$row["eemail"]." </td>
            <td> ".$row["ephone"]." </td>
            <td> ".$row["ecity"]." </td>
            <td> ".$row["ereg"]." </td>
            <td> ".$row["estr"]." </td>
            <td> ".$row["codep"]." </td>
            <td> ".$row["ssn"]." </td>
            <td> ".$row["icn"]." </td>
            <td> ".$row["license"]." </td>
            <td> ".$row["ccp"]." </td>
            <td> ".$row["holiday"]." </td>
                           
                            <td>  
                                <a class='btn btn-primary btn-sm' href='updateexpert.php?id=$row[id]'>Update</a>
                                <a class='btn btn-danger btn-sm' href='deleteexpert.php?id=$row[id]'>Delete</a>
    
                            </td>
                            <td>  <button type='submit' class='btn btn-primary' action=".$sqll= 'INSERT INTO messg (ide, messag, message, date ) '.


                            " VALUES ('$row[id]','$messag','$message','$currentDate')";
                             $resultt=$conn->query($sqll); 


                            " >Sent</button>
                             </td>
            </tr>";

        }

        $conn->close();
        ?>
        </tbody>
    </table>
  
   
<script>
    //expert
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("idsearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    td1 = tr[i].getElementsByTagName("td")[7];
    td2 = tr[i].getElementsByTagName("td")[8];
    if (td || td1 || td2) {
      txtValue = td.textContent || td.innerText;
      txtValue1 = td1.textContent || td1.innerText;
      txtValue2 = td2.textContent || td2.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1 || txtValue1.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1 ) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function sendlocation(){

}
</script>
<div>
</body>

</html>