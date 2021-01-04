function doiboxmenu1() {
    document.getElementById("box-km-1").className = "box-menu-active";
    document.getElementById("box-km-2").className = null;
    document.getElementById("box-km-3").className = null;
    document.getElementById("box-km-4").className = null;
    document.getElementById("km-content-1").style = "display:block;";
    document.getElementById("km-content-2").style = "display:none;";
    document.getElementById("km-content-3").style = "display:none;";
    document.getElementById("km-content-4").style = "display:none;";
}

function doiboxmenu2() {
    document.getElementById("box-km-1").className = null;
    document.getElementById("box-km-2").className = "box-menu-active";
    document.getElementById("box-km-3").className = null;
    document.getElementById("box-km-4").className = null;
    document.getElementById("km-content-1").style = "display:none;";
    document.getElementById("km-content-2").style= "display:block;";
    document.getElementById("km-content-3").style = "display:none;";
    document.getElementById("km-content-4").style = "display:none;";
}

function doiboxmenu3() {
    document.getElementById("box-km-1").className = null;
    document.getElementById("box-km-2").className = null;
    document.getElementById("box-km-3").className = "box-menu-active";
    document.getElementById("box-km-4").className = null;
    document.getElementById("km-content-1").style = "display:none;";
    document.getElementById("km-content-2").style= "display:none;";
    document.getElementById("km-content-3").style = "display:block;";
    document.getElementById("km-content-4").style = "display:none;";
}

function doiboxmenu4() {
    document.getElementById("box-km-1").className = null;
    document.getElementById("box-km-2").className = null;
    document.getElementById("box-km-3").className = null;
    document.getElementById("box-km-4").className = "box-menu-active";
    document.getElementById("km-content-1").style = "display:none;";
    document.getElementById("km-content-2").style= "display:none;";
    document.getElementById("km-content-3").style = "display:none;";
    document.getElementById("km-content-4").style = "display:block;";
}

function next(){
    document.getElementById("news-content1").style.transform = 'translateX(295px)';
}

function doiheart1(){
    document.getElementById("heart-1").style = "display:block;";
    document.getElementById("heart-2").style = "display:none;";
}

function doiheart2(){
    document.getElementById("heart-1").style = "display:none;";
    document.getElementById("heart-2").style = "display:block;";
}