<?php 


$connexion = mysqli_connect('localhost:3307', 'root', '', 'jour08');
$requete = mysqli_query($connexion, "SELECT * FROM `etudiants` WHERE `naissance` > '2002-11-10'");

$result = mysqli_num_rows($requete);


?>

<table>
 <thead>
  <tr>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Naissance</th>
    <th>Sexe</th>
    <th>E-mail</th>
  </tr>
 </thead>

 <tbody>
<?php 

while($rs = mysqli_fetch_array($requete)){
   
    echo "<tr><td>$rs[nom]</td>";
    echo "<td>$rs[prenom]</td>";
    echo "<td>$rs[naissance]</td>";
    echo "<td>$rs[sexe]</td>";
    echo "<<td>$rs[email]</td></tr>";
}


?>

 </tbody>

</table>



  <style type="text/css">
table {
border: medium solid #6495ed;
border-collapse: collapse;
width: 50%;
}
th {
font-family: Arial;
border: thin solid #6495ed;
width: 50%;
padding: 10px;
background-color: #D0E3FA;

}
td {
font-family: sans-serif;
border: thin solid #6495ed;
width: 70%;
padding: 8px;
text-align: center;
background-color: #ffffff;
}

 </style>