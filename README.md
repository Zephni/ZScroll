# ZScroll

ZScroll is a very easy to implement area scroller using JQuery. [Preview here](http://zephni.com/site/pages/tools/ZScroll/index.php)

**Note you must include JQuery, and the ZScroll JavaScript file as below:**
```html
<!-- JQuery plugin -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- ZScroll Dependancies -->
<script src="plugins/ZScroll/ZScroll.js"></script>
```

**To apply to an element, just call .ZScroll() on a JQuery element as  below:**
```javascript
// Apply ZScroll to all elements with class '.ZScroll'
$(document).ready(function(){
	$(".ZScroll").ZScroll();
});
```

**You can pass the following options as an object into ZScroll (Values shown are defaults):**
```javascript
// ScrollZoneColor:"#DDDDDD",
// ScrollBarColor:"orange",
// ScrollBarWidth:5,
// ScrollBarHeight:null,
// ScrollBarMinHeight:10,
// ScrollBarPadding:10,
// ScrollBarRadius:10,
// ScrollBarUnusedCSS:{"opacity":0.5},
// ScrollBarInUseCSS:{"opacity":1},
// ScrollBarOpacityEasing:300,
// ScrollWheelDistance:50,
// Active:"auto"
// Display:true

// Pass like:
$(".ZScroll").ZScroll({
	ScrollBarColor:"green",
	ScrollBarWidth:10
});
```

If you have any questions you can contact me on contact@zephni.com