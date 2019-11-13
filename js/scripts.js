// JavaScript Document
$(function() {
  setInterval(bar_loop, 3000);
});

function bar_loop(){
  var topbar = $("#top-bar");
  var barcontent = topbar.children();
  barcontent.animate({top:'-100%'},1000,function(){
    $(this).children(':first-child').appendTo($(this));
    $(this).css('top','0');
  });
}
//enable subscribe form validation
$(function() {
  $("#subscribeForm").validate({
    submitHandler: function(form){
      $.post("subscribe.php",$(form).serializeArray()).done(function(data){
        if(data!=""){
          alert("Subscription succeeded!Email:"+data);
        }
      });
    }
  });
});

var comparison = $('#comparison');

$(function() {
  $(window).on('scroll resize',function(){
    $('.float-in').each(function(){
      floatIn(this);
    });
    $('.float-up').each(function(){
      floatUp(this);
    });
    $('.fade-in').each(function(){
      fadeIn(this);
    });
  });
  $('.float-in').each(function(){
    floatIn(this);
  });
  $('.float-up').each(function(){
    floatUp(this);
  });
  $('.fade-in').each(function(){
    fadeIn(this);
  });
});

function floatIn(elem){
  var rect = elem.getBoundingClientRect();
  if(rect.top < window.innerHeight && rect.bottom >= 0 && rect.left < window.innerWidth && rect.right >= 0){
    if($(elem).css('opacity')!=comparison.css('opacity')){
      $(elem).animate({opacity:'1',top:0},1000);
    }
  }
}

function floatUp(elem){
  var rect = elem.getBoundingClientRect();
  if(rect.top < window.innerHeight && rect.bottom >= 0 && rect.left < window.innerWidth && rect.right >= 0){
    if($(elem).css('opacity')!=comparison.css('opacity')){
      $(elem).animate({opacity:'1',top:0},500);
    }
  }
}

function fadeIn(elem){
  var rect = elem.getBoundingClientRect();
  if(rect.top < window.innerHeight && rect.bottom >= 0 && rect.left < window.innerWidth && rect.right >= 0){
    if($(elem).css('opacity')!=comparison.css('opacity')){
      $(elem).animate({opacity:'1'},1000);
    }
  }
}

// Initialize and add the map
function initGMap() { 
  // The location of Uluru
  var location = {lat: 29.795868, lng: -95.485057};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('gmap'), {zoom: 13, center: location});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: location, map: map});
}
  