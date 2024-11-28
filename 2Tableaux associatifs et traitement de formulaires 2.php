<?php
//1) 2)
$emp = array(
    "emp1" => array("nom" => "Omar","poste" => "Ingenieur informatique", "salaire" => 25000),
    "emp2" => array("nom" => "Meryem", "poste" => "RH", "salaire" => 30000),
    "emp3" => array("nom" => "Yacout", "poste" => "Directrice de projet", "salaire" => 12000),
    "emp4"=> array("nom" => "Moncef", "poste" => "Medecin", "salaire" => 50000),
    "emp5" => array("nom" => "Mly Hfid","poste" => "Avocat", "salaire" => 70000)
);
echo "<table border = 2>
<tr><th>Nom</th>
<th>Poste</th>
<th>Salaire</th></tr>";
foreach($emp as $key => $value)
{
    echo "<tr><td>{$value['nom']}</td>
    <td>{$value['poste']}</td>
    <td>{$value['salaire']}</td></tr>";
}
echo "</table><br>";
function moyenne($emp)
{
    $s = 0;
    $m = 0;
    foreach($emp as $key => $value)
    {
        $s = $s + $value["salaire"];
    }
    $m = $s / 5;
    echo "Le salaire moyen des employes est: ".$m;
}
moyenne($emp);
echo "<hr>";

// 2)
if(isset($_POST["recherche"]))
{
    $found = false;
    foreach($emp as $emp)
    {
    if($_POST["name2"] == $emp["nom"])
    {
    echo "Nom : ".$emp["nom"]."<br>";
    echo "Poste : ".$emp["poste"]."<br>";
    echo "Salaire : ".$emp["salaire"]."DHS"."<br>";
    $found = true;
    }
    }
if(!$found){
    echo "nom introuvable";
}
}
echo "<hr>";

//3)
$util = array(
    "util1" => array("email" => "omartazi@gmail.com", "password" => "ot741852"),
    "util2" =>array("email" => "meryemerragragui@gmail.com", "password" => "me741852"),
    "util3" =>array("email" => "yacouttazi@gmail.com", "password" => "yt741852"),
    "util4" =>array("email" => "monceftazi@gmail.com", "password" => "mt741852")
);
if(isset($_POST["mail"]) && ($_POST["passwd"])){
    $f = false;
    foreach($util as $v)
    {
        if($_POST["mail"] == $v["email"] && $_POST["passwd"] == $v["password"])
        {
             echo "Connexion reussi !";
             $f = true;
        } 
    }
   if(!$f)   
   echo "Email ou Mot de passe invalide !";
 }
 echo "<hr>";

//4)
$pan = array(
    "p1" => array("nom" => "Castrol", "prix" => 500),
    "p2" => array("nom" => "Valéo", "prix" => 150),
    "p3" => array("nom" => "Bosch", "prix" => 300)
);
echo "<table border = 2>
<tr><th>Nom</th>
<th>Prix Unitaire</th></tr>";
foreach($pan as $k => $v)
{
    echo "<tr><td>{$v["nom"]}</td>
    <td>{$v["prix"]}</td></tr>";
}
echo "</table><br>";
if(isset($_POST["valid"]))
{
function total($pan)
{
    $t = 0;
    $prdnam = $_POST["prdname"];
    $prdqt = $_POST["prdqt"];
    foreach($prdnam as $prdnam)
    {
    foreach($pan as $v)
    {
        if($prdnam == $v["nom"] && is_numeric($_POST["prdqt"]) && $_POST["prdqt"] > 0) 
        $t = $v["prix"] * $prdqt;
    }
}
    echo "Le total de votre panier est: ". $t;
}
total($pan);
}
echo "<hr>";

//5)
if(isset($_POST["com"]))
{
    $nom = $_POST["name4"];
    $comm = $_POST["comment"];
    $hor = date("Y-m-d H:i:s");
    $com = [
         "nom"=>$nom , "commentaire"=>$comm , "horodatage"=>$hor 
    ];
 echo "Nom :". " " .$com["nom"]."."."<br>";
 echo "Commentaire :" ." ".$com["commentaire"].".". "<br>";
 echo "Horodatage :" ." ".$com["horodatage"]."."."<br>";
}
echo "<hr>";

//6)
$tab =[
    ["ville"=>"Rabat" , "temperature"=>26],
    ["ville"=>"Madrid" , "temperature"=>30],
    ["ville"=>"Chicago" , "temperature"=>5],
    ["ville"=>"Paris" , "temperature"=>10]
    ];
    echo "<table border=1>";
    echo "<tr><th>Ville</th><th>Temperature</th></tr>";
    foreach($tab as $k=>$v)
    {
        echo "<tr>";
        echo "<td>".$v["ville"]."</td>";
        echo "<td>".$v["temperature"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    function temp($tab)
    {
        $maxtemp = 0;
        $maxville ="";
        foreach($tab as $k=>$v){
            if($maxtemp < $v["temperature"]){
                $maxtemp =  $v["temperature"];
                $maxville = $v["ville"];
            }
        }
        echo "<br>";
        echo "La ville qui a la temperature la plus élevee est : <br> $maxville avec une température qui atteint les $maxtemp °C.";
    }
    temp($tab);
    echo "<hr>";

    //7)
    if (isset($_POST["sub"])) {
        if (!empty($_FILES["fichier"]["tmp_name"])) {
            $file = $_FILES["fichier"]["tmp_name"];
            $f = fopen($file, "r");
    
            if ($f !== false) {
                echo "<table border=1>";
                echo "<tr><th>Nom produit</th><th>Quantite</th><th>Prix</th></tr>";
    
                while (($data = fgetcsv($f, 1000, ",")) !== false) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($data[0]) . "</td>";
                    echo "<td>" . htmlspecialchars($data[1]) . "</td>";
                    echo "<td>" . htmlspecialchars($data[2]) . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                fclose($f);
            } else {
                echo "Erreur : Impossible d'ouvrir le fichier.";
            }
        } else {
            echo "Erreur : Aucun fichier selectionne.";
        }
    }
    echo "<hr>";

    //8)
   $prdmo = array(
    "p1" => array("nom" => "Castrol", "prix" => 500),
    "p2" => array("nom" => "Valéo", "prix" => 150),
    "p3" => array("nom" => "Bosch", "prix" => 300),
    "p4" => array("nom" => "Delphi", "prix" => 700),
    "p5" => array("nom" => "Siemens", "prix" => 1300),
    "p6" => array("nom" => "Lg", "prix" => 2500)
   );
   $total8 = 0;
    if(isset($_POST["p"]))
    {
        if(isset($_POST["products"])){
            $product = $_POST["products"];
            foreach($product as $product){
                echo $product;
                echo "<br>";
                foreach($prdmo as $prdm)
                {
                if($product == $prdm["nom"])
                $total8 = $total8 + $prdm["prix"];
        }
    }
        }else{
            echo "Aucun produit sélectionné.";
        }
        echo "Le total des produits est: ".$total8;
    }
    echo "<hr>";
   
    //9)
    $etd = array(
        "e1"=>array("nom"=>"Meryem" , "matieres"=>array("javascript"=>19 , "php"=>18 , "sql"=>20 , "html"=>20)),
        "e2"=>array("nom"=>"Omar" , "matieres"=>array("javascript"=>20 , "php"=>15 , "sql"=>18 , "html"=>18)),
        "e3"=>array("nom"=>"Moncef" , "matieres"=>array("javascript"=>15 , "php"=>12 , "sql"=>13 , "html"=>17))
    );
    echo "<table border=1>";
    echo "<tr><th>Nom</th><th>JavaScript</th><th>PHP</th><th>SQL</th><th>HTML</th><th>Moyenne</th></tr>";
    foreach($etd as $k=>$v)
    {
        echo "<tr>";
        echo "<td>".$v["nom"]."</td>";
        foreach ($v["matieres"] as $matiere => $mark) {
            echo "<td>".$mark."</td>";
        }
            $moyenne = array_sum($v["matieres"]) / count($v["matieres"]);
            echo "<td>".number_format($moyenne, 2)."</td>"; 
            echo "</tr>";
        }
    echo "</table>";
    echo "<hr>";

    //10)
    $ut =  [
        ["nom"=>"Omar"],
        ["nom"=>"Meryem"],
        ["nom"=>"Moncef"],
        ["nom"=>"Mly Hfid"],
        ["nom"=>"Yacout"],
        ["nom"=>"Lina"],
        ["nom"=>"laila"]
    ];
    
    if (isset($_POST["ajouter"])) {
        $nom = $_POST["n"];
            $ut[] = ["nom" => $nom];
    }
    if (isset($_POST["modifier"])) {
        $nom = $_POST["n"];
        $nouveauNom = $_POST["nouveau_nom"];
        foreach ($ut as $k => $v) {
            if ($v["nom"] == $nom) {
                $ut[$k]["nom"] = $nouveauNom; 
            }
        }
    }
    
    if (isset($_POST["supprimer"])) {
        $nom = $_POST["n"];
        foreach ($ut as $k => $v) {
            if ($v["nom"] == $nom) {
                unset($ut[$k]);
            }
        }
    }
    
    echo "<table border=1>";
    echo "<tr><th>Nom</th></tr>";
    foreach ($ut as $k => $v) {
        echo "<tr><td>" . $v["nom"] . "</td></tr>";
    }
    echo "</table>";
?>