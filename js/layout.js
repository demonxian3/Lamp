function a(a){
    alert(a);
}

function getCurrentTime(){

    var t = new Date();
    var H = t.getHours()+"";
    var M = t.getMinutes()+"";
    var S = t.getSeconds()+"";
    var y = t.getFullYear();
    var m = t.getMonth()+"";
    var d = t.getDate()+"";

    if(H.length < 2)H = "0"+H;
    if(M.length < 2)M = "0"+M;
    if(S.length < 2)S = "0"+S;
    if(m.length < 2)m = "0"+m;
    if(d.length < 2)d = "0"+d;

    document.getElementById("time").innerHTML = H + ":" + M + ":" + S;
    document.getElementById("date").innerHTML = y + "-" + m + "-" + d;
}

getCurrentTime()
setInterval(getCurrentTime,1000);


