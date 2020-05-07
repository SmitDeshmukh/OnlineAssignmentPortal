var scrolly = 0;
var distance = 40;
var speed = 14;
function autoScrollTo(el){
var currentY = window.pageYOffset;
var targetY = document.getElementById(el).offsetTop;
var bodyHeight = document.body.offsetHeight;
var YPos = currentY + window.innnerHeight;
var animator = setTimeout('autoScrollTo(\''+el+'\')',speed);
if(YPos > bodyHeight)
{
clearTimeout(animator);
}
else{
if(currentY < targetY-distance+30){
scrolly = currentY+distance;
window.scroll(0, scrolly);
}
else{
clearTimeout(animator);
}
}
}
function resetScroller(el){
var currentY = window.pageYOffset;
var targetY = document.getElementById(el).offsetTop;
var animator = setTimeout('resetScroller(\''+el+'\')',10);
if(currentY > targetY){
scrolly = currentY-distance;
window.scroll(0, scrolly);
}
else{
clearTimeout(animator);
}
}