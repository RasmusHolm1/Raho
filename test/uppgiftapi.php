<?php
header("Content-Type: application/json; charset=UTF-8");


$ros=[
    "Produkt"=>"Ros", 
    "Färg"=>"Röd", 
    "Pris"=>"22kr", 
    "Bild"=>"<img src='http://localhost/rasmusholm/backend/projekt/test/bilder/ros.jpg'>", 
    "Beskrivning"=>"Beskrivning"];

$maskros=[
    "Produkt"=>"maskros", 
    "Färg"=>"gul", 
    "Pris"=>"22kr", 
    "Bild"=>"<img src='http://localhost/rasmusholm/backend/projekt/test/bilder/maskros.jpg'>", 
    "Beskrivning"=>"Beskrivning"];

$orkidee=[
    "Produkt"=>"orkidee", 
    "Färg"=>"vit", 
    "Pris"=>"22kr", 
    "Bild"=>"<img src='http://localhost/rasmusholm/backend/projekt/test/bilder/orchids.jpg'>", 
    "Beskrivning"=>"Beskrivning"];

$lilja=[
    "Produkt"=>"Lilja", 
    "Färg"=>"Rosa", 
    "Pris"=>"22kr", 
    "Bild"=>"<img src='http://localhost/rasmusholm/backend/projekt/test/bilder/lily.jpg'>", 
    "Beskrivning"=>"Beskrivning"];

$blaklocka=[
    "Produkt"=>"Blåklocka",
    "Färg"=>"Blå", 
    "Pris"=>"22kr", 
    "Bild"=>"<img src='http://localhost/rasmusholm/backend/projekt/test/bilder/blue-bell.jpg'>", 
    "Beskrivning"=>"Beskrivning"];

$solros=[
    "Produkt"=>"Solros",
    "Färg"=>"Gul", 
    "Pris"=>"12kr", 
    "Bild"=>"<img src='http://localhost/rasmusholm/backend/projekt/test/bilder/solros.jpg'>", 
    "Beskrivning"=>"Beskrivning"];

$vitsippa=[
    "Produkt"=>"Vitsippa",
    "Färg"=>"Vit", 
    "Pris"=>"23kr", 
    "Bild"=>"<img src='http://localhost/rasmusholm/backend/projekt/test/bilder/vitsippa.jpg'>", 
    "Beskrivning"=>"Beskrivning"];

$appletrad=[
    "Produkt"=>"Äppleträd",
    "Färg"=>"Gul", 
    "Pris"=>"12kr", 
    "Bild"=>"<img src='http://localhost/rasmusholm/backend/projekt/test/bilder/apple.jpg'>", 
    "Beskrivning"=>"Beskrivning"];

$vinbarsbuske=[
    "Produkt"=>"Vinbärsbuske",
    "Färg"=>"Grön", 
    "Pris"=>"33kr", 
    "Bild"=>"<img src='http://localhost/rasmusholm/backend/projekt/test/bilder/vinbar.jpg'>", 
    "Beskrivning"=>"Beskrivning"];

$fikontrad=[
    "Produkt"=>"Fikonträd",
    "Färg"=>"Gul", 
    "Pris"=>"44kr", 
    "Bild"=>"<img src='http://localhost/rasmusholm/backend/projekt/test/bilder/fikon.jpg'>", 
    "Beskrivning"=>"Beskrivning"];    


/*
    $limit = 10;
    if(isset($_GET["limit"])){
        $limit = $_GET["limit"]; 
    }

    $names = [];

    
    for($i=0 ; $i<$limit ; $i++):   
        $blommor = array(
            "ros"=> $ros, 
            "maskros" => $maskros, 
            "orkidee"=>$orkidee, 
            "lilja"=>$lilja, 
            "blåklocka"=>$blaklocka,
            "solros"=>$solros, 
            "vitsippa" => $vitsippa, 
            "äppleträd"=>$appletrad, 
            "vinbärsbuske"=>$vinbarsbuske, 
            "fikonträd"=>$fikontrad);

        $names[] = $blommor;

    endfor;*/

$limit = 10; 
if(isset($_GET["limit"])){  
    $limit = $_GET["limit"]; 
}

$blommor =[];   

for($i=0; $i<$limit ; $i++):
    $blommor = array(
        "blommor" => 
        [$ros, 
        $maskros, 
        $orkidee, 
        $lilja, 
        $blaklocka,
        $solros,
        $vitsippa,
        $appletrad,
        $vinbarsbuske,
        $fikontrad
        ]);
endfor;
            
   
    


  
$json = json_encode($blommor, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

echo $json;

?>