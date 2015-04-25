$(document).ready(function(){
	homeSlider();
	console.log('test');
});
function homeSlider(){
	$("#slider").owlCarousel({
	 
		navigation : true, // Show next and prev buttons
        navigationText: ["<div class='nav left'>","<div class='nav right'>"],
        slideSpeed : 500,
        paginationSpeed : 600,
        pagination: true,
        singleItem: true,
        rewindNav: true,
        // afterMove : function(){
        //    if(this.currentItem === this.maximumItem){
        //       $('#slider .nav.right').hide();
        //    }else{
        //       $('#slider .nav.right').show();
        //    }
        // }
	 
	  });
}
