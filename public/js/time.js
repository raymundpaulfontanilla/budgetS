function display_c() {
    var refresh = 1000;
    mytime = setTimeout("display_ct()", refresh);
}

// function display_ct() {
//     var x = new Date();
//     var localDateString = x.toDateString();
//     var localTimeString = x.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
//     document.getElementById("time").innerHTML = localTimeString;
//     document.getElementById("date").innerHTML = localDateString;
//     tt = display_c();
// }

function display_ct() {
    var x = new Date();
    var weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var weekday = weekdays[x.getDay()];
    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var month = months[x.getMonth()];
    var day = x.getDate();
    var year = x.getFullYear();
    var localDateString = weekday + ", " + month + " " + day + " " + year;
    var localTimeString = x.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    document.getElementById("time").innerHTML = localTimeString;
    document.getElementById("date").innerHTML = localDateString;
    tt = display_c();
}

display_ct();