$( document ).ready(function() {
	
	
	
	//alert("hello");
	
	
	
	var isHovering = false;
var el = $(".picturElement").mouseover(function(){
    isHovering = true;
    spin();
}).mouseout(function(){
    isHovering = false;
});
var spin = function(){
    if(isHovering){
        el.removeClass("spin");
        
        setTimeout(function(){
            el.addClass("spin");
            
            setTimeout(spin, 1500);
        }, 0);
    }
};
spin();
	
	
	


	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	});