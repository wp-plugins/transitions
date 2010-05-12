$(document).ready(function() 
{
		$( 'body' ).fadeIn("slow", 0.0);
		$( 'body' ).fadeIn("slow", 1.0);
                $('a').click(function(){
                $('body').fadeOut();
                 setTimeout("nav('"+this.href+"')",1000);
               return false;
       });
    });
function nav(href){
location.href=href;
};