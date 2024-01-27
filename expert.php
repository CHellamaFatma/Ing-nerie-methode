<?php
include("connexion.php");
?>

    <!DOCTYPE html>

    <html lang="en" dir="ltr">

    <hea d>
        <meta charset="utf-8">
        <title>ADD EXPERT</title>
        <meta name="viewport" content="width=dvice-width, intial-scale=1.0">
        
        <link rel="stylesheet" href="cssFILES/fati.css">
        <link rel="stylesheet" href="cssFILES/sttyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>


        </head>

        <body>
            <header class="header">
            <a  class="logo" href="service.php">Go Back</a>
              
                </header>
   <!-- home section design -->
    

     <section class="home " id="home ">
        
<div  align="center">
            <label  href="expert.php" class="ri-user-star-line" class="active ">
                <a  > Expert </a>
</label>
            <label   class="ri-football-fill">
                 <a href="mecanicien.php " > Mecanicien  </a>
</label>  
            <label   class="ri-user-fill" >
                <a href="client.php"> Customer </a>
            <label>
</div> 
     <form name="form" action="addex.php" method="POST">
       <label for="fullname">USER-Name </label>
        <input type="text" id="fullname" name="fullname" required>

     <label for="passw">Password </label>
         <input type="password" id="passw" name="passw" required>

            <h2 style="color:#2772F6;" > Expert registration </h2>
                                <br>
                                <br>
                                <label for="id">Id:        </label>
                                <input type="  " id="id" name="id" required>
                                <label for="firstname">First Name </label>
                                <input type="text" id="firstname" name="firstname" required>

                                <label for="familyname">Family Name </label>
                                <input type="text" id="familyname" name="familyname" required>

                                <label for="birth">Birth date</label>
                                <input type="date" id="birth" name="birth" required>


                                <label for="eemail">Email </label>
                                <input type="email" id="eemail" name="eemail" pattern="[a-z0-9._%+\-]+@gmail.com">

                                <label for="ephone"> phone number</label>
                                <input type="tel" id="ephone" name="ephone" placeholder="-- -- -- -- --" pattern="[0,5-7]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>

                                <label for="ecity">Full Adress </label>
                                <select style="width:150px;" id="W" name="ecity">
        <option name="ecity"> CITY </option> 
         </select>
         <select style="width:150px;" id="D" name="ereg">
        <option name="ereg"> Region </option> 
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

                                <input type="text" id="estr" name="estr" placeholder="Street" required>
                                <input type="number" id="codep" name="codep" placeholder="Code postal" required>
                                <br>
                                <label for="ssn">Social Security Number </label>
                                <input type="number" id="ssn" name="ssn" required>

                                <label for="icn">Identification Card Number</label>
                                <input type="number" id="icn" name="icn" required>

                                <label for="license">License Number </label>
                                <input type="number" id="license" name="license" required>
                                <br>
                                <label for="ccp">CCP </label>
                                <input type="number" id="ccp" name="ccp" required>


                                <label>Holiday</label>

                                <!--<input type="text" class="form-control" name="ereg" value="<?php echo $ereg; ?>">-->
                                <select style="width:150px;" id="h" name="holiday">
                <option name="holiday"><!--<?php echo $ereg; ?>--></option> 
                 </select>

                                <script>
                                    let holiday = ["Yes", "No"];
                                    let h = document.getElementById("h");
                                    holiday.forEach(function addSpecies(item) {
                                        let option = document.createElement("option");
                                        option.text = item;
                                        option.value = item;
                                        h.appendChild(option);
                                    });
                                </script>
                                <br>
                <button class="ftn" type="submit" onclick="addRow();" name="ADD EXPERT" value="ADD_EXPERT">ADD_EXPERT</button>
           <!-- <div class="col-sm-3 d-grid">
                  <a class="btn btn-outline-primary" href="/home.php" role="button">Cancel</a>
             </div>-->
                               









<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




















                        <div class="f2">
                        <form name="form" action="addex.php" method="POST">
                            <label for="fullname">USER-Name </label>
                            <input type="text" id="fullname" name="fullname" required>

                            <label for="passw">Password </label>
                            <input type="password" id="passw" name="passw" required>
                        </div>
                        <div class="f">
                            

                                <h3> Expert registration </h3>
                                <br>
                                <br>
                                <label for="id">Id:        </label>
                                <input type="  " id="id" name="id" required>
                                <label for="firstname">First Name </label>
                                <input type="text" id="firstname" name="firstname" required>

                                <label for="familyname">Family Name </label>
                                <input type="text" id="familyname" name="familyname" required>

                                <label for="birth">Birth date</label>
                                <input type="date" id="birth" name="birth" required>


                                <label for="eemail">Email </label>
                                <input type="email" id="eemail" name="eemail" pattern="[a-z0-9._%+\-]+@gmail.com">

                                <label for="ephone"> phone number</label>
                                <input type="tel" id="ephone" name="ephone" placeholder="-- -- -- -- --" pattern="[0,5-7]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>

                                <label for="ecity">Full Adress </label>
                                <select style="width:150px;" id="W" name="ecity">
        <option name="ecity"> CITY </option> 
         </select>
                                <select style="width:150px;" id="D" name="ereg">
        <option name="ereg"> Region </option> 
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

                                <input type="text" id="estr" name="estr" placeholder="Street" required>
                                <input type="number" id="codep" name="codep" placeholder="Code postal" required>
                                <br>
                                <label for="ssn">Social Security Number </label>
                                <input type="number" id="ssn" name="ssn" required>

                                <label for="icn">Identification Card Number</label>
                                <input type="number" id="icn" name="icn" required>

                                <label for="license">License Number </label>
                                <input type="number" id="license" name="license" required>
                                <br>
                                <label for="ccp">CCP </label>
                                <input type="number" id="ccp" name="ccp" required>


                                <label>Holiday</label>

                                <!--<input type="text" class="form-control" name="ereg" value="<?php echo $ereg; ?>">-->
                                <select style="width:150px;" id="h" name="holiday">
                <option name="holiday"><!--<?php echo $ereg; ?>--></option> 
                 </select>

                                <script>
                                    let holiday = ["Yes", "No"];
                                    let h = document.getElementById("h");
                                    holiday.forEach(function addSpecies(item) {
                                        let option = document.createElement("option");
                                        option.text = item;
                                        option.value = item;
                                        h.appendChild(option);
                                    });
                                </script>
                                <br>
                                <button class="fbtn" type="submit" onclick="addRow();" name="ADD EXPERT" value="ADD_EXPERT">ADD_EXPERT</button>
                                
                              
                                    <div class="col-sm-3 d-grid">
                                        <a class="btn btn-outline-primary" href="/home.php" role="button">Cancel</a>
                                    </div>
                               

                        </div>

                        <br>


                        </form>
                </section>
                <br>
                <br>






                </body>

    </html>