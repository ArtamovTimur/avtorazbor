var plus = $('.fa fa-plus');
var minus = $('.fa fa-minus');

$('#list > li > ul').hide();
$('#list > li').click(function (event) {
	   event.preventDefault();
       $(this).children("ul").slideToggle();
       $(this).toggleClass('minus');
       event.stopPropagation();
}); 

 
/*--------------------menu------------------*/
 $('#toogleMenu').click(function(){
     $('.navigationMax').slideToggle();
 });

 