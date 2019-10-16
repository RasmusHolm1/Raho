<?php
header("Content-Type: application/json; charset=UTF-8");

$produkt=["Ros", "Maskros", "Orkidee", "Lilja", "Blåklocka", "Solros", "Vitsippa","Äppleträd", "Vinbärsbuske","Fikonträd"];

$pris=["22kr", "12kr", "33kr", "44kr", "55kr", "66kr", "77kr", "88kr", "99kr", "100kr"];

$bild=[
    "http://localhost/rasmusholm/Backend/Projekt/StinasVer/bilder/ros.jpg",
    "http://localhost/rasmusholm/Backend/Projekt/StinasVer/bilder/maskros.jpg",
    "http://localhost/rasmusholm/Backend/Projekt/StinasVer/bilder/orchids.jpg",
    "http://localhost/rasmusholm/Backend/Projekt/StinasVer/bilder/lily.jpg", 
    "http://localhost/rasmusholm/Backend/Projekt/StinasVer/bilder/blue-bell.jpg", 
    "http://localhost/rasmusholm/Backend/Projekt/StinasVer/bilder/solros.jpg", 
    "http://localhost/rasmusholm/Backend/Projekt/StinasVer/bilder/vitsippa.jpg", 
    "http://localhost/rasmusholm/Backend/Projekt/StinasVer/bilder/apple.jpg",
    "http://localhost/rasmusholm/Backend/Projekt/StinasVer/bilder/vinbar.jpg",
    "http://localhost/rasmusholm/Backend/Projekt/StinasVer/bilder/fikon.jpg"
   ];
        
$beskrivning=["Röd", "Gul", "Rosa", "Orange", "Blå", "Gul", "Vit", "Gul", "Grön", "Gul"];

$limit = 10; 
if(isset($_GET["limit"])){  
    $limit = $_GET["limit"]; 
    
    if (!filter_var($limit, FILTER_VALIDATE_INT)) {
        echo '{"error": "Integer is not valid"}'; //jsonformat.
        die;
    }
    if($limit > 10){
        echo '{"error": "Limit must be between 1 and 10"}'; //jsonformat.
        die;
    }
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