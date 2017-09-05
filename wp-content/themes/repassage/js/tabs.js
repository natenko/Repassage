$(document).ready(function(){
	$(".home-works-tabs").light_work_Tabs();
});	



(function($){				
	jQuery.fn.light_work_Tabs = function(options){

		var create_work_Tabs = function(){
			tabs = this;
			i = 0;
			
			showPage = function(i){
				$(tabs).children("div").children("div").css({"visibility":"hidden","position":" absolute","opacity": "0" ,"height":"0"}).removeClass("anim");
				$(tabs).children("div").children("div").eq(i).css({"visibility":"visible","position":" static","opacity": "1","height":"auto"}).addClass("anim");
				$(tabs).children("ul").children("li").removeClass("active");
				$(tabs).children("ul").children("li").eq(i).addClass("active");
			}
								
			showPage(0);				
			
			$(tabs).children("ul").children("li").each(function(index, element){
				$(element).attr("data-page", i);
				i++;                        
			});
			
			$(tabs).children("ul").children("li").click(function(){
				showPage(parseInt($(this).attr("data-page")));
			});				
		};		
		return this.each(create_work_Tabs);
	};	
})(jQuery);
