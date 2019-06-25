function handleCookieBanner(cookieBanner,type,status,duration,cookie) { 
	var cookieBannerHeight = cookieBanner.outerHeight();
	if(!duration) {
		duration = 500;
	}
	if(cookie) {
		cookieBanner.addClass('cookie');
	}
	if(type == 'overContent') {
		if(!jQuery('body').hasClass('cookie-banner-overContent')) {
			jQuery('body').addClass('cookie-banner-overContent');
			cookieBanner.data('type','overContent');
		}
		if(status == 'show') {
			cookieBanner.slideToggle(duration);
		}else if(status == 'hide') {
			cookieBanner.slideToggle(duration, function(){
				jQuery('body').removeClass('cookie-banner-overContent');
				jQuery('body').removeClass('cookie-banner-active');
			});
		}else {
			console.log('unknown status');
		}
	}else {
		console.log('unknown type');
	}
}

function appendJS(){
	
	jQuery.ajax({
	      url: "/includes/trackingHeader.html",
	      cache: true
	}).done(function(data) {
		jQuery("head").append(data);
	});
}
		
/**
 * Cookie-Banner / Banner für Informationen 
 */
var setCookie = true;

function setStatusCookie(cname, cvalue,sessionOnly) {
    var d = new Date();
    d.setTime(d.getTime() + (3600 * 1000 * 24 * 365));
    var expires = "expires='"+ d.toUTCString() +"';";
    if(sessionOnly){
    	expires = "";
    }
    document.cookie = cname + "=" + cvalue + ";" + expires + "path=/";
}

function cookieAlreadySet(cname) {
    var ca = document.cookie.split(';');
    var innerStatus = false;
    for(var i = 0; i < ca.length; i++) {
    	
    	var k = ca[i].split('=');
    	var key = k[0].trim();
        if(key==cname){
        	innerStatus = true;
        }
    }
    return innerStatus;
}



/*
jQuery( window ).one( "scroll", function( event ) {
	jQuery("#accept").click();
	//jQuery("#accept").off();
	//jQuery("#accept").trigger('click');
	//jQuery(".cookie-banner").css{("display:","none")};
});
*/
jQuery(document).on('click','.cookie-banner-close',function(e){
	e.preventDefault();
	e.stopPropagation();
	if(jQuery(this).closest('.cookie-banner').hasClass('cookie')){
		setStatusCookie('accepted',1,false);
		appendJS();
	}
	handleCookieBanner(jQuery(this).closest('.cookie-banner'),jQuery(this).closest('.cookie-banner').data('type'),'hide');
});

jQuery(window).on('load resize orientationchange', function(e) {
	if(e.type == 'load') {
		var cookieAcceptedStatus = cookieAlreadySet('accepted');
		if(setCookie && !cookieAlreadySet('accepted')){
			setCookie = false;
			handleCookieBanner(jQuery('.cookie-banner'),'overContent','show',false,true);
		}
	}
});


jQuery(document).ready(function ($) {
	var cookieAcceptedStatus = cookieAlreadySet('accepted');
	if(cookieAcceptedStatus == true){
		appendJS();
	}else{
	}
});