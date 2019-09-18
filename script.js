function myFunction() {
    var x = document.getElementById("main-nav");
    if (x.style.display === "grid") {
        x.style.display = "none";
    } else {
        x.style.display = "grid";
    }

}
function hideFunction() {
    var hide = document.getElementById("box-container");

    if (hide.style.display === "block") {
        hide.style.display = "none";
    } else {
        hide.style.display = "block";
    }
}



function toggleBoxes() {
    const circleRightEl = document.getElementById('changingcircle--right');
    const circleWrongEl = document.getElementById('changingcircle--wrong');

    const circleRightIsExpanded = circleRightEl.classList.contains("changingcircle--expanded")

    //Om vi just nu visar den "korrekta" cirkeln
    if (circleRightIsExpanded) {
        circleRightEl.classList.remove("changingcircle--expanded");
        circleWrongEl.classList.add("changingcircle--expanded");
        // Tänk på att bevara övriga klasser
        //Dölja den korrekta cirkeln
        //Ta bort klassen changingcircle--expanded på rightEl
        //Visa den inkorrekta
        //Lägg till klassen changingcircle--expanded på wrongEl
    } else {
        circleRightEl.classList.add("changingcircle--expanded");
        circleWrongEl.classList.remove("changingcircle--expanded");
    }

}