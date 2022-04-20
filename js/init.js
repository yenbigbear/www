
function checkBrowser(){
    var sys = {};
    var output ={};
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
    
}