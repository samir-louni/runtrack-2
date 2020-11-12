<?php 


$connexion = mysqli_connect('localhost:3307', 'root', '', 'jour08');
$requete = mysqli_query($connexion, "SELECT `prenom`,`nom`,`naissance` FROM etudiants WHERE `naissance` BETWEEN '1998-01-01' AND '2018-01-01' ");

$result = mysqli_num_rows($requete);


?>


<table>
 <thead>
  <tr>
    <th>Prenom</th> 
    <th>Nom</th>
    <th>Date de naissance</th>
  </tr>
 </thead>

 <tbody>
<?php 

while($rs = mysqli_fetch_array($requete)){
   
    echo "<tr><td>$rs[prenom]</td>";
    echo "<td>$rs[nom]</td>";
    echo "<td>$rs[naissance]</td></tr>";
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
