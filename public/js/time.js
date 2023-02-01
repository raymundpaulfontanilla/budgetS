function display_c() {
    var refresh = 1000;
    mytime = setTimeout("display_ct()", refresh);
}

function display_ct() {
    var x = new Date();
    var localDateString = x.toDateString();
    var localTimeString = x.toLocaleTimeString();
    document.getElementById("ct").innerHTML = localDateString + " " + localTimeString;
    tt = display_c();
}