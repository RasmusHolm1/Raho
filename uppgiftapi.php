<?php
header("Content-Type: application/json; charset=UTF-8");

$produkt=["Ros", "Maskros", "Orkidee", "Lilja", "Blåklocka", "Solros", "Vitsippa","Äppleträd", "Vinbärsbuske","Fikonträd"];

$pris=["22kr", "12kr", "33kr", "44kr", "55kr", "66kr", "77kr", "88kr", "99kr", "100kr"];

$bild=["<img src='http://localhost/rasmusholm/Backend/Projekt/test/bilder/ros.jpg'>", "<img src='http://localhost/rasmusholm/Backend/Projekt/test/bilder/maskros.jpg'>",
        "<img src='http://localhost/rasmusholm/Backend/Projekt/test/Bilder/orchids.jpg'>", "<img src='http://localhost/rasmusholm/Backend/Projekt/test/bilder/lily.jpg'>", 
        "<img src='http://localhost/rasmusholm/Backend/Projekt/test/bilder/blue-bell.jpg'>", "<img src='http://localhost/rasmusholm/Backend/Projekt/test/bilder/solros.jpg'>", 
        "<img src='http://localhost/rasmusholm/Backend/Projekt/test/bilder/vitsippa.jpg'>", "<img src='http://localhost/rasmusholm/Backend/Projekt/test/bilder/apple.jpg'>",
        "<img src='http://localhost/rasmusholm/Backend/Projekt/test/bilder/vinbar.jpg'>", "<img src='http://localhost/rasmusholm/Backend/Projekt/test/bilder/fikon.jpg'>"];

$beskrivning=["Röd", "Gul", "Rosa", "Orange", "Blå", "Gul", "Vit", "Gul", "Grön", "Gul"];

$limit = 10; 
if(isset($_GET["limit"])){  
    $limit = $_GET["limit"]; 
}

$blommor =[];

for($i=0; $i<$limit ; $i++):
    
    $blomma=array(
        "produkt" => $produkt[$i],
        "pris" => $pris[$i],
        "bild" => $bild[$i],
        "beskrivning"=>$beskrivning[$i],
        "lager" => $randLager =rand(0,50)
    );

    $blommor[]=$blomma;
endfor;
            
$json = json_encode($blommor, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

echo $json;

?>