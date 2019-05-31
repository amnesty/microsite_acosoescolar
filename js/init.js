/****************** 
***   VARS      ***
******************/
var done_PLAYING = false;
var done_PAUSED = false;
var done_ENDED = false;


$(document).ready(function() {

  /****************** 
  *** API YOUTUBE ***
  ******************/
  //var player = {};

  // Load the YouTube API. For some reason it's required to load it like this
  // Load the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  setColumnaHeight();

  moveProgressBar();

  //Home owl-carousel
  $(".owl-carousel").owlCarousel({
    items: 3,
    dots: true,
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
  }); //.owl-carousel

  //Social Share
  $('.twitter-share').click(function(e){
    e.preventDefault();
    var shareurl = $(this).data('shareurl');
    var texto = $(this).data('texto');
    //var long_tweet = 113;
    var long_tweet = 270;
    var texto2 = (texto.length > long_tweet) ? texto.slice(0, long_tweet) : texto;
    texto2 += (texto.length > long_tweet) ? '...' : '';
    texto2 = window.encodeURIComponent(texto2);
    window.open('https://twitter.com/intent/tweet?text=' + texto2 + '&url=' + shareurl, 'ventana-twitter', "toolbar=0, status=0, width=650, height=450");
  });

  $('.facebook-share').click(function(e){
    e.preventDefault();
    var shareurl = $(this).data('shareurl');
    shareurl = window.encodeURIComponent(shareurl);
    window.open('https://www.facebook.com/sharer/sharer.php?u=' + shareurl +'' , 'ventana-facebook', "toolbar=0, status=0, width=650, height=450");
  });

  //Cookie bar
  cli_show_cookiebar({
    settings: '{"animate_speed_hide":"500","animate_speed_show":"500","background":"#fff","border":"#869817","border_on":true,"button_1_button_colour":"#869817","button_1_button_hover":"#869817","button_1_link_colour":"#fff","button_1_as_button":true,"button_2_button_colour":"#333","button_2_button_hover":"#292929","button_2_link_colour":"#869817","button_2_as_button":false,"header_fix":false,"notify_animate_hide":true,"notify_animate_show":false,"notify_div_id":"#cookie-law-info-bar","notify_position_horizontal":"right","notify_position_vertical":"top","scroll_close":false,"scroll_close_reload":false,"showagain_tab":false,"showagain_background":"#fff","showagain_border":"#000","showagain_div_id":"#cookie-law-info-again","showagain_x_position":"100px","text":"#838383","show_once_yn":false,"show_once":"10000"}'
  });

  //Go To Form
  var capaHeaderHeight = $("header").innerHeight();
  $('.btn-fijo-firma, header .btn .firmar').bind('click', function(event) {
      event.preventDefault();
      $('html, body').animate({scrollTop: $(this.hash).offset().top - capaHeaderHeight + 1}, 900);
  });

  //GA Events
  $('.send-piwik-event').on('click', function(event) {
    if ( !$(this).hasClass( "disabled" )) {
        var category  = $(this).data("e_c");
        var action  = $(this).data("e_a");
        var label  = $(this).data("e_l");
        send_ga_event(category, action, label);
      }

  });


});//.document ready


$(window).scroll(function(event) {
  
  var wintop = $(window).scrollTop(), winheight = $(window).height();
  var docheight = $(document).height();
  var totalScroll = (wintop/(docheight-winheight))*100;
  $(".KW_progressBar").css("width",totalScroll+"%");

  //Crear cookie al hacer scroll
  if(!existeCookie('cookieAlert3')) {
      crearCookie('cookieAlert3', '1', 365, '.es.amnesty.org');
      crearCookie('cookieAlert3', '1', 365, ''); //localhost
  }
  //Cerrar Aviso de cookies al hacer scroll
  jQuery('#cookie-law-info-bar').fadeOut();

});//.scroll.function.event

$(window).resize(function() {
    //moveProgressBar();
    setColumnaHeight();

});//.window.resize

/*****************
****FUNCTIONS*****
*****************/

// Setup a callback for the YouTube api to attach video event handlers
function onYouTubeIframeAPIReady() {

  var idYouTube =  $('#videocase').data("idyt");
  player = new YT.Player('videocase', {
    videoId: idYouTube,
    playerVars: {
       'autoplay': 0,
       'controls': 1,
       'rel': 0,
       'showinfo': 0,
       'loop': 0,
       'enablejsapi': 1,
       'modestbranding': 1,
       'disablekb': 0,
       'iv_load_policy': 3,
       'color': 'white'
      },
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange  
      }
  });

}

function onPlayerReady(event) {
    event.target.setPlaybackQuality ('highres');
}


function onPlayerStateChange(event) {

  //console.log ( player.getCurrentTime() );


  var idYouTube =  $('#videocase').data("idyt");
  
  var category =  $('#videocase').data("category");
  var action =  $('#videocase').data("action");
  var label =  $('#videocase').data("label");

  // 1st PLAY - todos los videos
  if (event.data == YT.PlayerState.PLAYING  && !done_PLAYING) {
    setTimeout (function(){}, 10)
    send_ga_event(category, action, label);
    done_PLAYING = true;
  }

  //Broncano
  if ('NgHXFTgaVT0' === idYouTube ) {
    // Puase
    if (event.data == YT.PlayerState.PAUSED  && !done_PAUSED) {
      send_ga_event(category, 'Paused', label);
      done_PAUSED = true;
    }
    // Reproducción 5 min
    if (event.data == YT.PlayerState.PLAYING  && !done_PLAYING) {
    }

    // Reproducción 25 min
    if (event.data == YT.PlayerState.PLAYING  && !done_PLAYING) {
    }
    // Reproducción 40 min
    if (event.data == YT.PlayerState.PLAYING  && !done_PLAYING) {
    }            
    // Reproducción 100% Final
    if (event.data == YT.PlayerState.ENDED  && !done_ENDED) {
      send_ga_event(category, 'Ended', label);
      done_ENDED = true;
    }  

  }
}

function youtube_parser(url){
    var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
    var match = url.match(regExp);
    return (match&&match[7].length==11)? match[7] : false;
}


//Barra de Firmas Animada
function moveProgressBar() {
    var getPercent = ($('.progress-wrap-firmas').data('progress-percent') / 100);
    var getProgressWrapWidth = $('.progress-wrap-firmas').width();
    var progressTotal = getPercent * getProgressWrapWidth;
    var animationLength = 2500;
    // on page load, animate percentage bar to data percentage length
    // .stop() used to prevent animation queueing
    $('.progress-bar-firmas').stop().animate({left: progressTotal}, animationLength);
}

//Para enviar eventos a donde queramos (GA - gtag.js)
function send_ga_event(category, action, label) {
    //_paq.push(['trackEvent', category, action, label]);
    gtag('event', action, {
      'event_category': category,
      'event_label': label,
    });
}

function setColumnaHeight () {
  var paddingY =  $(".columna-contenido").outerHeight() - $(".columna-contenido").height();
  var minHeight = $(window).height() - $("header").innerHeight() - $("footer").innerHeight() - paddingY;

  if (window.matchMedia('(max-width: 980px)').matches) { 
    $(".columna-contenido").css ({ 'height': '100%' });
    $(".columna-contenido").css ({ 'min-height': 'auto' });   

    $(".columna-formulario").css ({ 'height': '100%' });

  } else {
    $(".columna-contenido").css ({ 'min-height': minHeight + 'px' });
    $(".columna-formulario").css ({ 'height': $(".columna-contenido").innerHeight() +'px' });

  }

}


function getParameterByName(name, url) {
    if (!url) {
    url = window.location.href;
    }
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function crearCookie(name,value,days,domain) {
    //console.log("--> Nombre: "+name+" Valor: "+value+" Dias: "+days);
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/; domain="+domain;
    //document.cookie = name+"="+value+expires+"; path=/";
}

function existeCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') {
      c = c.substring(1,c.length);
    }
    if (c.indexOf(nameEQ) === 0) {
      return true;
    }
  }
  return false;
}

function callbackOwl(event) {
    // Provided by the core
    var page = event.page.index;     // Position of the current page

  //console.log('> '+page);

    $('.owl-item .item').each(function( index ) {
      if($(this).hasClass('num-'+page) != page && page != -1) {
        $('.owl-item .item a').attr('href', 'javascript:void(0);');
        $('.owl-item .item a').addClass('disabled');
        $('.owl-item .item a').removeClass('enabled');
      }
    });

  $('.owl-item .item.num-'+page+' a').removeClass('disabled');
  $('.owl-item .item.num-'+page+' a').addClass('enabled');
  $('.owl-item .item.num-'+page+' a').attr('href', $('.owl-item .item.num-'+page).data('enlace'));
}
