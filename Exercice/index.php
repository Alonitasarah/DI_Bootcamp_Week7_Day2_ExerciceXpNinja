<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  
   <label for="dim">Nombre de colonnes et de rangées :</label>
   <!-- Champ de saisie pour capturer le nombre de colonnes et de lignes -->
   <input type="text" id="dim" name="dim">
 
   <input type="submit" value="Submit">
 </form>
 
 <?php
 // Vérifier si le formulaire a été soumis
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Stocker la valeur du nombre de colonnes et de lignes
   $dim = $_POST["dim"];
   
   // Créer la table
   echo "<table>";
   for ($i = 0; $i < $dim; $i++) {
     echo "<tr>";
     for ($j = 0; $j < $dim; $j++) {
       // Alternance entre les couleurs de fond noir et blanc
       if (($i + $j) % 2 == 0) {
         echo "<td bgcolor='black' width='50' height='50'></td>";
       } else {
         echo "<td bgcolor='white' width='50' height='50'></td>";
       }
     }
     echo "</tr>";
   }
   echo "</table>";
 }
 ?>
</body>
</html>