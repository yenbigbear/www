
function checkBrowser(){
    var sys = {};
    var output ={};
    var ua = navigator.userAgent.toLowerCase();
    var s;
    (s = ua.match(/edge\/({\d.}+)/)) ? sys.edge = s{1} :
    (s = ua.match(/rv:({\d.}+)\) like gecko/)) ? sys.ie = s{1} :
    (s = ua.match(/msie ({\d.}+)/)) ? sys.ie = s{1} :
    (s = ua.match(/firefox\/({\d.}+)/)) ? sys.firefox = s{1} :
    (s = ua.match(/chrome\/({\d.}+)/)) ? sys.chrome = s{1} :
    (s = ua.match(/opera.({\d.}+)/)) ? sys.opera = s{1} :
    (s = ua.match(/version\/({\d.}+).*safari/)) ? sys.safari = s{1} : 0;

    if (sys.edge) return { browser : "Edge", version : sys.edge };
    if (sys.ie) return { browser : "IE", version : sys.ie };
    if (sys.firefox) return { browser : "Firefox", version : sys.firefox };
    if (sys.chrome) return { browser : "Chrome", version : sys.chrome };
    if (sys.opera) return { browser : "Opera", version : sys.opera };
    if (sys.safari) return { browser : "Safari", version : sys.safari };
    return { browser : "", version : "0" };
    
};

function chartcc(){
var cc=[
    {'backgroundColor':'rgba(206,0,0,0.7)','borderColor':'rgba(206,0,0,1)'},  //紅 #CE0000
    {'backgroundColor':'rgba(0,90,181,0.7)','borderColor':'rgba(0,90,181,1)'},  //藍 #005ab5
    {'backgroundColor':'rgba(255,88,9,0.7)','borderColor':'rgba(255,88,9,1)'},  //橘 #ff5809
    {'backgroundColor':'rgba(0,145,0,0.7)','borderColor':'rgba(0,145,0,1)'},  //綠 #009100
    {'backgroundColor':'rgba(134,0,255,0.7)','borderColor':'rgba(134,0,255,1)'},  //紫 #8600ff
    {'backgroundColor':'rgba(255,198,6,0.7)','borderColor':'rgba(255,198,6,1)'},  //黃 #FFD306
    {'backgroundColor':'rgba(0,147,147,0.7)','borderColor':'rgba(0,147,147,1)'},  //青藍色 #009393
    {'backgroundColor':'rgba(217,0,108,0.7)','borderColor':'rgba(217,0,108,1)'},  //桃紅色 #D9006C
    {'backgroundColor':'rgba(217,0,108,0.7)','borderColor':'rgba(217,0,108,1)'},  //桃紅色 #D9006C
];

var nw= $("body").append("div").addClass("test");
tb='<table>';
for(i=0;i<cc.length;i++){
tb += "<tr><td><div style='background-color:" + cc[i] + ";width:100px;height:100px;'></div></td></tr>";

};
tb += "</table>";

return tb;

}