<html>
	<head>
		<title>ZScroll Example</title>

		<!-- JQuery plugin -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- ZScroll Dependancies -->
		<script src="plugins/ZScroll/ZScroll.js"></script>

		<!-- Apply ZScroll -->
		<script type="text/javascript">
			$(document).ready(function(){
				$("#example").ZScroll();
				$("#help").ZScroll({ScrollBarColor:"green"});
			});
		</script>

		<style type="text/css">
			/* None of this CSS is needed for ZScroll */
			body {font-family: "Verdana"; font-size: 13px;}
			.code {margin- top: 0px; padding: 10px; background: #EEEEEE; line-height: 16px; font-size: 12px;}
		</style>
	</head>
	<body>
		<h2>ZScroll</h2>
		<p>Brief example below</p>

		<hr />

		<div id="example" style="width: 450px; height: 450px; float: left; font-size: 13px; overflow: hidden;">
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />
			<br />
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />
			<br />
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />
			<br />
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</div>

		<div id="help" style="width: 600px; height: 450px; float: left; font-size: 13px; margin-left: 50px; overflow: hidden;">
			<h3>How to</h3>
			<p><b>Note you must include JQuery, and the ZScroll CSS/JavaScript files as below:</b></p>

			<div class="code"><?php echo nl2br(htmlentities('<!-- JQuery plugin -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- ZScroll Dependancies -->
<link rel="stylesheet" type="text/css" href="plugins/ZScroll/ZScroll.css" />
<script src="plugins/ZScroll/ZScroll.js"></script>'));
			?></div>

			<p><b>To apply to an element, just call .ZScroll() on a JQuery element as below:</b></p>

			<div class="code"><?php echo nl2br(htmlentities('<!-- Apply ZScroll to all elements with class ".ZScroll" -->
<script type="text/javascript">
    $(document).ready(function(){
        $(".ZScroll").ZScroll();
    });
</script>')); ?></div>


			<p><b>You can pass the following options as an object into ZScroll (Values shown are defaults):</b></p>

			<div class="code"><?php echo nl2br(htmlentities('// ScrollBarColor:"orange",
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
				});')); ?></div>

		</div>

	</body>
</html>