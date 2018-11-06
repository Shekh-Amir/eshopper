/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		
/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});
});
//change product in category and stock with size
/*	$(document).ready(function(){
		
		$("#category_id").change(function(){

			 var selSize=$(this).val();
			 if(selSize==""){
			 	return false;
			 }

			$.ajax({

				type:'get',
				//url:'get-product-price',
				url:'http://localhost/laravel/public/get-product-price',
				data:{selSize:selSize},
				//dataType:'json',
				success:function(resp){
					alert(resp); return false;
					var arr=resp.split('#');
					$('#getPrice').html("INR "+arr[0]);
					$("#price").val(arr[0]);
					if(arr[1]==0){
						$("#cartBtton").hide();
						$("#Availability").text("Out of stock");

					}else{
						$("#cartBtton").show();
						$("#Availability").text("In stock");
					}
				},error:function(){
					alert("error");
				}
			});        
		});		
	});*/