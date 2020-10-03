
<?php
if (isset($_POST['login'])) 

{

  include("database.php");
$email=$_POST['email'];
$password=$_POST['password'];


$email=stripcslashes($email);
$email=mysqli_real_escape_string($conn,$email);

$password=stripcslashes($password);
$password=mysqli_real_escape_string($conn,$password);
 
if($email==""){
  echo "<script>alert('enter email')</script>";
}
if($password==""){
  echo "<script>alert('enter password')</script>";
}

else
{
  $query="select * from user_login where email='$email'  AND password='$password' ";
  $run=(mysqli_query($conn,$query)) or die (mysqli_error($conn));
  
  if(mysqli_num_rows($run)>0){
    session_start();
  	$_SESSION["email"] =$_POST['email'];
   	 if($row = $run->fetch_assoc()) {
   	   $_SESSION["userid"] = $row["id"];
   	  }
   	 
   
 echo "<script>window.open('index.php','_self')</script>";
  }
  else

    echo "<script>alert('invalid credential')</script>";
    echo "<script>window.open('login.php','_self')</script>";
}

  
}


?>
<!DOCTYPE html>
<html>
<head>
    <title> DAMAK | home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all"><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<link rel="stylesheet" href="css/owl.carousel.min.css">

 <link rel="stylesheet" type="text/css" href="css/slider.css">
  <link rel="stylesheet" href="css/shop1.css" type="text/css" />
      <!--flexs slider-->
   <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
      <!--flexs slider-->
      <link href="css/JiSlider.css" rel="stylesheet">   
      <!--Shoping cart-->
      
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="css/st.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<style type="text/css">
    .owl-item{
      width: 181px; margin-right: 14px;
    }
    @media(max-width:800px){
 .cloned {
      width: 170px;
       margin-right: 4px;

    }
  }
  
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 15px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: #fff;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 0px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
  </style>
          <script>
    var BASE_URL = 'index.html';
    var require = {
        "baseUrl": "https://www.reeds.com/pub/static/frontend/BlueAcorn/rds/en_US"
    };
</script>
        <meta charset="utf-8"/><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VQEAVFdWCxABUlBaBAMCXlI=",licenseKey:"08bb212b3e",applicationID:"161832586"};window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(21),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,s){try{p?p-=1:o(s||new UncaughtException(t,n,e),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t,n){var e=n?null:c.now();i("err",[t,e])}var i=t("handle"),a=t(22),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(9),t(8),"addEventListener"in window&&t(5),c.xhrWrappable&&t(10),d=!0)}s.on("fn-start",function(t,n,e){d&&(p+=1)}),s.on("fn-err",function(t,n,e){d&&!e[l]&&(f(e,l,function(){return!0}),this.thrown=!0,o(e))}),s.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(9),s=t(8),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",g="pushState",y=t("loader");y.features.stn=!0,t(7),"addEventListener"in window&&t(5);var x=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof x&&(this.bstStart=y.now())}),o.on(w,function(t,n){var e=t[0];e instanceof x&&i("bst",[e,n,this.bstStart,y.now()])}),a.on(m,function(t,n,e){this.bstStart=y.now(),this.bstType=e}),a.on(w,function(t,n){i(v,[n,this.bstStart,y.now(),this.bstType])}),s.on(m,function(){this.bstStart=y.now()}),s.on(w,function(t,n){i(v,[n,this.bstStart,y.now(),"requestAnimationFrame"])}),o.on(g+p,function(t){this.time=y.now(),this.startPath=location.pathname+location.hash}),o.on(g+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t("wrap-function")(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){function r(t,n,e){var r=t[n];"function"==typeof r&&(t[n]=function(){var t=i(arguments),n={};o.emit(e+"before-start",[t],n);var a;n[m]&&n[m].dt&&(a=n[m].dt);var s=r.apply(this,t);return o.emit(e+"start",[t,a],s),s.then(function(t){return o.emit(e+"end",[null,t],s),t},function(t){throw o.emit(e+"end",[t],s),t})})}var o=t("ee").get("fetch"),i=t(22),a=t(21);n.exports=o;var s=window,c="fetch-",f=c+"body-",u=["arrayBuffer","blob","json","text","formData"],d=s.Request,l=s.Response,p=s.fetch,h="prototype",m="nr@context";d&&l&&p&&(a(u,function(t,n){r(d[h],n,f),r(l[h],n,f)}),r(s,"fetch",c),o.on(c+"end",function(t,n){var e=this;if(n){var r=n.headers.get("content-length");null!==r&&(e.rxSize=r),o.emit(c+"done",[null,n],e)}else o.emit(c+"done",[t],e)}))},{}],7:[function(t,n,e){var r=t("ee").get("history"),o=t("wrap-function")(r);n.exports=r;var i=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;i&&i.pushState&&i.replaceState&&(a=i),o.inPlace(a,["pushState","replaceState"],"-")},{}],8:[function(t,n,e){var r=t("ee").get("raf"),o=t("wrap-function")(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],9:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t("wrap-function")(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],10:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,g,"fn-",s)}function i(t){y.push(t),h&&(b?b.then(a):w?w(a):(E=-E,O.data=E))}function a(){for(var t=0;t<y.length;t++)r([],y[t]);y.length&&(y=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t("wrap-function")(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",g=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],y=[];n.exports=u;var x=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(v,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,x),x.prototype=p.prototype,d.inPlace(x.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!w&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],11:[function(t,n,e){function r(t){if(!i(t))return null;var n=window.NREUM;if(!n.loader_config)return null;var e=(n.loader_config.accountID||"").toString()||null,r=(n.loader_config.agentID||"").toString()||null,s=(n.loader_config.trustKey||"").toString()||null;if(!e||!r)return null;var c=a.generateCatId(),f=a.generateCatId(),u=Date.now(),d=o(c,f,u,e,r,s);return{header:d,guid:c,traceId:f,timestamp:u}}function o(t,n,e,r,o,i){var a="btoa"in window&&"function"==typeof window.btoa;if(!a)return null;var s={v:[0,1],d:{ty:"Browser",ac:r,ap:o,id:t,tr:n,ti:e}};return i&&r!==i&&(s.d.tk=i),btoa(JSON.stringify(s))}function i(t){var n=!1,e=!1,r={};if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(r=NREUM.init.distributed_tracing,e=!!r.enabled),e)if(t.sameOrigin)n=!0;else if(r.allowed_origins instanceof Array)for(var o=0;o<r.allowed_origins.length;o++){var i=s(r.allowed_origins[o]);if(t.hostname===i.hostname&&t.protocol===i.protocol&&t.port===i.port){n=!0;break}}return e&&n}var a=t(19),s=t(13);n.exports={generateTracePayload:r,shouldGenerateTrace:i}},{}],12:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<l;r++)t.removeEventListener(d[r],this.listener,!1);n.aborted||(e.duration=a.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==n.status&&(n.status=0):i(this,t),e.cbTime=this.cbTime,u.emit("xhr-done",[t],t),s("xhr",[n,e,this.startTime]))}}function o(t,n){var e=c(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.parsedOrigin=c(n),t.sameOrigin=t.parsedOrigin.sameOrigin}function i(t,n){t.params.status=n.status;var e=w(n,t.lastSize);if(e&&(t.metrics.rxSize=e),t.sameOrigin){var r=n.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(13),f=t(11).generateTracePayload,u=t("ee"),d=["load","error","abort","timeout"],l=d.length,p=t("id"),h=t(17),m=t(16),w=t(14),v=window.XMLHttpRequest;a.features.xhr=!0,t(10),t(6),u.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,n.loadCaptureCalled=!1,t.addEventListener("load",function(e){i(n,t)},!1),h&&(h>34||h<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),u.on("open-xhr-start",function(t){this.params={method:t[0]},o(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var e=f(this.parsedOrigin);e&&e.header&&(n.setRequestHeader("newrelic",e.header),this.dt=e)}),u.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=m(r);i&&(e.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"!==t.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}};for(var s=0;s<l;s++)n.addEventListener(d[s],this.listener,!1)}),u.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),u.on("xhr-load-added",function(t,n){var e=""+p(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,n){var e=""+p(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),u.on("addEventListener-end",function(t,n){n instanceof v&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],n)}),u.on("removeEventListener-end",function(t,n){n instanceof v&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],n)}),u.on("fn-start",function(t,n,e){n instanceof v&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),u.on("fn-end",function(t,n){this.xhrCbStart&&u.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,n],n)}),u.on("fetch-before-start",function(t){var n,e=t[1]||{};"string"==typeof t[0]?n=t[0]:t[0]&&t[0].url&&(n=t[0].url),n&&(this.parsedOrigin=c(n),this.sameOrigin=this.parsedOrigin.sameOrigin);var r=f(this.parsedOrigin);if(r&&r.header){var o=r.header;if("string"==typeof t[0]){var i={};for(var a in e)i[a]=e[a];i.headers=new Headers(e.headers||{}),i.headers.set("newrelic",o),this.dt=r,t.length>1?t[1]=i:t.push(i)}else t[0]&&t[0].headers&&(t[0].headers.append("newrelic",o),this.dt=r)}})}},{}],13:[function(t,n,e){var r={};n.exports=function(t){if(t in r)return r[t];var n=document.createElement("a"),e=window.location,o={};n.href=t,o.port=n.port;var i=n.href.split("://");!o.port&&i[1]&&(o.port=i[1].split("index.html")[0].split("@").pop().split(":")[1]),o.port&&"0"!==o.port||(o.port="https"===i[0]?"443":"80"),o.hostname=n.hostname||e.hostname,o.pathname=n.pathname,o.protocol=i[0],"/"!==o.pathname.charAt(0)&&(o.pathname="/"+o.pathname);var a=!n.protocol||":"===n.protocol||n.protocol===e.protocol,s=n.hostname===document.domain&&n.port===e.port;return o.sameOrigin=a&&(!n.hostname||s),"/"===o.pathname&&(r[t]=o),o}},{}],14:[function(t,n,e){function r(t,n){var e=t.responseType;return"json"===e&&null!==n?n:"arraybuffer"===e||"blob"===e||"json"===e?o(t.response):"text"===e||"document"===e||""===e||void 0===e?o(t.responseText):void 0}var o=t(16);n.exports=r},{}],15:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(21),s=t(22),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],e),t}finally{c.emit("fn-end",[f.now()],e)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t,n){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now(),!1,n])}},{}],16:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],17:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],18:[function(t,n,e){function r(t,n){var e=t.getEntries();e.forEach(function(t){"first-paint"===t.name?c("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&c("timing",["fcp",Math.floor(t.startTime)])})}function o(t,n){var e=t.getEntries();e.length>0&&c("lcp",[e[e.length-1]])}function i(t){if(t instanceof u&&!l){var n,e=Math.round(t.timeStamp);n=e>1e12?Date.now()-e:f.now()-e,l=!0,c("timing",["fi",e,{type:t.type,fid:n}])}}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var a,s,c=t("handle"),f=t("loader"),u=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){a=new PerformanceObserver(r),s=new PerformanceObserver(o);try{a.observe({entryTypes:["paint"]}),s.observe({entryTypes:["largest-contentful-paint"]})}catch(d){}}if("addEventListener"in document){var l=!1,p=["click","keydown","mousedown","pointerdown","touchstart"];p.forEach(function(t){document.addEventListener(t,i,!1)})}}},{}],19:[function(t,n,e){function r(){function t(){return n?15&n[e++]:16*Math.random()|0}var n=null,e=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(n=r.getRandomValues(new Uint8Array(31)));for(var o,i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",s=0;s<i.length;s++)o=i[s],"x"===o?a+=t().toString(16):"y"===o?(o=3&t()|8,a+=o.toString(16)):a+=o;return a}function o(){function t(){return n?15&n[e++]:16*Math.random()|0}var n=null,e=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&Uint8Array&&(n=r.getRandomValues(new Uint8Array(31)));for(var o=[],i=0;i<16;i++)o.push(t().toString(16));return o.join("")}n.exports={generateUuid:r,generateCatId:o}},{}],20:[function(t,n,e){function r(t,n){if(!o)return!1;if(t!==o)return!1;if(!n)return!0;if(!i)return!1;for(var e=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==e[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var s=navigator.userAgent,c=s.match(a);c&&s.indexOf("Chrome")===-1&&s.indexOf("Chromium")===-1&&(o="Safari",i=c[1])}n.exports={agent:o,version:i,match:r}},{}],21:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],22:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],23:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=m(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[y[e]];return d&&d.push([x,e,r,a]),a}}function p(t,n){g[t]=m(t).concat(n)}function h(t,n){var e=g[t];if(e)for(var r=0;r<e.length;r++)e[r]===n&&e.splice(r,1)}function m(t){return g[t]||[]}function w(t){return d[t]=d[t]||o(e)}function v(t,n){f(t,function(t,e){n=n||"feature",y[e]=n,n in u||(u[n]=[])})}var g={},y={},x={on:p,addEventListener:p,removeEventListener:h,emit:e,get:w,listeners:m,context:n,buffer:v,abort:a,aborted:!1};return x}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(21),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!E++){var t=b.info=NREUM.info,n=p.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(y,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+b.offset],null,"api");var e=p.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===p.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(21),u=t("ee"),d=t(20),l=window,p=l.document,h="addEventListener",m="attachEvent",w=l.XMLHttpRequest,v=w&&w.prototype;NREUM.o={ST:setTimeout,SI:l.setImmediate,CT:clearTimeout,XHR:w,REQ:l.Request,EV:l.Event,PR:l.Promise,MO:l.MutationObserver};var g=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1167.min.js"},x=w&&v&&v[h]&&!/CriOS/.test(navigator.userAgent),b=n.exports={offset:s,now:a,origin:g,features:{},xhrWrappable:x,userAgent:d};t(15),t(18),p[h]?(p[h]("DOMContentLoaded",i,!1),l[h]("load",r,!1)):(p[m]("onreadystatechange",o),l[m]("onload",r)),c("mark",["firstbyte",s],null,"api");var E=0,O=t(23)},{}],"wrap-function":[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(22),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal<meta name="description" content="damak diamonds"/>
<meta name="keywords" content="damak diamonds, jewelry retailers, store, engagement ring, wedding band, gemstone, diamonds, 14k gold, watches"/>
<meta name="robots" content="INDEX,FOLLOW"/>
<meta name="title" content="Diamonds, Rings, Fine Jewelry and Watches | damak diamonds"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="format-detection" content="telephone=no"/>
<title>Logine | damak diamonds</title>
<link  rel="stylesheet" type="text/css"  media="all" href="pub/static/_cache/merged/a58dc9e4eb5c8860f85a7b74513ccde0.min.css" />
<link  rel="stylesheet" type="text/css"  media="screen and (min-width: 1024px)" href="pub/static/frontend/BlueAcorn/rds/en_US/css/styles-l.min.css" />
<link  rel="stylesheet" type="text/css"  media="print" href="pub/static/frontend/BlueAcorn/rds/en_US/css/print.min.css" />
<link  rel="stylesheet" type="text/css"  media="screen and (min-width: 450px)" href="pub/static/frontend/BlueAcorn/rds/en_US/css/styles-t.min.css" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link  rel="stylesheet" type="text/css"  media="all" href="pub/static/_cache/merged/ed3e9ac2af1f50e96d3d393869988303.min.css" />
<link  rel="icon" type="image/x-icon" href="pub/static/frontend/BlueAcorn/rds/en_US/Magento_Theme/favicon.ico" />
<link  rel="shortcut icon" type="image/x-icon" href="pub/static/frontend/BlueAcorn/rds/en_US/Magento_Theme/favicon.ico" />
<script  type="text/javascript"  src="pub/static/_cache/merged/0ef8a722775cfd1a9ff4f7c45bfad4d1.min.js"></script>
<meta data-rfkid="rfkid_meta">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Anti-flicker snippet (recommended)  -->
<style>.async-hide { opacity: 0 !important}
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: left;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
  margin: 50px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
  .row{
    margin: 20px;
  }
}
</style> </style>
<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
})(window,document.documentElement,'async-hide','dataLayer',4000,
{'GTM-KN62G5B':true});</script>        <LINK REL="apple-touch-icon" HREF="apple-touch-icon-57x572042.png?v=000b05LAYM" SIZES="57x57">
  <link rel="stylesheet" href="style.css">
<LINK REL="apple-touch-icon" HREF="apple-touch-icon-60x602042.png?v=000b05LAYM" SIZES="60x60">
<LINK REL="apple-touch-icon" HREF="apple-touch-icon-72x722042.png?v=000b05LAYM" SIZES="72x72">
<LINK REL="apple-touch-icon" HREF="apple-touch-icon-76x762042.png?v=000b05LAYM" SIZES="76x76">
<LINK REL="apple-touch-icon" HREF="apple-touch-icon-114x1142042.png?v=000b05LAYM" SIZES="114x114">
<LINK REL="apple-touch-icon" HREF="apple-touch-icon-120x1202042.png?v=000b05LAYM" SIZES="120x120">
<LINK REL="apple-touch-icon" HREF="apple-touch-icon-144x1442042.png?v=000b05LAYM" SIZES="144x144">
<LINK REL="apple-touch-icon" HREF="apple-touch-icon-152x1522042.png?v=000b05LAYM" SIZES="152x152">
<LINK REL="apple-touch-icon" HREF="apple-touch-icon-180x1802042.png?v=000b05LAYM" SIZES="180x180">
<LINK REL="icon" HREF="favicon-32x322042.png?v=000b05LAYM" TYPE="image/png" SIZES="32x32">
<LINK REL="icon" HREF="android-chrome-192x1922042.png?v=000b05LAYM" TYPE="image/png" SIZES="192x192">
<LINK REL="icon" HREF="favicon-96x962042.png?v=000b05LAYM" TYPE="image/png" SIZES="96x96">
<LINK REL="icon" HREF="favicon-16x162042.png?v=000b05LAYM" TYPE="image/png" SIZES="16x16">
<LINK REL="manifest" HREF="manifest2042.json?v=000b05LAYM">
<LINK REL="mask-icon" HREF="safari-pinned-tab2042.svg?v=000b05LAYM">
<LINK REL="shortcut icon" HREF="favicon2042.ico?v=000b05LAYM">
<META CONTENT="#6ca9d0" NAME="msapplication-TileColor">
<META CONTENT="/mstile-144x144.png?v=000b05LAYM" NAME="msapplication-TileImage">
<META CONTENT="#f2f2f2" NAME="theme-color"><script type="text/javascript">
    // ShopRunner related settings
    var _shoprunner_com = new Object();
    _shoprunner_com.enabled = 1;
    _shoprunner_com.retailerID = "REEDS";
    _shoprunner_com.loginValidationURL = "shoprunner/validateToken.html";
    _shoprunner_com.environmentID = 2;
</script>
<script type="text/javascript">
    require(['jquery','Shoprunner_Core/js/shoprunner_init'],function($){
        console.log("loaded");
    });
 </script>
            <!-- GOOGLE TAG MANAGER -->
            <noscript>
                <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N3FQFS6" height="0" width="0"
                        style="display:none;visibility:hidden"></iframe>
            </noscript>
            <script type="text/x-magento-init">
            {
                "*": {
                    "Magento_GoogleTagManager/js/google-tag-manager": {
                        "isCookieRestrictionModeEnabled": 0,
                        "currentWebsite": 1,
                        "cookieName": "user_allowed_save_cookie",
                        "gtmAccountId": "GTM-N3FQFS6",
                        "storeCurrencyCode": "USD",
                        "ordersData": []                    }
                }
            }
            </script>
            <!-- END GOOGLE TAG MANAGER -->
            <script>
        var kData = {"url":"https:\/\/www.reeds.com\/","page_title":"Diamonds, Rings, Fine Jewelry and Watches | REEDS Jewelers","page_type":"category","cart":{"phase":"SHOPPING","is_completed":false}};
        var url = 'customer/get/cartdata/index.html';
        requirejs(['jquery'], function ($) {
            if(url.trim().length < 1) {
                return;
            }
            $.get(url, function(data) {
                if(typeof data !== 'undefined' && typeof data.cart !== 'undefined') {
                    var phase = kData.cart.phase;
                    var isCompleted = kData.cart.is_completed;
                    // Add cart data through ajax if not on order success page
                    if(!isCompleted) {
                        kData.cart = data.cart;
                    }
                    if(phase !== 'undefined') {
                        kData.cart.phase = phase;
                    }
                    if(isCompleted !== 'undefined') {
                        kData.cart.is_completed = isCompleted;
                    }
                }
            });
        });
    </script>
<script type="text/javascript" async="true" src="../50973483-prod.rfksrv.com/rfk/js/11213-50973483/init.js"></script>
    
  <script>(window.BOOMR_mq=window.BOOMR_mq||[]).push(["addVar",{"rua.upush":"false","rua.cpush":"true","rua.upre":"true","rua.cpre":"false","rua.uprl":"false","rua.cprl":"false","rua.cprf":"false","rua.trans":"SJ-6e29ff5c-b407-4966-915b-f33b06bf4b26","rua.cook":"false","rua.ims":"false","rua.ufprl":"false","rua.cfprl":"false"}]);</script>
  <script>!function(a){var e="https://s.go-mpulse.net/boomerang/",t="addEventListener";if("False"=="True")a.BOOMR_config=a.BOOMR_config||{},a.BOOMR_config.PageParams=a.BOOMR_config.PageParams||{},a.BOOMR_config.PageParams.pci=!0,e="https://s2.go-mpulse.net/boomerang/";if(window.BOOMR_API_key="APTH4-Z4KQH-RZ239-4GCBD-CE8AM",function(){function n(e){a.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!a.BOOMR||!a.BOOMR.version&&!a.BOOMR.snippetExecuted){a.BOOMR=a.BOOMR||{},a.BOOMR.snippetExecuted=!0;var i,o,_,r=document.createElement("iframe");if(a[t])a[t]("load",n,!1);else if(a.attachEvent)a.attachEvent("onload",n);r.src="javascript:void(0)",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="width:0;height:0;border:0;display:none;",_=document.getElementsByTagName("script")[0],_.parentNode.insertBefore(r,_);try{o=r.contentWindow.document}catch(O){i=document.domain,r.src="javascript:var d=document.open();d.domain='"+i+"';void(0);",o=r.contentWindow.document}o.open()._l=function(){var a=this.createElement("script");if(i)this.domain=i;a.id="boomr-if-as",a.src=e+"APTH4-Z4KQH-RZ239-4GCBD-CE8AM",BOOMR_lstart=(new Date).getTime(),this.body.appendChild(a)},o.write("<bo"+'dy onload="document._l();">'),o.close()}}(),"".length>0)if(a&&"performance"in a&&a.performance&&"function"==typeof a.performance.setResourceTimingBufferSize)a.performance.setResourceTimingBufferSize();!function(){if(BOOMR=a.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var e="true"=="true"?1:0,t="",n="tuqfr7diiwweyxvxpn4q-f-40926e950-clientnsv4-s.akamaihd.net",i={"ak.v":"27","ak.cp":"468534","ak.ai":parseInt("382101",10),"ak.ol":"0","ak.cr":67,"ak.ipv":4,"ak.proto":"","ak.rid":"2ff2a936","ak.r":24408,"ak.a2":e,"ak.m":"a","ak.n":"essl","ak.bpcip":"157.32.88.0","ak.cport":5182,"ak.gh":"23.32.29.23","ak.quicv":"","ak.tlsv":"tls1.2","ak.0rtt":"","ak.csrc":"-","ak.acc":"reno","ak.t":"1589083001","ak.ak":"hOBiQwZUYzCg5VSAfCLimQ==hqLDXnWI2Zjkb/S/48DcFSorQpuNU874NNtw6jcnnVfD2/dqrvuNKDm6NWci0WB1bqdJWJWfEUlErNAasv76BZNZ9Su+Q5ns0eF9dMftY6a2wbPLeomu2DtaPMswoFkZqLmsDelOiyEZVBar18aXaab7nhjNRcJWkPDBn16QffDtnJvsi/qUhxYa1eFzz2RNDhEjU3fzdlydQ93bO84TMWfsXa1p10jzW8Ul8wyj91MW5wHK+IIUUKga+d3iXkTxCdi/mBOIPUQSitRWId4iKMWEnq3P1ProTRobC5zLTltvAuWOEbBj06KTmuC4sFlawAjfCUPYmtxw+/FGB9XoylUBu7UHOzw2S7was5q+AdbawdS6vg7xKfkVD5ST4KHtK+1nyhc6F9BqnY/x7YXWcWa24ZExKgGAEoAa05bii4c=","ak.pv":"111"};if(""!==t)i["ak.ruds"]=t;var o={i:!1,av:function(e){var t="http.initiator";if(e&&(!e[t]||"spa_hard"===e[t]))i["ak.feo"]=void 0!==a.aFeoApplied?1:0,BOOMR.addVar(i)},rv:function(){var a=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.html","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t"];BOOMR.removeVar(a)}};BOOMR.plugins.AK={akVars:i,akDNSPreFetchDomain:n,init:function(){if(!o.i){var a=BOOMR.subscribe;a("before_beacon",o.av,null,null),a("onbeacon",o.rv,null,null),o.i=!0}return this},is_complete:function(){return!0}}}}()}(window);</script>
</head>
<body>
    <script type="text/x-magento-init">
        {
            "*": {
                "addToCartModal": {
                    "ajax": {
                        "settings": {
                            "url":"https://www.reeds.com/kadro/rest/getcartpopup/"
                        }
                    },
                    "wasProductAddedSuccessfullyUrl": "https://www.reeds.com/kadro/wasProductAddedSuccessfully/"
                }
            }
        }
</script>    
    <script type="text/x-magento-init">
    {
        "*": 
        {
            "Bss_CookieNotice/js/cookienotice": {}
        }
    }
    </script>
    <script type="text/x-magento-init">
    {
        "*": {
            "Magento_PageBuilder/js/widget-initializer": {
                "config": {"[data-content-type=\"slider\"][data-appearance=\"default\"]":{"Magento_PageBuilder\/js\/content-type\/slider\/appearance\/default\/widget":"{}"},"[data-content-type=\"map\"]":{"Magento_PageBuilder\/js\/content-type\/map\/appearance\/default\/widget":"{}"},"[data-content-type=\"row\"]":{"Magento_PageBuilder\/js\/content-type\/row\/appearance\/default\/widget":"{}"},"[data-content-type=\"tabs\"]":{"Magento_PageBuilder\/js\/content-type\/tabs\/appearance\/default\/widget":"{}"},"[data-content-type=\"slide\"]":{"Magento_PageBuilder\/js\/widget\/show-on-hover":{"buttonSelector":".pagebuilder-slide-button","showOverlay":"hover","dataRole":"slide"}},"[data-content-type=\"banner\"]":{"Magento_PageBuilder\/js\/widget\/show-on-hover":{"buttonSelector":".pagebuilder-banner-button","showOverlay":"hover","dataRole":"banner"}},"[data-content-type=\"buttons\"]":{"Magento_PageBuilder\/js\/content-type\/buttons\/appearance\/inline\/widget":"{}"},"[data-content-type=\"internal_video\"]":{"Kadro_PageBuilderVideo\/js\/content-type\/internal-video\/appearance\/default\/widget":"{}"}}            }
        }
    }
</script>
    <script>
        require.config({
            deps: [
                'jquery',
                'mage/translate',
                'jquery/jquery-storageapi'
            ],
            callback: function ($) {
                'use strict';

                var dependencies = [],
                    versionObj;

                $.initNamespaceStorage('mage-translation-storage');
                $.initNamespaceStorage('mage-translation-file-version');
                versionObj = $.localStorage.get('mage-translation-file-version');

                
                if (versionObj.version !== '5858e4c4019dc6e55ea1566b88b98ebf4d21d59c') {
                    dependencies.push(
                        'text!js-translation.json'
                    );

                }

                require.config({
                    deps: dependencies,
                    callback: function (string) {
                        if (typeof string === 'string') {
                            $.mage.translate.add(JSON.parse(string));
                            $.localStorage.set('mage-translation-storage', string);
                            $.localStorage.set(
                                'mage-translation-file-version',
                                {
                                    version: '5858e4c4019dc6e55ea1566b88b98ebf4d21d59c'
                                }
                            );
                        } else {
                            $.mage.translate.add($.localStorage.get('mage-translation-storage'));
                        }
                    }
                });
            }
        });
    </script>

<script type="text/x-magento-init">
    {
        "*": {
            "mage/cookies": {
                "expires": null,
                "path": "/",
                "domain": ".www.reeds.com",
                "secure": false,
                "lifetime": "31536000"
            }
        }
    }
</script>
    <noscript>
        <div class="message global noscript">
            <div class="content">
                <p>
                    <strong>JavaScript seems to be disabled in your browser.</strong>
                    <span>For the best experience on our site, be sure to turn on Javascript in your browser.</span>
                </p>
            </div>
        </div>
    </noscript>

<script>
    require.config({
        map: {
            '*': {
                wysiwygAdapter: 'mage/adminhtml/wysiwyg/tiny_mce/tinymce4Adapter'
            }
        }
    });
</script>
    <script type="text/x-magento-init">
        {
            "*": {
                "kadroNewRelicSID": {
                    "cookieName": "NEWRELSID"
                }
            }
        }
</script>
    <script>
        window.onerror = function(msg, url, line) {
            var key = "collected_errors";
            var errors = {};
            if (sessionStorage.getItem(key)) {
                errors = JSON.parse(sessionStorage.getItem(key));
            }
            if (!(window.location.href in errors)) {
                errors[window.location.href] = [];
            }
            errors[window.location.href].push("error: \'" + msg + "\' " + "file: " + url + " " + "line: " + line);
            sessionStorage.setItem(key, JSON.stringify(errors));
        };
    </script>

<script type="text/x-magento-init">
    {
        "*": {
            "Magento_GoogleTagManager/js/google-tag-manager-cart": {
                "blockNames": ["category.products.list","product.info.upsell","catalog.product.related","checkout.cart.crosssell","search_result_list"],
                "cookieAddToCart": "add_to_cart",
                "cookieRemoveFromCart": "remove_from_cart"
            }
        }
    }
</script>
<div id="associateOrdersContainer" style="display: none;">
    <div class="message global associateOrdersNotice">
        <div class="content" id="associateOrdersNoticeData"></div>
    </div>
</div>
<script type="text/x-magento-init">
    {
        "#associateOrdersContainer": {
            "employeebanner": {
                "endpointUrl": "https://www.reeds.com/associateorders/store/get/"
            }
        }
    }
</script><script>
    require.config({
        paths: {
            googleMaps: 'https\u003A\u002F\u002Fmaps.googleapis.com\u002Fmaps\u002Fapi\u002Fjs\u003Fv\u003D3\u0026key\u003D'
        },
        config: {
            'Magento_PageBuilder/js/utils/map': {
                style: ''
            },
            'Magento_PageBuilder/js/content-type/map/preview': {
                apiKey: '',
                apiKeyErrorMessage: 'You\u0020must\u0020provide\u0020a\u0020valid\u0020\u003Ca\u0020href\u003D\u0027https\u003A\u002F\u002Fwww.reeds.com\u002Fadminhtml\u002Fsystem_config\u002Fedit\u002Fsection\u002Fcms\u002F\u0023cms_pagebuilder\u0027\u0020target\u003D\u0027_blank\u0027\u003EGoogle\u0020Maps\u0020API\u0020key\u003C\u002Fa\u003E\u0020to\u0020use\u0020a\u0020map.'
            },
            'Magento_PageBuilder/js/form/element/map': {
                apiKey: '',
                apiKeyErrorMessage: 'You\u0020must\u0020provide\u0020a\u0020valid\u0020\u003Ca\u0020href\u003D\u0027https\u003A\u002F\u002Fwww.reeds.com\u002Fadminhtml\u002Fsystem_config\u002Fedit\u002Fsection\u002Fcms\u002F\u0023cms_pagebuilder\u0027\u0020target\u003D\u0027_blank\u0027\u003EGoogle\u0020Maps\u0020API\u0020key\u003C\u002Fa\u003E\u0020to\u0020use\u0020a\u0020map.'
            },
        }
    });
</script>

<script>
    require.config({
        shim: {
            'Magento_PageBuilder/js/utils/map': {
                deps: ['googleMaps']
            }
        }
    });
</script>
    <script type="text/x-magento-init">
        {
            "*": {
                "Magento_Ui/js/core/app": {
                    "components": {
                        "designerImages": {
                            "component": "Kadro_DesignerProducts/js/family_builder/view/images"
                        }
                    }
                },
                "kadroDesignerFamilyCart": {
                }
            }
        }
    </script>

<style>
    #tb-slider{
        margin: 0 auto;
        min-width: 400px;
        max-height: 40px;
        text-align: center;
    }
    #tb-slider::after {
        clear: both;
        content: '';
        display: table;
        width: 100%;
    }
    #tb-slider {
        width: 100%;
        position: relative;
    }   

    #tb-slider .owl-item > div {
        padding: 0 1px;
    }
    
    #tb-slider .owl-item {
        display: block;
        margin: 0 auto;
    }
    
    #tb-slider .owl-item a,
    #tb-slider .owl-item a:link,
    #tb-slider .owl-item a:visited {
        color: #323232;
        text-decoration: none;
    }
    
    #tb-slider .owl-item a:hover,
    #tb-slider .owl-item a:focus,
    #tb-slider .owl-item a:active {
        color: #323232;
        text-decoration: none;
    }
    
    
    #tb-slider .owl-item a:hover::after,
    #tb-slider .owl-item a:focus::after,
    #tb-slider .owl-item a:active::after {
        background: rgba(255,255,255,.5);
        content: '';
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 1;
    }
    
    #tb-slider .owl-item img {
        display: block;
        margin: 0 auto;
    }
            
</style>
    
    
<script type="text/javascript">
    require([
        'jquery',
        'owlCarousel'
    ], function($){
        $('#tb-slider').owlCarousel({
        dots: false,
        items: 1,
        loop: true,
        nav: false,
        navRewind: true,
        navSpeed: 125,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        animateOut: 'fadeOut',

            responsive : {
                // breakpoint from 0 up
                0 : {
                    dots: false,
                    items: 1,
                    nav: false
                },
                // breakpoint from 640 up
                640 : {
                    items: 1,
                    slideBy: 1
                }
            }
        });
    });
</script>
    </div>

            <div class="mobile-content">
            

<script type="text/javascript">
    require([
        'jquery',
        'owlCarousel'
    ], function($){
        $('#tb-slider-mobile').owlCarousel({
        dots: false,
        items: 1,
        loop: true,
        nav: false,
        navRewind: true,
        navSpeed: 125,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        animateOut: 'fadeOut',

            responsive : {
                // breakpoint from 0 up
                0 : {
                    dots: false,
                    items: 1,
                    nav: false
                },
                // breakpoint from 640 up
                640 : {
                    items: 1,
                    slideBy: 1
                }
            }
        });
    });
</script>
    <?php include 'header.php' ?>
</ul>
</nav>
</div>
 
    <style type="text/css">
        .fa{
            color: black;
        }
    </style>
    
<div class="container">
    <h1>Login</h1>
  <form action="login.php" method="POST">
  
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-25">
        <label for="lname">Username</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="Username" placeholder="neter your username" style="width : 45%;">
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="email" placeholder="Your email.." style="width : 65%;">
      </div>
    </div>
   <div class="row">
      <div class="col-25">
        <label for="lname">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="lname" name="password" placeholder="Your password.." style="width : 65%;">
      </div>
    </div>
   
    <div class="row">
      <input type="submit" name="login" style="width : 65%;" value="Submit">
    </div>
  </form>
  <a href="signup.php">New User? Registred here</a>
</div>
 <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
         });
      </script>
       <script>
         $(document).ready(function () {
         
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };
         
         
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
         
         });
      </script>
