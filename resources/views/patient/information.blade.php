


<html>
    <body>
<form method="" action="">

    <input type="number"  placeholder="taille" name="taille" id="taille"><br><br>
    <input type="number" placeholder="poids" name="poids"  id="poids"><br><br>

    <button  onclick="cal();"> enresidtrer</button><br><br>

    <input type="text" placeholder="imc" name="imc"  id="imc">
    
   
  
</form>
    </body>



    <script>
        function cal () {
          var taille = parseInt(document.getElementById("taille").value);
          var poids =  parseInt(document.getElementById("poids").value);
          var imc =  parseInt(document.getElementById("imc").value);


          document.getElementById("imc").value=taille/poids*2;

        }
    </script>
</html>
