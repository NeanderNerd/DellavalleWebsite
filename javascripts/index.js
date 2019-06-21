lightBoxOpen = function () {
    document.querySelector(".lightbox").classList.remove("closed");
}

function rC(nam) {
    var tC = document.cookie.split('; ');
    for (var i = tC.length - 1; i>= 0; i--) {
        var x = tC[i].split('=');
        if (nam == x[0]) return true;
    }
    return false;
}

function writeCookie(nam,val) {
    document.cookie = nam + '=' + escape(val);
}

function lookupCookie(nam) {
    var val = rC(nam);
    if (val) return false;
    else {
    writeCookie(nam, val);
    return true;
    }
}

function firstTime() {
    return lookupCookie('pWrD4jBo');
}

// function thisPage() {
//     var page = location.href.substring(location.href.lastIndexOf('\/') + 1);
//     pos = page.indexOf('.');
//     if (pos > -1) {
//         page = page.substr(0, pos);
//     }
//     return page;
// }

function init() {
    if (firstTime()) {
        lightBoxOpen()
    }
}

init();

lightBoxClose = function() {
    document.querySelector(".lightbox").classList.add("closed");
}