$(function () {
  
var mainBlock = $('#main');
var mouse = { x: 0, y: 0 };
var wind = { w:window.innerWidth/2, h: 100+(mainBlock.height()/2) };
var h1 = $("h1");
var sunTween = TweenMax.fromTo( mouse, 3, { x:mainBlock.width()/2, y:-100 },{ yoyo:true, repeat: -1, x: mainBlock.width()/2, y: -500, ease: Power3.easeInOut });
document.addEventListener("mousemove", function (e) {
  sunTween.pause();
  mouse.x = e.clientX;
  mouse.y = e.clientY - h1.offset().top;
});
function ontick () {
  wind.w = window.innerWidth/2;
  var shadow = "";
  var i = 20;
  var len = i;
  while ( i-- ) {
    shadow += ( Math.round(i*-((mouse.x-(wind.w))/100))+"px "+Math.round(i*-((mouse.y-wind.h)/100))+"px "+(i*4)+"px hsla(0,0%,0%,"+1/(len-1)+")," );
  }
  //console.log(shadow);
  TweenMax.set(h1, {  textShadow: shadow } );
}
//ontick();
TweenMax.ticker.addEventListener("tick", ontick);

});