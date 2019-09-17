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

    if (hide.style.display === "none") {
        hide.style.display = "block";
    } else {
        hide.style.display = "none";
    }
}


function toggleBoxes() {
    const circleRightEl = documnent.getElementById('changingcircle--right');
    const circleWrongEl = documnent.getElementById('changingcircle--wrong');

    const circleRightIsExpanded = circleRightEl.className.search('changing-circle--expanded');

    // truthy and falsy

    if (circleRightIsExpanded) {
        //  ...expandCircleWrong
        //  ...hideCircleRight
    } else {

    }

}