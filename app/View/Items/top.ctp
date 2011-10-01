<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>

<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />

<script>
$(function() {
	$('#gallery a').lightBox({fixedNavigation:true});
});
</script>
<?php $this->set('title_for_layout', 'Top Contenders (As Voted)'); ?>
<h2>Top Contenders (As Voted)</h2>
<h5 style="float:right;">Most popular is on the far left.</h5>
<p style="clear: both;"></p>
<div id="gallery">
<?php foreach ($top as $t): ?>
<div class="three columns">
<a href="<?php echo $t['Item']['image']; ?>" class="lightbox" rel="lightbox" target="_blank"><img src="<?php echo $t['Item']['image'] ?>" style="width: 100%; float:left; display:inline;" /></a>
<h3><?php echo $t['Item']['title'] ?></h3>
<blockquote><?php echo $t['Item']['description'] ?></blockquote>
<small>Listed under: <?php echo $t['Item']['tags'] ?></small>
<br /><small><a href="http://www.fhm.com/site/pages/generic/searchresults.aspx?search=<?php echo $t['Item']['title'] ?>">View <?php echo $t['Item']['title'] ?> on FHM.com</a></small>
</div>
<?php endforeach; ?>
</div>