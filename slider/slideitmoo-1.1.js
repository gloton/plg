/**





 *	SlideItMoo v1.1 - Image slider





 *	(c) 2007-2010 Constantin Boiangiu <http://www.php-help.ro>





 *	MIT-style license.





 **/





var SlideItMoo=new Class({Implements:[Events,Options],options:{overallContainer:null,elementScrolled:null,thumbsContainer:null,itemsSelector:null,itemsVisible:5,elemsSlide:null,itemWidth:null,itemHeight:null,navs:{fwd:".SlideItMoo_forward",bk:".SlideItMoo_back"},slideVertical:false,showControls:1,transition:Fx.Transitions.linear,duration:800,direction:1,autoSlide:false,mouseWheelNav:false,startIndex:null},initialize:function(A){this.setOptions(A);this.elements=$(this.options.thumbsContainer).getElements(this.options.itemsSelector);this.totalElements=this.elements.length;if(this.totalElements<=this.options.itemsVisible){return}var B=this.elements[0].getSize();this.elementWidth=this.options.itemWidth||B.x;this.elementHeight=this.options.itemHeight||B.y;this.currentElement=0;this.direction=this.options.direction;this.autoSlideTotal=this.options.autoSlide+this.options.duration;if(this.options.elemsSlide==1){this.options.elemsSlide=null}this.begin()},begin:function(){this.addControls();this.setContainersSize();this.myFx=new Fx.Tween(this.options.thumbsContainer,{property:(this.options.slideVertical?"margin-top":"margin-left"),wait:true,transition:this.options.transition,duration:this.options.duration});if(this.options.mouseWheelNav&&!this.options.autoSlide){$(this.options.thumbsContainer).addEvent("mousewheel",function(B){new Event(B).stop();this.slide(-B.wheel)}.bind(this))}if(this.options.startIndex&&this.options.startIndex>0&&this.options.startIndex<this.elements.length){for(var A=1;A<this.options.startIndex;A++){this.rearange()}}if(this.options.autoSlide&&this.elements.length>this.options.itemsVisible){this.startAutoSlide()}},resetAll:function(){$(this.options.overallContainer).removeProperty("style");$(this.options.elementScrolled).removeProperty("style");$(this.options.thumbsContainer).removeProperty("style");this.stopAutoSlide();if($defined(this.fwd)){this.fwd.dispose();this.bkwd.dispose()}this.initialize()},setContainersSize:function(){var F={};var E={};var B={};if(this.options.slideVertical){E.height=this.options.itemsVisible*this.elementHeight;B.height=this.totalElements*(this.elementHeight+10)}else{var D=0;if(this.options.showControls){var C=this.fwd.getSize();var A=this.bkwd.getSize();var D=C.x+A.x}F.width=this.options.itemsVisible*this.elementWidth+D;E.width=this.options.itemsVisible*this.elementWidth;B.width=this.totalElements*(this.elementWidth+10)}$(this.options.overallContainer).set({styles:F});$(this.options.elementScrolled).set({styles:E});$(this.options.thumbsContainer).set({styles:B})},addControls:function(){if(!this.options.showControls||this.elements.length<=this.options.itemsVisible){return}this.fwd=$(this.options.overallContainer).getElement(this.options.navs.fwd);this.bkwd=$(this.options.overallContainer).getElement(this.options.navs.bk);if(this.fwd){this.fwd.addEvent("click",this.slide.pass(1,this))}if(this.bkwd){this.bkwd.addEvent("click",this.slide.pass(-1,this))}},slide:function(D){if(this.started){return}this.direction=D?D:this.direction;var A=this.currentIndex();if(this.options.elemsSlide&&this.options.elemsSlide>1&&this.endingElem==null){this.endingElem=this.currentElement;for(var B=0;B<this.options.elemsSlide;B++){this.endingElem+=D;if(this.endingElem>=this.totalElements){this.endingElem=0}if(this.endingElem<0){this.endingElem=this.totalElements-1}}}var C=new Hash();var E=0;if(this.options.slideVertical){C.include("margin-top",-this.elementHeight);E=this.direction==1?-this.elementHeight:0}else{C.include("margin-left",-this.elementWidth);E=this.direction==1?-this.elementWidth:0}if(this.direction==-1){this.rearange();$(this.options.thumbsContainer).setStyles(C)}this.started=true;if(!$defined(this.endingElem)){this.endingElem=null}this.myFx.start(E).chain(function(){this.rearange(true);if(this.options.elemsSlide){if(this.endingElem!==this.currentElement){if(this.options.autoSlide){this.stopAutoSlide()}this.slide(this.direction)}else{if(this.options.autoSlide){this.startAutoSlide()}this.endingElem=null}}}.bind(this));this.fireEvent("onChange",A)},rearange:function(A){if(A){this.started=false}if(A&&this.direction==-1){return}this.currentElement=this.currentIndex(this.direction);var B=new Hash();if(this.options.slideVertical){B.include("margin-top",0)}else{B.include("margin-left",0)}$(this.options.thumbsContainer).setStyles(B);if(this.currentElement==1&&this.direction==1){this.elements[0].injectAfter(this.elements[this.totalElements-1]);return}if((this.currentElement==0&&this.direction==1)||(this.direction==-1&&this.currentElement==this.totalElements-1)){this.rearrangeElement(this.elements.getLast(),this.direction==1?this.elements[this.totalElements-2]:this.elements[0]);return}if(this.direction==1){this.rearrangeElement(this.elements[this.currentElement-1],this.elements[this.currentElement-2])}else{this.rearrangeElement(this.elements[this.currentElement],this.elements[this.currentElement+1])}},rearrangeElement:function(B,A){this.direction==1?B.injectAfter(A):B.injectBefore(A)},currentIndex:function(){var A=null;switch(this.direction){case 1:A=this.currentElement>=this.totalElements-1?0:this.currentElement+this.direction;break;case -1:A=this.currentElement==0?this.totalElements-1:this.currentElement+this.direction;break}return A},startAutoSlide:function(){this.startIt=this.slide.bind(this).pass(this.direction|1);this.autoSlide=this.startIt.periodical(this.autoSlideTotal,this);this.isRunning=true;this.elements.addEvents({mouseenter:function(){$clear(this.autoSlide);this.isRunning=false}.bind(this),mouseleave:function(){this.autoSlide=this.startIt.periodical(this.autoSlideTotal,this);this.isRunning=true}.bind(this)})},stopAutoSlide:function(){$clear(this.autoSlide);$clear(this.startIt);this.isRunning=false;this.elements.removeEvents()}});