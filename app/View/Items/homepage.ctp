
<div style="width: 100%; margin:auto">
<a href="votes/vote/<?php echo $items['1']['Item']['id'] ?>/<?php echo md5($_SERVER['REMOTE_ADDR']); ?>/"><img src="<?php echo $items['1']['Item']['image'] ?>"  style="float: right; width:40%" /></a>
<a href="votes/vote/<?php echo $items['0']['Item']['id'] ?>/<?php echo md5($_SERVER['REMOTE_ADDR']); ?>/"><img src="<?php echo $items['0']['Item']['image'] ?>" style="float: left; width:40%" /></a>
</div>
<p style="clear: both;"></p>

<p><h3 style="position: absolute; right: 15%;bottom:10px;"><?php echo $votecounttwo ?> Votes</h3>
<h3 style="position: absolute; left: 15%;bottom:10px;"><?php echo $votecountone ?> Votes</h3></p>


<div align="center" style="position: absolute; top:40%; bottom:40%; left:40%; right:40%;"><h3><?php echo Sanitize::html($items['0']['Item']['title']); ?></h3> <h2>Vs</h2> <h3><?php echo Sanitize::html($items['1']['Item']['title']); ?></h3></div>

<p>
Category: <?php echo Sanitize::html($items['0']['Item']['tags']); ?>


<small style="float:right;color:#ccc;"><a href="versus/<?php echo $items['1']['Item']['id'] ?>/<?php echo $items['0']['Item']['id'] ?>">(Permalink)</a></small>
<br />
<br />
<br />