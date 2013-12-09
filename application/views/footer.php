<script src='assets/scripts/jquery-1.10.2.min.js' type="text/javascript"></script>
<script src='assets/scripts/bootstrap/bootstrap.min.js' type="text/javascript"></script>
<script src='assets/scripts/modernizr.js'></script>
<script src='assets/scripts/jquery.onepage-scroll.js'></script>
<script>
	$(document).ready(function() {
		$(".main").onepage_scroll({
			sectionContainer : "section", // sectionContainer accepts any kind of selector in case you don't want to use section
			easing : "ease", // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in", "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
			animationTime : 1000, // AnimationTime let you define how long each section takes to animate
			pagination : true, // You can either show or hide the pagination. Toggle true for show, false for hide.
			updateURL : false, // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
			beforeMove : function(index) {
			}, // This option accepts a callback function. The function will be called before the page moves.
			afterMove : function(index) {
				currentID = $("section.active").attr("name");
				//alert(currentID);
				$(".myLi").removeClass("active");
				$("#" + currentID).addClass("active");
				$("h4#current_page").text($("#" + currentID+".active").text());
			}, // This option accepts a callback function. The function will be called after the page moves.
			loop : false, // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
			responsiveFallback : false // You can fallback to normal page scroll by defining the width of the browser in which you want the responsive fallback to be triggered. For example, set this to 600 and whenever the browser's width is less than 600, the fallback will kick in.
		});

		$(".myLi").click(function() {
			$(".myLi").removeClass("active");
			id = $(this).attr("id");
			$("#" + id).addClass("active");
			$(".main").moveTo(id);
		});

		$("#setCollapse").click(function() {
			$("#myCollapse").toggle(function() {
				$("#myCollapse").collapse();
			});
		});

	}); 
</script>