//----Include-Function----
function include(url){
 document.write('<script type="text/javascript" src="intro-js/'+ url + '"></script>');
 return false ;
}

include('jquery.jplayer.min.js')
include('jquery.easing.1.3.js')
include('jquery.mobilemenu.js')
include('superfish.js')


//==========================menu-mobile


jQuery(window).load(function() {

//==========================spinner animate

jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});

 //==========================splash animate
 
jQuery('header').fadeIn(1000);

jQuery('#controls-wrapper').css({marginTop:(jQuery(window).height()/2)-75},500);

jQuery(window).resize(function(){
jQuery('#controls-wrapper').css({marginTop:(jQuery(window).height()/2)-75},500);
     })

   jQueryx = jQuery(window).width();
if(jQueryx > 480)
{  
jQuery('#splash header').stop().delay(2400).animate({top:(jQuery(window).height()/2)-35,opacity:1},1000,'easeOutBack');
jQuery('#splash-1 header').stop().delay(1000).animate({top:(jQuery(window).height()/2)-35,opacity:1},1000,'easeOutBack');

jQuery(window).resize(function(){
jQuery('#splash header').stop().animate({top:(jQuery(window).height()/2)-35},500);
jQuery('#splash-1 header').stop().animate({top:(jQuery(window).height()/2)-35},500);
        })
}

if(jQueryx <= 480)
       {

    jQuery('#splash header').css({opacity:0,top:-90})  
     jQuery('#splash-1 header').css({opacity:0,top:-90})  

      jQuery('#splash header').delay(300).stop().animate({opacity:1,top:0},600);
      jQuery('#splash-1 header').delay(300).stop().animate({opacity:1,top:0},600);

}

 

//==========================load animation

jQuery('.header').css({opacity:0,top:-90})
jQuery('.btn-soc').css({opacity:0})
jQuery('.box-profile').css({opacity:0})
jQuery('.control-panel').css({right:-50,opacity:0})


jQuery('#jp_container_1').css({opacity:0})
jQuery('.header').stop().animate({opacity:1,top:0},600);
jQuery('.control-panel').stop().delay(350).animate({right:0,opacity:1},600);


jQuery('.box-profile ').stop().delay(350).animate({opacity:1},700);
jQuery('.btn-soc').stop().delay(800).animate({opacity:1},500);
jQuery('#jp_container_1').stop().delay(1000).animate({opacity:1},500);


//==========================submenu hover

jQuery('.drop_pholio li a').hover(
function(){
jQuery(this).find('span').stop().animate({top: "-100px"}, {queue:false, duration:300  });
jQuery(this).find('.img_menu img').stop().animate({marginTop:0}, {queue:false, duration:300  });
},

function () {
jQuery(this).find('span').stop().animate({top: "0"}, { queue:false, duration:300 });
jQuery(this).find('.img_menu img').stop().animate({marginTop:70}, {queue:false, duration:300  });
});

//==========================menu click timeout
if(window.orientation==undefined){
  jQuery('.splash-menu a,.top_menu a,h1 a,.select-page a,.select-menu option').click(function(){
   var th=this
   setTimeout(function(){
    location.href=th.href
   },600)
   return false
  })  
}
     
//==========================elements click
if(window.orientation==undefined){
   jQuery('.top_menu a,.splash-menu a,h1 a,.select-page a,.select-menu option').click(function(){  
 jQuery('header').stop().animate({opacity:0,top:-90},400);
 jQuery('.control-panel').stop().animate({right:-50,opacity:0},300);
 jQuery('body').stop().delay(150).animate({opacity:0},400);

});
   }



 //==========================superfish menu    
 /*jQuery('.sf-menu').mobileMenu();*/
	jQuery('.sf-menu').superfish({ 
		delay:       200,                            // one second delay on mouseout 
		animation:   {opacity:'show', height:'show'},  // fade-in and slide-down animation 
		speed:       'normal',                          // faster animation speed 
		autoArrows:  false,                           // disable generation of arrow mark-up 
		dropShadows: false                            // disable drop shadows 
		});


//==========================menu-mobile

 jQuery('.menu-mobile').mobileMenu();

//==========================btn-back click :portfolio
jQuery('.btn-back').toggle(
       function(){
jQuery('.menu-portfolio').stop().animate({left:'-1000px',opacity:0},600)
jQuery('.main-menu-portfolio').stop().delay(200).animate({left:'0px',opacity:1},600);
                jQuery(this).addClass('active');
},  

function(){
jQuery('.main-menu-portfolio').stop().animate({left:'-1000px',opacity:0},600)  
jQuery('.menu-portfolio').stop().delay(200).animate({left:'0',opacity:1},600) ;
                jQuery(this).removeClass('active');
                })


//==========================splash tools
    
	jQuery('#tools_icon').click(
	function(){
	jQuery(this).parent().find('.box-select').stop().animate({right:0})						 
	})
	
   jQuery('.btn-close').click(
	function(){
	jQuery(this).parent().stop().animate({right:-250})						 
	})

//==========================btn-soc hover
 jQuery('.btn-soc').hover(
 function(){jQuery(this).stop().find('.soc').animate({opacity:1}, 400)},
 function(){jQuery(this).stop().find('.soc').animate({opacity:0}, 400)}  
)

jQuery('.btn-soc').hover(
 function(){jQuery(this).stop().animate({width:250}, 400)},
 function(){jQuery(this).stop().animate({width:35}, 500)}
 
 )

//==========================list addclass :blog

jQuery('.sidebar_block ul li:last-child').addClass('lastItem');
   jQuery('.sidebar_block ul li:first-child').addClass('firstItem');
   

// IPad/IPhone
var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
   ua = navigator.userAgent,

   gestureStart = function () {
       viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6";
   },

   scaleFix = function () {
     if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
       viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
       document.addEventListener("gesturestart", gestureStart, false);
     }
   };
scaleFix();

// Menu Android
if(window.orientation!=undefined){
var regM = /ipod|ipad|iphone/gi,
 result = ua.match(regM)
if(!result) {
 $('.sf-menu li').each(function(){
  if($(">ul", this)[0]){
   $(">a", this).toggle(
    function(){
     return false;
    },
    function(){
     window.location.href = $(this).attr("href");
    }
   );
  }
 })
}
}   


})




/* ------ fixed position for Android -----*/
var ua=navigator.userAgent.toLocaleLowerCase(),
regV = /ipod|ipad|iphone/gi,
result = ua.match(regV),
userScale="";
if(!result){
userScale=",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0'+userScale+'">');