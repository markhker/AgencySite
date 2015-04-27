/**
 * Animations... Basically
 */

/*Smooth Scroll*/
$(".scrollit").bind('click', { id: '#inic' }, scroller);

function scroller(event){
  var scrollYPos = $(event.data.id).offset().top;
  event.preventDefault();
  TweenLite.to(window, 2, {scrollTo:{y:scrollYPos - 120, x:0}, ease:Expo.easeOut})
  }

window.onload = function(){
    TweenMax.to($(".scrollit"), 0.5, {top: "15px", repeat:-1, repeatDelay:0.2, yoyo: true});
}


$( "#heart1" ).click(function() {
  $( "a#heart1 i.fa" ).removeClass( "fa-heart-o" ).addClass( "fa-heart" );
});
$( "#heart2" ).click(function() {
  $( "a#heart2 i.fa" ).removeClass( "fa-heart-o" ).addClass( "fa-heart" );
});
$( "#heart3" ).click(function() {
  $( "a#heart3 i.fa" ).removeClass( "fa-heart-o" ).addClass( "fa-heart" );
});
