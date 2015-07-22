 
		
		$(window).load(function(){
			$("#loader").fadeOut(1000);
		});
		
			var controller;
			jQuery(document).ready(function($) {
				$(".nav_link").click(function(event){	
					var toSet = $("#navmenu").height();	
					event.preventDefault();
					$('html,body').stop().animate({scrollTop:$(this.hash).offset().top - toSet+1},2000,'easeInOutSine');
                    $('.active').attr('class','');
                    $(this).parent('li').attr('class','active');
				});
				$(".home").css("margin-top",$("#navmenu").height());
				controller = new ScrollMagic();
				
				 var loadedWidth = $(".profile img").width();
				 var onHoverWidth = loadedWidth+10;
				
				$(".profile img").hover(
					function(){
						$(this).stop().animate({ width: onHoverWidth, height:onHoverWidth, left: -5, top: -5},500);
					},
					function(){
						$(this).stop().animate({  width: loadedWidth, height: loadedWidth, left: '0', top: '0'},500);
					}
				);
				
				
		
			});
			

// parallax
				$(document).ready(function($) {
					new ScrollScene({
							triggerElement: "#sec_home",
							duration: $(window).height()+300,
							offset: 50
						})
						.addTo(controller)
						.triggerHook("onCenter")
						.setTween(new TimelineMax().add([
							TweenMax.to("#sec_home", 1, {backgroundPosition: "50% 100%", ease: Linear.easeNone}),
							TweenMax.fromTo("#mainheadin", 1, {top: "0"}, {top: "90%", ease: Linear.easeIn}),
							
						]));
					
					});


// parallax
				$(document).ready(function($) {
					new ScrollScene({
							triggerElement: "#p1",
							duration: $(window).height()+300,
							offset: -300
						})
						.addTo(controller)
						.triggerHook("onCenter")
						.setTween(new TimelineMax().add([
							TweenMax.fromTo("#p1 #t1", 1, {alpha: .5, top: "20%"}, {top: "80%", 
							alpha:.5,ease: Linear.easeNone}),
							TweenMax.to("#p1 #b1", 1, {backgroundPosition: "0 100%", ease: Linear.easeNone})
						]));
					
					});

$(document).ready(function($) {
					new ScrollScene({
							triggerElement: "#p2",
							duration: $(window).height()+300,
							offset: -300
						})
						.addTo(controller)
						.triggerHook("onCenter")
						.setTween(new TimelineMax().add([
							TweenMax.fromTo("#p2 #t2", 1, { alpha: 0.5, top: "20%"}, {top: "80%", alpha:.5,ease: Linear.easeNone}),
							TweenMax.to("#p2 #b2", 1, {backgroundPosition: "0 100%", ease: Linear.easeNone})
						]));
					
					});



$(document).ready(function($) {
							
							var tween = TweenMax.from($(".holder"), 1, {scale:.75})				
							var scene =	new ScrollScene({triggerElement: "#sec_team",duration:500})
									.triggerHook("onCenter")
									.setTween(tween)
									.addTo(controller);
							
							
						});