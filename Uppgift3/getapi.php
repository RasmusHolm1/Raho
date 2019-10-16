<?php
// 1. ange en endpoint (resurs, resource)
//skapa en variabel för din endpoint
$limit = 10; 

if(isset($_GET['limit'])) {

    $getlimit = htmlspecialchars($_GET['limit']);
    if (!is_numeric($getlimit)) {
        echo "error: $getlimit ej giltigt - använd 1-10"; //jsonformat.
        return;
    }
    if($getlimit <1 || $getlimit >10){
        echo ("Error: min 1 - max 10");
        return;
    }

    echo "Visar: ". $getlimit . " produkter.";
        $link ="http://localhost/rasmusholm/Backend/Projekt/StinasVer/uppgiftapi.php?limit=";
        $url = $link.=$getlimit;
    echo "<br>";
    } 
    else
    $url = "http://localhost/rasmusholm/Backend/Projekt/StinasVer/uppgiftapi.php";

// 2. hämta data
//metod i PHP file_get_contents - lagra i en variabel.
$json = file_get_contents($url);
// 4. Konvertera JSON till en PHP-Array
$array= json_decode($json, true);

echo "<div class='visa'>";
foreach($array as $key => $value){
    echo "<div class='kort'>";
        echo "<img src=".$value['bild'].">";
        echo "<div class='kort-body'>";
        echo "<h5 class='kort-title'>";
        echo $value['produkt'];
        echo "</h5>";
        echo "<p class='kort-text'>";
        echo $value ['beskrivning']."<br>";
        echo '<br>';
        echo $value ['pris']."<br>" ; 
        echo "</p>";
        echo "<button type='button' class='btn btn-info'>Köp</button>";
        echo "<p class='kort-text'>";
        echo '<br>';
        echo "Kvar i lager: " . $value ['lager'];
        echo "</p>";
        echo "</div>";
        echo "</div>";
        echo "<br>";
}
echo "</div>";
?>