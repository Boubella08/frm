<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire d'inscription d'un employé</title>
   <style>


   </style>
  </head>
  <body>


    <!-- <script>
      var today = new Date();
  var day = today.getDay();
  var daylist = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];
  console.log("Today is : " + daylist[day] + ".");
  var hour = today.getHours();
  var minute = today.getMinutes();
  var second = today.getSeconds();
  var prepand = (hour >= 12)? " PM ":" AM ";
  hour = (hour >= 12)? hour - 12: hour;
  if (hour===0 && prepand===' PM ') 
  { 
  if (minute===0 && second===0)
  { 
  hour=12;
  prepand=' Noon';
  } 
  else
  { 
  hour=12;
  prepand=' PM';
  } 
  } 
  if (hour===0 && prepand===' AM ') 
  { 
  if (minute===0 && second===0)
  { 
  hour=12;
  prepand=' Midnight';
  } 
  else
  { 
  hour=12;
  prepand=' AM';
  } 
  } 
document.write("Current Time : "+hour + prepand + " : " + minute + " : " + second);
    </script> -->


    
    <h1>Formulaire d'inscription d'un employé</h1>
    <form action="submit.php" method="POST">



      <div class="mp">
      <label for="matricule">Matricule :</label>
      <input type="text" class="input_field" id="matricule" name="matricule" required><br><br>

      <label for="nom" >Nom :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" class="input_field" id="nom" name="nom"placeholder="Saisie votre nom" required><br><br>

      <label for="prenom">Prénom :</label>&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" class="input_field" id="prenom" name="prenom" placeholder="Saisie votre prenom" required><br><br>

      <label for="adresse">Adresse :</label>&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" class="input_field" id="adresse" name="adresse" placeholder="Saisie votre adresse" required><br><br>

      <label for="ville">Ville :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" class="input_field" class="input_field" id="ville" name="ville" placeholder="Saisie votre ville" required><br><br>

      <label for="N_Cin"> CIN :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" class="input_field"  id="N_Cin" name="N_Cin" placeholder="BK 000000" required><br><br>

      <label for="N_Cnss">N CNSS :</label>&nbsp;&nbsp;&nbsp;
      <input type="text" id="N_Cnss"  class="input_field" name="N_Cnss" required>
    </div>


 
</div>





<div class="m">

      <label for="N_mutuel">Numéro de mutuelle :</label>&nbsp;&nbsp;
      <input type="text" id="N_mutuel" class="input_field" name="N_mutuel" required><br><br>

      <label for="N_Cimr">Numéro CIMR :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="N_Cimr" class="input_field" name="N_Cimr" required><br><br>

      <label for="compte_bancaire">Compte bancaire :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="compte_bancaire" class="input_field" name="compte_bancaire" placeholder="0000 0000 0000 0000" required><br><br>

      <label for="agence_bancaire">Agence bancaire :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="agence_bancaire" class="input_field" name="agence_bancaire" placeholder="Saisie votre agence" required><br><br>

      <label for="date_entree">Date d'entrée :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="date" id="date_entree" class="input_field" name="date_entree" required><br><br>

      <label for="salaire">Salaire :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="number" id="salaire" class="input_field" name="salaire" placeholder="MAD" required><br><br>

      <label for="mode_paiement">Mode de paiement :</label> &nbsp;&nbsp;
      <select id="mode_paiement" class="input_field" name="mode_paiement" placeholder="cheque/espece/virement" required><br><br>
        <option value="Cheque" >Chèque</option>
        <option value="Virement" >Virement</option>
        <option value="Espece" >Espèces</option>
      </select><br><br>

      <input type="submit" id="button" value="Envoyer"> <br><br><br><br><br>



    </form>
  </div>
       






    









    <style>




      #button {
        appearance: none;
        background-color: transparent;
        border: 0.125em solid #1A1A1A;
        border-radius: 0.9375em;
        box-sizing: border-box;
        color: #3B3B3B;
        cursor: pointer;
        display: inline-block;
        font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
        font-size: 13px;
        font-weight: 600;
        line-height: normal;
        margin: 0;
        min-height: 3.75em;
        min-width: 0;
        outline: none;
        margin-top: 3%;
        padding: 1em 2.3em;
        text-align: center;
        text-decoration: none;
        transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        will-change: transform;
       }
       
       #button:disabled {
        pointer-events: none;
       }
       
       #button:hover {
        color: #fff;
        background-color: #1A1A1A;
        box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
        transform: translateY(-2px);
       }
       
       #button:active {
        box-shadow: none;
        transform: translateY(0);
       }

.mp{
  margin-bottom: 5%;
  float: left;
  margin-left: 3%;
  margin-right: 4%

}




      .modal {
        width: fit-content;
        height: fit-content;
        background: #FFFFFF;
        box-shadow: 0px 187px 75px rgba(0, 0, 0, 0.01), 0px 105px 63px rgba(0, 0, 0, 0.05), 0px 47px 47px rgba(0, 0, 0, 0.09), 0px 12px 26px rgba(0, 0, 0, 0.1), 0px 0px 0px rgba(0, 0, 0, 0.1);
        border-radius: 26px;
        max-width: 450px;
      }
      
      .form {
        display: flex;
        flex-direction: column;
        gap: 20px;
        padding: 20px;
      }
      
      .payment--options {
        width: calc(100% - 40px);
        display: grid;
        grid-template-columns: 33% 34% 33%;
        gap: 20px;
        padding: 10px;
      }
      
      .payment--options button {
        height: 55px;
        background: #F2F2F2;
        border-radius: 11px;
        padding: 0;
        border: 0;
        outline: none;
      }
      
      .payment--options button svg {
        height: 18px;
      }
      
      .payment--options button:last-child svg {
        height: 22px;
      }
      
      .separator {
        width: calc(100% - 20px);
        display: grid;
        grid-template-columns: 1fr 2fr 1fr;
        gap: 10px;
        color: #8B8E98;
        margin: 0 10px;
      }
      
      .separator > p {
        word-break: keep-all;
        display: block;
        text-align: center;
        font-weight: 600;
        font-size: 11px;
        margin: auto;
      }
      
      .separator .line {
        display: inline-block;
        width: 100%;
        height: 1px;
        border: 0;
        background-color: #e8e8e8;
        margin: auto;
      }
      
      .credit-card-info--form {
        display: flex;
        flex-direction: column;
        gap: 15px;
      }
      
      .input_container {
        width: 100%;
        height: fit-content;
        display: flex;
        flex-direction: column;
        gap: 5px;
      }
      
      .split {
        display: grid;
        grid-template-columns: 4fr 2fr;
        gap: 15px;
      }
      
      .split input {
        width: 100%;
      }
      
      .input_label {
        font-size: 10px;
        color: #8B8E98;
        font-weight: 600;
      }
      
      .input_field {
        width: auto;
        height: 40px;
        padding: 0 0 0 16px;
        border-radius: 9px;
        outline: none;
        background-color: #F2F2F2;
        border: 1px solid #e5e5e500;
        transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
      }
      
      .input_field:focus {
        border: 1px solid transparent;
        box-shadow: 0px 0px 0px 2px #242424;
        background-color: transparent;
      }
      
      .purchase--btn {
        height: 55px;
        background: #F2F2F2;
        border-radius: 11px;
        border: 0;
        outline: none;
        color: #ffffff;
        font-size: 13px;
        font-weight: 700;
        background: linear-gradient(180deg, #363636 0%, #1B1B1B 50%, #000000 100%);
        box-shadow: 0px 0px 0px 0px #FFFFFF, 0px 0px 0px 0px #000000;
        transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
      }
      
      .purchase--btn:hover {
        box-shadow: 0px 0px 0px 2px #FFFFFF, 0px 0px 0px 4px #0000003a;
      }
      
      /* Reset input number styles */
      .input_field::-webkit-outer-spin-button,
      .input_field::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      
      
    </style>
  </body>
</html>