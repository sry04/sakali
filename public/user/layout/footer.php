	

	<script src="asset/js/jquery-3.3.1.slim.min.js"></script>
	<script src="asset/js/popper.min.js"></script>
	<script src="asset/css/node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>

	<!-- OPACITY SCROLL -->
	<script type="text/javascript">
		var fadeStart=0 // 100px scroll or less will equiv to 1 opacity
		    ,fadeUntil=50 // 200px scroll or more will equiv to 0 opacity
		    ,fading = $('#fading')
		;

		$(window).bind('scroll', function(){
		    var offset = $(document).scrollTop()
		        ,opacity=0
		    ;
		    if( offset<=fadeStart ){
		        opacity=1;
		    }else if( offset<=fadeUntil ){
		        opacity=1-offset/fadeUntil;
		    }
		    fading.css('opacity',opacity);
		});
	</script>

	<!-- BUTTON WAVE -->
	<script type="text/javascript">
		$(function() {  
		  $('.btn-wave')
		    .on('mouseenter', function(e) {
					var parentOffset = $(this).offset(),
		      		relX = e.pageX - parentOffset.left,
		      		relY = e.pageY - parentOffset.top;
					$(this).find('span').css({top:relY, left:relX})
		    })
		    .on('mouseout', function(e) {
					var parentOffset = $(this).offset(),
		      		relX = e.pageX - parentOffset.left,
		      		relY = e.pageY - parentOffset.top;
		    	$(this).find('span').css({top:relY, left:relX})
		    });
		  $('[href=#]').click(function(){return false});
		});
	</script>









</html>