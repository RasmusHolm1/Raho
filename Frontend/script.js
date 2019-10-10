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

function toggleBtn1() {
    const toggleOnEl = document.getElementById('toggleBoxesBtn1');

    if (toggleOnEl.innerHTML === "See the right way") {
        toggleOnEl.innerHTML = "See the wrong way";
    }
    else {
        toggleOnEl.innerHTML = "See the right way";
    }
}

function toggleBtn2() {
    const toggleOnEl = document.getElementById('toggleBoxesBtn2');

    if (toggleOnEl.innerHTML === "Less animations") {
        toggleOnEl.innerHTML = "More animations";
    }
    else {
        toggleOnEl.innerHTML = "Less animations";
    }

}



function toggleBoxes() {
    const circleRightEl = document.getElementById('changingcircle--right');
    const circleWrongEl = document.getElementById('changingcircle--wrong');

    const circleRightIsExpanded = circleRightEl.classList.contains("changingcircle--expanded")


    if (circleRightIsExpanded) {
        circleRightEl.classList.remove("changingcircle--expanded");
        circleWrongEl.classList.add("changingcircle--expanded");

    } else {
        circleRightEl.classList.add("changingcircle--expanded");
        circleWrongEl.classList.remove("changingcircle--expanded");
    }

}