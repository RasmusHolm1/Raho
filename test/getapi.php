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

foreach($array ["blommor"] as $key => $value){
    echo "<div class='card'>";
    echo $value['Bild']; //<img src="..." class="card-img-top" alt="...">
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>";
    echo $value['Produkt'];
    echo "</h5>";
    echo "<p class='card-text'>";
    echo $value ['Beskrivning']."<br>";
    echo "<button type='button' class='btn btn-info'>Köp</button>";
    echo "</p>";
    echo "<p class='card-text'><small class='text-muted'>";
    echo $value ['Pris']."<br>" ; 
    echo "</small></p>";
    echo "</div>";
    echo "</div>";
}





?>