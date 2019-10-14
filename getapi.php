<?php


// 1. ange en endpoint (resurs, resource)
//skapa en variabel för din endpoint
$url = "http://localhost/RasmusHolm/backend/projekt/test/uppgiftapi.php";

// 2. hämta data
//metod i PHP file_get_contents - lagra i en variabel.
$json = file_get_contents($url);

// 3. Testa data genom att skriva ut allt på skärmen
// echo "<pre>";
// echo $json;
// echo "</pre>";


// 4. Konvertera JSON till en PHP-Array
$array= json_decode($json, true);
// echo "<pre>";
// print_r($array);
// echo"</pre>";

foreach($array as $key => $value){
    echo "<div class='kort'>";
        echo $value['bild']; //<img src="..." class="card-img-top" alt="...">
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
        echo$value ['lager'];
        echo "</p>";
        echo "</div>";
        echo "</div>";
        echo "<br>";
    
}

$limit = 10; //defaultvärde
if(isset($_GET["limit"])){ // kontrollerar om det finns data i min getrequest 
    $limit = $_GET["limit"]; //50
}





?>