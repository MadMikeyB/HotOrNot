<div style="width: 100%; margin:auto">
<img src="<?php echo $one['Item']['image'] ?>"  style="float: right; width:40%" />

<img src="<?php echo $two['Item']['image'] ?>" style="float: left; width:40%" />
</div>
<p style="clear: both;"></p>

<h3 style="position: absolute; right: 15%;bottom:5%;"><?php echo $votecountone ?> Votes</h3>
<h3 style="position: absolute; left: 15%;bottom:5%;"><?php echo $votecounttwo ?> Votes</h3>

<div align="center" style="position: absolute; top:40%; bottom:40%; left:40%; right:40%;"><h3><?php echo $two['Item']['title'] ?></h3> <h2>Vs</h2> <h3><?php echo $one['Item']['title'] ?></h3></div>

<p>