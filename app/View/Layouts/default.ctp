<?php
$cakeDescription = __d('cake_dev', 'Hot Or Not?');
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo $cakeDescription ?><?php if (!empty($title_for_layout)): ?> - 
		<?php echo $title_for_layout; ?><?php endif; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
    <base href="http://hotornot.onlyimages.info" />
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">
<style>
img {
    border: 1px solid #666;
}
img:hover {
-webkit-box-shadow: 1px 1px 5px 1px #999999;
-moz-box-shadow: 1px 1px 5px 1px #999999;
box-shadow: 1px 1px 5px 1px #999999; 
}</style>
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<?php
		echo $this->Html->meta('icon');

	//	echo $this->Html->css('cake.generic');

		echo $scripts_for_layout;
	?>
</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container">
		<div class="sixteen columns">
			<h1 class="remove-bottom" style="margin-top: 40px"><?php echo $this->Html->link($cakeDescription, '/'); ?></h1>
			<h5 style="position: absolute; right: 5%; top:8%;"><a href="add">Add Contender</a></h5>
            <small style="position: absolute; right: 5%; top:5%;"><a href="/">Refresh?</a> / <a href="/top">Top Contenders</a></small>
			<hr />
		</div>
		      <?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
		<!-- <div class="eight columns">
			<h3>About Skeleton?</h3>
			<p>Skeleton is a small collection of well-organized CSS &amp; JS files that can help you rapidly develop sites that look beautiful at any size, be it a 17" laptop screen or an iPhone. It's based on a responsive grid, but also provides very basic CSS for typography, buttons, tabs, forms and media queries. Go ahead, resize this super basic page to see the grid in action.</p>
		</div>
		<div class="eight columns">
			<h3>Docs &amp; Support</h3>
			<p>The easiest way to really get started with Skeleton is to check out the full docs and info at <a href="http://www.getskeleton.com">www.getskeleton.com.</a>. Skeleton is also open-source and has a <a href="https://github.com/dhgamache/skeleton">project on git</a>, so check that out if you want to report bugs or create a pull request. If you have any questions, thoughts, concerns or feedback, please don't hesitate to email me at <a href="mailto:hi@getskeleton.com">hi@getskeleton.com</a>.</p>
		</div> -->

	</div><!-- container -->

<div style="position: absolute; right: 10px;">
<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> 'CakePHP', 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
   <?php echo $this->Html->link(
					$this->Html->image('/images/apple-touch-icon.png', array('alt'=> 'Skeleton Framework', 'border' => '0', 'style' => 'height:13px; width:15px;')),
					'http://getskeleton.com/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
</div>
	<!-- JS
	================================================== -->
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="javascripts/tabs.js"></script>

<!-- End Document
================================================== -->
</body>
</html>