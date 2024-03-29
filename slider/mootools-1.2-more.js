//MooTools More, <http://mootools.net/more>. Copyright (c) 2006-2008 Valerio Proietti, <http://mad4milk.net>, MIT Style License.











Fx.Slide=new Class({Extends:Fx,options:{mode:"vertical"},initialize:function(B,A){this.addEvent("complete",function(){this.open=(this.wrapper["offset"+this.layout.capitalize()]!=0);





if(this.open&&Browser.Engine.webkit419){this.element.dispose().inject(this.wrapper);}},true);this.element=this.subject=$(B);this.parent(A);var C=this.element.retrieve("wrapper");





this.wrapper=C||new Element("div",{styles:$extend(this.element.getStyles("margin","position"),{overflow:"hidden"})}).wraps(this.element);this.element.store("wrapper",this.wrapper).setStyle("margin",0);





this.now=[];this.open=true;},vertical:function(){this.margin="margin-top";this.layout="height";this.offset=this.element.offsetHeight;},horizontal:function(){this.margin="margin-left";





this.layout="width";this.offset=this.element.offsetWidth;},set:function(A){this.element.setStyle(this.margin,A[0]);this.wrapper.setStyle(this.layout,A[1]);





return this;},compute:function(E,D,C){var B=[];var A=2;A.times(function(F){B[F]=Fx.compute(E[F],D[F],C);});return B;},start:function(B,E){if(!this.check(arguments.callee,B,E)){return this;





}this[E||this.options.mode]();var D=this.element.getStyle(this.margin).toInt();var C=this.wrapper.getStyle(this.layout).toInt();var A=[[D,C],[0,this.offset]];





var G=[[D,C],[-this.offset,0]];var F;switch(B){case"in":F=A;break;case"out":F=G;break;case"toggle":F=(this.wrapper["offset"+this.layout.capitalize()]==0)?A:G;





}return this.parent(F[0],F[1]);},slideIn:function(A){return this.start("in",A);},slideOut:function(A){return this.start("out",A);},hide:function(A){this[A||this.options.mode]();





this.open=false;return this.set([-this.offset,0]);},show:function(A){this[A||this.options.mode]();this.open=true;return this.set([0,this.offset]);},toggle:function(A){return this.start("toggle",A);





}});Element.Properties.slide={set:function(B){var A=this.retrieve("slide");if(A){A.cancel();}return this.eliminate("slide").store("slide:options",$extend({link:"cancel"},B));





},get:function(A){if(A||!this.retrieve("slide")){if(A||!this.retrieve("slide:options")){this.set("slide",A);}this.store("slide",new Fx.Slide(this,this.retrieve("slide:options")));





}return this.retrieve("slide");}};Element.implement({slide:function(D,E){D=D||"toggle";var B=this.get("slide"),A;switch(D){case"hide":B.hide(E);break;case"show":B.show(E);





break;case"toggle":var C=this.retrieve("slide:flag",B.open);B[(C)?"slideOut":"slideIn"](E);this.store("slide:flag",!C);A=true;break;default:B.start(D,E);





}if(!A){this.eliminate("slide:flag");}return this;}});Fx.Scroll=new Class({Extends:Fx,options:{offset:{x:0,y:0},wheelStops:true},initialize:function(B,A){this.element=this.subject=$(B);





this.parent(A);var D=this.cancel.bind(this,false);if($type(this.element)!="element"){this.element=$(this.element.getDocument().body);}var C=this.element;





if(this.options.wheelStops){this.addEvent("start",function(){C.addEvent("mousewheel",D);},true);this.addEvent("complete",function(){C.removeEvent("mousewheel",D);





},true);}},set:function(){var A=Array.flatten(arguments);this.element.scrollTo(A[0],A[1]);},compute:function(E,D,C){var B=[];var A=2;A.times(function(F){B.push(Fx.compute(E[F],D[F],C));





});return B;},start:function(C,H){if(!this.check(arguments.callee,C,H)){return this;}var E=this.element.getSize(),F=this.element.getScrollSize();var B=this.element.getScroll(),D={x:C,y:H};





for(var G in D){var A=F[G]-E[G];if($chk(D[G])){D[G]=($type(D[G])=="number")?D[G].limit(0,A):A;}else{D[G]=B[G];}D[G]+=this.options.offset[G];}return this.parent([B.x,B.y],[D.x,D.y]);





},toTop:function(){return this.start(false,0);},toLeft:function(){return this.start(0,false);},toRight:function(){return this.start("right",false);},toBottom:function(){return this.start(false,"bottom");





},toElement:function(B){var A=$(B).getPosition(this.element);return this.start(A.x,A.y);}});Fx.Elements=new Class({Extends:Fx.CSS,initialize:function(B,A){this.elements=this.subject=$$(B);





this.parent(A);},compute:function(G,H,I){var C={};for(var D in G){var A=G[D],E=H[D],F=C[D]={};for(var B in A){F[B]=this.parent(A[B],E[B],I);}}return C;





},set:function(B){for(var C in B){var A=B[C];for(var D in A){this.render(this.elements[C],D,A[D],this.options.unit);}}return this;},start:function(C){if(!this.check(arguments.callee,C)){return this;





}var H={},I={};for(var D in C){var F=C[D],A=H[D]={},G=I[D]={};for(var B in F){var E=this.prepare(this.elements[D],B,F[B]);A[B]=E.from;G[B]=E.to;}}return this.parent(H,I);





}});var Drag=new Class({Implements:[Events,Options],options:{snap:6,unit:"px",grid:false,style:true,limit:false,handle:false,invert:false,preventDefault:false,modifiers:{x:"left",y:"top"}},initialize:function(){var B=Array.link(arguments,{options:Object.type,element:$defined});





this.element=$(B.element);this.document=this.element.getDocument();this.setOptions(B.options||{});var A=$type(this.options.handle);this.handles=(A=="array"||A=="collection")?$$(this.options.handle):$(this.options.handle)||this.element;





this.mouse={now:{},pos:{}};this.value={start:{},now:{}};this.selection=(Browser.Engine.trident)?"selectstart":"mousedown";this.bound={start:this.start.bind(this),check:this.check.bind(this),drag:this.drag.bind(this),stop:this.stop.bind(this),cancel:this.cancel.bind(this),eventStop:$lambda(false)};





this.attach();},attach:function(){this.handles.addEvent("mousedown",this.bound.start);return this;},detach:function(){this.handles.removeEvent("mousedown",this.bound.start);





return this;},start:function(C){if(this.options.preventDefault){C.preventDefault();}this.fireEvent("beforeStart",this.element);this.mouse.start=C.page;





var A=this.options.limit;this.limit={x:[],y:[]};for(var D in this.options.modifiers){if(!this.options.modifiers[D]){continue;}if(this.options.style){this.value.now[D]=this.element.getStyle(this.options.modifiers[D]).toInt();





}else{this.value.now[D]=this.element[this.options.modifiers[D]];}if(this.options.invert){this.value.now[D]*=-1;}this.mouse.pos[D]=C.page[D]-this.value.now[D];





if(A&&A[D]){for(var B=2;B--;B){if($chk(A[D][B])){this.limit[D][B]=$lambda(A[D][B])();}}}}if($type(this.options.grid)=="number"){this.options.grid={x:this.options.grid,y:this.options.grid};





}this.document.addEvents({mousemove:this.bound.check,mouseup:this.bound.cancel});this.document.addEvent(this.selection,this.bound.eventStop);},check:function(A){if(this.options.preventDefault){A.preventDefault();





}var B=Math.round(Math.sqrt(Math.pow(A.page.x-this.mouse.start.x,2)+Math.pow(A.page.y-this.mouse.start.y,2)));if(B>this.options.snap){this.cancel();this.document.addEvents({mousemove:this.bound.drag,mouseup:this.bound.stop});





this.fireEvent("start",this.element).fireEvent("snap",this.element);}},drag:function(A){if(this.options.preventDefault){A.preventDefault();}this.mouse.now=A.page;





for(var B in this.options.modifiers){if(!this.options.modifiers[B]){continue;}this.value.now[B]=this.mouse.now[B]-this.mouse.pos[B];if(this.options.invert){this.value.now[B]*=-1;





}if(this.options.limit&&this.limit[B]){if($chk(this.limit[B][1])&&(this.value.now[B]>this.limit[B][1])){this.value.now[B]=this.limit[B][1];}else{if($chk(this.limit[B][0])&&(this.value.now[B]<this.limit[B][0])){this.value.now[B]=this.limit[B][0];





}}}if(this.options.grid[B]){this.value.now[B]-=(this.value.now[B]%this.options.grid[B]);}if(this.options.style){this.element.setStyle(this.options.modifiers[B],this.value.now[B]+this.options.unit);





}else{this.element[this.options.modifiers[B]]=this.value.now[B];}}this.fireEvent("drag",this.element);},cancel:function(A){this.document.removeEvent("mousemove",this.bound.check);





this.document.removeEvent("mouseup",this.bound.cancel);if(A){this.document.removeEvent(this.selection,this.bound.eventStop);this.fireEvent("cancel",this.element);





}},stop:function(A){this.document.removeEvent(this.selection,this.bound.eventStop);this.document.removeEvent("mousemove",this.bound.drag);this.document.removeEvent("mouseup",this.bound.stop);





if(A){this.fireEvent("complete",this.element);}}});Element.implement({makeResizable:function(A){return new Drag(this,$merge({modifiers:{x:"width",y:"height"}},A));





}});Drag.Move=new Class({Extends:Drag,options:{droppables:[],container:false},initialize:function(C,B){this.parent(C,B);this.droppables=$$(this.options.droppables);





this.container=$(this.options.container);if(this.container&&$type(this.container)!="element"){this.container=$(this.container.getDocument().body);}C=this.element;





var D=C.getStyle("position");var A=(D!="static")?D:"absolute";if(C.getStyle("left")=="auto"||C.getStyle("top")=="auto"){C.position(C.getPosition(C.offsetParent));





}C.setStyle("position",A);this.addEvent("start",function(){this.checkDroppables();},true);},start:function(B){if(this.container){var D=this.element,J=this.container,E=J.getCoordinates(D.offsetParent),F={},A={};





["top","right","bottom","left"].each(function(K){F[K]=J.getStyle("padding-"+K).toInt();A[K]=D.getStyle("margin-"+K).toInt();},this);var C=D.offsetWidth+A.left+A.right,I=D.offsetHeight+A.top+A.bottom;





var H=[E.left+F.left,E.right-F.right-C];var G=[E.top+F.top,E.bottom-F.bottom-I];this.options.limit={x:H,y:G};}this.parent(B);},checkAgainst:function(B){B=B.getCoordinates();





var A=this.mouse.now;return(A.x>B.left&&A.x<B.right&&A.y<B.bottom&&A.y>B.top);},checkDroppables:function(){var A=this.droppables.filter(this.checkAgainst,this).getLast();





if(this.overed!=A){if(this.overed){this.fireEvent("leave",[this.element,this.overed]);}if(A){this.overed=A;this.fireEvent("enter",[this.element,A]);}else{this.overed=null;





}}},drag:function(A){this.parent(A);if(this.droppables.length){this.checkDroppables();}},stop:function(A){this.checkDroppables();this.fireEvent("drop",[this.element,this.overed]);





this.overed=null;return this.parent(A);}});Element.implement({makeDraggable:function(A){return new Drag.Move(this,A);}});Hash.Cookie=new Class({Extends:Cookie,options:{autoSave:true},initialize:function(B,A){this.parent(B,A);





this.load();},save:function(){var A=JSON.encode(this.hash);if(!A||A.length>4096){return false;}if(A=="{}"){this.dispose();}else{this.write(A);}return true;





},load:function(){this.hash=new Hash(JSON.decode(this.read(),true));return this;}});Hash.Cookie.implement((function(){var A={};Hash.each(Hash.prototype,function(C,B){A[B]=function(){var D=C.apply(this.hash,arguments);





if(this.options.autoSave){this.save();}return D;};});return A;})());var Color=new Native({initialize:function(B,C){if(arguments.length>=3){C="rgb";B=Array.slice(arguments,0,3);





}else{if(typeof B=="string"){if(B.match(/rgb/)){B=B.rgbToHex().hexToRgb(true);}else{if(B.match(/hsb/)){B=B.hsbToRgb();}else{B=B.hexToRgb(true);}}}}C=C||"rgb";





switch(C){case"hsb":var A=B;B=B.hsbToRgb();B.hsb=A;break;case"hex":B=B.hexToRgb(true);break;}B.rgb=B.slice(0,3);B.hsb=B.hsb||B.rgbToHsb();B.hex=B.rgbToHex();





return $extend(B,this);}});Color.implement({mix:function(){var A=Array.slice(arguments);var C=($type(A.getLast())=="number")?A.pop():50;var B=this.slice();





A.each(function(D){D=new Color(D);for(var E=0;E<3;E++){B[E]=Math.round((B[E]/100*(100-C))+(D[E]/100*C));}});return new Color(B,"rgb");},invert:function(){return new Color(this.map(function(A){return 255-A;





}));},setHue:function(A){return new Color([A,this.hsb[1],this.hsb[2]],"hsb");},setSaturation:function(A){return new Color([this.hsb[0],A,this.hsb[2]],"hsb");





},setBrightness:function(A){return new Color([this.hsb[0],this.hsb[1],A],"hsb");}});function $RGB(C,B,A){return new Color([C,B,A],"rgb");}function $HSB(C,B,A){return new Color([C,B,A],"hsb");





}function $HEX(A){return new Color(A,"hex");}Array.implement({rgbToHsb:function(){var B=this[0],C=this[1],J=this[2];var G,F,H;var I=Math.max(B,C,J),E=Math.min(B,C,J);





var K=I-E;H=I/255;F=(I!=0)?K/I:0;if(F==0){G=0;}else{var D=(I-B)/K;var A=(I-C)/K;var L=(I-J)/K;if(B==I){G=L-A;}else{if(C==I){G=2+D-L;}else{G=4+A-D;}}G/=6;





if(G<0){G++;}}return[Math.round(G*360),Math.round(F*100),Math.round(H*100)];},hsbToRgb:function(){var C=Math.round(this[2]/100*255);if(this[1]==0){return[C,C,C];





}else{var A=this[0]%360;var E=A%60;var F=Math.round((this[2]*(100-this[1]))/10000*255);var D=Math.round((this[2]*(6000-this[1]*E))/600000*255);var B=Math.round((this[2]*(6000-this[1]*(60-E)))/600000*255);





switch(Math.floor(A/60)){case 0:return[C,B,F];case 1:return[D,C,F];case 2:return[F,C,B];case 3:return[F,D,C];case 4:return[B,F,C];case 5:return[C,F,D];





}}return false;}});String.implement({rgbToHsb:function(){var A=this.match(/\d{1,3}/g);return(A)?hsb.rgbToHsb():null;},hsbToRgb:function(){var A=this.match(/\d{1,3}/g);





return(A)?A.hsbToRgb():null;}});var Group=new Class({initialize:function(){this.instances=Array.flatten(arguments);this.events={};this.checker={};},addEvent:function(B,A){this.checker[B]=this.checker[B]||{};





this.events[B]=this.events[B]||[];if(this.events[B].contains(A)){return false;}else{this.events[B].push(A);}this.instances.each(function(C,D){C.addEvent(B,this.check.bind(this,[B,C,D]));





},this);return this;},check:function(C,A,B){this.checker[C][B]=true;var D=this.instances.every(function(F,E){return this.checker[C][E]||false;},this);if(!D){return ;





}this.checker[C]={};this.events[C].each(function(E){E.call(this,this.instances,A);},this);}});var Asset=new Hash({javascript:function(F,D){D=$extend({onload:$empty,document:document,check:$lambda(true)},D);





var B=new Element("script",{src:F,type:"text/javascript"});var E=D.onload.bind(B),A=D.check,G=D.document;delete D.onload;delete D.check;delete D.document;





B.addEvents({load:E,readystatechange:function(){if(["loaded","complete"].contains(this.readyState)){E();}}}).setProperties(D);if(Browser.Engine.webkit419){var C=(function(){if(!$try(A)){return ;





}$clear(C);E();}).periodical(50);}return B.inject(G.head);},css:function(B,A){return new Element("link",$merge({rel:"stylesheet",media:"screen",type:"text/css",href:B},A)).inject(document.head);





},image:function(C,B){B=$merge({onload:$empty,onabort:$empty,onerror:$empty},B);var D=new Image();var A=$(D)||new Element("img");["load","abort","error"].each(function(E){var F="on"+E;





var G=B[F];delete B[F];D[F]=function(){if(!D){return ;}if(!A.parentNode){A.width=D.width;A.height=D.height;}D=D.onload=D.onabort=D.onerror=null;G.delay(1,A,A);





A.fireEvent(E,A,1);};});D.src=A.src=C;if(D&&D.complete){D.onload.delay(1);}return A.setProperties(B);},images:function(D,C){C=$merge({onComplete:$empty,onProgress:$empty},C);





if(!D.push){D=[D];}var A=[];var B=0;D.each(function(F){var E=new Asset.image(F,{onload:function(){C.onProgress.call(this,B,D.indexOf(F));B++;if(B==D.length){C.onComplete();





}}});A.push(E);});return new Elements(A);}});var Sortables=new Class({Implements:[Events,Options],options:{snap:4,opacity:1,clone:false,revert:false,handle:false,constrain:false},initialize:function(A,B){this.setOptions(B);





this.elements=[];this.lists=[];this.idle=true;this.addLists($$($(A)||A));if(!this.options.clone){this.options.revert=false;}if(this.options.revert){this.effect=new Fx.Morph(null,$merge({duration:250,link:"cancel"},this.options.revert));





}},attach:function(){this.addLists(this.lists);return this;},detach:function(){this.lists=this.removeLists(this.lists);return this;},addItems:function(){Array.flatten(arguments).each(function(A){this.elements.push(A);





var B=A.retrieve("sortables:start",this.start.bindWithEvent(this,A));(this.options.handle?A.getElement(this.options.handle)||A:A).addEvent("mousedown",B);





},this);return this;},addLists:function(){Array.flatten(arguments).each(function(A){this.lists.push(A);this.addItems(A.getChildren());},this);return this;





},removeItems:function(){var A=[];Array.flatten(arguments).each(function(B){A.push(B);this.elements.erase(B);var C=B.retrieve("sortables:start");(this.options.handle?B.getElement(this.options.handle)||B:B).removeEvent("mousedown",C);





},this);return $$(A);},removeLists:function(){var A=[];Array.flatten(arguments).each(function(B){A.push(B);this.lists.erase(B);this.removeItems(B.getChildren());





},this);return $$(A);},getClone:function(B,A){if(!this.options.clone){return new Element("div").inject(document.body);}if($type(this.options.clone)=="function"){return this.options.clone.call(this,B,A,this.list);





}return A.clone(true).setStyles({margin:"0px",position:"absolute",visibility:"hidden",width:A.getStyle("width")}).inject(this.list).position(A.getPosition(A.getOffsetParent()));





},getDroppables:function(){var A=this.list.getChildren();if(!this.options.constrain){A=this.lists.concat(A).erase(this.list);}return A.erase(this.clone).erase(this.element);





},insert:function(C,B){var A="inside";if(this.lists.contains(B)){this.list=B;this.drag.droppables=this.getDroppables();}else{A=this.element.getAllPrevious().contains(B)?"before":"after";





}this.element.inject(B,A);this.fireEvent("sort",[this.element,this.clone]);},start:function(B,A){if(!this.idle){return ;}this.idle=false;this.element=A;





this.opacity=A.get("opacity");this.list=A.getParent();this.clone=this.getClone(B,A);this.drag=new Drag.Move(this.clone,{snap:this.options.snap,container:this.options.constrain&&this.element.getParent(),droppables:this.getDroppables(),onSnap:function(){B.stop();





this.clone.setStyle("visibility","visible");this.element.set("opacity",this.options.opacity||0);this.fireEvent("start",[this.element,this.clone]);}.bind(this),onEnter:this.insert.bind(this),onCancel:this.reset.bind(this),onComplete:this.end.bind(this)});





this.clone.inject(this.element,"before");this.drag.start(B);},end:function(){this.drag.detach();this.element.set("opacity",this.opacity);if(this.effect){var A=this.element.getStyles("width","height");





var B=this.clone.computePosition(this.element.getPosition(this.clone.offsetParent));this.effect.element=this.clone;this.effect.start({top:B.top,left:B.left,width:A.width,height:A.height,opacity:0.25}).chain(this.reset.bind(this));





}else{this.reset();}},reset:function(){this.idle=true;this.clone.destroy();this.fireEvent("complete",this.element);},serialize:function(){var C=Array.link(arguments,{modifier:Function.type,index:$defined});





var B=this.lists.map(function(D){return D.getChildren().map(C.modifier||function(E){return E.get("id");},this);},this);var A=C.index;if(this.lists.length==1){A=0;





}return $chk(A)&&A>=0&&A<this.lists.length?B[A]:B;}});var Tips=new Class({Implements:[Events,Options],options:{onShow:function(A){A.setStyle("visibility","visible");





},onHide:function(A){A.setStyle("visibility","hidden");},showDelay:100,hideDelay:100,className:null,offsets:{x:16,y:16},fixed:false},initialize:function(){var C=Array.link(arguments,{options:Object.type,elements:$defined});





this.setOptions(C.options||null);this.tip=new Element("div").inject(document.body);if(this.options.className){this.tip.addClass(this.options.className);





}var B=new Element("div",{"class":"tip-top"}).inject(this.tip);this.container=new Element("div",{"class":"tip"}).inject(this.tip);var A=new Element("div",{"class":"tip-bottom"}).inject(this.tip);





this.tip.setStyles({position:"absolute",top:0,left:0,visibility:"hidden"});if(C.elements){this.attach(C.elements);}},attach:function(A){$$(A).each(function(D){var G=D.retrieve("tip:title",D.get("title"));





var F=D.retrieve("tip:text",D.get("rel")||D.get("href"));var E=D.retrieve("tip:enter",this.elementEnter.bindWithEvent(this,D));var C=D.retrieve("tip:leave",this.elementLeave.bindWithEvent(this,D));





D.addEvents({mouseenter:E,mouseleave:C});if(!this.options.fixed){var B=D.retrieve("tip:move",this.elementMove.bindWithEvent(this,D));D.addEvent("mousemove",B);





}D.store("tip:native",D.get("title"));D.erase("title");},this);return this;},detach:function(A){$$(A).each(function(C){C.removeEvent("mouseenter",C.retrieve("tip:enter")||$empty);





C.removeEvent("mouseleave",C.retrieve("tip:leave")||$empty);C.removeEvent("mousemove",C.retrieve("tip:move")||$empty);C.eliminate("tip:enter").eliminate("tip:leave").eliminate("tip:move");





var B=C.retrieve("tip:native");if(B){C.set("title",B);}});return this;},elementEnter:function(B,A){$A(this.container.childNodes).each(Element.dispose);





var D=A.retrieve("tip:title");if(D){this.titleElement=new Element("div",{"class":"tip-title"}).inject(this.container);this.fill(this.titleElement,D);}var C=A.retrieve("tip:text");





if(C){this.textElement=new Element("div",{"class":"tip-text"}).inject(this.container);this.fill(this.textElement,C);}this.timer=$clear(this.timer);this.timer=this.show.delay(this.options.showDelay,this);





this.position((!this.options.fixed)?B:{page:A.getPosition()});},elementLeave:function(A){$clear(this.timer);this.timer=this.hide.delay(this.options.hideDelay,this);





},elementMove:function(A){this.position(A);},position:function(D){var B=window.getSize(),A=window.getScroll();var E={x:this.tip.offsetWidth,y:this.tip.offsetHeight};





var C={x:"left",y:"top"};for(var F in C){var G=D.page[F]+this.options.offsets[F];if((G+E[F]-A[F])>B[F]){G=D.page[F]-this.options.offsets[F]-E[F];}this.tip.setStyle(C[F],G);





}},fill:function(A,B){(typeof B=="string")?A.set("html",B):A.adopt(B);},show:function(){this.fireEvent("show",this.tip);},hide:function(){this.fireEvent("hide",this.tip);





}});var SmoothScroll=new Class({Extends:Fx.Scroll,initialize:function(B,C){C=C||document;var E=C.getDocument(),D=C.getWindow();this.parent(E,B);this.links=(this.options.links)?$$(this.options.links):$$(E.links);





var A=D.location.href.match(/^[^#]*/)[0]+"#";this.links.each(function(G){if(G.href.indexOf(A)!=0){return ;}var F=G.href.substr(A.length);if(F&&$(F)){this.useLink(G,F);





}},this);if(!Browser.Engine.webkit419){this.addEvent("complete",function(){D.location.hash=this.anchor;},true);}},useLink:function(B,A){B.addEvent("click",function(C){this.anchor=A;





this.toElement(A);C.stop();}.bind(this));}});var Slider=new Class({Implements:[Events,Options],options:{onTick:function(A){if(this.options.snap){A=this.toPosition(this.step);





}this.knob.setStyle(this.property,A);},snap:false,offset:0,range:false,wheel:false,steps:100,mode:"horizontal"},initialize:function(E,A,D){this.setOptions(D);





this.element=$(E);this.knob=$(A);this.previousChange=this.previousEnd=this.step=-1;this.element.addEvent("mousedown",this.clickedElement.bind(this));if(this.options.wheel){this.element.addEvent("mousewheel",this.scrolledElement.bindWithEvent(this));





}var F,B={},C={x:false,y:false};switch(this.options.mode){case"vertical":this.axis="y";this.property="top";F="offsetHeight";break;case"horizontal":this.axis="x";





this.property="left";F="offsetWidth";}this.half=this.knob[F]/2;this.full=this.element[F]-this.knob[F]+(this.options.offset*2);this.min=$chk(this.options.range[0])?this.options.range[0]:0;





this.max=$chk(this.options.range[1])?this.options.range[1]:this.options.steps;this.range=this.max-this.min;this.steps=this.options.steps||this.full;this.stepSize=Math.abs(this.range)/this.steps;





this.stepWidth=this.stepSize*this.full/Math.abs(this.range);this.knob.setStyle("position","relative").setStyle(this.property,-this.options.offset);C[this.axis]=this.property;





B[this.axis]=[-this.options.offset,this.full-this.options.offset];this.drag=new Drag(this.knob,{snap:0,limit:B,modifiers:C,onDrag:this.draggedKnob.bind(this),onStart:this.draggedKnob.bind(this),onComplete:function(){this.draggedKnob();





this.end();}.bind(this)});if(this.options.snap){this.drag.options.grid=Math.ceil(this.stepWidth);this.drag.options.limit[this.axis][1]=this.full;}},set:function(A){if(!((this.range>0)^(A<this.min))){A=this.min;





}if(!((this.range>0)^(A>this.max))){A=this.max;}this.step=Math.round(A);this.checkStep();this.end();this.fireEvent("tick",this.toPosition(this.step));return this;





},clickedElement:function(C){var B=this.range<0?-1:1;var A=C.page[this.axis]-this.element.getPosition()[this.axis]-this.half;A=A.limit(-this.options.offset,this.full-this.options.offset);





this.step=Math.round(this.min+B*this.toStep(A));this.checkStep();this.end();this.fireEvent("tick",A);},scrolledElement:function(A){var B=(this.options.mode=="horizontal")?(A.wheel<0):(A.wheel>0);





this.set(B?this.step-this.stepSize:this.step+this.stepSize);A.stop();},draggedKnob:function(){var B=this.range<0?-1:1;var A=this.drag.value.now[this.axis];





A=A.limit(-this.options.offset,this.full-this.options.offset);this.step=Math.round(this.min+B*this.toStep(A));this.checkStep();},checkStep:function(){if(this.previousChange!=this.step){this.previousChange=this.step;





this.fireEvent("change",this.step);}},end:function(){if(this.previousEnd!==this.step){this.previousEnd=this.step;this.fireEvent("complete",this.step+"");





}},toStep:function(A){var B=(A+this.options.offset)*this.stepSize/this.full*this.steps;return this.options.steps?Math.round(B-=B%this.stepSize):B;},toPosition:function(A){return(this.full*Math.abs(this.min-A))/(this.steps*this.stepSize)-this.options.offset;





}});var Scroller=new Class({Implements:[Events,Options],options:{area:20,velocity:1,onChange:function(A,B){this.element.scrollTo(A,B);}},initialize:function(B,A){this.setOptions(A);





this.element=$(B);this.listener=($type(this.element)!="element")?$(this.element.getDocument().body):this.element;this.timer=null;this.coord=this.getCoords.bind(this);





},start:function(){this.listener.addEvent("mousemove",this.coord);},stop:function(){this.listener.removeEvent("mousemove",this.coord);this.timer=$clear(this.timer);





},getCoords:function(A){this.page=(this.listener.get("tag")=="body")?A.client:A.page;if(!this.timer){this.timer=this.scroll.periodical(50,this);}},scroll:function(){var B=this.element.getSize(),A=this.element.getScroll(),E=this.element.getPosition(),D={x:0,y:0};





for(var C in this.page){if(this.page[C]<(this.options.area+E[C])&&A[C]!=0){D[C]=(this.page[C]-this.options.area-E[C])*this.options.velocity;}else{if(this.page[C]+this.options.area>(B[C]+E[C])&&B[C]+B[C]!=A[C]){D[C]=(this.page[C]-B[C]+this.options.area-E[C])*this.options.velocity;





}}}if(D.y||D.x){this.fireEvent("change",[A.x+D.x,A.y+D.y]);}}});var Accordion=new Class({Extends:Fx.Elements,options:{display:0,show:false,height:true,width:false,opacity:true,fixedHeight:false,fixedWidth:false,wait:false,alwaysHide:false},initialize:function(){var C=Array.link(arguments,{container:Element.type,options:Object.type,togglers:$defined,elements:$defined});





this.parent(C.elements,C.options);this.togglers=$$(C.togglers);this.container=$(C.container);this.previous=-1;if(this.options.alwaysHide){this.options.wait=true;





}if($chk(this.options.show)){this.options.display=false;this.previous=this.options.show;}if(this.options.start){this.options.display=false;this.options.show=false;





}this.effects={};if(this.options.opacity){this.effects.opacity="fullOpacity";}if(this.options.width){this.effects.width=this.options.fixedWidth?"fullWidth":"offsetWidth";





}if(this.options.height){this.effects.height=this.options.fixedHeight?"fullHeight":"scrollHeight";}for(var B=0,A=this.togglers.length;B<A;B++){this.addSection(this.togglers[B],this.elements[B]);





}this.elements.each(function(E,D){if(this.options.show===D){this.fireEvent("active",[this.togglers[D],E]);}else{for(var F in this.effects){E.setStyle(F,0);





}}},this);if($chk(this.options.display)){this.display(this.options.display);}},addSection:function(E,C,G){E=$(E);C=$(C);var F=this.togglers.contains(E);





var B=this.togglers.length;this.togglers.include(E);this.elements.include(C);if(B&&(!F||G)){G=$pick(G,B-1);E.inject(this.togglers[G],"before");C.inject(E,"after");





}else{if(this.container&&!F){E.inject(this.container);C.inject(this.container);}}var A=this.togglers.indexOf(E);E.addEvent("click",this.display.bind(this,A));





if(this.options.height){C.setStyles({"padding-top":0,"border-top":"none","padding-bottom":0,"border-bottom":"none"});}if(this.options.width){C.setStyles({"padding-left":0,"border-left":"none","padding-right":0,"border-right":"none"});





}C.fullOpacity=1;if(this.options.fixedWidth){C.fullWidth=this.options.fixedWidth;}if(this.options.fixedHeight){C.fullHeight=this.options.fixedHeight;}C.setStyle("overflow","hidden");





if(!F){for(var D in this.effects){C.setStyle(D,0);}}return this;},display:function(A){A=($type(A)=="element")?this.elements.indexOf(A):A;if((this.timer&&this.options.wait)||(A===this.previous&&!this.options.alwaysHide)){return this;





}this.previous=A;var B={};this.elements.each(function(E,D){B[D]={};var C=(D!=A)||(this.options.alwaysHide&&(E.offsetHeight>0));this.fireEvent(C?"background":"active",[this.togglers[D],E]);





for(var F in this.effects){B[D][F]=C?0:E[this.effects[F]];}},this);return this.start(B);}});