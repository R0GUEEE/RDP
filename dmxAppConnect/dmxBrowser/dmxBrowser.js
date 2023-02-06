/*!
 App Connect Browser
 Version: 2.2.1
 (c) 2022 Wappler.io
 @build 2022-09-05 17:11:41
 */
dmx.Component("browser",{initialData:{online:navigator.onLine,doNotTrack:!1,userAgent:navigator.userAgent,language:navigator.language,cookieEnabled:navigator.cookieEnabled,referrer:document.referrer,location:{hash:window.location.hash,host:window.location.host,hostname:window.location.hostname,href:window.location.href,origin:window.location.origin,pathname:window.location.pathname,port:window.location.port,protocol:window.location.protocol,search:window.location.search,pathparts:window.location.pathname.substr(1).split("/")},scrollX:{offset:0,direction:0,position:0},scrollY:{offset:0,direction:0,position:0},viewport:{width:0,height:0},device:{width:0,height:0,pixelRatio:1,orientation:"landscape"},document:{width:0,height:0,hidden:document.hidden,visibility:document.visibilityState}},methods:{goto:function(t,e,o){if("."==t[0]&&"/"==t[1]){var i=document.querySelector('meta[name="ac:base"]'),n=document.querySelector('meta[name="ac:route"]');if(n&&n.content){var a=n.content;i&&i.content&&(a=i.content.replace(/\/$/,"")+a);var d=dmx.pathToRegexp(a,[],{end:!1}).exec(location.pathname);if(d)return window.history.pushState({title:o},"",t.replace("./",d[0])),o&&(document.title=o),dmx.requestUpdate(),void window.dispatchEvent(new Event("pushstate"))}}if(e)return window.history.pushState({title:o||document.title},"",t),o&&(document.title=o),dmx.requestUpdate(),void window.dispatchEvent(new Event("pushstate"));window.location=t},scrollTo:function(t,e){window.scrollTo(t,e)},scrollXTo:function(t){window.scrollTo({left:t})},scrollYTo:function(t){window.scrollTo({top:t})},scrollBy:function(t,e){window.scrollBy(t,e)},scrollXBy:function(t){window.scrollBy({left:t})},scrollYBy:function(t){window.scrollBy({top:t})},alert:function(t){window.alert(t)},copy:function(){document.execCommand("copy")},cut:function(){document.execCommand("cut")},paste:function(){document.execCommand("paste")},delete:function(){document.execCommand("delete")},selectAll:function(){document.execCommand("selectAll")},writeTextToClipboard:function(t){return navigator.clipboard.writeText(t)}},events:{scroll:Event,resize:Event,online:Event,offline:Event,popstate:Event,pushstate:Event,visibilitychange:Event,orientationchange:Event},render:function(t){window.addEventListener("scroll",dmx.throttle(this._update.bind(this))),window.addEventListener("resize",dmx.throttle(this._update.bind(this))),window.addEventListener("online",this._update.bind(this)),window.addEventListener("offline",this._update.bind(this)),window.addEventListener("popstate",this._update.bind(this)),window.addEventListener("pushstate",this._update.bind(this)),window.addEventListener("replacestate",this._update.bind(this)),window.addEventListener("hashchange",this._update.bind(this)),window.addEventListener("visibilitychange",this._update.bind(this)),window.orientation&&window.addEventListener("orientationchange",this._update.bind(this)),this._update()},_update:function(t){var e=Math.max(document.body.scrollWidth,document.documentElement.scrollWidth),o=Math.max(document.body.scrollHeight,document.documentElement.scrollHeight),i=this.data.scrollX.direction,n=this.data.scrollY.direction;t&&"scroll"==t.type&&(this.data.scrollX.offset<window.pageXOffset?i=1:this.data.scrollX.offset>window.pageXOffset&&(i=-1),this.data.scrollY.offset<window.pageYOffset?n=1:this.data.scrollY.offset>window.pageYOffset&&(n=-1)),this.set("online",navigator.onLine),this.set("doNotTrack","1"==navigator.doNotTrack||"1"==window.doNotTrack||"1"==navigator.msDoNotTrack),this.set("userAgent",navigator.userAgent),this.set("language",navigator.language),this.set("cookieEnabled",navigator.cookieEnabled),this.set("referrer",document.referrer),this.set("location",{hash:window.location.hash,host:window.location.host,hostname:window.location.hostname,href:window.location.href,origin:window.location.origin,pathname:window.location.pathname,port:window.location.port,protocol:window.location.protocol,search:window.location.search,pathparts:window.location.pathname.substr(1).split("/")}),this.set("scrollX",{offset:window.pageXOffset,length:Math.max(0,e-window.innerWidth),direction:i,position:window.pageXOffset>0?window.pageXOffset/(e-window.innerWidth):0}),this.set("scrollY",{offset:window.pageYOffset,length:Math.max(0,o-window.innerHeight),direction:n,position:window.pageYOffset>0?window.pageYOffset/(o-window.innerHeight):0}),this.set("viewport",{width:window.innerWidth,height:window.innerHeight,scrollX:window.pageXOffset,scrollY:window.pageYOffset}),this.set("device",{width:window.screen.width,height:window.screen.height,pixelRatio:window.devicePixelRatio||window.screen.deviceXDPI/window.screen.logicalXDPI,orientation:this.getOrientation()}),this.set("document",{width:e,height:o,hidden:document.hidden,visibility:document.visibilityState}),t&&t.type&&this.dispatchEvent(t)},getOrientation:function(){return window.matchMedia("(orientation: portrait)").matches?"portrait":"landscape"}});
//# sourceMappingURL=../maps/dmxBrowser.js.map