<?php
include("connexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="cssFILES/fati.css">
    <link rel="stylesheet" href="cssFILES/sttyle.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>-->
</head>

<body>

    <header class="header">
        <a  class="logo" href="service.php">Go Back</a>
        </header>
   
<br>
    <section class="home " id="home ">
   
                       
<div  align="center">
            <label  href="expert.php" class="ri-user-star-line" >
                 <a href="expert.php">Expert  </a>
             </label>
            <label  href="mecanicien.php " class="ri-football-fill" >
                 <a href="mecanicien.php "> Mecanicien  </a>
              </label>  
            <label href="client.php"  class="ri-user-fill" class="active " color="blue">
                <a href="client.php" > Customer </a>
            <label>
</div> 
         <br>
        <form  name="form"action="addclient.php" method="POST">
           
                <label for="cuername">Username</label>
                <input type="text"  name="cuername" id="cuername" >
                <label for="cpassw">Password</label>
                <input type="password"  name="cpassw" id="cpassw"  >


           
                <h2 style="color:#2772F6;">New Customer</h2>
                <label for="cid" >Id</label>
                <input type="text"  name="cid" id="cid" >



                <label for="cfirstname">First Name</label>
                <input type="text"  name="cfirstname" id="cfirstname" >



                <label for="cfamilyname" >Family Name</label>
                <input type="text" name="cfamilyname" id="cfamilyname"  >

<br>
                <label for="cbirth" >Birthday</label>
                <input type="date"  name="cbirth"  id="cbirth">


                 <script>
function test() {
     var q = new Date();
     var date = new Date(q.getFullYear(),q.getMonth(),q.getDate());
     var mydate = new Date(document.getElementById('birth').value);

     if(date > mydate) {
        alert("Current Date is Greater THan the User Date");
     } else {
        alert("Current Date is Less than the User Date");
     }
  }


        </script>


                <label for="cemail">Email</label>
                <input type="email" id="cemail"  name="cemail" pattern="[a-z0-9._%+\-]+@gmail.com" >


                <label for="cphone">Phone</label>
                <input type="tel" id="cphone" name="cphone" placeholder="----------" pattern="[0,5-7]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" >

                <label for="ccity" >City</label>

                <select style="width:140px;" id="W" name="ccity" id="ccity">
        <option name="ccity"> </option> 
         </select>
                <!--   <input type="text" class="form-control" name="ecity" value="<?php echo $ecity; ?>">-->


                <label  for="creg">Region</label>

                <!--<input type="text" class="form-control" name="ereg" value="<?php echo $ereg; ?>">-->
                <select style="width:140px;" id="D" name="creg">
        <option name="creg">  </option> 
         </select>
                <script>
                    let wilaya = ["Adrar", "Chlef", "Laghouat"];
                    let dairalagh = ["khnag", "SidiMakhlouf", "Assafia", "AinMadi", "BenNaserBenChouhra"];
                    let dairaadrar = ["a1", "a2", "a3", "a4"];
                    let dairachlef = ["c1", "c2", "c3 ", "c4"];

                    let W = document.getElementById("W");
                    let D = document.getElementById("D");

                    wilaya.forEach(function addSpecies(item) {
                        let option = document.createElement("option");
                        option.text = item;
                        option.value = item;
                        W.appendChild(option);
                    });

                    W.onchange = function() {
                        D.innerHTML = "<option></option>";
                        if (this.value == "Adrar") {
                            addToSlct2(dairaadrar);
                        }
                        if (this.value == "Chlef") {
                            addToSlct2(dairachlef);
                        }
                        if (this.value == "Laghouat") {
                            addToSlct2(dairalagh);
                        }
                    }

                    function addToSlct2(arr) {
                        arr.forEach(function(item) {
                            let option = document.createElement("option");
                            option.text = item;
                            option.value = item;
                            D.appendChild(option);
                        });
                    }
                </script>


                <label for="cstr">Street</label>
                <input type="text"  name="cstr" id="cstr" >
<br>


                <label for="ccodep" >Code Postal</label>
                <input type="number" id="ccodep" name="ccodep" >



                <label for="cenc">Social Security Number</label>
                <input type="number"  name="cenc" id="cenc" >

                <label for="cedc">Identification Card Number</label>
                <input type="number"  name="cedc" id="cedc" >

                <label for="cccp">ccp</label>
                <input type="number"  name="cccp" id="cccp" >

            
                <br>
            <!--  //////////car /////////         -->
<button style="border-radius: 70%;width:70px ;  background:#27F627 ;"  class="ri-add-circle-line" id="other" onkeyup="vide()"> ADD OTHER </button>
   <script>
    function vide(){
  $idcar="";
  $carnum="";
  $carname="";
  $carcoler="";
  $mileage="";
  $insn="";
  $inst="";
  $datebins="";
  $datefins="";
    }
    </script>
              <h2 style="color:#2772F6;">Info Car</h2>
           
                <label for="idcar">Id Car </label>
                <input type="text"  name="idcar" id="idcar">
             
          

            
                <label for="carnumber"> Car Number </label>
                <input type="number" id="carnumber"  name="carnumber" >
              

            
                <label for="carname"> Car Name </label>
                <input type="text"  name="carname" id="carname" >
               
<br>
           
                <label for="carcolor">Car Color </label>
               
                    <!--<input type="text" class="form-control" name="ereg" value="<?php echo $carcoler; ?>">-->
                    <select style="width:140px;" id="C" name="carcolor">
                    <option name="carcolor"></option> 
                    </select>
                <script>
                let carcoler = ["Red", "Blue", "Black", "Yellow", "Pink", "Grey", "Green", "White"];
                let C = document.getElementById("C");
                carcoler.forEach(function addSpecies(item) {
                    let option = document.createElement("option");
                    option.text = item;
                    option.value = item;
                    C.appendChild(option);
                });
               </script>


          
                <label for="carmilage"> Car Mileage </label>
                <input type="number"  name="carmilage" id="carmilage">
                


            
                <label for="insurance"> Insurance Number </label>
                <input type="number"  name="insurance" id="insurance">
            
           <br>
                <label for="insutype"> Insurance Type </label>
                 <input type="text"  name="insutype" >
              

           
                <label for="dd" >Date of beging Insurance</label>
                <input type="date"  name="dd" >
               
           
                <label for="df" >Date of end Insurance</label>
                <input type="date"  name="df" >
                


            <?php
        if(!empty($successMessage)){
            echo"
            <div class='row mb-3'>
             <div class='offset-sm-3 col-sm-6'>
               <div class='alert alert-succes alert-dismissible fade show' role='alert'>
                 <strong>$successMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-lable='close'></button>
                </div>
              </div>
            </div>
            ";
        }

        ?>
        <br> <br>
          <button type="submit" class="ftn" style="position:center;">Submit</button>
                                      



               
                    
                      




        </form>
       
    </section>

</body>

</html>