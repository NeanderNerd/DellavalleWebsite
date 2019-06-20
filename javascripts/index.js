function rC(nam) {
    var tC = document.cookie.split('; ');
    for (var i = tC.length - 1; i>= 0; i--) {
        var x = tC[i].split('=');
        if (nam == x[0]) return unescape(x[1]);
    }
    return '~';
}

function writeCookie(nam,val) {
    document.cookie = nam + '=' + escape(val);
}

function lookupCookie(nam, pg) {
    var val = rC(nam);
    if (val.indexOf('~' + pg + '~') != -1) return false;
    val += pg + '~';
    writeCookie(nam, val);
    return true;
}

function firstTime(cookieName) {
    return lookupCookie('pWrD4jBo', cookieName);
}

function thisPage() {
    var page = location.href.substring(location.href.lastIndexOf('\/') + 1);
    pos = page.indexOf('.');
    if (pos > -1) {
        page = page.substr(0, pos);
    }
    return page;
}

function init() {
    if (firstTime(thisPage())) {
        document.querySelector(".lightbox").classList.remove("closed");
    }
}

init();

lightBoxClose = function() {
    document.querySelector(".lightbox").classList.add("closed");
}