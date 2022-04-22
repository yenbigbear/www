
 var cc=[
    {'backgroundColor':'rgba(206,0,0,0.7)','borderColor':'rgba(206,0,0,1)'},  //紅 #CE0000
    {'backgroundColor':'rgba(0,90,181,0.7)','borderColor':'rgba(0,90,181,1)'},  //藍 #005ab5
    {'backgroundColor':'rgba(255,88,9,0.7)','borderColor':'rgba(255,88,9,1)'},  //橘 #ff5809
    {'backgroundColor':'rgba(0,145,0,0.7)','borderColor':'rgba(0,145,0,1)'},  //綠 #009100
    {'backgroundColor':'rgba(134,0,255,0.7)','borderColor':'rgba(134,0,255,1)'},  //紫 #8600ff
    {'backgroundColor':'rgba(234,193,0,0.7)','borderColor':'rgba(234,193,0,1)'},  //黃 #EAC100
    {'backgroundColor':'rgba(0,147,147,0.7)','borderColor':'rgba(0,147,147,1)'},  //青藍色 #009393
    {'backgroundColor':'rgba(240,0,120,0.7)','borderColor':'rgba(240,0,120,1)'},  //桃紅色 #F00078
    {'backgroundColor':'rgba(0,0,121,0.7)','borderColor':'rgba(0,0,121,1)'},  //深藍色 #000079
    {'backgroundColor':'rgba(96,0,0,0.7)','borderColor':'rgba(96,0,0,1)'},  //暗紅色 #600000
    {'backgroundColor':'rgba(39,39,39,0.7)','borderColor':'rgba(39,39,39,1)'},  //灰色 #272727
];

function checkBrowser(){
    var sys = {};
    var ua = navigator.userAgent.toLowerCase();
    var s;
    (s = ua.match(/edge\/([\d.]+)/)) ? sys.edge = s[1] :
    (s = ua.match(/rv:([\d.]+)\) like gecko/)) ? sys.ie = s[1] :
    (s = ua.match(/msie ([\d.]+)/)) ? sys.ie = s[1] :
    (s = ua.match(/firefox\/([\d.]+)/)) ? sys.firefox = s[1] :
    (s = ua.match(/chrome\/([\d.]+)/)) ? sys.chrome = s[1] :
    (s = ua.match(/opera.([\d.]+)/)) ? sys.opera = s[1] :
    (s = ua.match(/version\/([\d.]+).*safari/)) ? sys.safari = s[1] : 0;

    if (sys.edge) return { browser : "Edge", version : sys.edge };
    if (sys.ie) return { browser : "IE", version : sys.ie };
    if (sys.firefox) return { browser : "Firefox", version : sys.firefox };
    if (sys.chrome) return { browser : "Chrome", version : sys.chrome };
    if (sys.opera) return { browser : "Opera", version : sys.opera };
    if (sys.safari) return { browser : "Safari", version : sys.safari };
    return { browser : "", version : "0" };
    
};

