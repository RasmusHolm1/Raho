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