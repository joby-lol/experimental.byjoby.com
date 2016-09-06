<!doctype html>
<html>
<head>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-head.inc'); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" /><meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1.5" />
	<link rel="stylesheet" href="themenu.base.css" />
</head>
<body style="padding:0;margin:0;">
<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-block.inc'); ?>

	<div id="experimental-page">
		<p>It all still works even if there's content above the menu.</p>

		<nav class="theMenu sticky">
			I am <strong>The Menu!</strong>
			<ul class="theMenu-links">
				<li><a>Option 1</a></li>
				<li><a>Option 2</a></li>
				<li><a>Option 3</a></li>
				<li class="theMenu-dropdown">
					<a>Option 4</a>
					<div class="theMenu-dropdown">
						Dropdown with complex content
					</div>
				</li>
				<li class="theMenu-dropdown">
					<a>Option 5</a>
					<ul class="theMenu-links">
						<li><a>Suboption 1</a></li>
						<li><a>Suboption 2</a></li>
						<li><a>Suboption 3</a></li>
						<li><a>Suboption 4</a></li>
					</ul>
				</li>
				<li><a>Option 6</a></li>
			</ul>
		</nav>

		<div class="dummy-content">
			<h1>HTML Ipsum Presents</h1>
				       
			<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

			<h2>Header Level 2</h2>
				       
			<ol>
			   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
			   <li>Aliquam tincidunt mauris eu risus.</li>
			</ol>

			<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>

			<h3>Header Level 3</h3>

			<ul>
			   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
			   <li>Aliquam tincidunt mauris eu risus.</li>
			</ul>

			<pre><code>
			#header h1 a { 
				display: block; 
				width: 300px; 
				height: 80px; 
			}
			</code></pre>
				       
			<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

			<h2>Header Level 2</h2>
				       
			<ol>
			   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
			   <li>Aliquam tincidunt mauris eu risus.</li>
			</ol>

			<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>

			<h3>Header Level 3</h3>

			<ul>
			   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
			   <li>Aliquam tincidunt mauris eu risus.</li>
			</ul>

			<pre><code>
			#header h1 a { 
				display: block; 
				width: 300px; 
				height: 80px; 
			}
			</code></pre>
		</div>
	</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="theMenu.js"></script>
<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-bottom.inc'); ?>
</body>
</html>