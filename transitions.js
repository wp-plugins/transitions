$(document).ready(function() 
{
		$( 'body' ).fadeIn("slow", 0.0);
		$( 'body' ).fadeIn("slow", 0.1);
		$( 'body' ).fadeIn("slow", 0.2);
		$( 'body' ).fadeIn("slow", 0.3);
		$( 'body' ).fadeIn("slow", 0.4);
		$( 'body' ).fadeIn("slow", 0.5);
		$( 'body' ).fadeIn("slow", 0.6);
		$( 'body' ).fadeIn("slow", 0.7);
		$( 'body' ).fadeIn("slow", 0.8);
		$( 'body' ).fadeIn("slow", 0.9);
		$( 'body' ).fadeIn("slow", 1.0);
    });

$(document).ready(function(){
               jQuery('a').click(function(){
                jQuery('body').fadeOut();
                 setTimeout("nav('"+this.href+"')",1000);
               return false;
       });
});

function nav(href){
location.href=href;
}



