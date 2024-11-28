<?php
//1) 2)
$etd = array('prenom' => 'Omar', 'nom' => 'Tazi', 'matricule' => 'RBF12');
$etd['note'] = 20; //valeur donner initialement !
echo "<table border='2'>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Matricule</th>
            <th>Note</th>
        </tr>";
        $etd['note'] = 5; //aprés modification !
    echo "<tr>
            <td>{$etd['nom']}</td>
            <td>{$etd['prenom']}</td>
            <td>{$etd['matricule']}</td>
            <td>{$etd['note']}</td>
          </tr></table>";    

          echo "<hr>";

//3)
$prod = array(
'Castrol' => '450 DHS',
'Valeo' => '200 DHS',
'Bosch' => '150 DHS'
);
echo "<table border = 2>
<tr>
<th>Nom</th>
<th>Prix</th>
</tr>";
foreach($prod as $produit => $prix){
    echo "<tr>
    <td>{$produit}</td>
    <td>{$prix}</td>
    </tr>";
}
echo '</table>';
echo '<hr>';

//4)
$not = array(
   'Omar'=> 15,
   'Meryem' => 20, 
   'Yacout' => 18,
   'Moncef' => 17,
   'Mly Hfid' => 16
);
echo "<table border = 2>
<tr><th>Nom</th>
<th>Note</th></tr>";
 $moyenne = array_sum($not) / count($not);
 foreach($not as $notes => $note){
echo "<tr><td>{$notes}</td>
<td>{$note}</td>
</tr>";
}
echo "</table>";
echo "<br> La Moyenne des scores est: " . $moyenne;
echo "<hr>";

//5)
$pa = array(
    'France' => 4641,
    'Espagne' => 100526555,
    'Amerique' => 98842625452166,
);
echo "Tableau avant-tri";
echo "<table border = 2>
<tr><th>Pays</th>
<th>Population</th></tr>";
foreach($pa as $pays => $population)
{
    echo "<tr><td>{$pays}</td>
    <td>{$population}</td></tr>";
}
echo "</table>";
arsort($pa);
echo "<br>";
echo "Tableau aprés-tri";
echo "<table border = 2> 
<tr><th>Pays</th>
<th>Population</th></tr>";
foreach($pa as $pays => $population)
{
    echo "<tr><td>{$pays}</td>
    <td>{$population}</td></tr>";
}
echo "</table>";
echo "<hr>";

//6) 7)
if(isset($_POST["env"]))
{
    $nom = $_POST["name6"];
    $age = $_POST["age6"];
    if($age > 0 && is_numeric($age))
    {
    echo "Bienvenue, " . $nom . " vous avez ". $age. " ans !";
    }
    else 
    echo "ERREUR ! Votre doit etre un entier et doit etre superieur à 0 !"; 
}
echo "<hr>";

//8)
if(isset($_POST["valid"])){
    foreach($_POST["colors"] as $color)
    {
        echo "Votre couleur préférée est: ". $color;
    }
}
echo "<hr>";

//9)
if(isset($_GET["calcul"]))
{
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $somme = $num1 + $num2;
    echo "La somme des 2 nombres est: ". $somme;
}

//10)
if(isset($_POST["submi"]))
{
    foreach($_POST["typ"] as $selection)
    {
        echo "Bienvenue, ".$selection." !";
    }
}
?>