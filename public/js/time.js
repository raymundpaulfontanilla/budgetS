function display_c() {
    var refresh = 1000;
    mytime = setTimeout("display_ct()", refresh);
}

function display_ct() {
    var x = new Date();
    var localDateString = x.toDateString();
    var localTimeString = x.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    document.getElementById("time").innerHTML = localTimeString;
    document.getElementById("date").innerHTML = localDateString;
    tt = display_c();
}

display_ct();