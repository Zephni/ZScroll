# ZScroll

ZScroll is a very easy to implement area scroller using JQuery. [Preview here](http://zephni.com/site/pages/tools/ZScroll/index.php)

**Note you must include JQuery, and the ZScroll JavaScript file as below:**
```
<!-- JQuery plugin -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- ZScroll Dependancies -->
<script src="plugins/ZScroll/ZScroll.js"></script>
```

**To apply to an element, just call .ZScroll() on a JQuery element as  below:**
```
<!-- Apply ZScroll to all elements with class '.ZScroll' -->
<script type="text/javascript">
	$(document).ready(function(){
		$(".ZScroll").ZScroll();
	});
</script>
```

**You can pass the following options as an object into ZScroll (Values shown are defaults):**
```
// ScrollBarZone:"#DDDDDD",
// ScrollBarColor:"orange",
// ScrollBarWidth:5,
// ScrollBarHeight:null,
// ScrollBarMinHeight:10,
// ScrollBarPadding:5,
// ScrollWheelDistance:50,
// Display:"auto"

// Pass like:
$(".ZScroll").ZScroll({
	ScrollBarColor:"#CCCCCC",
	ScrollBarWidth:10
});
```

If you have any questions you can contact me on contact@zephni.com