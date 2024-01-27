<?php
include("connexion.php");
?>

    <!DOCTYPE html>

    <html lang="en" dir="ltr">

    <hea d>
        <meta charset="utf-8">
        <title>ADD MECANICIEN</title>
        <meta name="viewport" content="width=dvice-width, intial-scale=1.0">
        <link rel="stylesheet" href="cssFILES/sttyle.css">
        <link rel="stylesheet" href="cssFILES/fati.css">
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
            <label  href="expert.php" class="ri-user-star-line" >
                 <a href="expert.php">Expert  </a>
             </label>
            <label  href="mecanicien.php " class="ri-football-fill" class="active " color="blue">
                 <a href="mecanicien.php "> Mecanicien  </a>
              </label>  
            <label href="client.php"  class="ri-user-fill" >
                <a href="client.php" > Customer </a>
            <label>
</div> 
                       
                        <form name="form" action="addmecanic.php" method="POST">
                            <label for="musername">USER-Name </label>
                            <input type="text" id="musername" name="musername" required>

                            <label for="mpassw">Password </label>
                            <input type="password" id="mpassw" name="mpassw" required>
                       
                                                    

                                <h2 style="color:#2772F6;"> NEW Mecanicien </h2>
                                <br>
                                <br>
                                <label for="mid">Id:        </label>
                                <input type="number" id="mid" name="mid" required>
                                <label for="mfirstname">First Name </label>
                                <input type="text" id="mfirstname" name="mfirstname" required>

                                <label for="mfamilyname">Family Name </label>
                                <input type="text" id="mfamilyname" name="mfamilyname" required>

                                <label for="mbirth">Birth date</label>
                                <input type="date" id="mbirth" name="mbirth" required>


                                <label for="memail">Email </label>
                                <input type="email" id="memail" name="memail" pattern="[a-z0-9._%+\-]+@gmail.com">

                                <label for="mphone"> phone number</label>
                                <input type="tel" id="mphone" name="mphone" placeholder="-- -- -- -- --" pattern="[0,5-7]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>

                                <label for="mcity">Full Adress </label>
                                <select style="width:150px;" id="W" name="mcity">
        <option name="mcity"> CITY </option> 
         </select>
                                <select style="width:150px;" id="D" name="mreg">
        <option name="mreg"> Region </option> 
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

                                <input type="text" id="mstr" name="mstr" placeholder="Street" required>
                                <input type="number" id="mcodep" name="mcodep" placeholder="Code postal" required>
                                <br>
                                <label for="menc">Social Security Number</label>
                                <input type="number" id="menc" name="menc" required>

                                <label for="medc">Identification Card Number</label>
                                <input type="number" id="medc" name="medc" required>

                                <label for="meln">License Number </label>
                                <input type="number" id="meln" name="meln" required>
                                <br>
                                <label for="mccp">CCP </label>
                                <input type="number" id="mccp" name="mccp" required>


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
                                <br> <br>
                                <button class="tn" type="submit" onclick="addRow();" name="ADD MECANICIEN" value="ADD_MECANICIEN">ADD_MECANICIEN</button>                                                       
                        <!--       <button type="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-outline-primary" href="/home.php" role="button">Cancel</a>
                                -->

                        

                        <br>


                        </form>
                </section>
                <br>
                <br>



     </body>

    </html>