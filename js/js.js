function doiboxmenu1() {
    document.getElementById("box-km-1").className = "box-menu-active";
    document.getElementById("box-km-2").className = null;
    document.getElementById("box-km-3").className = null;
    document.getElementById("box-km-4").className = null;
    document.getElementById("km-content-1").style = "display:block;";
}

function doiboxmenu2() {
    document.getElementById("box-km-1").className = null;
    document.getElementById("box-km-2").className = "box-menu-active";
    document.getElementById("box-km-3").className = null;
    document.getElementById("box-km-4").className = null;
}

function doiboxmenu3() {
    document.getElementById("box-km-1").className = null;
    document.getElementById("box-km-2").className = null;
    document.getElementById("box-km-3").className = "box-menu-active";
    document.getElementById("box-km-4").className = null;
}

function doiboxmenu4() {
    document.getElementById("box-km-1").className = null;
    document.getElementById("box-km-2").className = null;
    document.getElementById("box-km-3").className = null;
    document.getElementById("box-km-4").className = "box-menu-active";
}
