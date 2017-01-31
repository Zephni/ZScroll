# ZScroll

ZScroll is a very easy to implement area scroller using JQuery.

Note you must include JQuery, and the ZScroll CSS/JavaScript files as below:
```
<!-- JQuery plugin -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- AScroll Dependancies -->
<link rel="stylesheet" type="text/css" href="plugins/ZScroll/ZScroll.css" />
<script src="plugins/ZScroll/ZScroll.js"></script>
```

To apply to an element, just call .ZScroll() on a JQuery element as  below:
```
<!-- Apply ZScroll -->
<script type="text/javascript">
	$(document).ready(function(){
		$(".ZScroll").ZScroll();
	});
</script>
```

You can pass the following options as an object into ZScroll (Values shown are defaults):
```
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